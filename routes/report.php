<?php

use Illuminate\Support\Facades\Route;

Route::name('.')->group(function() {
    Route::prefix('green_card')->name('green_card.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Report\GreenCardController::class)->parameter('', 'id');
        Route::post('search', [\App\Http\Controllers\Report\GreenCardController::class, 'search'])->name('search');
        Route::post('plan', [\App\Http\Controllers\Report\GreenCardController::class, 'planSearch'])->name('plan');
    });
    Route::prefix('cuti')->name('cuti.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Report\CutiController::class)->parameter('', 'id');
        Route::post('search', [\App\Http\Controllers\Report\CutiController::class, 'search'])->name('search');
    });
    Route::prefix('plan')->name('plan.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Report\PlanController::class)->parameter('', 'id');
        Route::post('search', [\App\Http\Controllers\Report\PlanController::class, 'search'])->name('search');
    });
    Route::prefix('safety_talk')->name('safety_talk.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Report\SafetyTalkController::class)->parameter('', 'id');
        Route::post('search', [\App\Http\Controllers\Report\SafetyTalkController::class, 'search'])->name('search');
    });
    Route::prefix('jsa')->name('jsa.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Report\JsaController::class)->parameter('', 'id');
        Route::post('search', [\App\Http\Controllers\Report\JsaController::class, 'search'])->name('search');
    });
    Route::prefix('p5m')->name('p5m.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Report\P5MController::class)->parameter('', 'id');
        Route::post('search', [\App\Http\Controllers\Report\P5MController::class, 'search'])->name('search');
    });
    Route::prefix('flpg')->name('flpg.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Report\FlpgController::class)->parameter('', 'id');
        Route::post('search', [\App\Http\Controllers\Report\FlpgController::class, 'search'])->name('search');
    });
    Route::prefix('housekeeping')->name('housekeeping.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Report\HouseKeepingController::class)->parameter('', 'id');
        Route::post('search', [\App\Http\Controllers\Report\HouseKeepingController::class, 'search'])->name('search');
    });
    
});