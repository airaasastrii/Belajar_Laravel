<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BelajarController;

Route::get('/', function () {
    return view('welcome');
});

// get, post, put, delete
// si ('belajar') yg bakal di cari ke browser (localhost:8000/belajar) gitu contohnya.
Route::get('belajar', [BelajarController::class, 'index']);

Route::get('tambah', [BelajarController::class, 'tambah'])->name('tambah');
Route::post('actionTambah', [BelajarController::class, 'actionTambah'])->name('actionTambah');

Route::get('pengurangan', [BelajarController::class, 'kurang'])->name('pengurangan');
Route::post('actionKurang', [BelajarController::class, 'actionKurang'])->name('actionKurang');

Route::get('bagi', [BelajarController::class, 'bagi'])->name('bagi');
Route::post('actionBagi', [BelajarController::class, 'actionBagi'])->name('actionBagi');

Route::get('perkalian', [BelajarController::class, 'kali'])->name('perkalian');
Route::post('actionKali', [BelajarController::class, 'actionKali'])->name('actionKali');

Route::get('jumlah', [BelajarController::class, 'jumlah'])->name('jumlah');
