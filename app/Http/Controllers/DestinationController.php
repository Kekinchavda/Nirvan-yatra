<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinations = Destination::whereNull('deleted_at')->get();
        return view("destination.index", compact("destinations"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("destination.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
        ]);

        $imagePath = $request->file('image')->store('destinations', 'public');
        //  save the image and path in the database
        Destination::create(attributes: [
            'feature_image' => $imagePath,
        ]);

        return redirect()->route('destination')
            ->with('message', 'Destination Image created successfully!')
            ->with('type', 'success');
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
            $destination = Destination::findOrFail($id);
            return view('destination.edit', compact('destination'));
        } catch (ModelNotFoundException $e) {
            Log::error("destination not found with ID: $id", ['error' => $e->getMessage()]);
            return redirect()->route('destination')->with([
                'message' => 'Activity not found.',
                'type' => 'error'
            ]);
        } catch (Exception $e) {
            Log::error("Error loading  Image edit page", ['error' => $e->getMessage()]);
            return redirect()->route('destination')->with([
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
        $imagePath = $request->file('image')->store('destinations', 'public');
        $destination = Destination::findOrFail($id);
        $destination->feature_image = $imagePath;
        $destination->save();

        return redirect()->route('destination')->with('message', 'destination Image successfully')->with('type', 'success');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $destination = Destination::findOrFail($id);
            $destination->delete(); // Performs a soft delete if SoftDeletes is used

            return redirect()->route('destination')->with([
                'message' => 'destination deleted successfully.',
                'type' => 'success'
            ]);
        } catch (ModelNotFoundException $e) {
            Log::error("Delete failed. destination not found with ID: $id", ['error' => $e->getMessage()]);
            return redirect()->route('destination')->with([
                'message' => 'destination not found.',
                'type' => 'error'
            ]);
        } catch (Exception $e) {
            Log::error("Unexpected error occurred while deleting destination ID: $id", ['error' => $e->getMessage()]);
            return redirect()->route('destination')->with([
                'message' => 'Something went wrong. Please try again later.',
                'type' => 'error'
            ]);
        }
    }
}
