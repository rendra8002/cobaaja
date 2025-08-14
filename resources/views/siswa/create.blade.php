<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Create Siswa</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #e0f7fa;
    padding: 30px;
    color: #004d40;
}

h1 {
    text-align: center;
    color: #006064;
    margin-bottom: 20px;
}

form {
    max-width: 500px;
    margin: 0 auto;
    background-color: #ffffff;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease;
}

form:hover {
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
}

label {
    font-weight: bold;
    display: block;
    margin-bottom: 6px;
    margin-top: 15px;
}

input[type="text"],
input[type="password"],
input[type="file"],
select {
    width: 100%;
    padding: 10px;
    border: 1px solid #b2ebf2;
    border-radius: 6px;
    box-sizing: border-box;
    transition: border-color 0.3s ease;
}

input:focus,
select:focus {
    border-color: #00acc1;
    outline: none;
}

small {
    color: red;
    font-size: 13px;
}

.btn-submit,
.btn-back {
    padding: 10px 16px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 15px;
    transition: background-color 0.3s ease;
}

.btn-submit {
    background-color: #00bcd4;
    color: white;
}

.btn-submit:hover {
    background-color: #0097a7;
}

.btn-back {
    background-color: #b2ebf2;
    color: #004d40;
    margin-left: 10px;
}

.btn-back:hover {
    background-color: #4dd0e1;
}

.form-footer {
    text-align: center;
    margin-top: 20px;
}

    </style>
</head>

<body>
    <h1>Form Tambah Siswa</h1>

    <form action="/siswa/store" method="post" enctype="multipart/form-data">
        @csrf

        <label for="kelas">Kelas</label>
        <select name="kelas">
            @foreach ($clases as $clas)
            <option value="{{ $clas->id }}">{{ $clas->name }}</option>
            @endforeach
        </select>
        @error('kelas')
        <small>{{ $message }}</small>
        @enderror

        <label for="name">Nama</label>
        <input type="text" name="name" placeholder="Masukkan Nama">
        @error('name')
        <small>{{ $message }}</small>
        @enderror

        <label for="nisn">NISN</label>
        <input type="text" name="nisn" placeholder="Masukkan NISN">
        @error('nisn')
        <small>{{ $message }}</small>
        @enderror

        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" placeholder="Masukkan Alamat">
        @error('alamat')
        <small>{{ $message }}</small>
        @enderror

        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Masukkan Email">
        @error('email')
        <small>{{ $message }}</small>
        @enderror

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Masukkan Password">
        @error('password')
        <small>{{ $message }}</small>
        @enderror

        <label for="no_handphone">No Handphone</label>
        <input type="text" name="no_handphone" placeholder="Masukkan No Handphone">
        @error('no_handphone')
        <small>{{ $message }}</small>
        @enderror

        <label for="photo">Foto</label>
        <input type="file" name="photo">

        <div class="form-footer">
            <button type="submit" class="btn-submit">Tambah Data Siswa</button>
            <a href="/"><button type="button" class="btn-back">Kembali</button></a>
        </div>
    </form>
</body>

</html>