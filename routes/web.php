<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.admin.index');
});

Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('pages.admin.dashboard.index');
Route::get('/staff', [PagesController::class, 'staff'])->name('pages.admin.staff.index');
Route::get('/configuration', [PagesController::class, 'konfig'])->name('pages.admin.konfig.index');
Route::get('/alumni', [PagesController::class, 'alumni'])->name('pages.admin.alumni.index');
Route::get('/subject', [PagesController::class, 'subject'])->name('pages.admin.subject.index');
Route::get('/project', [PagesController::class, 'projek'])->name('pages.admin.projek.index');
Route::get('/achievement', [PagesController::class, 'achievement'])->name('pages.admin.achievement.index');
Route::get('/achievement/create', [PagesController::class, 'createachievement'])->name('pages.admin.achievement.create');
Route::get('/subject/create', [PagesController::class, 'createsubject'])->name('pages.admin.subject.create');
Route::get('/project/create', [PagesController::class, 'createprojek'])->name('pages.admin.projek.create');
Route::get('/staff/create', [PagesController::class, 'createstaff'])->name('pages.admin.staff.create');
Route::get('/comment/create', [PagesController::class, 'createcomment'])->name('pages.admin.comment.create');
Route::get('/news/create', [PagesController::class, 'createnews'])->name('pages.admin.news.create');
Route::get('/alumni/create', [PagesController::class, 'createalumni'])->name('pages.admin.alumni.create');


Route::get('/news', [PagesController::class, 'news'])->name('pages.admin.news.index');
Route::get('/comment', [PagesController::class, 'comment'])->name('pages.admin.comment.index');


Route::get('/login', function () {
    return view('login');
});

Route::get('/welcome', function () {
    return view('welcome');
});
