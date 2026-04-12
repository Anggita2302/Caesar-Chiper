<!DOCTYPE html>
<html>
<head>
    <title>Data Pengguna</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to bottom, #dbeafe, #eff6ff);
        }

        .card {
            border-radius: 15px;
        }

        .btn-custom {
            border-radius: 10px;
        }
    </style>
</head>

<body>

<div class="container mt-5">

    <div class="card shadow p-4">
        
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="fw-bold">📊 Data Pengguna</h3>
            <div>
                <a href="/pengguna/create" class="btn btn-primary btn-custom">+ Tambah</a>
                <a href="/logout" class="btn btn-danger btn-custom">Logout</a>
            </div>
        </div>

        <!-- Table -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle text-center">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($pengguna as $item)
                    <tr>
                        <td>{{ $item->id_pengguna }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->password }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->updated_at }}</td>
                        <td>
                            <a href="/pengguna/edit/{{ $item->id_pengguna }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/pengguna/delete/{{ $item->id_pengguna }}" 
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Yakin ingin menghapus?')">
                               Hapus
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>

</div>

</body>
</html>