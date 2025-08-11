<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa</title>
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
            margin-bottom: 30px;
        }

        .container {
            max-width: 400px;
            width: 90%;
            margin: 0 auto;
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .no-photo {
            width: 120px;
            height: 120px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #ccc;
            color: #666;
            font-size: 12px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .info {
            font-size: 16px;
            margin: 8px 0;
        }

        .btn-back {
            margin-top: 20px;
            background-color: #00bcd4;
            color: white;
            border: none;
            padding: 10px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-back:hover {
            background-color: #0097a7;
        }
    </style>
</head>

<body>

    <h1>Detail Siswa</h1>

    <div class="container">
        @if ($datauser->photo)
        <img src="{{ asset('storage/'.$datauser->photo) }}" alt="Foto Siswa">
        @else
        <div class="no-photo">Tidak ada foto</div>
        @endif

        <div class="info"><strong>Nama:</strong> {{ $datauser->name }}</div>
        <div class="info"><strong>NISN:</strong> {{ $datauser->nisn }}</div>
        <div class="info"><strong>Alamat:</strong> {{ $datauser->alamat }}</div>
        <div class="info"><strong>Email:</strong> {{ $datauser->email }}</div>
        <div class="info"><strong>No HP:</strong> {{ $datauser->no_handphone }}</div>
        <div class="info"><strong>No HP:</strong> {{ $datauser->password }}</div>

        <a href="/"><button class="btn-back">Kembali</button></a>
    </div>

</body>

</html>
