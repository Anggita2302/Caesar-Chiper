<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
     // Menampilkan seluruh data mahasiswa
    public function index()
    {
        return Mahasiswa::getAll();
    }

    // Menampilkan detail mahasiswa berdasarkan ID
    public function detail($id)
    {
        return Mahasiswa::getById($id);
    }
}
