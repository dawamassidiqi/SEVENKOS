<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\authController;
use App\Http\Controllers\KosController;
use App\Http\Controllers\landingPageController;
use Illuminate\Auth\Events\Login;

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
// Route::get('/', function () {
//     return view('landing-page.landing_page');
// })->name('landing.page.home');

Route::get('/',[landingPageController::class, 'index'])->name('landin-page.home');

// kost
// Route::get('/kost', function () {
//     return view('landing-page.kost');
// })->name('daftar.kos');

Route::get('/kost',[KosController::class, 'index'])->name('daftar.kos');

// regis
Route::get('/regis', function () {
    return view('landing-page.kost');
})->name('sevenkos.regis');

// login
// Route::get('/login', function () {
//     return view('landing-page.kost');
// })->name('sevenkos.login');


// route dummy
// Route::get('/dummy', function () {
//     return view('landing-page.landing_page');
// })->name('#');

// detail kos
Route::get('/detail-kos', function () {
    return view('landing-page.detail_kos');
})->name('detail-kos');
//  login
// Route::ge+t('/login', function () {
//     return view('auth.login');
// })->name('login');

Route::get('/login',[authController::class, 'index'])->name('login');
Route::post('/login',[authController::class, 'loginPengguna'])->name('login-controller');
Route::post('prosesregister',[authController::class, 'register']);
Route::view('/register', 'auth.register')->name('register'); 
Route::view('/selengkapnya', 'landing-page.selengkapnya')->name('#'); 

Route::view('/saturan', 'landing-page.saturan')->name('saturan'); 

// // Route::get('/kost',[KosController::class, 'index'])->name('daftar.kos');
// Route::view('/universitasindonesia', 'landing-page.ui')->name('UI');
// Route::view('/universitasbrawijaya', 'landing-page.bw')->name('brwjy');  
// Route::view('/universitasgajahmada', 'landing-page.ugm')->name('ugm');  
// Route::post('/selengkapnya', [authController::class, 'tampilselengkpanya'])->name('#');
