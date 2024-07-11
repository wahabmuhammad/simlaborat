<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\dashboardController;
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

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});
