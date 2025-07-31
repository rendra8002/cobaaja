<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('siswa.index');
});

Route::get('/siswa.create', function () {
    return view('siswa.create');
});
Route::get('/siswa.index', function () {
    return view('siswa.index');
});


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

