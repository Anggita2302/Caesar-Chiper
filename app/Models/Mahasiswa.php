<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mahasiswa extends Model
{
    public static function getAll()
    {
        return DB::table('mahasiswas')->get();
    }

    public static function getById($id)
    {
        return DB::table('mahasiswas')->where('id', $id)->first();
    }
}
