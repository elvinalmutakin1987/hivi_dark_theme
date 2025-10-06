<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KebijakanController;
use App\Http\Controllers\KemitraanController;
use App\Http\Controllers\KetentuanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SewalapanganController;
use App\Http\Controllers\TentangController;
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

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.redirectToGoole');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback'])->name('login.handleGoogleCallBack');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');
Route::get('/kebijakan', [KebijakanController::class, 'index'])->name('kebijakan');
Route::get('/ketentuan', [KetentuanController::class, 'index'])->name('ketentuan');
Route::get('/kemitraan', [KemitraanController::class, 'index'])->name('kemitraan');
Route::get('/kemitraan/daftar', [KemitraanController::class, 'daftar'])->name('kemitraan.daftar');
Route::post('/kemitraan/daftar', [KemitraanController::class, 'simpan_daftar'])->name('kemitraan.simpan_pendaftaran');

Route::get('/sewa-lapangan', [SewalapanganController::class, 'index'])->name('sewalapangan');
