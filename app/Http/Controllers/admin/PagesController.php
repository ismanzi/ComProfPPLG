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
    public function createstaff()
    {
        return view('pages.admin.staff.create');
    }


    public function konfig()
    {
        return view('pages.admin.konfig.index');
    }
    public function createkonfig()
    {
        return view('pages.admin.konfig.create');
    }

    public function alumni()
    {
        return view('pages.admin.alumni.index');
    }
    public function createalumni()
    {
        return view('pages.admin.alumni.create');
    }


    public function subject()
    {
        return view('pages.admin.subject.index');
    }
    public function createsubject()
    {
        return view('pages.admin.subject.create');
    }

    public function projek()
    {
        return view('pages.admin.projek.index');
    }
    public function createprojek()
    {
        return view('pages.admin.projek.create');
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
        return view('pages.admin.news.index');
    }
    public function createnews()
    {
        return view('pages.admin.news.create');
    }


    public function comment()
    {
        return view('pages.admin.comment.index');
    }
    public function createcomment()
    {
        return view('pages.admin.comment.create');
    }

}
