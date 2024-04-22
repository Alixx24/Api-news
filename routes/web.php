<?php

use App\Http\Controllers\dashboard\EditNewsController;
use App\Http\Controllers\HomeController;

use App\Livewire\Dashboard\News;
use App\Livewire\Home\AllNewsGuardian;
use App\Livewire\Home\AllSort;
use App\Livewire\Home\Detail\FullNews;
use Illuminate\Support\Facades\Route;

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


//home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/all-news-guardian', AllNewsGuardian::class)->name('home.guardians');
Route::get('/all-news', AllSort::class)->name('home.all-news');
Route::get('/news{more}', FullNews::class)->name('home.detail.full-news');
Route::get('/news-more', FullNews::class)->name('home.detail.more-news');



//panel
Route::prefix('panel')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
        Route::get('/news', News::class)->name('dashboard');
        Route::get('/user/edit/{article}', [EditNewsController::class, 'edit'])->name('panel.home.users.edit');
        Route::put('/user/update/{article}', [EditNewsController::class, 'update'])->name('panel.news.update'); 
});
