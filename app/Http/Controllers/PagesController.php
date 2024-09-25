<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard(){
        return view('pages.admin.dashboard.index');
    }

    public function konfig(){
        return view('pages.admin.konfig.index');
    }
    public function staff(){
        return view('pages.admin.staff.index');
    }
    public function alumni(){
        return view('pages.admin.alumni.index');
    }
    public function subject(){
        return view('pages.admin.subject.index');
    }
    public function projek(){
        return view('pages.admin.projek.index');
    }
    public function achievement(){
        return view('pages.admin.achievement.index');
    }
    public function news(){
        return view('pages.admin.news.index');
    }
    public function comment(){
        return view('pages.admin.comment.index');
    }

}
