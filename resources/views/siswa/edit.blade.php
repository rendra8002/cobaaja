@extends('layouts.app')

@section('title')
Edit Data Siswa
@endsection

@section('css')
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #e0f7fa;
        padding: 40px 20px;
        color: #004d40;
    }

    h1 {
        text-align: center;
        color: #006064;
        font-size: 2em;
        margin-bottom: 30px;
    }

    form {
        max-width: 550px;
        margin: 0 auto;
        background-color: white;
        padding: 30px 25px;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    label {
        font-weight: 600;
        display: block;
        margin-bottom: 6px;
        color: #006064;
    }

    input[type="text"],
    input[type="email"],
    input[type="file"],
    input[type="password"],
    select {
        width: 100%;
        padding: 10px 12px;
        margin-bottom: 18px;
        border: 1px solid #b2ebf2;
        border-radius: 8px;
        box-sizing: border-box;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    input:focus,
    select:focus {
        border-color: #00acc1;
        box-shadow: 0 0 0 3px rgba(0, 172, 193, 0.2);
        outline: none;
    }

    button {
        display: block;
        width: 100%;
        background-color: #00bcd4;
        color: white;
        padding: 12px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #0097a7;
    }

    .photo-preview {
        text-align: center;
        margin-bottom: 20px;
    }

    .photo-preview img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #00bcd4;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }
</style>
@endsection


@section('header')
Edit Data Siswa
@endsection

@section('content')
<form action="{{ route('siswa.update', $datauser->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="kelas">Kelas:</label>
    <select name="kelas" id="kelas" required>
        @foreach ($clases as $kelas)
        <option value="{{ $kelas->id }}" {{ $datauser->clas_id == $kelas->id ? 'selected' : '' }}>
            {{ $kelas->name }}
        </option>
        @endforeach
    </select>

    <label for="name">Nama:</label>
    <input type="text" name="name" id="name" value="{{ $datauser->name }}" required>

    <label for="nisn">NISN:</label>
    <input type="text" name="nisn" id="nisn" value="{{ $datauser->nisn }}" required>

    <label for="alamat">Alamat:</label>
    <input type="text" name="alamat" id="alamat" value="{{ $datauser->alamat }}" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{ $datauser->email }}" required>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" placeholder="Opsional" autocomplete="new-password">
    <small>Kosongkan jika tidak ingin mengubah password</small>

    <label for="no_handphone">No. HP:</label>
    <input type="text" name="no_handphone" id="no_handphone" value="{{ $datauser->no_handphone }}" required>

    <label for="photo">Ganti Foto (Opsional):</label>
    <input type="file" name="photo" id="photo" accept="image/*">

    @if ($datauser->photo)
    <div class="photo-preview">
        <img src="{{ asset('storage/' . $datauser->photo) }}" alt="Foto Siswa">
    </div>
    @endif

    <button type="submit" onclick="return confirm('Apakah yakin ingin mengubah?')">Simpan Perubahan</button>
    <br>
    <button class="btn-back"><a href="/"></a>Kembali</button>
</form>

@endsection