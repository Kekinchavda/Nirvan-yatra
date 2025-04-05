<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::all();
        return view("location.index", compact("locations"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("location.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $location = new Location();
        $location->name = $request->name;
        $location->save();
        return redirect()->route("location")->with("success", "Location created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $location = Location::findOrFail($id);
        return view('location.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $location = Location::findOrFail($id);
        $location->name = $request->name;
        $location->status = $request->status ?? 1;
        $location->save();

        return redirect()->route('location')->with('success', 'Location updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $location = Location::findOrFail($id);
        $location->delete();
        return redirect()->route('location')->with('success', 'Location deleted successfully.');
    }
}
