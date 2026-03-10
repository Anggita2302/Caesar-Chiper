<!DOCTYPE html>
<html>
<head>
    <title>Enkripsi Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

<div class="container mt-5">
    <div class="card p-4 bg-secondary">
        <h2 class="text-center">Proses Enkripsi Laravel</h2>

        <form method="POST" action="{{ route('hasil') }}">
            @csrf
            <div class="mb-3">
                <label>Masukkan Teks:</label>
                <input type="text" name="text" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Masukkan Kunci (0-25):</label>
                <input type="number" name="key" class="form-control" min="0" max="25" required>
            </div>
            <button type="submit" class="btn btn-warning">Enkripsi</button>
        </form>


        @isset($encrypted)
            <hr>
            <h5>Teks Asli:</h5>
            <p>{{ $original }}</p>

            <h5>Hasil Enkripsi:</h5>
            <textarea class="form-control" rows="3">{{ $encrypted }}</textarea>
        @endisset
    </div>
</div>

</body>
</html>