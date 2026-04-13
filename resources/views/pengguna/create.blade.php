<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pengguna</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #cce5ff, #e6f2ff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            width: 300px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #007bff;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
            color: #333;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            margin-top: 15px;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2>Tambah Pengguna</h2>

        <form action="/pengguna/store" method="POST">
            @csrf

            <label>Email</label>
            <input type="text" name="email">

            <label>Password</label>
            <input type="text" name="password">

            <button type="submit">Simpan</button>
        </form>
    </div>

</body>
</html>