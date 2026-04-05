<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body{
            background: linear-gradient(to bottom, #92acff, #6aa5ff); 
            min-height:100vh;
            font-family: 'Segoe UI', sans-serif;
        }

        /* Sidebar */
        .sidebar{
            width:240px;
            height:100vh;
            position:fixed;
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            color:white;
            padding:20px;
        }

        .sidebar a{
            display:block;
            color:white;
            text-decoration:none;
            margin:10px 0;
            padding:10px;
            border-radius:8px;
            transition:0.3s;
        }

        .sidebar a:hover{
            background:rgba(255,255,255,0.2);
        }

        /* Main */
        .main{
            margin-left:260px;
            padding:30px;
            color:#333;
        }

        /* Card modern */
        .card-box{
            border-radius:15px;
            padding:20px;
            backdrop-filter: blur(10px);
            background: rgba(255,255,255,0.15);
            transition:0.3s;
        }

        .card-box:hover{
            transform: translateY(-5px);
            box-shadow:0 10px 25px rgba(0,0,0,0.2);
        }

        /* Welcome */
        .welcome{
            margin-bottom:30px;
        }

        .welcome h2{
            font-weight:bold;
        }

    </style>
</head>

<body>

<!-- Sidebar -->
<div class="sidebar">
    <h4>🎓 Kampus</h4>

    <a href="#"><i class="bi bi-house"></i> Dashboard</a>
    <a href="#"><i class="bi bi-person"></i> Profil</a>
    <a href="#"><i class="bi bi-calendar"></i> Jadwal</a>
    <a href="#"><i class="bi bi-book"></i> Mata Kuliah</a>

    <hr style="border-color:white">

    <a href="/logout"><i class="bi bi-box-arrow-right"></i> Logout</a>
</div>

<!-- Main -->
<div class="main">

    <!-- Welcome -->
    <div class="welcome">
        <h2>👋 Selamat Datang, Mahasiswa Baru</h2>
        <p>Semoga harimu menyenangkan dan penuh semangat belajar 🚀</p>
    </div>

    <!-- Cards -->
    <div class="row g-4">

        <div class="col-md-3">
            <div class="card-box text-center">
                <i class="bi bi-book fs-1"></i>
                <h5 class="mt-2">Mata Kuliah</h5>
                <h3>6</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-box text-center">
                <i class="bi bi-calendar-check fs-1"></i>
                <h5 class="mt-2">Jadwal Hari Ini</h5>
                <h3>2</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-box text-center">
                <i class="bi bi-journal-text fs-1"></i>
                <h5 class="mt-2">Tugas</h5>
                <h3>4</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-box text-center">
                <i class="bi bi-bell fs-1"></i>
                <h5 class="mt-2">Notifikasi</h5>
                <h3>3</h3>
            </div>
        </div>

    </div>

    <!-- Info Box -->
    <div class="card-box mt-4">
        <h4>🎉 Info Kampus</h4>
        <p>
            Selamat datang di sistem informasi kampus.  
            Jangan lupa cek jadwal dan tugas kamu setiap hari ya!
        </p>
    </div>

</div>

</body>
</html>