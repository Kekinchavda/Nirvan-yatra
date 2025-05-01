<?php

namespace App\Http\Controllers;

use App\Models\{
    Activity,
    ContactForm,
    Destination,
    Location,
    Logo,
    tours
};
use Illuminate\Http\Request;


class LandingPageController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        $activitys = Activity::all();
        $destinations = Destination::all();
        $tours = tours::all();
        $logo = Logo::first(); // assuming only one logo record
        return view("landing_page.main_app", compact('locations', 'activitys', 'destinations', 'tours', 'logo'));
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
        return view('landing_page.listing_details', compact('slugData', 'logo'));
    }

    public function list()
    {
        $logo = Logo::first(); // assuming only one logo record
        $locations = Location::all();
        $activitys = Activity::all();
        // $tours = tours::all();
        $tours = tours::paginate(1); // 6 items per page
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
