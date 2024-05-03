<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pegawaiController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/pegawai', [pegawaiController::class, 'index']);

Route::get('/pegawai/create', [pegawaiController::class, 'create'])->name('pegawai.create');

Route::post('/pegawai', [pegawaiController::class, 'store'])->name('pegawai.store');

Route::get('/pegawai/{id}/edit', [pegawaiController::class, 'edit'])->name('pegawai.edit');

Route::put('/pegawai/{id}', [pegawaiController::class, 'update'])->name('pegawai.update');

Route::delete('/pegawai/{id}', [pegawaiController::class, 'destroy'])->name('pegawai.destroy');

