@extends('layouts.main')

@section('content')

<div class="container">

    <div class="form-card">

        <h2>Edit Data Mahasiswa</h2>

        <form method="POST" action="/mahasiswa/{{ $mahasiswa->id }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input
                    type="text"
                    name="nama"
                    value="{{ $mahasiswa->nama }}"
                    placeholder="Masukkan nama mahasiswa"
                >
            </div>

            <div class="form-group">
                <label>NIM</label>
                <input
                    type="text"
                    name="nim"
                    value="{{ $mahasiswa->nim }}"
                    placeholder="Masukkan NIM"
                >
            </div>

            <div class="form-group">
                <label>Program Studi</label>
                <input
                    type="text"
                    name="prodi"
                    value="{{ $mahasiswa->prodi }}"
                    placeholder="Masukkan program studi"
                >
            </div>

            <div class="button-group">
                <button type="submit" class="btn-update">
                    Update
                </button>

                <a href="/mahasiswa" class="btn-kembali">
                    Kembali
                </a>
            </div>

        </form>

    </div>

</div>

@endsection
