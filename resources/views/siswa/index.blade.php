<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD SISWA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7fa;
            color: #004d40;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #006064;
            margin-bottom: 30px;
        }

        .btn-tambah {
            background-color: #00bcd4;
            color: white;
            padding: 10px 16px;
            text-decoration: none;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
        }

        .btn-tambah:hover {
            background-color: #0097a7;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        thead {
            background-color: #00acc1;
            color: white;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
        }

        .action a {
            color: #00796b;
            text-decoration: none;
            margin: 0 5px;
            font-weight: bold;
        }

        .action a:hover {
            text-decoration: underline;
        }

        .top-bar {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <h1>Halaman Awal</h1>

    <div class="top-bar">
        <a href="/siswa/create" class="btn-tambah">+ Tambah Siswa</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Photo</th>
                <th>Name</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswas as $siswa)
            <tr>
                <td>
                    @if ($siswa->photo)
                        <img src="{{ asset('storage/'.$siswa->photo) }}" alt="Foto Siswa">
                    @else
                        <span>Gak ada foto</span>
                    @endif
                </td>
                <td>{{ $siswa->name }}</td>
                <td>{{ $siswa->clas->name }}</td>
                <td>{{ $siswa->alamat }}</td>
                <td class="action">
                    <a href="/siswa/show/{{ $siswa->id }}">Detail</a> |
                    <a href="/siswa/delete/{{ $siswa->id }}" onclick="return confirm('Apakah yakin ingin menghapus?')">Hapus</a> |
                    <a href="/siswa/edit/{{ $siswa->id }}">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
