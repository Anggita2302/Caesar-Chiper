<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswas';

    protected $fillable = [
        'nama',
        'nim',
        'prodi'
    ];

    public static function getAll()
    {
        return DB::table('mahasiswas')->get();
    }

    public static function getById($id)
    {
        return DB::table('mahasiswas')->where('id', $id)->first();
    }

    public static function insertDataMahasiswa($data)
    {
        return DB::table('mahasiswas')->insert([
            'nama' => $data['nama'],
            'nim' => $data['nim'],
            'prodi' => $data['prodi']
        ]);
    }
}
