<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function index()
    {
        $achievements = Achievement::all();
        return view('pages.admin.achievement.index', compact('achievements'));
    }

    public function create()
    {
        return view('pages.admin.achievement.create');
    }

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

    Achievement::create($validatedData);

    return redirect()->route('pages.admin.achievement.index')->with('success', 'Achievement created successfully!');
}

    public function edit($id)
    {
        $achievement = Achievement::findOrFail($id);
        return view('pages.admin.achievement.edit', compact('achievement'));
    }

    public function update(Request $request, $id)
    {
        $achievement = Achievement::findOrFail($id);
        $achievement->update($request->all());

        return redirect()->route('pages.admin.achievement.index');
    }

    public function destroy($id)
    {
        $achievement = Achievement::findOrFail($id);
        $achievement->delete();

        return redirect()->route('pages.admin.achievement.index');
    }

    public function view($id)
    {
        $achievement = Achievement::findOrFail($id);
        return view('pages.admin.achievement.view', compact('achievement'));
    }
}
