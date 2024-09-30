<?php

use App\Http\Controllers\admin\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\PagesController;
use App\Http\Controllers\PageController;

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
    return view('pages.admin.dashboard.index');
});
// Route::get('/welcome', function () {
//     return view('welcome');
// });
Route::get('/login', function () {
    return view('login');
});

// Dashboard Routes
Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('pages.admin.dashboard.index');

// Staff Routes
Route::prefix('staff')->name('pages.admin.staff')->group(function () {
    Route::get('/', [PagesController::class, 'staff'])->name('index');
    Route::get('/create', [PagesController::class, 'staffcreate'])->name('create');
    Route::get('/edit', [PagesController::class, 'staffedit'])->name('edit');
});

// Configuration Routes
Route::prefix('konfig')->name('pages.admin.konfig')->group(function () {
    Route::get('/', [PagesController::class, 'konfig'])->name('index');
    Route::get('/edit', [PagesController::class, 'konfigedit'])->name('edit');
});

// Alumni Routes
Route::prefix('alumni')->name('pages.admin.alumni')->group(function () {
    Route::get('/', [PagesController::class, 'alumni'])->name('index');
    Route::get('/create', [PagesController::class, 'alumnicreate'])->name('create');
    Route::get('/edit', [PagesController::class, 'alumniedit'])->name('edit');
});

// Subject Routes
Route::prefix('subject')->name('pages.admin.subject')->group(function () {
    Route::get('/', [PagesController::class, 'subject'])->name('index');
    Route::get('/create', [PagesController::class, 'subjectcreate'])->name('create');
    Route::get('/edit', [PagesController::class, 'subjectedit'])->name('edit');
});

// Project Routes
Route::prefix('projek')->name('pages.admin.projek')->group(function () {
    Route::get('/', [PagesController::class, 'projek'])->name('index');
    Route::get('/create', [PagesController::class, 'projekcreate'])->name('create');
    Route::get('/edit', [PagesController::class, 'projekedit'])->name('edit');
});

// Achievement Routes
Route::prefix('achievement')->name('pages.admin.achievement')->group(function () {
    Route::get('/', [PagesController::class, 'achievement'])->name('index');
    Route::get('/create', [PagesController::class, 'achievementcreate'])->name('create');
    Route::get('/edit', [PagesController::class, 'achievementedit'])->name('edit');
});

// Comment Routes
Route::prefix('comment')->name('pages.admin.comment')->group(function () {
    Route::get('/', [PagesController::class, 'comment'])->name('index');
    Route::get('/create', [PagesController::class, 'commentcreate'])->name('create');
    Route::get('/edit', [PagesController::class, 'commentedit'])->name('edit');
});

// News Routes
Route::prefix('news')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('pages.admin.news.index');
    Route::get('/create', [NewsController::class, 'create'])->name('pages.admin.news.create');
    Route::post('/', [NewsController::class, 'store'])->name('news.store');
    Route::get('/{id}/view', [NewsController::class, 'view'])->name('pages.admin.news.view');
    Route::get('/{id}/edit', [NewsController::class, 'edit'])->name('pages.admin.news.edit');
    Route::put('/{id}', [NewsController::class, 'update'])->name('pages.admin.news.update');
    Route::delete('/{id}', [NewsController::class, 'destroy'])->name('news.destroy');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/welcome', function () {
    return view('welcome');
});
