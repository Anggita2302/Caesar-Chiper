@extends('layouts.main')

@section('content')

<div class="container">

    <div class="form-card">

        <h2>Tambah Data Mahasiswa</h2>

        <form method="POST" action="/mahasiswa">
            @csrf

            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input type="text" name="nama" placeholder="Masukkan nama mahasiswa">
            </div>

            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" placeholder="Masukkan NIM">
            </div>

            <div class="form-group">
                <label>Program Studi</label>
                <input type="text" name="prodi" placeholder="Masukkan program studi">
            </div>

            <div class="button-group">
                <button type="submit" class="btn-simpan">
                    Simpan
                </button>

                <a href="/mahasiswa" class="btn-kembali">
                    Kembali
                </a>
            </div>

        </form>

    </div>

</div>

@endsection
