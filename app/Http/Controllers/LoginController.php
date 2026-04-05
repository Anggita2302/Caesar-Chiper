<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        // akun manual (hardcode)
        if ($email == 'admin@gmail.com' && $password == '354313') {
        
        // simpan status login ke session
        session(['login' => true]);

            return redirect('/dashboard');
        }

        return back()->with('error', 'Email atau password salah');
    }
}
