<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\integrated_site_redir;
use App\Http\Controllers\PageLanding;
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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
    Route::get('/landing/{code}', [PageLanding::class, 'index'])->name('landing');
    Route::get('/landing/{code}/go2', [PageLanding::class, 'go2'])->name('landing.go2');
    Route::get('/landing/step2/{data}', [PageLanding::class, 'page2'])->name('landing.page2');
    



//last Route to handle link redirection
Route::get('/{code}', [integrated_site_redir::class, 'show']);

require __DIR__.'/auth.php';
