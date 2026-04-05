namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

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