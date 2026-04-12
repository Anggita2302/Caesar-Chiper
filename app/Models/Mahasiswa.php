namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'public.mahasiswa';

    //menyaring kolom yang diisi manual
    protected $fillable = [
        'user_id',
        'nama',
        'nim',
        'jurusan',
        'fakultas',
        'email',
        'no_hp',
        'alamat',
        'foto'
    ];

    // relasi ke user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}