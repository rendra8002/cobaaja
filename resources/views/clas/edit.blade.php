<!-- resources/views/clas/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kelas</title>
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
            max-width: 500px;
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
        textarea {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 18px;
            border: 1px solid #b2ebf2;
            border-radius: 8px;
            box-sizing: border-box;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        input:focus,
        textarea:focus {
            border-color: #00acc1;
            box-shadow: 0 0 0 3px rgba(0, 172, 193, 0.2);
            outline: none;
        }

        textarea {
            resize: vertical;
            min-height: 80px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            transition: background-color 0.3s ease;
            box-sizing: border-box;
        }

        .btn-save {
            background-color: #00bcd4;
            color: white;
            margin-bottom: 10px;
        }

        .btn-save:hover {
            background-color: #0097a7;
        }

        .btn-back {
            background-color: #b0bec5;
            color: white;
        }

        .btn-back:hover {
            background-color: #90a4ae;
        }
    </style>
</head>

<body>

    <h1>Edit Data Kelas</h1>

    <form action="{{ route('clas.update', $clas->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nama Kelas:</label>
        <input type="text" name="name" id="name" value="{{ $clas->name }}" required>

        <label for="description">Deskripsi:</label>
        <textarea name="description" id="description">{{ $clas->description }}</textarea>

        <button type="submit" class="btn btn-save" onclick="return confirm('Yakin ingin mengubah data kelas?')">
            Simpan Perubahan
        </button>

        <a href="/clas" class="btn btn-back">Kembali</a>
    </form>

</body>

</html>
