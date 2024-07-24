<?php

use Illuminate\Support\Facades\Route;

Route::name('.')->group(function () {
    Route::prefix('user')->name('user.')->group(function () {
        Route::resource('/', App\Http\Controllers\Sistem\UserController::class)->parameter('','id');
        Route::post('search', [App\Http\Controllers\Sistem\UserController::class, 'search'])->name('search');
    });
    
    Route::prefix('karyawan')->name('karyawan.')->group(function () {
        Route::resource('/', App\Http\Controllers\KaryawanController::class)->parameter('','id');
        Route::post('search', [App\Http\Controllers\KaryawanController::class, 'search'])->name('search');
    });

    Route::prefix('pengawas')->name('pengawas.')->group(function () {
        Route::resource('/', App\Http\Controllers\PengawasController::class)->parameter('','id');
        Route::post('search', [App\Http\Controllers\PengawasController::class, 'search'])->name('search');
    });
    
    Route::prefix('fitur')->name('fitur.')->group(function () {
        Route::resource('/', App\Http\Controllers\Sistem\FiturProgramController::class)->parameter('', 'id');
        Route::post('search', [App\Http\Controllers\Sistem\FiturProgramController::class, 'search'])->name('search');
    });
});