<?php

namespace App\Http\Controllers\admin;

use App\Models\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all(); // Fetch all news data
        return view('pages.admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.news.create'); // Directly to the view without needing to fetch data
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate data
        $validData = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:news,slug',
            'desc' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date',
        ]);

        // Process image upload
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('images/news'); // Save image
            $validData['image'] = $filePath;
        }

        // Save data to the database
        News::create($validData);

        return redirect()->route('pages.admin.news.index')->with('success', 'News Created Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = News::findOrFail($id); // Get news by ID
        return view('pages.admin.news.edit', compact('news')); // Send data to the view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $news = News::findOrFail($id);

        // Validate data
        $validData = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:news,slug,' . $id,
            'desc' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // If a new image file is uploaded, delete the old image and upload the new one
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($news->image) {
                Storage::delete($news->image);
            }

            // Save the new image
            $filePath = $request->file('image')->store('images/news');
            $validData['image'] = $filePath;
        }

        // Update data in the database
        $news->update($validData);

        return redirect()->route('pages.admin.news.index')->with('success', 'News Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::findOrFail($id);

        // Delete the image from storage if it exists
        if ($news->image) {
            Storage::delete($news->image);
        }

        // Delete the data from the database
        $news->delete();

        return redirect()->route('pages.admin.news.index')->with('success', 'News Deleted Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function view($id)
    {
        $news = News::findOrFail($id); // Get news by ID
        return view('pages.admin.news.view', compact('news')); // Send data to the view
    }
}
