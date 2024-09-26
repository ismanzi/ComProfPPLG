<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Lulusan;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;
use ProtoneMedia\Splade\Facades\SEO;
use ProtoneMedia\Splade\Facades\Toast;
class LulusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        SEO::title('Data Profil Alumni');
        $alumni = Lulusan::get();

        return view('pages.admin.alumni.index',[
            'lulusan' => SpladeTable::for(Lulusan::class)
            ->column('id')
            ->column('title')
            ->column('image')
            ->column('action')
            ->paginate(5),
        ], compact('alumni'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        SEO::title('Tambah Data Profil Alumni');
        return view('pages.admin.alumni.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $imageAlumni = time().'.'.$request->image->extension();
        $request->image->move(public_path('storage/lulusan/images'), $imageAlumni);
        
        Lulusan::create([
            'title' => $request->title,
            'image' => $imageAlumni,
        ]);

        Toast::title('Profil Alumni berhasil ditambahkan!')
        ->autoDismiss(6);

        return to_route('pages.admin.alumni.index');
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
        $alumni = Lulusan::findOrFail($id);
        SEO::title('Edit Profil Alumni');

        return view('pages.admin.alumni.edit', compact('alumni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $lulusan = Lulusan::findOrFail($id);

        if ($request->image) {
            $imagealumni = time().'.'.$request->image->extension();
            $request->image->move(public_path('storage/lulusan/images'), $imagealumni);
        }

        $lulusan->update([
            'title' => $request->title,
            'image' => $imagealumni,
        ]);

        Toast::title('Profil Alumni berhasil diupdate!')
        ->autoDismiss(6);

        return to_route('pages.admin.alumni.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $alumnni = Lulusan::findOrFail($id);

        $alumnni->delete();

        Toast::title('Profil Alumni berhasil dihapus!')
        ->autoDismiss(6);

        return to_route('pages.admin.alumni.index');
    }
}
