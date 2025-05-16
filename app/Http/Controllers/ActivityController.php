<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::select(['id', 'name'])->get();
        return view("activity.index", compact("activities"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("activity.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:30|unique:activities,name',
        ]);

        try {
            $activity = new Activity();
            $activity->name = $request->title;
            $activity->save();
            return redirect()->route("activity")->with("message", "Activity created successfully")->with('type', 'success');
        } catch (\Exception $e) {
            // Log the error for debugging (optional)
            log::error('Activity creation failed: ' . $e->getMessage());

            return redirect()->back()->withInput()->with([
                'message' => 'Something went wrong while creating the activity.',
                'type' => 'error'
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        try {
            $activity = Activity::findOrFail($id);
            return view('activity.edit', compact('activity'));
        } catch (ModelNotFoundException $e) {
            Log::error("Activity not found with ID: $id", ['error' => $e->getMessage()]);
            return redirect()->route('activity')->with([
                'message' => 'Activity not found.',
                'type' => 'error'
            ]);
        } catch (Exception $e) {
            Log::error("Error loading activity edit page", ['error' => $e->getMessage()]);
            return redirect()->route('activity')->with([
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
        $activity = Activity::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:30|unique:locations,name,' . $activity->id,
        ]);
        $activity->name = $request->title;
        $activity->status = $request->status ?? 1;
        $activity->save();

        return redirect()->route('activity')->with('message', 'Activity updated successfully')->with('type', 'success');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $activity = Activity::findOrFail($id);
            $activity->delete(); // Soft delete happens here
            return redirect()->route('activity')->with([
                'message' => 'Activity deleted successfully.',
                'type' => 'success'
            ]);
        } catch (ModelNotFoundException $e) {
            Log::error("Delete failed. activity not found with ID: $id", ['error' => $e->getMessage()]);
            return redirect()->route(route: 'activity')->with([
                'message' => 'Activity not found.',
                'type' => 'error'
            ]);
        } catch (Exception $e) {
            Log::error("Unexpected error occurred while deleting activity ID: $id", ['error' => $e->getMessage()]);
            return redirect()->route('activity')->with([
                'message' => 'Something went wrong. Please try again later.',
                'type' => 'error'
            ]);
        }
    }
}
