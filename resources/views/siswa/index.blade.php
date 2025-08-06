<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD SISWA</title>
    <h1>Halaman awal</h1>
</head>

<body>
<a href="/siswa/create"><button>Tambah</button></a>
    <br>
    <br>
    <table border="1" style="width: 100%" cellspacing="0" cellpadding="20">
        <thead style="font-size: l;">
            <tr>
                <td>Photo</td>
                <td>Name</td>
                <td>Kelas</td>
                <td>Alamat</td>
                <td align="center">Opsi</td>
            </tr>
        </thead>
        <tbody border="1">
            @foreach ($siswas as $siswa)
            <tr>
                <td>@if ($siswa->photo)
                    <img src="{{asset('storage/'.$siswa->photo)}}"alt="" width="100">
                @else
                gada profilnya
                @endif
</td>
                <td>{{$siswa->name}}</td>
                <td>{{ $siswa->clas->name}}</td>
                <td>{{$siswa->alamat}}</td>
                <td> <a href="">detail</a>
                    |
                    <a href="">hapus</a>
                    |
                    <a href="">edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</html>