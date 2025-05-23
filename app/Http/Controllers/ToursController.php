<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\tour_amenities;
use App\Models\tour_overviews;
use App\Models\tour_plans;
use App\Models\Tour_type;
use App\Models\tours;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;


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
        }
        return view('tour.index', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $activity = Activity::all();
        $tourType = Tour_type::select('id', 'name')->where('status', 'active')->get();
        return view('tour.create', compact('activity', 'tourType'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Step 1: Validate input
        $request->validate([
            'tour_title' => 'required|string|max:255',
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
            'itinerary.*.title' => 'required|string|max:255',  // Ensure title is required and is a string
            'itinerary.*.details' => 'required|string',         // Ensure details are required and are a string    
            'fromTo' => 'required',
            'pickup_drop' => 'required',
            'other_charges' => 'required|array|min:1',
            'other_charges.*' => 'required|string',
            'locationCover' => 'required',
            'things_to_carry' => 'required',
            'terms_conditions' => 'required',
            'note' => 'required',
            'tour_type_id' => 'required',
        ]);

        // Step 2: Upload media
        $imagePath = $request->file('feature_image')->store('uploads/tours', 'public');
        // Step 3: Create main Tour
        $slug = Str::slug($request->slug);
        $originalSlug = $slug;
        $count = 1;

        while (tours::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        $data['slug'] = $slug;

        $tour = tours::create([
            'title' => $request->tour_title,
            'slug' => $slug, // this will generate 'goa-family-trip'
            'activity_type' => json_encode($request->activity),
            'location' => $request->location,
            'days' => $request->days,
            'nights' => $request->nights,
            'rate' => $request->tour_rate,
            'feature_image' => $imagePath,
            'from_to' => $request->fromTo,
            'pickup_drop_location' => $request->pickup_drop,
            'other_charges' => json_encode($request->other_charges),
            'locationCover' => json_encode($request->locationCover),
            'things_to_carry' => json_encode($request->things_to_carry),
            'terms_conditions' => json_encode($request->terms_conditions),
            'note' => json_encode($request->note),
            'tour_type_id' => $request->tour_type_id,
        ]);


        // Step 4: Overview
        tour_overviews::create([
            'tour_id' => $tour->id,
            'overview' => json_encode($request->overview),
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
    public function showTour($id)
    {
        $tour = Tours::with(['overview', 'plan', 'amenities'])->find($id);

        if (!$tour) {
            return response()->json(['message' => 'Tour not found'], 404);
        }
        $itineraryData = $tour->plan->itinerary;
        if (is_string($itineraryData)) {
            $itineraryData = json_decode($itineraryData, true) ?? [];
        }

        $dates = explode(' to ', $tour->from_to);

        $fromDate = Carbon::parse($dates[0])->format('d-M-Y');
        $toDate = Carbon::parse($dates[1])->format('d-M-Y');

        // location cover
        if (is_string($tour->locationCover)) {
            // Decode the main JSON array (assuming it’s a JSON string)
            $decoded = json_decode($tour->locationCover, true);

            // Check if the result is still a string (double-encoded JSON)
            if (is_string($decoded)) {
                // If it's still a string, decode again
                $decoded = json_decode($decoded, true);
            }
            // dd($decoded);
        } elseif (is_array($tour->locationCover) && count($tour->locationCover) === 1 && is_string($tour->locationCover[0])) {
            // Handle: array with one JSON string
            $decoded = json_decode($tour->locationCover[0], true);
        } else {
            // Already an array of objects (no decoding needed)
            $decoded = $tour->locationCover;
        }

        // Extract 'value' from each object in the array
        $tour->locationCover = collect($decoded)
            ->pluck('value')  // Get the 'value' from each object in the array
            ->filter()        // Remove any empty values
            ->values()        // Re-index the array
            ->toArray();
        //location cover

        if ($tour->amenities && is_string($tour->amenities->included_amenities)) {
            $tour->amenities->included_amenities = json_decode($tour->amenities->included_amenities, true) ?? [];
        }
        if ($tour->amenities && is_string($tour->amenities->not_included_amenities)) {
            $tour->amenities->not_included_amenities = json_decode($tour->amenities->not_included_amenities, true) ?? [];
        }
        if ($tour->other_charges && is_string($tour->other_charges)) {
            $tour->other_charges = json_decode($tour->other_charges, true) ?? [];
        }

        // Return tour data as JSON
        return response()->json([
            'title' => $tour->title,
            'slug' => $tour->slug,
            'location' => $tour->location,
            'activity_type' => trim($tour->activity_type, '"'),
            'days' => $tour->days,
            'nights' => $tour->nights,
            'rate' => $tour->rate,
            'feature_image' => $tour->feature_image
                ? asset('storage/' . $tour->feature_image)
                : null,
            'from_to' => $fromDate . " To " . $toDate,
            'pickup_drop_location' => $tour->pickup_drop_location,
            'other_charges' => $tour->other_charges,
            'things_to_carry' => json_decode(json: $tour->things_to_carry),
            'terms_conditions' => json_decode($tour->terms_conditions),
            'note' => json_decode($tour->note),
            'locationCover' => $tour->locationCover,

            'included_amenities' => $tour->amenities->included_amenities,
            'not_included_amenities' => $tour->amenities->not_included_amenities,

            'overview' => $tour->overview->overview,
            'highlights' => is_string($tour->overview->highlights)
                ? json_decode($tour->overview->highlights, true)
                : $tour->overview->highlights ?? [],

            'itinerary' => $itineraryData,
        ]);
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
        $tourType = Tour_type::select('id', 'name')->where('status', 'active')->get();

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
        $tour->other_charges = is_string($tour->other_charges)
            ? json_decode($tour->other_charges, true) ?? []
            : ($tour->other_charges ?? []);

        $tour->overview = is_string($tour->overview->overview)
            ? json_decode($tour->overview->overview, true) ?? []
            : ($tour->overview->overview ?? []);

        if (is_string($tour->locationCover)) {
            // Decode the main JSON array (assuming it’s a JSON string)
            $decoded = json_decode($tour->locationCover, true);

            // Check if the result is still a string (double-encoded JSON)
            if (is_string($decoded)) {
                // If it's still a string, decode again
                $decoded = json_decode($decoded, true);
            }
        } elseif (is_array($tour->locationCover) && count($tour->locationCover) === 1 && is_string($tour->locationCover[0])) {
            // Handle: array with one JSON string
            $decoded = json_decode($tour->locationCover[0], true);
        } else {
            // Already an array of objects (no decoding needed)
            $decoded = $tour->locationCover;
        }

        // Extract 'value' from each object in the array
        $tour->locationCover = collect($decoded)
            ->pluck('value')  // Get the 'value' from each object in the array
            ->filter()        // Remove any empty values
            ->values()        // Re-index the array
            ->toArray();


        $tour->things_to_carry = is_string($tour->things_to_carry)
            ? json_decode($tour->things_to_carry, true) ?? []
            : ($tour->things_to_carry ?? []);
        $tour->terms_conditions = is_string($tour->terms_conditions)
            ? json_decode($tour->terms_conditions, true) ?? []
            : ($tour->terms_conditions ?? []);
        $tour->note = is_string($tour->note)
            ? json_decode($tour->note, true) ?? []
            : ($tour->note ?? []);

        return view('tour.edit', compact('tour', 'overview', 'plan', 'amenity', 'tourType'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tour = tours::findOrFail($id);
        // dd($request->all());

        $request->validate([
            'tour_title' => 'required|string|max:255',
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
            'itinerary.*.title' => 'required|string|max:255',  // Ensure title is required and is a string
            'itinerary.*.details' => 'required|string',         // Ensure details are required and are a string
            'fromTo' => 'required',
            'pickup_drop' => 'required',
            'other_charges' => 'required|array|min:1',
            'other_charges.*' => 'required|string',
            'locationCover' => 'required',
            'things_to_carry' => 'required',
            'terms_conditions' => 'required',
            'note' => 'required',
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
            'activity_type' => json_encode($request->activity),
            'location' => $request->location,
            'days' => $request->days,
            'nights' => $request->nights,
            'rate' => $request->tour_rate,
            'feature_image' => $imagePath,
            'from_to' => $request->fromTo,
            'pickup_drop_location' => $request->pickup_drop,
            'other_charges' => json_encode($request->other_charges),
            'locationCover' => json_encode($request->locationCover),
            'things_to_carry' => json_encode($request->things_to_carry),
            'terms_conditions' => json_encode($request->terms_conditions),
            'note' => json_encode($request->note),
            'tour_type_id' => $request->tour_type_id,
        ]);

        // Update overview
        tour_overviews::updateOrCreate(
            ['tour_id' => $tour->id],
            [
                'tour_id' => $tour->id,
                'overview' => json_encode($request->overview),
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
