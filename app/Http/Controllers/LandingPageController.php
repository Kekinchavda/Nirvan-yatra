<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Destination;
use App\Models\Location;
use App\Models\tour_amenities;
use App\Models\tour_overviews;
use App\Models\tour_plans;
use App\Models\tours;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        $activitys = Activity::all();
        $destinations = Destination::all();
        $tours = tours::all();
        return view("landing_page.main", compact('locations', 'activitys', 'destinations', 'tours'));
    }
    // public function show($slug)
    // {
    //     $slugData = tours::with('overview', 'plan', 'amenities')->where('slug', $slug)->firstOrFail();


    //     return view('landing_page.listing_details', compact('slugData'));
    // }
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

        return view('landing_page.listing_details', compact('slugData'));
    }

}
