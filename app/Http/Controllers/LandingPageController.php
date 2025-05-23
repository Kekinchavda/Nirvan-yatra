<?php

namespace App\Http\Controllers;

use App\Models\{
    Activity,
    ContactForm,
    Destination,
    Insta_post,
    Location,
    Logo,
    tours
};
use App\Models\Tour_type;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        $activitys = Activity::all();
        $destinations = Destination::all();
        $tourData = Tour_type::with('tours')->get()
            ->mapWithKeys(function ($tourType) {
                return [
                    $tourType->name => $tourType->tours
                ];
            })->toArray();

        $logo = Logo::first(); // assuming only one logo record
        $instaPosts = Insta_post::select('id', 'image')->get(); // assuming only one logo record

        return view("landing_page.main_app", compact('locations', 'activitys', 'destinations', 'tourData', 'logo', 'instaPosts'));
    }

    public function show($slug)
    {
        $slugData = tours::with('overview', 'plan', 'amenities')->where('slug', $slug)->firstOrFail();

        // Decode JSON fields if they are strings
        if ($slugData->plan) {
            $slugData->plan->itinerary = is_string($slugData->plan->itinerary)
                ? json_decode($slugData->plan->itinerary, true) ?? []
                : ($slugData->plan->itinerary ?? []);
        }

        if ($slugData->overview) {
            $slugData->overview->highlights = is_string($slugData->overview->highlights)
                ? json_decode($slugData->overview->highlights, true) ?? []
                : ($slugData->overview->highlights ?? []);
        }

        if ($slugData->amenities) {
            $slugData->amenities->included_amenities = is_string($slugData->amenities->included_amenities)
                ? json_decode($slugData->amenities->included_amenities, true) ?? []
                : ($slugData->amenities->included_amenities ?? []);

            $slugData->amenities->not_included_amenities = is_string($slugData->amenities->not_included_amenities)
                ? json_decode($slugData->amenities->not_included_amenities, true) ?? []
                : ($slugData->amenities->not_included_amenities ?? []);
        }

        $slugData->activity_type = is_string($slugData->activity_type)
            ? json_decode($slugData->activity_type, true) ?? []
            : ($slugData->activity_type ?? []);

        $logo = Logo::first(); // assuming only one logo record

        if (!empty($slugData->from_to) && str_contains($slugData->from_to, ' to ')) {
            [$from, $to] = explode(' to ', $slugData->from_to);
            $fromFormatted = Carbon::parse($from)->format('d M Y');
            $toFormatted = Carbon::parse($to)->format('d M Y');
            $slugData->from_to_formatted = "$fromFormatted to $toFormatted";
        } else {
            $slugData->from_to_formatted = $slugData->from_to;
        }

        if ($slugData->other_charges && is_string($slugData->other_charges)) {
            $slugData->other_charges = json_decode($slugData->other_charges, true) ?? [];
        }
        if ($slugData->things_to_carry && is_string($slugData->things_to_carry)) {
            $slugData->things_to_carry = json_decode($slugData->things_to_carry, true);
        }
        if ($slugData->terms_conditions && is_string($slugData->terms_conditions)) {
            $slugData->terms_conditions = json_decode($slugData->terms_conditions, true);
        }
        if ($slugData->note && is_string($slugData->note)) {
            $slugData->note = json_decode($slugData->note, true);
        }

        if ($slugData->overview) {
            $slugData->overview->overview = json_decode($slugData->overview->overview, true);
        }
        // location cover
        if (is_string($slugData->locationCover)) {
            // Decode the main JSON array (assuming it’s a JSON string)
            $decoded = json_decode($slugData->locationCover, true);

            // Check if the result is still a string (double-encoded JSON)
            if (is_string($decoded)) {
                // If it's still a string, decode again
                $decoded = json_decode($decoded, true);
            }
            // dd($decoded);
        } elseif (is_array($slugData->locationCover) && count($slugData->locationCover) === 1 && is_string($slugData->locationCover[0])) {
            // Handle: array with one JSON string
            $decoded = json_decode($slugData->locationCover[0], true);
        } else {
            // Already an array of objects (no decoding needed)
            $decoded = $slugData->locationCover;
        }

        // Extract 'value' from each object in the array
        $slugData->locationCover = collect($decoded)
            ->pluck('value')  // Get the 'value' from each object in the array
            ->filter()        // Remove any empty values
            ->values()        // Re-index the array
            ->toArray();
        //location cover

        return view('landing_page.listing_details', compact('slugData', 'logo'));
    }

    public function list()
    {
        $logo = Logo::first(); // assuming only one logo record
        $locations = Location::all();
        $activitys = Activity::all();
        // $tours = tours::all();
        $tours = tours::paginate(6); // 6 items per page
        return view("landing_page.list", compact("logo", "locations", "activitys", "tours"));
    }
    public function contactUs()
    {
        $logo = Logo::first(); // assuming only one logo record

        return view("landing_page.contact_us", compact("logo"));
    }

    public function contactUsForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000'
        ]);

        // Process the data (send email, save to DB, etc.)
        // Mail::to('your@email.com')->send(new ContactFormMail($validated));
        $contact = new ContactForm;
        $contact->name = $validated['name'];
        $contact->email = $validated['email'];
        $contact->message = $validated['message'];
        $contact->save();

        return response()->json([
            'success' => true,
            'message' => 'Thank you! Your message has been sent successfully.'
        ]);
    }

}
