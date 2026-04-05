<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: linear-gradient(to bottom, #92acff, #6aa5ff); 
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            font-family: Arial, sans-serif;
        }

        .login-card{
            background:white;
            padding:40px;
            border-radius:12px;
            box-shadow:0 8px 20px #0044aa;
            width:350px;
        }

        .login-title{
            text-align:center;
            margin-bottom:25px;
        }

        .btn-login{
            width:100%;
        }
    </style>
</head>

<body>

<div class="login-card">

    <h3 class="login-title">Login</h3>

    <form method="POST" action="/login">
         @csrf

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Masukkan email">
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password">
        </div>

        <button class="btn btn-primary btn-login">Login</button>
    </form>

</div>

</body>
</html>