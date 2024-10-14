<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreAuthRequest;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {

        
        $request->validate([
            'username' => "required",
            'password' => "required"
        ]);

        $data = [
            'username' => $request -> username,
            'password' => $request-> password
        ];

        if (Auth::attempt($data)) {
            return redirect()-> route('dashboard.admin');
        } else{
            return redirect()->route('auth.login') -> with('failed', 'email atau password salah');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.login')
            ->withSuccess('Anda telah keluar dari sistem');
    }
}
