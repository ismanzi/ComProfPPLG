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

    public function staffview()
    {
        return view('pages.admin.staff.view');
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

    public function alumniview()
    {
        return view('pages.admin.alumni.view');
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

    public function subjectview()
    {
        return view('pages.admin.subject.view');
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

    public function projectview()
    {
        return view('pages.admin.projek.view');
    }

    public function achievementview()
    {
        return view('pages.admin.achievement.view');
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

    public function newsview()
    {
        return view('pages.admin.news.view');
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

    public function commentview()
    {
        return view('pages.admin.comment.view');
    }

}
