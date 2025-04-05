<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::whereNull('deleted_at')->get();
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
        $request->validate([
            'name' => 'required|string|max:30|unique:locations,name',
        ]);

        try {
            $location = new Location();
            $location->name = $request->name;
            $location->save();

            return redirect()->route('location')->with([
                'message' => 'Location created successfully.',
                'type' => 'success'
            ]);
        } catch (\Exception $e) {
            // Log the error for debugging (optional)
            log::error('Location creation failed: ' . $e->getMessage());

            return redirect()->back()->withInput()->with([
                'message' => 'Something went wrong while creating the location.',
                'type' => 'error'
            ]);
        }
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
        try {
            $location = Location::findOrFail($id);
            return view('location.edit', compact('location'));
        } catch (ModelNotFoundException $e) {
            Log::error("Location not found with ID: $id", ['error' => $e->getMessage()]);
            return redirect()->route('location')->with([
                'message' => 'Location not found.',
                'type' => 'error'
            ]);
        } catch (Exception $e) {
            Log::error("Error loading location edit page", ['error' => $e->getMessage()]);
            return redirect()->route('location')->with([
                'message' => 'Something went wrong. Please try again later.',
                'type' => 'error'
            ]);
        }

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
        return redirect()->route('location')->with('message', 'Location updated successfully')->with('type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $location = Location::findOrFail($id);
            $location->delete(); // Performs a soft delete if SoftDeletes is used

            return redirect()->route('location')->with([
                'message' => 'Location deleted successfully.',
                'type' => 'success'
            ]);
        } catch (ModelNotFoundException $e) {
            Log::error("Delete failed. Location not found with ID: $id", ['error' => $e->getMessage()]);
            return redirect()->route('location')->with([
                'message' => 'Location not found.',
                'type' => 'error'
            ]);
        } catch (Exception $e) {
            Log::error("Unexpected error occurred while deleting location ID: $id", ['error' => $e->getMessage()]);
            return redirect()->route('location')->with([
                'message' => 'Something went wrong. Please try again later.',
                'type' => 'error'
            ]);
        }
    }
}
