<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\pemeriksaanController;
use App\Http\Controllers\pendaftaranController;
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

Route::get('/', [authController::class, 'index'])->name('login.index');
Route::post('/proseslogin', [authController::class, 'prosesLogin'])->name('prosesLogin');
Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard.index');
Route::post('/logout', [authController::class, 'logout'])->name('logout');
Route::get('/pendaftaran', [pendaftaranController::class, 'index'])->name('pendaftaran.index');
Route::get('/pemeriksaan', [pemeriksaanController::class, 'index'])->name('pemeriksaan.index');

