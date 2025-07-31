@extends('layouts.index')

@section('title', 'Form Pendaftaran Siswa')

@section('content')
<div class="form-container">
  <h2>Form Pendaftaran Siswa</h2>
  <form class="form-card">
    <div class="form-group">
      <label for="kelas">Kelas</label>
      <select name="kelas" id="kelas">
        <option value="">-- Pilih Kelas --</option>
        <option value="XII PPLG 1">XII PPLG 1</option>
        <option value="XII PPLG 2">XII PPLG 2</option>
        <option value="XII PPLG 3">XII PPLG 3</option>
      </select>
    </div>

    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" name="nama" placeholder="Masukkan Nama">
    </div>

    <div class="form-group">
      <label for="nisn">NISN</label>
      <input type="text" name="nisn" placeholder="Masukkan NISN">
    </div>

    <div class="form-group">
      <label for="alamat">Alamat</label>
      <input type="text" name="alamat" placeholder="Masukkan Alamat">
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" placeholder="Masukkan Email">
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" placeholder="Masukkan Password">
    </div>

    <div class="form-group">
      <label for="no_handphone">No Handphone</label>
      <input type="text" name="no_handphone" placeholder="Masukkan No Handphone">
    </div>

    <div class="form-group">
      <label for="photo">Foto</label>
      <input type="file" name="photo" accept="image/*">
    </div>

    <div class="form-group">
      <button type="submit" class="button">Kirim</button>
    </div>
  </form>
</div>
@endsection
