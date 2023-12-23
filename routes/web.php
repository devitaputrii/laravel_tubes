<?php

use App\Http\Controllers\UlasanController;
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
Route::get('/ ', function () {
    return view('page.home');
});

Route::get('/home', function () {
    return view('page.home');
});

Route::get('/galeri', function () {
    return view('page.galeri');
});

Route::get('/keluhan', function () {
    return view('page.keluhan');
});

Route::get('/ulasan', [UlasanController::class, 'index'])->name('ulasan.index');

Route::get('/ulasan/create', [UlasanController::class, 'create'])->name('ulasan.create');
Route::post('/ulasan/store', [UlasanController::class, 'store'])->name('ulasan.store');