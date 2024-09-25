<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
Route::get('/konfig', [PagesController::class, 'konfig'])->name('pages.admin.konfig.index');
Route::get('/alumni', [PagesController::class, 'alumni'])->name('pages.admin.alumni.index');
Route::get('/subject', [PagesController::class, 'subject'])->name('pages.admin.subject.index');
Route::get('/projek', [PagesController::class, 'projek'])->name('pages.admin.projek.index');
Route::get('/achievement', [PagesController::class, 'achievement'])->name('pages.admin.achievement.index');
Route::get('/news', [PagesController::class, 'news'])->name('pages.admin.news.index');
Route::get('/comment', [PagesController::class, 'comment'])->name('pages.admin.comment.index');


Route::get('/login', function () {
    return view('login');
});
