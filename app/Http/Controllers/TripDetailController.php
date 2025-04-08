<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\TripDetails;
use Illuminate\Http\Request;

class TripDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('trip.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('trip.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(TripDetails $trip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TripDetails $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TripDetails $trip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TripDetails $trip)
    {
        //
    }
}
