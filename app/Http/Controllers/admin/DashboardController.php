<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Dashboard;
use App\Models\Achievement;
use App\Models\News;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    // Mengambil Total Data Achievement
    public function index()
    {
        $totalAchievement = Achievement::count();
        $totalNews = News::count();
        $totalSubject = Subject::count();

        // Kirim data ke view
        return view('pages.admin.dashboard.index', compact('totalAchievement', 'totalNews', 'totalSubject'));
    }
}

