<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('pages.admin.subject.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.subject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'class' => 'required|string|max:255',
            'hour' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'desc' => 'nullable|string',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('images/subjects');
        }

        Subject::create($validatedData);

        return redirect()->route('pages.admin.subject.index')->with('success', 'Subject created successfully!');
    }

    /**
     * Show the form for editing the specified subject.
     */
    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        return view('pages.admin.subject.edit', compact('subject'));
    }

    /**
     * Update the specified subject in storage.
     */
    public function update(Request $request, $id)
    {
        $subject = Subject::findOrFail($id);

        // Validate data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'class' => 'required|string|max:255',
            'hour' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'desc' => 'nullable|string',
        ]);

        // If a new image file is uploaded, delete the old image and upload the new one
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($subject->image) {
                Storage::delete($subject->image);
            }

            // Save the new image
            $validatedData['image'] = $request->file('image')->store('images/subjects');
        }

        // Update data in the database
        $subject->update($validatedData);

        return redirect()->route('pages.admin.subject.index')->with('success', 'Subject updated successfully!');
    }

    /**
     * Remove the specified subject from storage.
     */
    public function destroy($id)
    {
        $subject = Subject::findOrFail($id);

        // Delete the image from storage if it exists
        if ($subject->image) {
            Storage::delete($subject->image);
        }

        $subject->delete();

        return redirect()->route('pages.admin.subject.index')->with('success', 'Subject deleted successfully!');
    }

    /**
     * Display the specified subject.
     */
    public function view($id)
    {
        $subject = Subject::findOrFail($id);
        return view('pages.admin.subject.view', compact('subject'));
    }
}
