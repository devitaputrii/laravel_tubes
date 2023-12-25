<?php

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

Route::get('/', function () {
    return view('page.home');
});

Route::get('/galeri', function () {
    return view('page.galeri');
});

Route::get('/daftar_harga', function () {
    return view('daftar_harga');
});

Route::get('/keluhan', function () {
    return view('page.keluhan');
});

// Route::get('/login', function () {
//     return view('page.login');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
