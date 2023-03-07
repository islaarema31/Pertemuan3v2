<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.master');
});

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::prefix('profil')->group(function () {
    Route::get('/muhammad-islahuddin', [App\Http\Controllers\ProfilController::class, 'isla'])->name('isla');
    Route::get('/zhubair-abhel', [App\Http\Controllers\ProfilController::class, 'abhel'])->name('abhel');
});

Route::get('/pengalaman', [App\Http\Controllers\PengalamanController::class, 'pengalaman'])->name('pengalaman');
