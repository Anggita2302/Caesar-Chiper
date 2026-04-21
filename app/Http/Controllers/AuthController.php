<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class AuthController extends Controller
{
        public function landing()
    {
        return view('landing');
    }

    public function login()
    {
        return view('login');
    }

    public function loginProses(Request $request)
{
    if ($request->email == 'admin@gmail.com' && $request->password == '123') {
        session(['login' => true]);
        return redirect('/pengguna');
    }

    return back()->with('error', 'Email atau password salah');
}

    public function logout()
    {
        session()->flush(); // hapus semua session
        return redirect('/login');

    }

}
