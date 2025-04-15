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
    public function show($slug)
    {
        $slugData = tours::with('overview', 'plan', 'amenities')->where('slug', $slug)->firstOrFail();

        return view('landing_page.listing_details', compact('slugData'));
    }
}
