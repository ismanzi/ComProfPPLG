<?php

namespace App\Http\Controllers\admin;

use App\Models\Config;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $configs = Config::all(); // Fetch all configs data
        return view('pages.admin.configs.index', compact('configs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Cek apakah ada konfigurasi yang sudah ada
        $existingConfig = Config::first();
        if ($existingConfig) {
            // Arahkan ke halaman edit jika sudah ada konfigurasi
            return redirect()->route('configs.edit', $existingConfig->id)
                ->with('message', 'Konfigurasi sudah ada. Silakan edit konfigurasi yang ada.');
        }

        return view('pages.admin.configs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   /**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    // Cek apakah sudah ada konfigurasi
    $existingConfig = Config::first();
    if ($existingConfig) {
        // Redirect kembali dengan pesan kesalahan jika konfigurasi sudah ada
        return redirect()->back()->with('error', 'Konfigurasi sudah ada. Silakan edit konfigurasi yang ada.');
    }

    // Validasi data
    $validData = $request->validate([
        'theBoys' => 'required|integer',
        'theGurls' => 'required|integer',
        'bgHero' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'logoX' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'logoY' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'desc' => 'required|string|max:255',
        'vision' => 'required|string|max:255',
        'mission' => 'required|string|max:255',
    ]);

    // Proses upload file jika ada
    if ($request->hasFile('bgHero')) {
        $validData['bgHero'] = $request->file('bgHero')->store('images/konfig');
    }

    if ($request->hasFile('logoX')) {
        $validData['logoX'] = $request->file('logoX')->store('images/konfig');
    }

    if ($request->hasFile('logoY')) {
        $validData['logoY'] = $request->file('logoY')->store('images/konfig');
    }

    // Simpan data ke database
    Config::create($validData);

    // Redirect setelah berhasil
    return redirect()->route('configs.index')->with('success', 'Configuration Created Successfully');
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $configs = Config::findOrFail($id); // Get config by ID
        return view('pages.admin.configs.edit', compact('configs')); // Send data to the view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $configs = Config::findOrFail($id);

        // Validate data
        $validData = $request->validate([
            'theBoys' => 'required|integer',
            'theGurls' => 'required|integer',
            'bgHero' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'logoX' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'logoY' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'desc' => 'required|string|max:255',
            'vision' => 'required|string|max:255',
            'mission' => 'required|string|max:255',
        ]);

        if ($request->hasFile('bgHero')) {
            if ($configs->bgHero) {
                Storage::delete($configs->bgHero);
            }
            $validData['bgHero'] = $request->file('bgHero')->store('images/konfig');
        }

        if ($request->hasFile('logoX')) {
            if ($configs->logoX) {
                Storage::delete($configs->logoX);
            }
            $validData['logoX'] = $request->file('logoX')->store('images/konfig');
        }

        if ($request->hasFile('logoY')) {
            if ($configs->logoY) {
                Storage::delete($configs->logoY);
            }
            $validData['logoY'] = $request->file('logoY')->store('images/konfig');
        }

        $configs->update($validData);

        return redirect()->route('configs.index')->with('success', 'Configurations Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $configs = Config::findOrFail($id);

        // Delete the images from storage if they exist
        if ($configs->bgHero) {
            Storage::delete($configs->bgHero);
        }
        if ($configs->logoX) {
            Storage::delete($configs->logoX);
        }
        if ($configs->logoY) {
            Storage::delete($configs->logoY);
        }

        // Delete the data from the database
        $configs->delete();

        return redirect()->route('configs.index')->with('success', 'Configuration Deleted Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function view($id)
    {
        $configs = Config::findOrFail($id); // Get config by ID
        return view('pages.admin.configs.view', compact('configs')); // Send data to the view
    }
}
