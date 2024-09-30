<?php

namespace App\Http\Controllers\admin;

use App\Models\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        $news= News::all();

        return view('pages.admin.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

       $news = News::all();
       return view('pages.admin.news.create', compact('news'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validData = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'desc' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        News::create($validData);
        return redirect()->route('pages.admin.news.index')->with("Success", "News Created Successfully");
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $news = News::findOrFail($id);
        return view('pages.admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $news = News::findOrFail($id);
        $news->update($request->all());
        return redirect()->route('pages.admin.news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $news = News::findOrFail($id);
        $news->delete();
        return redirect()->route('pages.admin.news.index');
    }

    public function view($id)
    {
        $news = News::findOrFail($id);
        return view('pages.admin.news.view', compact('news'));
    }
}
