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
    return view('welcome');
});

use App\Http\Controllers\EnkripsiController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/landing', [LandingController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/dashboard', function () {

    // cek apakah sudah login
    if (!session('login')) {
        return redirect('/login');
    }

    return view('dashboard');
});

Route::get('/logout', function () {
    session()->forget('login');
    return redirect('/login');
});

Route::get('/', [EnkripsiController::class, 'index']);
Route::post('/hasil', [EnkripsiController::class, 'hasil'])->name('hasil');
