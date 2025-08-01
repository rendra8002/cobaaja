<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate
        request()->validate([
            'kelas' => 'required',
            'nama' => 'required',
            'nisn' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'password' => 'required',
            'no_handphone' => 'required'
        ]);
        //store
        $datauser = [
            'clas_id' => $request->kelas,
            'name' => $request->nama,
            'nisn' => $request->nisn,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'no_telepon' => $request->no_handphone,
            'photo' => 'bebas.png',
        ];

        //simpen ke database
        User::create($datauser);

        return redirect('/');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
