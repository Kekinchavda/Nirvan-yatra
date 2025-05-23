<?php

namespace App\Http\Controllers;

use App\Models\Insta_post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InstaPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Insta_post::select('id', 'image')->get();
        return view("insta_post.index", ["images" => $images]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("insta_post.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|array',
            'image.*' => 'image|mimes:jpeg,png,jpg,webp|max:2048', // each file
        ]);

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $imageFile) {
                $imageFilename = time() . '_' . uniqid() . '.' . $imageFile->getClientOriginalExtension();
                $imagePath = $imageFile->storeAs('Insta_post_image', $imageFilename, 'public');
                // Optionally save to DB
                Insta_post::create(['image' => $imagePath]);
            }
        }

        return redirect()->route('insta-post.index')->with('message', 'Images uploaded successfully!')->with('type', 'success');

    }

    /**
     * Display the specified resource.
     */
    public function show(Insta_post $instaPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Insta_post $instaPost)
    {
        return view("insta_post.edit", ["image" => $instaPost]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Insta_post $instaPost)
    {
        // Validate the request
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // If a new image is uploaded
        if ($request->hasFile('image')) {
            // ✅ Delete the old image from storage if it exists
            if ($instaPost->image && Storage::disk('public')->exists($instaPost->image)) {
                Storage::disk('public')->delete($instaPost->image);
            }

            // ✅ Upload and store new image
            $imageFilename = time() . '_' . uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
            $imagePath = $request->file('image')->storeAs('Insta_post_image', $imageFilename, 'public');

            // ✅ Update model with new image path
            $instaPost->image = $imagePath;
        }

        // ✅ Save updated record
        $instaPost->save();

        return redirect()->route('insta-post.index')->with('message', 'Image updated successfully!')->with('type', 'success');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Insta_post $instaPost)
    {
        // dd($instaPost->id);
        // Find the tour and delete related data
        $instaPost = Insta_post::findOrFail($instaPost->id);
        // dd($instaPost);
        // Delete the image from storage if it exists
        if (file_exists(storage_path('app/public/' . $instaPost->image))) {
            unlink(storage_path('app/public/' . $instaPost->image));
        }

        $instaPost->delete();
        return redirect()->route('insta-post.index')->with('message', 'Image Deleted successfully!')->with('type', 'success');

    }
}
