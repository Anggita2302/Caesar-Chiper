<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function index () {

    if (!session('login')) {
    return redirect('/login');
}
        
    $pengguna = Pengguna::all(); // ambil data pengguna

    return view('pengguna.index', compact('pengguna'));
    }

    // CREATE (form tambah)
    public function create()
    {
        return view('pengguna.create');
    }

    // SIMPAN DATA
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        Pengguna::create([
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect('/pengguna')->with('success', 'Data berhasil ditambah');
    }

    // EDIT (form edit)
    public function edit($id_pengguna)
    {
        $pengguna = Pengguna::findOrFail($id_pengguna);
        return view('pengguna.edit', compact('pengguna'));
    }

    // UPDATE DATA
    public function update(Request $request, $id_pengguna)
    {
        $pengguna = Pengguna::findOrFail($id_pengguna);

        $pengguna->update([
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect('/pengguna')->with('success', 'Data berhasil diupdate');
    }

    // DELETE
    public function destroy($id_pengguna)
    {
        $pengguna = Pengguna::findOrFail($id_pengguna);
        $pengguna->delete();

        return redirect('/pengguna')->with('success', 'Data berhasil dihapus');
    }
}

 
 