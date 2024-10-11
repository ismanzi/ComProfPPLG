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
        return view('pages.admin.project.index', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.admin.project.create', [
            'subject' => Subject::all(['id', 'name']),
        ]);
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
            'subject_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'required',
            'date' => 'required',
            'desc' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::delete($project->image);
            }
            $validatedData['image'] = $request->file('image')->store('images/project', 'public');
        }

        $project = Project::create($validData);

        if (!empty($request->subject)){
            $project->subject()->sync($request->subject);
        }

        return redirect()->route('project.index')->with('success', 'Project created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $project = Project::findOrFail($id);
        return view('pages.admin.project.view', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $project = Project::findOrFail($id);
        $subject = Subject::all();
        return view('pages.admin.project.edit', compact('project'));
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
            'subject_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'required',
            'date' => 'required',
            'desc' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::delete($project->image);
            }
            $validatedData['image'] = $request->file('image')->store('images/project', 'public');
        }
        // Update data in the database
        $project->update($validData);

        if (!empty($request->subject)) {
            $project->subject()->sync($request->subject);
        }

        return redirect()->route('project.index')->with('success', 'Project Updated Successfully');
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

        return redirect()->route('project.index')->with('success', 'Project deleted successfully!');
    }
}
