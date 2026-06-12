<!DOCTYPE html>
<html>

<head>
    <title>Form</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>Form Mahasiswa</h1>

    <a href="/mahasiswa/create">Tambah Data Mahasiswa</a>
    {{-- <a href="{{ route('mahasiswa.create') }}">Tambah Data Mahasiswa</a> --}}

    <table>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
        </tr>
        @foreach ($data as $mhs)
        <tr>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->prodi }}</td>
            <td>
                <a href="/mahasiswa/{{ $mhs->id }}/edit">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>

</body>

</html>
