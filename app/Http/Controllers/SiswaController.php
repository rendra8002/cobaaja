<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Validation\Rules\Unique;

class SiswaController extends Controller
{


    public function index()
    {
        return view('siswa.index');
    }

    public function create()
    {
        return view('siswa.create');
    }



    public function store(Request $request)
    {
        //validate
        $request->validate([
            'kelas' => 'required',
            'name' => 'required',
            'nisn' => 'required|unique:users,nisn',
            'alamat' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'no_handphone' => 'required',
        ]);

        $datauser = [
            'clas_id' => $request->kelas,
            'photo' => 'photo.jpg',
            'name' => $request->name,
            'nisn' => $request->nisn,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'no_telepon' => $request->no_handphone,
        ];

        user::create($datauser);

        return redirect('/');
    }
}