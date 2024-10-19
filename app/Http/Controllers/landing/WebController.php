<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebController extends Controller
{
    public function home()
    {
        return view('pages.landing.home');
    }

    public function achievement()
    {
        return view('pages.landing.achievement');
    }

    public function about()
    {
        return view('pages.landing.about');
    }
}
