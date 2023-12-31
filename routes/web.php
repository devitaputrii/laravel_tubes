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

Route::resource('/', HomeController::class);
Route::redirect('/home', '/');

Route::resource('/galeri', GaleriController::class);
Route::resource('/komplain', KomplainController::class);
Route::resource('/daftar-harga', DaftarHargaController::class);
Route::resource('/ulasan', UlasanController::class);
Route::resource('/pengaturan', PengaturanController::class);


//Tambah
Route::post('/tambah-proses', 'ProsesController@store')->name('tambah-proses');
Route::post('/tambah-layanan', 'LayananController@store')->name('tambah-layanan');
Route::post('/tambah-galeri', 'GaleriController@store')->name('tambah-galeri');
Route::post('/tambah-kelompok-daftar-harga', 'DaftarHargaController@storeKelompok')->name('tambah-kelompok-daftar-harga');
Route::post('/tambah-daftar-harga/{kelompok}', 'DaftarHargaController@store')->name('tambah-daftar-harga');
Route::post('/tambah-ulasan', 'UlasanController@store')->name('tambah-ulasan');
Route::post('/tambah-komplain', 'KomplainController@store')->name('tambah-komplain');

//Update
Route::post('/update-user/{id}', 'UserController@update')->name('update-user');
Route::post('/update-banner/{id}', 'HomeController@update')->name('update-banner');
Route::post('/update-proses/{id}', 'ProsesController@update')->name('update-proses');
Route::post('/update-proses-tema', 'ProsesController@updateTema')->name('update-proses-tema');
Route::post('/update-layanan/{id}', 'LayananController@update')->name('update-layanan');
Route::post('/update-layanan-tema', 'LayananController@updateTema')->name('update-layanan-tema');
Route::post('/update-kontak/{id}', 'KontakController@update')->name('update-kontak');
Route::post('/update-tentang/{id}', 'TentangKamiController@update')->name('update-tentang');
Route::post('/update-galeri/{id}', 'GaleriController@update')->name('update-galeri');
Route::post('/update-kelompok-daftar-harga/{kelompok}', 'DaftarHargaController@updateKelompok')->name('update-kelompok-daftar-harga');
Route::post('/update-daftar-harga/{id}', 'DaftarHargaController@update')->name('update-daftar-harga');
Route::post('/update-ulasan/{id}', 'UlasanController@update')->name('update-ulasan');
Route::post('/update-komplain/{id}', 'KomplainController@update')->name('update-komplain');

//Delete
Route::delete('/soft-delete-user/{id}', 'UserController@softDelete')->name('soft-delete-user');
Route::delete('/soft-delete-proses/{id}', 'ProsesController@softDelete')->name('soft-delete-proses');
Route::delete('/soft-delete-layanan/{id}', 'LayananController@softDelete')->name('soft-delete-layanan');
Route::delete('/soft-delete-galeri/{id}', 'GaleriController@softDelete')->name('soft-delete-galeri');
Route::delete('/soft-delete-daftar-harga/{id}', 'DaftarHargaController@softDelete')->name('soft-delete-daftar-harga');
Route::delete('/soft-delete-daftar-harga-kelompok/{kelompok}', 'DaftarHargaController@softDeleteKelompok')->name('soft-delete-daftar-harga-kelompok');
Route::delete('/soft-delete-ulasan/{id}', 'UlasanController@softDelete')->name('soft-delete-ulasan');
Route::delete('/soft-delete-komplain/{id}', 'KomplainController@softDelete')->name('soft-delete-komplain');


//Delete


// Auth::routes();
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
