<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// halaman landing
Route::get('/landing', [AuthController::class, 'landing']);

// halaman cipher
use App\Http\Controllers\EnkripsiController;
Route::get('/', [EnkripsiController::class, 'index']);
Route::post('/hasil', [EnkripsiController::class, 'hasil'])->name('hasil');

// halaman login
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'loginProses']);

// halaman dashboard
use App\Http\Controllers\DashboardController;
Route::get('/dashboard', [DashboardController::class, 'index']);

// halaman daftar pengguna
use App\Http\Controllers\PenggunaController;
Route::get('/pengguna', [PenggunaController::class, 'index']);
Route::get('/pengguna/create', [PenggunaController::class, 'create']);
Route::post('/pengguna/store', [PenggunaController::class, 'store']);
Route::get('/pengguna/edit/{id_pengguna}', [PenggunaController::class, 'edit']);
Route::post('/pengguna/update/{id_pengguna}', [PenggunaController::class, 'update']);
Route::get('/pengguna/delete/{id_pengguna}', [PenggunaController::class, 'destroy']);

// halaman logout
Route::get('/logout', [AuthController::class, 'logout']);


