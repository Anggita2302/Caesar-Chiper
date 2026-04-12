<h2>Tambah Pengguna</h2>

<form action="/pengguna/store" method="POST">
    @csrf
    Email: <input type="text" name="email"><br>
    Password: <input type="text" name="password"><br>
    <button type="submit">Simpan</button>
</form>