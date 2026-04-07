<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
    return view('welcome');
});

use App\Http\Controllers\EnkripsiController;
use App\Http\Controllers\LandingController;

Route::get('/landing', [AuthController::class, 'landing']);

// halaman login
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'loginProses']);

// halaman dashboard
Route::get('/dashboard', [AuthController::class, 'daftar_pengguna']);

// halaman daftar pengguna
// Route::get('/daftar_pengguna', [AuthController::class, 'daftar_pengguna']);

// halaman logout
Route::get('/logout', [AuthController::class, 'logout']);


Route::get('/', [EnkripsiController::class, 'index']);
Route::post('/hasil', [EnkripsiController::class, 'hasil'])->name('hasil');
