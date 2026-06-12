<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// // halaman landing
// Route::get('/landing', [AuthController::class, 'landing']);

// // halaman cipher
// use App\Http\Controllers\EnkripsiController;
// Route::get('/', [EnkripsiController::class, 'index']);
// Route::post('/hasil', [EnkripsiController::class, 'hasil'])->name('hasil');

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

use App\Http\Controllers\BukuController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;

Route::get('/buku', [BukuController::class, 'index']);

// halaman logout
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

// MATERI BARU FORM DAN CSRF
Route::get('/form', function () {
    return view('form');
});
Route::post('/form', function (Request $request) {
    $nama = $request->input('nama');
    return "Nama yang diinput: " . $nama;
});

// lebih disarankan, tapi nama harus unik
Route::get('/dashboard', function () {
 return "Dashboard";
})->name('dashboard');

// Route::get('/mahasiswa/{id}', function ($id) {
// return $id;
// });

// Route::get('/mahasiswa', function () {
// return 'Daftar Mahasiswa';
// });

// Route menampilkan seluruh mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
// Route detail mahasiswa berdasarkan ID
Route::get('/mahasiswa/{detail/id}', [MahasiswaController::class, 'detail']);
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']);
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update']);


// Menyimpan data mahasiswa baru
// Route::post('/mahasiswa', function (Request $request) {
// // Ambil data dari form
// $nim  = $request->input('nim');
// $nama = $request->input('nama');
// return 'Data disimpan: ' . $nama;
// });

// // Memperbarui seluruh data mahasiswa berdasarkan ID
// Route::put('/mahasiswa/{id}', function (Request $request, $id) {
// $nim   = $request->input('nim');
// $nama  = $request->input('nama');
// $prodi = $request->input('prodi');
// return 'Data ID ' . $id . ' diperbarui';
// });
// // Dengan controller
// Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update']);

// // Memperbarui hanya nama mahasiswa
// Route::patch('/mahasiswa/{id}', function (Request $request, $id) {
// $nama = $request->input('nama');
// return 'Nama ID ' . $id . ' diperbarui menjadi ' . $nama;
// });
// // Dengan controller
// Route::patch('/mahasiswa/{id}', [MahasiswaController::class, 'patch']);

// // Menghapus data mahasiswa berdasarkan ID
// Route::delete('/mahasiswa/{id}', function ($id) {
//     return 'Data ID ' . $id . ' berhasil dihapus';
// });

// // Dengan controller
// Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy']);

// // match() — mendefinisikan beberapa method sekaligus
// Route::match(['get', 'post'], '/form', function () {
//     return 'Diakses via GET atau POST';
// });

// // any() — menerima semua HTTP method
// Route::any('/semua', function () {
//     return 'Menerima method apapun';
// });

// // Membuat 7 route CRUD sekaligus
// Route::resource('mahasiswa', MahasiswaController::class);

// MATERI MINGGU DEPAN
// TODO: Kelas 4 SA - 7. Praktikum Controller

