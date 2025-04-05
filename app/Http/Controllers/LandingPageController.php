<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Location;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        $activitys = Activity::all();
        return view("landing_page.main", compact('locations', 'activitys'));
    }
}
