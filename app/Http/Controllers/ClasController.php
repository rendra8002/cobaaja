<?php

namespace App\Http\Controllers;

use App\Models\Clas;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class ClasController extends Controller
{
    public function index()
    {
        $dataclas = Clas::all();
        return view('clas.index', compact('dataclas'));
    }

    public function create()
    {
        return view('clas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        Clas::create($request->only(['name', 'description']));

        return redirect()->route('clas.index')
            ->with('success', 'Kelas berhasil ditambahkan.');
    }

public function edit($id)
{
    // Ambil data berdasarkan ID yang ada di URL
    $clas = Clas::find($id);

    if ($clas) {
        // Simpan ID terakhir yang valid di session
        session(['data yg trakhir diedit' => $id]);

        return view('clas.edit', compact('clas'));
    }

    // Ambil ID terakhir yang valid dari session
    $lastId = session('data yg trakhir diedit');

    // Jika lastId ada dan datanya masih ada di database
    if ($lastId && Clas::find($lastId)) {
        return redirect("/clas/{$lastId}/edit");
    }

    // Kalau tidak ada data sama sekali, kembali ke halaman index
    return redirect('/clas');
}


    public function update(Request $request, $id)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        $clas = Clas::findOrFail($id);
        $clas->update($request->only(['name', 'description']));

        return redirect()->route('clas.index')
            ->with('success', 'Kelas berhasil diperbarui.');
    }

    public function show($id)
    {
        // Cek apakah data kelas ada
        $clas = Clas::find($id);

        if (!$clas) {
            // Ambil lastId dari session
            $lastId = session('data_yang_dilihat');
            if ($lastId && Clas::find($lastId)) {
                return redirect()->route('clas.show', $lastId);
            }

            // Kalau lastId juga nggak ada, kembalikan ke daftar kelas
            return redirect()->route('clas.index');
        }

        // Simpan ID yang sedang dilihat ke session
        session(['data_yang_dilihat' => $id]);

        // Ambil data siswa yang punya clas_id sama
        $students = User::where('clas_id', $id)->get();

        // Kirim data ke view
        return view('clas.show', compact('clas', 'students'));
    }


    public function destroy($id)
    {
        $clas = Clas::find($id);

        if (!$clas) {
            return redirect()->route('clas.index');
        }

        $clas->delete();

        return redirect()->route('clas.index');
    }
}
