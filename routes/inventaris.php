<?php
use Illuminate\Support\Facades\Route;

// Route::get('/', [App\Http\Controllers\InventarisController::class, 'index']);
Route::name('.')->group(function () {
    Route::get('/', [App\Http\Controllers\InventarisController::class, 'index']);
    Route::prefix('peminjaman_apd')->name('peminjaman_apd.')->group(function () {
        Route::resource('/', App\Http\Controllers\ApdController::class);
    });
});

?>