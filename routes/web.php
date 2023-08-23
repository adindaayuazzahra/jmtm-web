<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [Homecontroller::class, 'home'])->name('home');
Route::get('/bobcat', [Homecontroller::class, 'bobcat'])->name('bobcat');
Route::get('/profil-perusahaan', [Homecontroller::class, 'profil'])->name('profil');
Route::get('/pengadaan', [Homecontroller::class, 'pengadaan'])->name('pengadaan');
Route::get('/berita', [Homecontroller::class, 'berita'])->name('berita');
Route::get('/kontak', [Homecontroller::class, 'kontak'])->name('kontak');
Route::get('/disclaimer', [Homecontroller::class, 'disclaimer'])->name('disclaimer');
Route::get('/layanan/general-contractor', [Homecontroller::class, 'general_contractor'])->name('layanan.general');
Route::get('/layanan/Kontrak-manajemen', [Homecontroller::class, 'kontrak_manajemen'])->name('layanan.kontrak');
Route::get('/layanan/jasa-survey-pemeliharaan', [Homecontroller::class, 'jasa_survey'])->name('layanan.survey');
Route::get('/layanan/jasa-sewa-alat-berat', [Homecontroller::class, 'jasa_sewa'])->name('layanan.sewa.he');
Route::get('/produk', [Homecontroller::class, 'produk'])->name('layanan.produk');



Route::get('/dewa', [AdminController::class, 'login'])->name('login');
Route::post('/dewa/login/do', [AdminController::class, 'loginDo'])->name('login.do');

Route::middleware(['auth'])->group(function(){
    Route::middleware(['auth.level:0'])->group(function(){
        Route::get('/admin', [AdminController::class, 'home'])->name('admin.home');
        Route::get('/admin/dirkom', [AdminController::class, 'dirkom'])->name('admin.dirkom');
    });

    Route::get('/logout/do', [AdminController::class, 'logoutDo'])->name('logout.do');
});


