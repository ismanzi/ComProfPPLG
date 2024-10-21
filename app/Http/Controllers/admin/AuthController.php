<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function login()
    {
        return view('auth.login');
    }

    // Proses autentikasi
    public function authenticate(Request $request)
    {
        // Validasi input form
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // Data untuk login (gunakan username dan password)
        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        // Mencoba untuk login
        if (Auth::attempt($credentials)) {
            // Jika berhasil, redirect ke dashboard admin
            return redirect()->route('dashboard.admin');
        } else {
            // Jika gagal, kembali ke halaman login atau landing dengan pesan error
            return redirect()->route('landing.home')->with('failed', 'Username atau password salah.');
        }
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.login')->withSuccess('Anda telah keluar dari sistem.');
    }
}
