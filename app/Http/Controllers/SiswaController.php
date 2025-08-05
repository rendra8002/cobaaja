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
        return view('siswa.index');
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
            'kelas' => 'required|unique:users,clas_id',
            'name' => 'required',
            'nisn' => 'required|unique:users,nisn',
            'alamat' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'no_handphone' => 'required',
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

        $datauser ['photo'] = $request->file('photo')->store('images', 'public');

        user::create($datauser);

        return redirect('/');
    }
}
