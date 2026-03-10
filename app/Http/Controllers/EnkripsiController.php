<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class EnkripsiController extends Controller
{
    public function index()
    {
        return view('enkripsi');
    }
    public function landing()
    {
        return view('landing');
    }

    public function login()
    {
        return view('login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function hasil(Request $request)
    {
        $request->validate([
            'text' => 'required',
            'key' => 'required|integer|min:0|max:25'
        ]);

        $text = $request->text;
    $key = $request->key % 26; // memastikan tetap dalam 0–25
    $result = "";

for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];

        if (ctype_alpha($char)) {

            $ascii = ord($char);

            if (ctype_upper($char)) {
                // Huruf besar
                $result .= chr((($ascii - 65 + $key) % 26) + 65);
            } else {
                // Huruf kecil
                $result .= chr((($ascii - 97 + $key) % 26) + 97);
            }

            } else {
            // Jika bukan huruf, biarkan tetap
            $result .= $char;
        }
    }

        return view('enkripsi', [
            'original' => $text,
            'encrypted' => $result,
            'key' => $key
        ]);
    }
}