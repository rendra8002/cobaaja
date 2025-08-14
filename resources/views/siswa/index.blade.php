<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Siswa</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background-color: #e0f7fa;
            color: #004d40;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #006064;
            margin-bottom: 30px;
            font-size: 2.2em;
        }

        .top-bar {
            display: flex;
            justify-content: center;
            margin-bottom: 25px;
        }

        .btn-tambah {
            background-color: #00bcd4;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-tambah:hover {
            background-color: #0097a7;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }

        thead {
            background-color: #00acc1;
            color: white;
        }

        th,
        td {
            padding: 16px 14px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        tbody tr:hover {
            background-color: #f0fdfd;
        }

        img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid #00acc1;
        }

        .action a {
            color: #00796b;
            text-decoration: none;
            margin: 0 6px;
            font-weight: 600;
            transition: color 0.2s;
        }

        .action a:hover {
            color: #004d40;
            text-decoration: underline;
        }

        @media screen and (max-width: 768px) {

            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
            }

            thead {
                display: none;
            }

            tr {
                margin-bottom: 15px;
                background: white;
                border-radius: 10px;
                padding: 12px;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            }

            td {
                padding: 10px 8px;
                text-align: right;
                position: relative;
            }

            td::before {
                content: attr(data-label);
                position: absolute;
                left: 10px;
                top: 10px;
                font-weight: bold;
                color: #0097a7;
                text-align: left;
            }

            .action {
                text-align: right;
            }
        }
    </style>
</head>

<body>
    <h1>Data Siswa</h1>
    <a href="/">data siswa</a> | <a href="/clas">data kelas</a>
    
    <div class="top-bar">
        <a href="/siswa/create" class="btn-tambah">+ Tambah Siswa</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datausers as $datauser)
            <tr>
                <td data-label="Foto">
                    @if ($datauser->photo)
                    <img src="{{ asset('storage/'.$datauser->photo) }}" alt="Foto Siswa">
                    @else
                    <span>Tidak ada foto</span>
                    @endif
                </td>
                <td data-label="Nama">{{ $datauser->name }}</td>
                <td data-label="Kelas">{{ $datauser->clas->name }}</td>
                <td data-label="Alamat">{{ $datauser->alamat }}</td>
                <td class="action" data-label="Opsi">
                    <a href="/siswa/show/{{ $datauser->id }}">Detail</a> |
                    <a href="/siswa/delete/{{ $datauser->id }}" onclick="return confirm('Apakah yakin ingin menghapus?')">Hapus</a> |
                    <a href="/siswa/{{ $datauser->id }}/edit">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>