<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('pages.landing.home');
    }

    public function achievement()
    {
        return view('pages.landing.achievement');
    }

    //
}
