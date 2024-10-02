<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\Splade\Facades\Toast;

class AlumniController extends Controller
{
    public function index()
    {
        $alumnis = Alumni::all();
        return view('pages.admin.alumni.index', compact('alumnis'));
    }

    public function create()
    {
        $achievements = Achievement::all();
        return view('pages.admin.alumni.create', compact('achievements'));
    }

    public function store(Request $request, Alumni $alumni)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'yearOfGraduation' => 'required|string|max:4',
            'currentActivity' => 'nullable|string|max:255',
            'contact' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'achievements' => 'nullable|array',
            'achievements.*' => 'exists:achievements,id',
        ]);

        if ($request->hasFile('image')) {
            if ($alumni->image) {
                Storage::delete($alumni->image);
            }
            $validatedData['image'] = $request->file('image')->store('images/alumni', 'public');
        }

        $alumni = Alumni::create($validatedData);

        if (!empty($request->achievements)) {
            $alumni->achievements()->sync($request->achievements);
        }

        Toast::title('Profil Alumni berhasil ditambahkan!')
            ->autoDismiss(6);

        return redirect()->route('alumni.index')->with('success', 'Alumni created successfully!');
    }

    public function show(string $id)
    {
        $alumni = Alumni::findOrFail($id);
        return view('pages.admin.alumni.view', compact('alumni'));
    }

    public function edit(string $id)
    {
        $alumni = Alumni::findOrFail($id);
        $achievements = Achievement::all();
        return view('pages.admin.alumni.edit', compact('alumni', 'achievements'));
    }

    public function update(Request $request, string $id)
    {
        $alumni = Alumni::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'yearOfGraduation' => 'required|string|max:4',
            'currentActivity' => 'nullable|string|max:255',
            'contact' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'achievements' => 'nullable|array',
            'achievements.*' => 'exists:achievements,id',
        ]);

        if ($request->hasFile('image')) {
            if ($alumni->image) {
                Storage::delete($alumni->image);
            }
            $validatedData['image'] = $request->file('image')->store('images/alumni', 'public');
        }

        $alumni->update($validatedData);

        if (!empty($request->achievements)) {
            $alumni->achievements()->sync($request->achievements);
        }

        Toast::title('Profil Alumni berhasil diupdate!')
            ->autoDismiss(6);

        return redirect()->route('alumni.index')->with('success', 'Alumni updated successfully!');
    }

    public function destroy(string $id)
    {
        $alumni = Alumni::findOrFail($id);

        if ($alumni->image) {
            Storage::delete($alumni->image);
        }

        $alumni->achievements()->detach();
        $alumni->delete();

        Toast::title('Profil Alumni berhasil dihapus!')
            ->autoDismiss(6);

        return redirect()->route('alumni.index')->with('success', 'Alumni deleted successfully!');
    }
}
