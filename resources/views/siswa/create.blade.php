<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>

</head>

<body> 
       <h1>halaman tambah</h1>
    <form action="/siswa/store" method="post">
        @csrf
        <div>
            <label for="">Kelas</label>

            <select name="kelas" id="kelas">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <br>
        <div>
            <label for="">Nama</label>
            <br>
            <input type="text" name="nama" placeholder="Masukkan Nama">
        </div>
        <br>
        <div>
            <label for="">Nisn</label>
            <br>
            <input type="text" name="nisn" placeholder="Masukkan NISN">
        </div>
        <br>
        <div>
            <label for="">Alamat</label>
            <br>
            <input type="text" name="alamat" placeholder="Masukkan Alamat">
        </div>
        <br>
        <div>
            <label for="">Email</label>
            <br>
            <input type="text" name="email" placeholder="Masukkan Email">
        </div>
        <br>
        <div>
            <label for="">Password</label>
            <br>
            <input type="password" name="password" placeholder="Masukkan Password">
        </div>
        <br>
        <div>
            <label for="">No Handphone</label>
            <br>
            <input type="text" name="no_handphone" placeholder="Masukkan No Handphone">
        </div>
        <br>
        <div>
            <label for="">Foto</label>
            <br>
            <input type="file" name="photo" accept="image/*">
        </div>
        <br>
        <button type="submit">Simpan</button>

        <br>
        <br>
        <a href="/"><button type="button">Balik</button></a>
    </form>
</body>

</html>