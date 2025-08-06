<?php

namespace App\Http\Controllers;

use App\Models\clas;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class SiswaController extends Controller
{


    public function index()
    {
        //siapkan data siswa
        $siswas = user::all();

        return view('siswa.index', compact('siswas'));
    }

    public function create()
    {
        //ambil data kelas
        $clases = Clas::all();

        return view('siswa.create', compact('clases'));
    }



    public function store(Request $request)
    {
        //siapkan data 
        clas::all();
        //alihkan ke halaman create 

        //validate
        $request->validate([
            'kelas' => 'required',
            'name' => 'required',
            'nisn' => 'required|unique:users,nisn',
            'alamat' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'no_handphone' => 'required|unique:users,no_handphone',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $datauser = [
            'clas_id' => $request->kelas,

            'name' => $request->name,
            'nisn' => $request->nisn,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'no_handphone' => $request->no_handphone,
        ];
        if ($request->hasFile('photo')) {
            $datauser['photo'] = $request->file('photo')->store('images', 'public');
        }

        user::create($datauser);

        return redirect('/');
    }
}
