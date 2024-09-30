<?php

use App\Http\Controllers\admin\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\PagesController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\admin\AchievementController;


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

// Route::get('/welcome', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('pages.admin.dashboard.index');
});
Route::get('/login', function () {
    return view('login');
});

// Dashboard Routes
Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('pages.admin.dashboard.index');

// Configuration Routes
Route::prefix('konfig')->name('pages.admin.konfig')->group(function () {
    Route::get('/', [PagesController::class, 'konfig'])->name('index');
    Route::get('/edit', [PagesController::class, 'konfigedit'])->name('edit');
});

// Staff Routes
Route::prefix('staff')->name('pages.admin.staff')->group(function () {
    Route::get('/', [PagesController::class, 'staff'])->name('index');
    Route::get('/create', [PagesController::class, 'staffcreate'])->name('create');
    Route::get('/edit', [PagesController::class, 'staffedit'])->name('edit');
    Route::get('/view', [PagesController::class, 'staffview'])->name('view');
});

// Alumni Routes
Route::prefix('alumni')->name('pages.admin.alumni')->group(function () {
    Route::get('/', [PagesController::class, 'alumni'])->name('index');
    Route::get('/create', [PagesController::class, 'alumnicreate'])->name('create');
    Route::get('/edit', [PagesController::class, 'alumniedit'])->name('edit');
    Route::get('/view', [PagesController::class, 'alumniview'])->name('view');
});

// Subject Routes
Route::prefix('subject')->name('pages.admin.subject')->group(function () {
    Route::get('/', [PagesController::class, 'subject'])->name('index');
    Route::get('/create', [PagesController::class, 'subjectcreate'])->name('create');
    Route::get('/edit', [PagesController::class, 'subjectedit'])->name('edit');
    Route::get('/view', [PagesController::class, 'subjectview'])->name('view');
});

// Project Routes
Route::prefix('projek')->name('pages.admin.projek')->group(function () {
    Route::get('/', [PagesController::class, 'projek'])->name('index');
    Route::get('/create', [PagesController::class, 'projekcreate'])->name('create');
    Route::get('/edit', [PagesController::class, 'projekedit'])->name('edit');
    Route::get('/view', [PagesController::class, 'projekview'])->name('view');
});

// Achievement Routes
Route::prefix('achievement')->group(function () {
    Route::get('/', [AchievementController::class, 'index'])->name('pages.admin.achievement.index');
    Route::get('/create', [AchievementController::class, 'create'])->name('pages.admin.achievement.create');
    Route::post('/', [AchievementController::class, 'store'])->name('achievement.store');
    Route::get('/{id}/view', [AchievementController::class, 'view'])->name('pages.admin.achievement.view');
    Route::get('/{id}/edit', [AchievementController::class, 'edit'])->name('pages.admin.achievement.edit');
    Route::put('/{id}', [AchievementController::class, 'update'])->name('pages.admin.achievement.update');
    Route::delete('/{id}', [AchievementController::class, 'destroy'])->name('achievement.destroy');
});



// Comment Routes
Route::prefix('comment')->name('pages.admin.comment')->group(function () {
    Route::get('/', [PagesController::class, 'comment'])->name('index');
    Route::get('/create', [PagesController::class, 'commentcreate'])->name('create');
    Route::get('/edit', [PagesController::class, 'commentedit'])->name('edit');
    Route::get('/view', [PagesController::class, 'commentview'])->name('view');
});

// News Routes
Route::prefix('news')->name('pages.admin.news')->group(function () {
    Route::get('/', [PagesController::class, 'news'])->name('index');
    Route::get('/create', [PagesController::class, 'newscreate'])->name('create');
    Route::get('/edit', [PagesController::class, 'newsedit'])->name('edit');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/welcome', function () {
    return view('welcome');
});
