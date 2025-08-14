<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kelas</title>
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
            max-width: 500px;
            width: 90%;
            margin: 0 auto;
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
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

        ul {
            text-align: left;
            padding-left: 20px;
        }
    </style>
</head>

<body>

    <h1>Detail Kelas</h1>

    <div class="container">
        <div class="info"><strong>ID:</strong> {{ $clas->id }}</div>
        <div class="info"><strong>Nama Kelas:</strong> {{ $clas->name }}</div>
        <div class="info"><strong>Keterangan:</strong> {{ $clas->description ?? 'Tidak ada keterangan' }}</div>

        <hr>
        <h3>Daftar Siswa</h3>
        @if($students->isEmpty())
            <p><i>Tidak ada siswa di kelas ini.</i></p>
        @else
            <ul>
                @foreach($students as $student)
                    <li>{{ $student->name }} (NISN: {{ $student->nisn }})</li>
                @endforeach
            </ul>
        @endif

        <a href="{{ route('clas.index') }}"><button class="btn-back">Kembali</button></a>
    </div>

</body>

</html>
