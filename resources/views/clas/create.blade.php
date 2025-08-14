<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Create Class</title>
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
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #b2ebf2;
            border-radius: 6px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        input:focus,
        textarea:focus {
            border-color: #00acc1;
            outline: none;
        }

        textarea {
            resize: vertical;
            min-height: 80px;
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
    <h1>Form Tambah Kelas</h1>

    <form action="{{ route('clas.store') }}" method="post">
        @csrf

        <label for="name">Nama Kelas</label>
        <input type="text" name="name" placeholder="Masukkan Nama Kelas" value="{{ old('name') }}">
        @error('name')
            <small>{{ $message }}</small>
        @enderror

        <label for="description">Deskripsi</label>
        <textarea name="description" placeholder="Masukkan Deskripsi Kelas">{{ old('description') }}</textarea>
        @error('description')
            <small>{{ $message }}</small>
        @enderror

        <div class="form-footer">
            <button type="submit" class="btn-submit">Simpan</button>
            <a href="{{ route('clas.index') }}"><button type="button" class="btn-back">Kembali</button></a>
        </div>
    </form>
</body>

</html>
