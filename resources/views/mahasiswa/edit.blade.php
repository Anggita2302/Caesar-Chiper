<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>
<body>

    <h1>Edit Data Mahasiswa</h1>

    <form method="POST" action="/mahasiswa/{{ $mahasiswa->id }}">
        @csrf
        @method('PUT')

        <input
            type="text"
            name="nama"
            value="{{ $mahasiswa->nama }}"
            placeholder="Nama"
        >

        <input
            type="text"
            name="nim"
            value="{{ $mahasiswa->nim }}"
            placeholder="NIM"
        >

        <input
            type="text"
            name="prodi"
            value="{{ $mahasiswa->prodi }}"
            placeholder="Program Studi"
        >

        <button type="submit">
            Update
        </button>
    </form>

    <br>

    <a href="/mahasiswa">Kembali</a>

</body>
</html>
