<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Dashboard
    public function dashboard()
    {
        return view('pages.admin.dashboard.index');
    }

    // Staff
    public function staff()
    {
        return view('pages.admin.staff.index');
    }

    public function staffcreate()
    {
        return view('pages.admin.staff.create');
    }

    public function staffedit()
    {
        return view('pages.admin.staff.edit');
    }

    //  Configuration
    public function konfig()
    {
        return view('pages.admin.konfig.index');
    }

    public function konfigedit()
    {
        return view('pages.admin.konfig.edit');
    }


    // Alumni
    public function alumni()
    {
        return view('pages.admin.alumni.index');
    }

    public function alumnicreate()
    {
        return view('pages.admin.alumni.create');
    }

    public function alumniedit()
    {
        return view('pages.admin.alumni.edit');
    }

    // Subject
    public function subject()
    {
        return view('pages.admin.subject.index');
    }

    public function subjectcreate()
    {
        return view('pages.admin.subject.create');
    }

    public function subjectedit()
    {
        return view('pages.admin.subject.edit');
    }

    // Project
    public function projek()
    {
        return view('pages.admin.projek.index');
    }

    public function projekcreate()
    {
        return view('pages.admin.projek.create');
    }

    public function projekedit()
    {
        return view('pages.admin.projek.edit');
    }

    // Achievement
    public function achievement()
    {
        return view('pages.admin.achievement.index');
    }

    public function achievementcreate()
    {
        return view('pages.admin.achievement.create');
    }

    public function achievementedit()
    {
        return view('pages.admin.achievement.edit');
    }

    // News
    public function news()
    {
        return view('pages.admin.news.index');
    }

    public function newscreate()
    {
        return view('pages.admin.news.create');
    }

    public function newsedit()
    {
        return view('pages.admin.news.edit');
    }

    // Comment
    public function comment()
    {
        return view('pages.admin.comment.index');
    }

    public function commentcreate()
    {
        return view('pages.admin.comment.create');
    }

    public function commentedit()
    {
        return view('pages.admin.comment.edit');
    }

}
