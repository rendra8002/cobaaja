@extends('layouts.app')

@section('title')
Data Kelas
@endsection

@section('css')
<style>
    /* Sama persis seperti CSS di index siswa */
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
@endsection

@section('header')
Data Kelas
@endsection

@section('content')
<a href="/">Data Siswa</a> | <a href="/clas">Data Kelas</a>

<div class="top-bar">
    <a href="{{ route('clas.create') }}" class="btn-tambah">+ Tambah Kelas</a>
</div>

<table>
    <thead>
        <tr>
            <th>Nama Kelas</th>
            <th>Deskripsi</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataclas as $clas)
        <tr>
            <td data-label="Nama Kelas">{{ $clas->name }}</td>
            <td data-label="Deskripsi">{{ $clas->description ?? '-' }}</td>
            <td class="action" data-label="Opsi">
                <a href="{{ route('clas.show', $clas->id) }}">Detail</a> |
                <a href="{{ route('clas.edit', $clas->id) }}">Edit</a> |
                <a href="/clas/delete/{{ $clas->id }}" onclick="return confirm('Apakah yakin ingin menghapus?')">Hapus</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection