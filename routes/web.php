<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\admin\PagesController;
use App\Http\Controllers\admin\{
    AchievementController,
    NewsController,
    SubjectController,
    AlumniController,
    DashboardController,
    CommentController,
};

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

Route::get('/', [DashboardController::class, 'index'])->name('pages.admin.dashboard.index');

Route::get('/login', function () {
    return view('login');
});

// Dashboard Routes
Route::get('/dashboard', [DashboardController::class, 'index'])->name('pages.admin.dashboard.index');


// Achievement Routes
Route::prefix('achievement')->group(function () {
    Route::get('/', [AchievementController::class, 'index'])->name('pages.admin.achievement.index');
    Route::get('/create', [AchievementController::class, 'create'])->name('pages.admin.achievement.create');
    Route::post('/', [AchievementController::class, 'store'])->name('achievement.store');
    Route::get('/{id}/view', [AchievementController::class, 'view'])->name('pages.admin.achievement.view');
    Route::get('/{id}/edit', [AchievementController::class, 'edit'])->name('pages.admin.achievement.edit');
    Route::put('/{id}', [AchievementController::class, 'update'])->name('achievement.update');
    Route::delete('/{id}', [AchievementController::class, 'destroy'])->name('achievement.destroy');
});

// News Routes
Route::prefix('news')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('pages.admin.news.index');
    Route::get('/create', [NewsController::class, 'create'])->name('pages.admin.news.create');
    Route::post('/', [NewsController::class, 'store'])->name('news.store');
    Route::get('/{id}/view', [NewsController::class, 'view'])->name('pages.admin.news.view');
    Route::get('/{id}/edit', [NewsController::class, 'edit'])->name('pages.admin.news.edit');
    Route::put('/{id}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('/{id}', [NewsController::class, 'destroy'])->name('news.destroy');
});

// Subject Routes
Route::prefix('subject')->group(function () {
    Route::get('/', [SubjectController::class, 'index'])->name('pages.admin.subject.index');
    Route::get('/create', [SubjectController::class, 'create'])->name('pages.admin.subject.create');
    Route::post('/', [SubjectController::class, 'store'])->name('subject.store');
    Route::get('/{id}/view', [SubjectController::class, 'view'])->name(('pages.admin.subject.view'));
    Route::get('/{id}/edit', [SubjectController::class, 'edit'])->name('pages.admin.subject.edit');
    Route::put('/{id}', [SubjectController::class, 'update'])->name('subject.update');
    Route::delete('/{id}', [SubjectController::class, 'destroy'])->name('subject.destroy');
});

// Alumni Routes
Route::prefix('alumni')->group(function () {
    Route::get('/', [AlumniController::class, 'index'])->name('alumni.index');
    Route::get('/create', [AlumniController::class, 'create'])->name('alumni.create');
    Route::post('/', [AlumniController::class, 'store'])->name('alumni.store');
    Route::get('/{id}/view', [AlumniController::class, 'show'])->name('alumni.view');
    Route::get('/{id}/edit', [AlumniController::class, 'edit'])->name('alumni.edit');
    Route::put('/{id}', [AlumniController::class, 'update'])->name('alumni.update');
    Route::delete('/{id}', [AlumniController::class, 'destroy'])->name('alumni.destroy');
});

Route::prefix('comment')->group(function () {
    Route::get('/', [CommentController::class, 'index'])->name('pages.admin.comment.index');
    Route::get('/create', [CommentController::class, 'create'])->name('pages.admin.comment.create');
    Route::post('/', [CommentController::class, 'store'])->name('comment.store');
    Route::get('/{id}/view', [CommentController::class, 'view'])->name('pages.admin.comment.view');
    Route::delete('comment/{id}', [CommentController::class, 'destroy'])->name('comment.destroy');
});
