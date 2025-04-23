<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logos = Logo::first(); // assuming only one logo record
        return view("logo.index", compact("logos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeOrUpdate(Request $request)
    {
        $request->validate([
            'header_logo' => 'nullable|image|mimes:png',
            'footer_logo' => 'nullable|image|mimes:png',
        ]);

        // Fetch existing logo record or create new one
        $logo = Logo::first() ?? new Logo();

        if ($request->hasFile('header_logo')) {
            // Delete old header logo if it exists
            if ($logo->header_logo && Storage::disk('public')->exists($logo->header_logo)) {
                Storage::disk('public')->delete($logo->header_logo);
            }

            // Store new header logo with fixed name
            $headerFile = $request->file('header_logo');
            $headerFilename = 'logo-dark.' . $headerFile->getClientOriginalExtension();
            $headerPath = $headerFile->storeAs('logos', $headerFilename, 'public');
            $logo->header_logo = $headerPath;
        }

        if ($request->hasFile('footer_logo')) {
            // Delete old footer logo if it exists
            if ($logo->footer_logo && Storage::disk('public')->exists($logo->footer_logo)) {
                Storage::disk('public')->delete($logo->footer_logo);
            }

            // Store new footer logo with fixed name
            $footerFile = $request->file('footer_logo');
            $footerFilename = 'logo-light.' . $footerFile->getClientOriginalExtension();
            $footerPath = $footerFile->storeAs('logos', $footerFilename, 'public');
            $logo->footer_logo = $footerPath;
        }
        $logo->save();

        return redirect()->route('logo')->with('message', 'Logo saved successfully!')->with('type', 'success');
    }




    /**
     * Display the specified resource.
     */
    public function show(Logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Logo $logo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Logo $logo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Logo $logo)
    {
        //
    }
}
