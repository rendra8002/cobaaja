<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>
    <h1>Halaman Create</h1>
    <form action="/siswa/store" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">Kelas</label>
            <select name="kelas">
                <br>
                @foreach ($clases as $clas)
                <option value="{{$clas->id}}">{{$clas->name}}</option>
                @endforeach
            </select>
            <br>
            @error('kelas')
            <small style="color: red;">{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="">Nama</label>
            <br>
            <input type="text" name="name" placeholder="Masukkan Nama">
            <br>
            @error('name')
            <small style="color: red;">{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="">Nisn</label>
            <br>
            <input type="text" name="nisn" placeholder="Masukkan NISN">
            <br>
            @error('nisn')
            <small style="color: red;">{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="">Alamat</label>
            <br>
            <input type="text" name="alamat" placeholder="Masukkan Alamat">
            <br>
            @error('alamat')
            <small style="color: red;">{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="">Email</label>
            <br>
            <input type="text" name="email" placeholder="Masukkan Email">
            <br>
            @error('email')
            <small style="color: red;">{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="">Password</label>
            <br>
            <input type="password" name="password" placeholder="Masukkan Password">
            <br>
            @error('password')
            <small style="color: red;">{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="">No Handphone</label>
            <br>
            <input type="text" name="no_handphone" placeholder="Masukkan No Handphone">
            <br>
            @error('no_handphone')
            <small style="color: red;">{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="">Foto</label>
            <br>
            <input type="file" name="photo">
        </div>
        <br>
        <button type="submit" href="/store">
            Simpan
        </button>
        <br>
        <br>

    </form>
    <a href="/"><button>Kembali</button></a>
</body>

</html>