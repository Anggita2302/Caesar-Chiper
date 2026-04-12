<h2>Edit Pengguna</h2>

<form action="/pengguna/update/{{ $pengguna->id_pengguna }}" method="POST">
    @csrf
    Email: <input type="text" name="email" value="{{ $pengguna->email }}"><br>
    Password: <input type="text" name="password" value="{{ $pengguna->password }}"><br>
    <button type="submit">Update</button>
</form>