<?php

namespace App\Http\Controllers;

use App\Models\Tour_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TourTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tourTypes = Tour_type::select('id', 'name', 'status', 'order_number')->orderBy('order_number', "ASC")->get();
        return view("tour_type.index", ["tourTypes" => $tourTypes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tour_type.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        try {
            $activity = new Tour_type();
            $activity->name = $request->name;
            $activity->save();
            return redirect()->route("tour-type.index")->with("message", "New Tour Type created successfully")->with('type', 'success');
        } catch (\Exception $e) {
            // Log the error for debugging (optional)
            log::error('Activity creation failed: ' . $e->getMessage());

            return redirect()->back()->withInput()->with([
                'message' => 'Something went wrong while creating the our type.',
                'type' => 'error'
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour_type $tourType)
    {
        return view("tour_type.edit", ["tourType" => $tourType]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tourType = Tour_type::findOrFail($id);
        $tourType->name = $request->name;
        $tourType->update();

        return redirect()->route("tour-type.index")->with("message", "tour Type Updated successfully")->with('type', 'success');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function toggleStatus(Request $request, $id)
    {
        $tourType = Tour_type::findOrFail($id);
        $tourType->status = $request->status;
        $tourType->save();

        return response()->json([
            'success' => true,
            'message' => 'status Updated successfully!',
            'type' => 'success'
        ]);
    }

    public function updateOrderNumber(Request $request, $id)
    {
        $tourType = Tour_type::find($id);

        if (!$tourType) {
            return response()->json(['success' => false, 'message' => 'Tour type not found.']);
        }

        $tourType->order_number = $request->input('order_number');
        $tourType->save();

        return response()->json(['success' => true]);
    }


}
