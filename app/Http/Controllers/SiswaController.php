<?php

namespace App\Http\Controllers;


use App\Models\clas;
use App\Models\user;
use Termwind\Components\Dd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Unique;

class SiswaController extends Controller
{


    public function index()
    {
        //siapkan data datauser$datauser
        $datausers = User::all();

        return view('siswa.index', compact('datausers'));
    }

    public function create()
    {
        //ambil data kelas
        $clases = Clas::all();

        return view('siswa.create', compact('clases'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'kelas' => 'required',
            'name' => 'required',
            'nisn' => 'required|unique:users,nisn',
            'alamat' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required', // tanpa min length
            'no_handphone' => 'required|unique:users,no_handphone',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $datauser = [
            'clas_id' => $request->kelas,
            'name' => $request->name,
            'nisn' => $request->nisn,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'no_handphone' => $request->no_handphone,
        ];

        if ($request->hasFile('photo')) {
            $datauser['photo'] = $request->file('photo')->store('images', 'public');
        }

        User::create($datauser);

        return redirect('/');
    }

    //funsi delete
    public function destroy($id)
    {
        $datauser = User::findOrFail($id);

        // Cek apakah ada file photo yang tersimpan
        if (
            $datauser->photo &&
            Storage::exists($datauser->photo)
        ) {
            Storage::disk('public')->delete($datauser->photo);
        }
        $datauser->delete();

        return redirect('/');
    }

    public function show($id)
    {
        // Cek apakah datauser dengan ID tersebut ada
        $datauser = User::find($id);

        // Jika data tidak ditemukan,ambil id teerakhir yang dilihat(buat session)
        if ($datauser != null) {
            session(['data_yang_dilihat' => $id]);
            return view('siswa.show', compact('datauser'));
        }

        //panggil last id yang tadi dibuat pada session
        $lastId = session('data_yang_dilihat');
        if ($lastId && User::find($lastId)) {
            return redirect('/siswa/show/' . $lastId);
        }
    }

    public function edit($id)
    {
        // Cek apakah datauser dengan ID tersebut ada
        $datauser = User::find($id);

        // Jika data tidak ditemukan
        if ($datauser != null) {
            // Simpan ID ini sebagai ID terakhir yang valid (session untuk mengingat ID terakhir yang diedit)
            session(['data yg trakhir diedit' => $id]);

            // Ambil data Clas
            $clases = Clas::all();

            return view('/siswa.edit', compact('datauser', 'clases'));
        }

        // Jika data (id) tidak ditemukan, coba ambil ID terakhir yang valid (jika ada $lastId maka harus juga ada session)
        $lastId = session('data yg trakhir diedit');

        //jika lastid dan data user keduanya terpenuhi (keduanya ada)
        if ($lastId && User::find($lastId)) {

            return redirect('/siswa/' . $lastId . '/edit');
        }

        return redirect('/');
    }




    public function update(Request $request, $id)
    {
        // Cari data
        $datauser = User::find($id);

        // Kalau data tidak ditemukan
        if ($datauser == null) {
            return redirect('/');
        }

        // Validasi input
        $request->validate([
            'kelas' => 'required',
            'name' => 'required',
            'nisn' => 'required|unique:users,nisn,' . $id,
            'alamat' => 'required',
            'email' => 'required|unique:users,email,' . $id,
            'no_handphone' => 'required|unique:users,no_handphone,' . $id,
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Siapkan data
        $data = [
            'clas_id' => $request->kelas,
            'name' => $request->name,
            'nisn' => $request->nisn,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'no_handphone' => $request->no_handphone,
        ];

        if ($request->filled('password')) {
            $datauser->password = bcrypt($request->password);
        }



        // Kalau upload foto baru
        if ($request->hasFile('photo')) {
            // Hapus foto lama
            if ($datauser->photo && Storage::disk('public')->exists($datauser->photo)) {
                Storage::disk('public')->delete($datauser->photo);
            }
            $data['photo'] = $request->file('photo')->store('images', 'public');
        }

        // Update data
        $datauser->update($data);

        return redirect('/');
    }
}
