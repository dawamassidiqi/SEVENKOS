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

// landing page
Route::get('/', function () {
    return view(
        'landing-page.landing_page');
})->name('landing.page.home');

// kost
Route::get('/kost', function () {
    return view(
        'landing-page.kost');
})->name('daftar.kos');

// regis
Route::get('/regis', function () {
    return view(
        'landing-page.kost');
})->name('sevenkos.regis');

// login
Route::get('/login', function () {
    return view(
        'landing-page.kost');
})->name('sevenkos.login');


// route dummy
Route::get('/login', function () {
    return view(
        'landing-page.kost');
})->name('#');

// detail kos
Route::get('/detail_kos', function () {
    return view('landing-page.detail_kos');
})->name('detail-kos');
//  login
Route::get('/loginSevenkos', function () {
    return view('auth.login');
})->name('login');
