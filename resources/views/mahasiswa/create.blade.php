<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <body>
        <form method="POST" action="/mahasiswa">
            @csrf
            <input type="text" name="nama" placeholder="Nama">
            <input type="text" name="nim" placeholder="NIM">
            <input type="text" name="prodi" placeholder="Program Studi">

            <button type="submit">
                Simpan
            </button>
        </form>
    </body>
</html>
