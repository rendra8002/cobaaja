<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClasController;
use App\Http\Controllers\SiswaController;

Route::get('/', [SiswaController::class, 'index']);

Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');

Route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');

Route::get('/siswa/delete/{id}', [SiswaController::class, 'destroy'])->name('siswa.delete');

Route::get('/siswa/show/{id}', [SiswaController::class, 'show'])->name('siswa.show');

Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');

Route::put('/siswa/update/{id}', [SiswaController::class, 'update'])->name('siswa.update');



Route::get('/clas', [ClasController::class, 'index'])->name('clas.index');

Route::get('/clas/create', [ClasController::class, 'create'])->name('clas.create');

Route::post('/clas/store', [ClasController::class, 'store'])->name('clas.store');

Route::get('/clas/{id}/edit', [ClasController::class, 'edit'])->name('clas.edit');

Route::put('/clas/update/{id}', [ClasController::class, 'update'])->name('clas.update');

Route::get('/clas/show/{id}', [ClasController::class, 'show'])->name('clas.show');

Route::get('/clas/delete/{id}', [ClasController::class, 'destroy'])->name('clas.delete');
