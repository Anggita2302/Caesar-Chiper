<!DOCTYPE html>
<html>

<head>
    <title>Form</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>Form Mahasiswa</h1>
    <form method="POST" action="/mahasiswa">
        @csrf
        <input type="text" name="nama" placeholder="Nama">
        <input type="text" name="nim" placeholder="NIM">

        <button type="submit">
            Simpan
        </button>
    </form>
    <br>
    <br>
    <br>
    <a href="{{ route('dashboard') }}">
        Dashboard ini pake route
    </a>

    <br>

    <a href="/dashboard/form/halo-mahasiswa-sti">
        ini pake /dashboard
    </a>

</body>

</html>
