<?php

use Illuminate\Support\Facades\Route;


Route::name('.')->group(function () {
    Route::prefix('monitoring_cof')->name('monitoring_cof.')->group(function () {
        Route::resource('/', App\Http\Controllers\EsrCorner\MonitoringCofController::class)->parameter('','id');
        Route::post('search', [App\Http\Controllers\EsrCorner\MonitoringCofController::class, 'search'])->name('search');
    });
    Route::prefix('monitoring_laporan')->name('monitoring_laporan.')->group(function () {
        Route::resource('/', App\Http\Controllers\EsrCorner\MonitoringLaporanController::class)->parameter('','id');
        Route::post('search', [App\Http\Controllers\EsrCorner\MonitoringLaporanController::class, 'search'])->name('search');
    });
    Route::prefix('monitoring_permit')->name('monitoring_permit.')->group(function () {
        Route::resource('/', App\Http\Controllers\EsrCorner\MonitoringPermitController::class)->parameter('','id');
        Route::post('search', [App\Http\Controllers\EsrCorner\MonitoringPermitController::class, 'search'])->name('search');
    });
    Route::prefix('rekap_link')->name('rekap_link.')->group(function () {
        Route::resource('/', App\Http\Controllers\EsrCorner\RekapLinkController::class)->parameter('','id');
        Route::post('search', [App\Http\Controllers\EsrCorner\RekapLinkController::class, 'search'])->name('search');
    });
    Route::prefix('monitoring_program')->name('monitoring_program.')->group(function () {
        Route::resource('/', App\Http\Controllers\EsrCorner\MonitoringProgramController::class)->parameter('','id');
        Route::post('search', [App\Http\Controllers\EsrCorner\MonitoringProgramController::class, 'search'])->name('search');
    });
});