<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project = Project::all();
        return view('pages.admin.projek.index', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $subject = Subject::all();
        return view('pages.admin.projek.create', compact('subject'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Project $project)
    {
        //
        $validData = $request->validate([
            'name' => 'required|string|max:255',
            'team' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'required',
            'date' => 'required',
            'desc' => 'nullable|string',
            'subject' => 'nullable|array',
            'subject.*' => 'exists:subject,id',
        ]);

        if ($request->hasFile('image')) {
            $validData['image'] = $request->file('image')->store('images/project');
        }

        $project = Project::create($validData);

        if (!empty($request->subject)){
            $project->subject()->sync($request->subject);
        }
        return redirect()->route('projek.index')->with('success', 'Project created successfully!');
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
    public function edit(string $id)
    {
        //
        $project = Project::findOrFail($id); // Get news by ID
        return view('pages.admin.projek.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $project = Project::findOrFail($id);

        $validData = $request->validate([
            'name' => 'required|string|max:255',
            'team' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'desc' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($project->image) {
                Storage::delete($project->image);
            }
            // Save the new image
            $filePath = $request->file('image')->store('images/project');
            $validData['image'] = $filePath;
        }
        // Update data in the database
        $project->update($validData);
        return redirect()->route('projek.index')->with('success', 'Project Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $project = Project::findOrFail($id);
        // Delete the image from storage if it exists
        if ($project->image) {
            Storage::delete($project->image);
        }
        $project->delete();
        return redirect()->route('projek.index')->with('success', 'Project deleted successfully!');
    }
    public function view($id)
    {
        $project = Project::findOrFail($id);
        return view('pages.admin.projek.view', compact(var_name: 'project'));
    }
}
