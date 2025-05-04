<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\tour_amenities;
use App\Models\tour_overviews;
use App\Models\tour_plans;
use App\Models\tours;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ToursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = tours::with(['overview', 'plan', 'amenities'])->get();
        foreach ($tours as $tour) {
            if ($tour->overview && is_string($tour->overview->highlights)) {
                $tour->overview->highlights = json_decode($tour->overview->highlights, true) ?? [];
            }
            if ($tour->amenities && is_string($tour->amenities->included_amenities)) {
                $tour->amenities->included_amenities = json_decode($tour->amenities->included_amenities, true) ?? [];
            }
            if ($tour->amenities && is_string($tour->amenities->not_included_amenities)) {
                $tour->amenities->not_included_amenities = json_decode($tour->amenities->not_included_amenities, true) ?? [];
            }
            if ($tour->plan && is_string($tour->plan->itinerary)) {
                $tour->plan->itinerary = json_decode($tour->plan->itinerary, true) ?? [];
            }
            // dd($tour->plan->itinerary);
        }
        return view('tour.index', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $activity = Activity::all();
        return view('tour.create', compact('activity'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Step 1: Validate input
        $request->validate([
            'tour_title' => 'required|string|max:255',
            'slug' => 'required|max:255|unique:tours,slug',
            'location' => 'required|string',
            'activity' => 'required',
            'days' => 'required|integer|min:1',
            'nights' => 'required|integer|min:1',
            'overview' => 'required',
            'highlight_list' => 'required|array|min:1',
            'highlight_list.*' => 'required|string',
            'tour_rate' => 'required|numeric|min:0',
            'included_amenities' => 'required|array|min:1',
            'included_amenities.*' => 'required|string',
            'not_included_amenities' => 'required|array|min:1',
            'not_included_amenities.*' => 'required|string',
            'feature_image' => 'required|image',
            // 'itinerary' => 'required',
            'itinerary.*.title' => 'required|string|max:255',  // Ensure title is required and is a string
            'itinerary.*.details' => 'required|string',         // Ensure details are required and are a string    
        ]);

        // Step 2: Upload media
        $imagePath = $request->file('feature_image')->store('uploads/tours', 'public');
        // Step 3: Create main Tour
        $tour = tours::create([
            'title' => $request->tour_title,
            'slug' => strtolower($request->slug), // this will generate 'goa-family-trip'
            'activity_type' => json_encode($request->activity),
            'location' => $request->location,
            'days' => $request->days,
            'nights' => $request->nights,
            'rate' => $request->tour_rate,
            'feature_image' => $imagePath,
        ]);


        // Step 4: Overview
        tour_overviews::create([
            'tour_id' => $tour->id,
            'overview' => $request->overview,
            'highlights' => json_encode($request->highlight_list),
        ]);

        // Step 5: Itinerary
        tour_plans::create([
            'tour_id' => $tour->id,
            'itinerary' => json_encode($request->itinerary),
        ]);

        // Step 6: Amenities
        tour_amenities::create([
            'tour_id' => $tour->id,
            'included_amenities' => json_encode($request->included_amenities),
            'not_included_amenities' => json_encode($request->not_included_amenities),
        ]);

        return redirect()->route('tour')->with('message', 'Tour Package created successfully!')->with('type', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(tours $tours)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tour = tours::findOrFail($id);
        $overview = tour_overviews::where('tour_id', $id)->first();
        $plan = tour_plans::where('tour_id', $id)->first();
        $amenity = tour_amenities::where('tour_id', $id)->first();

        $plan->itinerary = is_string($plan->itinerary)
            ? json_decode($plan->itinerary, true) ?? []
            : ($plan->itinerary ?? []);

        $overview->highlights = is_string($overview->highlights)
            ? json_decode($overview->highlights, true) ?? []
            : ($overview->highlights ?? []);
        $amenity->included_amenities = is_string($amenity->included_amenities)
            ? json_decode($amenity->included_amenities, true) ?? []
            : ($amenity->included_amenities ?? []);
        $amenity->not_included_amenities = is_string($amenity->not_included_amenities)
            ? json_decode($amenity->not_included_amenities, true) ?? []
            : ($amenity->not_included_amenities ?? []);
        $tour->activity_type = is_string($tour->activity_type)
            ? json_decode($tour->activity_type, true) ?? []
            : ($tour->activity_type ?? []);


        return view('tour.edit', compact('tour', 'overview', 'plan', 'amenity'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tour = tours::findOrFail($id);
        $request->validate([
            'tour_title' => 'required|string|max:255',
            'slug' => 'required|max:255|unique:tours,slug,' . $tour->id,
            'location' => 'required|string',
            'activity' => 'required',
            'days' => 'required|integer|min:1',
            'nights' => 'required|integer|min:1',
            'overview' => 'required',
            'highlight_list' => 'required',
            'tour_rate' => 'required|numeric|min:0',
            'included_amenities' => 'required',
            'not_included_amenities' => 'required',
            'feature_image' => 'image',
            // 'itinerary' => 'required',
            'itinerary.*.title' => 'required|string|max:255',  // Ensure title is required and is a string
            'itinerary.*.details' => 'required|string',         // Ensure details are required and are a string

        ]);
        // Update image if uploaded
        $imagePath = $tour->feature_image;
        if ($request->hasFile('feature_image')) {
            // Store the new image and update the feature_image field
            $imagePath = $request->file('feature_image')->store('uploads/tours', 'public');
            $tour->feature_image = $imagePath;
        }
        // Update main tour
        $tour->update([
            'title' => $request->tour_title,
            'slug' => strtolower($request->slug), // this will generate 'goa-family-trip'
            'activity_type' => json_encode($request->activity),
            'location' => $request->location,
            'days' => $request->days,
            'nights' => $request->nights,
            'rate' => $request->tour_rate,
            'feature_image' => $imagePath,
        ]);

        // Update overview
        tour_overviews::updateOrCreate(
            ['tour_id' => $tour->id],
            [
                'tour_id' => $tour->id,
                'overview' => $request->overview,
                'highlights' => json_encode($request->highlight_list),
            ]
        );

        // Update itinerary
        tour_plans::updateOrCreate(
            ['tour_id' => $tour->id],
            ['itinerary' => json_encode($request->itinerary)]
        );

        // Update amenities
        tour_amenities::updateOrCreate(
            ['tour_id' => $tour->id],
            [
                'included_amenities' => json_encode($request->included_amenities),
                'not_included_amenities' => json_encode($request->not_included_amenities),
            ]
        );

        return redirect()->route('tour')->with('message', 'Tour Package updated successfully!')->with('type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            // Find the tour and delete related data
            $tour = tours::findOrFail($id);

            // Delete related records in associated tables
            tour_overviews::where('tour_id', $tour->id)->delete();
            tour_plans::where('tour_id', $tour->id)->delete();
            tour_amenities::where('tour_id', $tour->id)->delete();

            // Optionally delete the feature image file if it exists
            if (file_exists(storage_path('app/public/' . $tour->feature_image))) {
                unlink(storage_path('app/public/' . $tour->feature_image));
            }

            // Delete the main tour record
            $tour->delete();

            return redirect()->route('tour')->with('message', 'Tour Package deleted successfully!')->with('type', 'success');
        } catch (\Exception $e) {
            return redirect()->route('tour')->with('message', 'Error: ' . $e->getMessage())->with('type', 'error');
        }
    }

}
