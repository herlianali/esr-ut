<?php

use Illuminate\Support\Facades\Route;

Route::name('.')->group(function() {
    Route::prefix('green_card')->name('green_card.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Questioning\GreencardController::class)->parameter('', 'id');
        // Route::get('green_card', function () { return view('questioning.green_card.index'); });
        // Route::get('green_card/add', function () { return view('questioning.green_card.add'); })->name('green_card.add');
        // Route::get('green_card/show', function () { return view('questioning.green_card.detail'); })->name('green_card.show');
    });
});
