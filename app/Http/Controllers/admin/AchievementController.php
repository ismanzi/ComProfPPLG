<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $achievements = Achievement::all();
        return view('pages.admin.achievement.index', compact('achievements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.achievement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'level' => 'required|string',
            'organizer' => 'required|string|max:255',
            'date' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'participant' => 'nullable|string',
            'desc' => 'nullable|string',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('images/achievements');
        }

        Achievement::create($validatedData);

        return redirect()->route('pages.admin.achievement.index')->with('success', 'Achievement created successfully!');
    }

    /**
     * Show the form for editing the specified achievement.
     */
    public function edit(string $id)
    {
        $achievement = Achievement::findOrFail($id); // Get achievement by ID
        return view('pages.admin.achievement.edit', compact('achievement')); // Send data to the view
    }

    /**
     * Update the specified achievement in storage.
     */
    public function update(Request $request, string $id)
    {
        $achievement = Achievement::findOrFail($id);

        // Validate data
        $validData = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'level' => 'required|string',
            'organizer' => 'required|string|max:255',
            'date' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'participant' => 'nullable|string',
            'desc' => 'nullable|string',
        ]);

        // If a new image file is uploaded, delete the old image and upload the new one
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($achievement->image) {
                Storage::delete($achievement->image);
            }

            // Save the new image
            $validData['image'] = $request->file('image')->store('images/achievements');
        }

        // Update data in the database
        $achievement->update($validData);

        return redirect()->route('pages.admin.achievement.index')->with('success', 'Achievement updated successfully!');
    }

    /**
     * Remove the specified achievement from storage.
     */
    public function destroy($id)
    {
        $achievement = Achievement::findOrFail($id);

        // Delete the image from storage if it exists
        if ($achievement->image) {
            Storage::delete($achievement->image);
        }

        $achievement->delete();

        return redirect()->route('pages.admin.achievement.index')->with('success', 'Achievement deleted successfully!');
    }

    /**
     * Display the specified achievement.
     */
    public function view($id)
    {
        $achievement = Achievement::findOrFail($id);
        return view('pages.admin.achievement.view', compact('achievement'));
    }
}
