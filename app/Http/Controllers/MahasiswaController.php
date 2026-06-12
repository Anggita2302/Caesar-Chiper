<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
     // Menampilkan seluruh data mahasiswa
    public function index()
    {
        $data = Mahasiswa::getAll();
        // return $data;
        return view('mahasiswa.index', compact('data'));
    }

    // Menampilkan detail mahasiswa berdasarkan ID
    public function detail($id)
    {
        $data = Mahasiswa::getById($id);
        return $data;
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        Mahasiswa::insertDataMahasiswa([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'prodi' => $request->prodi
        ]);

        return redirect('/mahasiswa');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $mahasiswa->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'prodi' => $request->prodi
        ]);

        return redirect('/mahasiswa');
    }
}
