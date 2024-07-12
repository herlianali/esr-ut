<?php
use Illuminate\Support\Facades\Route;

Route::name('.')->group(function() {
    Route::prefix('permohonan_surat')->name('permohonan_surat.')->group(function () {
        Route::resource('/', App\Http\Controllers\SuratController::class)->parameter('', 'id');
    });
});
?>