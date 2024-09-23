<?php

use Illuminate\Support\Facades\Route;

Route::name('.')->group(function() {
    Route::get('/', [\App\Http\Controllers\DashController::class, 'questioningDash'])->name('index');
    Route::prefix('cuti')->name('cuti.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Questioning\CutiController::class)->parameter('','id');
    });
    
    Route::prefix('green_card')->name('green_card.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Questioning\GreencardController::class)->parameter('', 'id');
    });

    Route::prefix('genba')->name('genba.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Questioning\GenbaController::class)->parameter('', 'id');
    });

    Route::prefix('bbsq_service')->name('bbsq_service.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Questioning\BbsqServiceController::class)->parameter('', 'id');
        Route::get('/options/{id}', [\App\Http\Controllers\Questioning\BbsqServiceController::class, 'options'])->name('options');
    });

    Route::prefix('bbsq_non_service')->name('bbsq_non_service.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Questioning\BbsqNonServiceController::class)->parameter('', 'id');
    });

    Route::prefix('personal_contact')->name('personal_contact.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Questioning\PersonalContactController::class)->parameter('', 'id');
    });

    Route::prefix('safety_talk')->name('safety_talk.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Questioning\SafetyTalkController::class)->parameter('', 'id');
    });

    Route::prefix('jsa')->name('jsa.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Questioning\JSAController::class)->parameter('', 'id');
    });

    Route::prefix('p5m')->name('p5m.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Questioning\P5MController::class)->parameter('', 'id');
    });

    Route::prefix('inspeksi_sarana')->name('inspeksi_sarana.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Questioning\InspeksiSaranaController::class)->parameter('', 'id');
    });

    Route::prefix('audit_apd')->name('audit_apd.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Questioning\AuditAPDController::class)->parameter('', 'id');
    });

    Route::prefix('inspeksi_tools')->name('inspeksi_tools.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Questioning\InspeksiToolsController::class)->parameter('', 'id');
    });

    Route::prefix('housekeeping')->name('housekeeping.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Questioning\HousekeepingController::class)->parameter('', 'id');
    });

    Route::prefix('scml')->name('scml.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Questioning\SCMLController::class)->parameter('', 'id');
    });

    Route::prefix('flpg')->name('flpg.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Questioning\FlpgController::class)->parameter('', 'id');
        Route::get('/options/{id}', [\App\Http\Controllers\Questioning\FlpgController::class, 'options'])->name('options');
    });
    
});
