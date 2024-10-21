<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            // Jika user tidak login, redirect ke landing page untuk guest
            if (!Auth::check()) {
                return 'landing.home';
            }
        }
    }

    /**
     * Handle an incoming request.
     */
    public function handle($request, \Closure $next, ...$guards)
    {
        // Cek autentikasi terlebih dahulu
        if (Auth::check()) {
            // Jika user adalah admin, izinkan akses ke rute
            if (Auth::user()->level === 'admin') {
                return $next($request);
            }

            // Jika bukan admin, redirect ke landing page atau unauthorized
            return redirect('landing.home');
        }

        // Jika belum login, redirect ke halaman login atau landing page
        return redirect('landing.home');
    }
}
