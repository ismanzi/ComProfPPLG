<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard()
    {
        return view('pages.admin.dashboard.index');
    }

    public function staff()
    {
        return view('pages.admin.staff.index');
    }

    public function konfig()
    {
        return view('pages.admin.konfig.index');
    }

    public function alumni()
    {
        return view('pages.admin.alumni.index');
    }

    public function subject()
    {
        return view('pages.admin.subject.index');
    }

    public function projek()
    {
        return view('pages.admin.projek.index');
    }

    public function achievement()
    {
        return view('pages.admin.achievement.index');
    }

    public function createachievement()
    {
        return view('pages.admin.achievement.create');
    }

    public function news()
    {
        return view('pages.admin.news');
    }

    public function comment()
    {
        return view('pages.admin.comment');
    }
}
