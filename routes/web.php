<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', [SiswaController::class, 'index']);

Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');

Route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');

Route::get('/siswa/delete/{id}', [SiswaController::class, 'destroy'])->name('siswa.delete');

Route::get('/siswa/show/{id}', [SiswaController::class, 'show'])->name('siswa.show');

Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');

Route::put('/siswa/update/{id}', [SiswaController::class, 'update'])->name('siswa.update');
