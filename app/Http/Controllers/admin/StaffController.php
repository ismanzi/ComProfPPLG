<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\Splade\Facades\Toast;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $staff = Staff::all();
        return view('pages.admin.staff.index', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $achievements = Achievement::all();
        return view('pages.admin.staff.create', compact('achievements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Staff $staff)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'nip' => 'required|string|max:255',
            'jobDesc' => 'required|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'achievements' => 'nullable|array',
            'achievements.*' => 'exists:achievements,id',
        ]);

        if ($request->hasFile('image')) {
            if ($staff->image) {
                Storage::delete($staff->image);
            }
            $validatedData['image'] = $request->file('image')->store('images/staff', 'public');
        }

        $staff = Staff::create($validatedData);

        if (!empty($request->achievements)) {
            $staff->achievements()->sync($request->achievements);
        }

        return redirect()->route('staff.index')->with('success', 'Staff created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $staff = Staff::findOrFail($id);
        return view('pages.admin.staff.view', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $staff = Staff::findOrFail($id);
        $achievements = Achievement::all();
        return view('pages.admin.staff.edit', compact('staff', 'achievements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $staff = Staff::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'nip' => 'required|string|max:255',
            'jobDesc' => 'required|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'achievements' => 'nullable|array',
            'achievements.*' => 'exists:achievements,id',
        ]);

        if ($request->hasFile('image')) {
            if ($staff->image) {
                Storage::delete($staff->image);
            }
            $validatedData['image'] = $request->file('image')->store('images/staff', 'public');
        }

        $staff->update($validatedData);

        if (!empty($request->achievements)) {
            $staff->achievements()->sync($request->achievements);
        }

        return redirect()->route('staff.index')->with('success', 'Staff updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $staff = Staff::findOrFail($id);

        if ($staff->image) {
            Storage::delete($staff->image);
        }

        $staff->achievements()->detach();
        $staff->delete();

        return redirect()->route('staff.index')->with('success', 'Staff deleted successfully!');
    }
}
