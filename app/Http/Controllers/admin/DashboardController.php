<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\Comment;
use App\Models\Dashboard;
use App\Models\Achievement;
use App\Models\News;
use App\Models\Project;
use App\Models\Staff;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    // Mengambil Total Data Achievement
    public function index()
    {
        $totalAchievement = Achievement::count();
        $totalNews = News::count();
        $totalSubject = Subject::count();
        $totalAlumni = Alumni::count();
        $totalStaff = Staff::count();
        $totalProject = Project::count();
        $totalComment = Comment::count();

        // Kirim data ke view
        return view('pages.admin.dashboard.index', compact('totalAchievement', 'totalNews', 'totalSubject', 'totalAlumni', 'totalStaff', 'totalProject', 'totalComment'));
    }

    public function admin(){
        if (Auth::check()) {
            return view('pages.admin.dashboard.index');
        }
        return redirect()->route('auth.login')->withErrors(['notif' => 'Login dulu bang'])->onlyInput('username');
    }
}
