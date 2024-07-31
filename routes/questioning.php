<?php

use Illuminate\Support\Facades\Route;

Route::name('.')->group(function() {
    Route::prefix('green_card')->name('green_card.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Questioning\GreencardController::class)->parameter('', 'id');
    });
    Route::prefix('genba')->name('genba.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Questioning\GenbaController::class)->parameter('', 'id');
    });
    Route::prefix('bbsq_service')->name('bbsq_service.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Questioning\BbsqServiceController::class)->parameter('', 'id');
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
});
