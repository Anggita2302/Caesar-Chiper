@extends('layouts.main')

@section('content')

<div class="container">

    <div class="header">
        <h2>Data Mahasiswa</h2>
        <a href="/mahasiswa/create" class="btn-tambah">
            + Tambah Mahasiswa
        </a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($data as $mhs)
            <tr>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->prodi }}</td>
                <td>
                    <a href="/mahasiswa/{{ $mhs->id }}/edit" class="btn-edit">
                        Edit
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
