<?php

namespace App\Http\Controllers\admin;

use App\Models\Berita;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\SEO;
use ProtoneMedia\Splade\SpladeTable;
use ProtoneMedia\Splade\Facades\Toast;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        SEO::title('Data Berita');

        $beritas= Berita::get();

        return view('pages.admin.news.index',[
            'berita' =>SpladeTable::for(Berita::class)
            -> column('id')
            -> column('title')
            -> column('created_at')
            -> column('action')
            -> paginate(5)
        ], compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
       SEO::title('Tambah Berita');

       $berita = Berita::all();
       return view('pages.admin.news.create', compact('berita'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       $str = strtolower($request->title);

       $imagenews = time().'.'.$request->image->extension();  
       $request->image->move(public_path('storage/berita/images'), $imagenews);

       Berita::create([
        'title' => $request->title,
        'slug' => preg_replace('/\s+/', '_', $str),
        'image' => $imagenews,
        'short_desc' => $request -> short_desc,
        'detail' => $request ->detail
       ]);

       Toast::title('Berita Berhasil Disimpan');
       return view('pages.admin.news.index');
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
        $berita = Berita::findOrFail($id);

        SEO::title('Edit Berita');

        return view('pages.admin.news.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $berita = Berita::findOrFail($id);

        // Image Processing
        if ($request->image) {
            $imageBerita = time().'.'.$request->image->extension();
            $request->image->move(public_path('storage/berita/images'), $imageBerita);
        }

        $berita->update([
            'title' => $request->title,
            'image' => $imageBerita,
            'short_desc' => $request->short_desc,
            'detail' => $request->detail,
        ]);

        Toast::title('Berita berhasil Diupdate!')
        ->autoDismiss(6);

        return to_route('pages.admin.news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $beritas = Berita::findOrFail($id);

        $beritas->delete();

        Toast::title('Berita berhasil dihapus!')
        ->autoDismiss(6);

        return to_route('pages.admin.news.index');
    }
}
