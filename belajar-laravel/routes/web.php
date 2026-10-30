<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BelajarController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

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

// prefix
Route::prefix('admin')->name('admin.')->group(function(){
    // mau melihat tampilan login
    Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login']);
    Route::post('/actionLogin', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('actionLogin');

    Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
    Route::resource('user', \App\Http\Controllers\UserController::class);
    Route::resource('category', \App\Http\Controllers\CategoryController::class);

    Route::get('/settings', [\App\Http\Controllers\SettingController::class, 'index'])->name('settings');
    Route::post('/settings', [\App\Http\Controllers\SettingController::class, 'update'])->name('settings.update');
});
