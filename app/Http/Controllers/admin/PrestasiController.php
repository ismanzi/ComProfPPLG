<?php

namespace App\Http\Controllers\admin;

use App\Models\Prestasi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\SEO;
use ProtoneMedia\Splade\SpladeTable;
use ProtoneMedia\Splade\Facades\Toast;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        SEO::title ('Data Prestasi');

        $achievement = Prestasi::get();
        return view('pages.admin.achievement.index',[
            'prestasi'=>SpladeTable:: for (Prestasi::class)
            -> column('id')
            -> column('name')
            ->column('subjek')
            ->column('posisi')
            ->column('level')
            ->column('date')
            ->column('action')
            ->paginate(5),
        ], compact ('achievement'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        SEO::title('Tambah Prestasi');
        $achievement = Prestasi::all();
        return view ('pages.admin.achievement.create', compact ('achievement'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $gambarprestasi1 = time().'.'.$request->image1->extension();
        $gambarprestasi2 = time().'.'.$request->image1->extension();
        $request->image1->move(public_path('storage/achievement/images'), $gambarprestasi1);
        $request->image2->move(public_path('storage/achievement/images'), $gambarprestasi2);

        Prestasi::create([
            'name' => $request -> name,
            'image1'=> $gambarprestasi1,
            'image2'=> $gambarprestasi2,
            'subjek'=> $request -> subjek,
            'date' => $request ->date,
            'posisi' => $request -> posisi,
            'level' => $request ->level,
            'organizer' => $request ->organizer,
            'participant' => $request ->participant,
            'desc' => $request ->desc,
        ]);

        Toast::title('Prestasi berhasil ditambahkan!')
        ->autoDismiss(6);

        return to_route('pages.admin.achievement.index');
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
        $achievement = Prestasi::findOrFail($id);

        SEO::title('Edit Prestasi');

        return view('pages.admin.achievement.edit', compact('achievement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $achievement = Prestasi::findOrFail($id);

        // Image Processing
        if ($request->image1) {
            $gambarprestasi1 = time().'.'.$request->image1->extension();
            $request->image1->move(public_path('storage/achievement/images'), $gambarprestasi1);
        }
        if ($request->image2) {
            $gambarprestasi2 = time().'.'.$request->image2->extension();
            $request->image2->move(public_path('storage/achievement/images'), $gambarprestasi2);
        }

        $achievement->update([
            'name' => $request->name,
            'image1' => $gambarprestasi1,
            'image2' => $gambarprestasi2,
            'subjek' => $request->subjek,
            'date' => $request->date,
            'posisi' => $request->posisi,
            'level' => $request->level,
            'organizer' => $request->organizer,
            'participant' => $request->participant,
            'desc' => $request->desc,
        ]);

        Toast::title('Prestasi berhasil diupdate!')
        ->autoDismiss(6);

        return to_route('pages.admin.achievement.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $achievement = Prestasi::findOrFail($id);

        $achievement->delete();

        Toast::title('Prestasi berhasil dihapus!')
        ->autoDismiss(6);

        return to_route('pages.admin.achievement.index');
    }
}
