<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $configs = Config::all();
        return view('pages.admin.konfig.index', compact('configs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.konfig.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'theBoys' => 'required|integer',
            'theGurls' => 'required|integer',
            'bgHero' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'logoX' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'logoY' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'desc' => 'nullable|string',
            'vision' => 'required|string',
            'mission' => 'required|string',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('images/konfig');
        }

        Config::create($validatedData);

        return redirect()->route('pages.admin.konfig.index')->with('success', 'Configuration created successfully!');

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
        $configs = Config::findOrFail($id);
        return view('pages.admin.konfig.edit', compact('configs'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    // Ambil data configs berdasarkan ID
    $configs = Config::find($id);

    // Jika tidak ditemukan, lemparkan error
    if (!$configs) {
        return redirect()->back()->with('error', 'Config not found');
    }

    // Validasi input
    $validatedData = $request->validate([
        'theBoys' => 'required|integer',
        'theGurls' => 'required|integer',
        'bgHero' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'logoX' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'logoY' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'desc' => 'nullable|string',
        'vision' => 'required|string',
        'mission' => 'required|string',
    ]);

    // Handle image upload untuk bgHero
    if ($request->hasFile('bgHero')) {
        // Delete the old image if it exists
        if ($configs->bgHero) {
            Storage::delete($configs->bgHero);
        }

        // Save the new image
        $validatedData['bgHero'] = $request->file('bgHero')->store('bgHero/configs');
    }

    // Handle image upload untuk logoX
    if ($request->hasFile('logoX')) {
        // Delete the old logoX image if it exists
        if ($configs->logoX) {
            Storage::delete($configs->logoX);
        }

        // Save the new image
        $validatedData['logoX'] = $request->file('logoX')->store('logoX/configs');
    }

    // Handle image upload untuk logoY
    if ($request->hasFile('logoY')) {
        // Delete the old logoY image if it exists
        if ($configs->logoY) {
            Storage::delete($configs->logoY);
        }

        // Save the new image
        $validatedData['logoY'] = $request->file('logoY')->store('logoY/configs');
    }

    // Update data di database
    $configs->update($validatedData);

    return redirect()->route('pages.admin.konfig.index')->with('success', 'Configs updated successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
