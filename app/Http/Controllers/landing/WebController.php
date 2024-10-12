<?php

namespace App\Http\Controllers;

use App\Models\Config;

class WebController extends Controller
{
    public function index()
    {
        // Ambil data konfigurasi pertama dari tabel Config
        $config = Config::first();

        // Cek apakah data config ada
        if ($config) {
            $theBoys = $config->theBoys;
        } else {
            $theBoys = 0; // Nilai default jika config tidak ditemukan
        }

        // Kirim nilai theBoys ke view
        return view('homepage', ['theBoys' => $theBoys]);
    }
}
