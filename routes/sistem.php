<?php

use Illuminate\Support\Facades\Route;

Route::name('.')->group(function () {
    Route::get('/', [\App\Http\Controllers\DashController::class, 'settingDash'])->name('index');
    Route::prefix('user')->name('user.')->group(function () {
        Route::resource('/', App\Http\Controllers\Sistem\UserController::class)->parameter('','id');
        Route::post('search', [App\Http\Controllers\Sistem\UserController::class, 'search'])->name('search');
    });
    
    Route::prefix('karyawan')->name('karyawan.')->group(function () {
        Route::resource('/', App\Http\Controllers\KaryawanController::class)->parameter('','id');
        Route::post('search', [App\Http\Controllers\KaryawanController::class, 'search'])->name('search');
    });

    Route::prefix('pengawas')->name('pengawas.')->group(function () {
        Route::resource('/', App\Http\Controllers\Sistem\PengawasController::class)->parameter('','id');
        Route::post('search', [App\Http\Controllers\Sistem\PengawasController::class, 'search'])->name('search');
    });
    
    Route::prefix('fitur')->name('fitur.')->group(function () {
        Route::resource('/', App\Http\Controllers\Sistem\FiturProgramController::class)->parameter('', 'id');
        Route::post('search', [App\Http\Controllers\Sistem\FiturProgramController::class, 'search'])->name('search');
    });

    Route::prefix('questioning_options')->name('questioning_options.')->group(function () {
        Route::resource('/', App\Http\Controllers\Sistem\QuestioningOptionController::class)->parameter('', 'id');
        Route::post('search', [App\Http\Controllers\Sistem\QuestioningOptionController::class, 'search'])->name('search');
    });

    Route::prefix('hak_akses')->name('hak_akses.')->group(function () {
        Route::resource('/', App\Http\Controllers\Sistem\HakAksesController::class)->parameter('', 'id');
        Route::post('search', [App\Http\Controllers\Sistem\HakAksesController::class, 'search'])->name('search');
    });

    Route::prefix('user_level')->name('user_level.')->group(function () {
        Route::resource('/', App\Http\Controllers\Sistem\UserLevelController::class)->parameter('', 'id');
        Route::post('search', [App\Http\Controllers\Sistem\UserLevelController::class, 'search'])->name('search');
    });

    Route::prefix('sektor')->name('sektor.')->group(function () {
        Route::resource('/', App\Http\Controllers\Sistem\SektorController::class)->parameter('', 'id');
        Route::post('search', [App\Http\Controllers\Sistem\SektorController::class, 'search'])->name('search');
    });

    Route::prefix('plan')->name('plan.')->group(function () {
        Route::resource('/', App\Http\Controllers\Sistem\PlanController::class)->parameter('', 'id');
        Route::post('search', [App\Http\Controllers\Sistem\PlanController::class, 'search'])->name('search');
    });
});