<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Sistem\AuthController::class, 'login'])->name('login');
Route::get('logout', [App\Http\Controllers\Sistem\AuthController::class, 'logout'])->name('logout');
Route::post('login_process', [App\Http\Controllers\Sistem\AuthController::class, 'login_proses'])->name('login_proses');
Route::get('dashboard', [App\Http\Controllers\DashController::class, 'index'])->name('dashboard');
Route::get('dash/{id}', [App\Http\Controllers\DashController::class, 'dash1'])->name('dash.show');
Route::get('reportDash', [App\Http\Controllers\DashController::class, 'dash2'])->name('reportDash');
Route::get('surat', [App\Http\Controllers\SuratController::class, 'index'])->name('surat');

// Route::get('pengembalian_apd', [App\Http\Controllers\SuratController::class, 'index'])->name('pengembalian_apd');
// Route::name('surat')->prefix('surat')->group(__DIR__.'/surat.php');

Route::get('dash2', function () { return view('layout.app2'); });

Route::get('testUplad', function () {return view('sistem.user.testupload');});
Route::post('testUpload', [\App\Http\Controllers\Sistem\UserController::class, 'testUpload'])->name('testUpload');

Route::name('inventaris')->prefix('inventaris')->group(__DIR__.'/inventaris.php');
Route::name('surat')->prefix('surat')->group(__DIR__.'/surat.php');
Route::name('sistem')->prefix('sistem')->group(__DIR__.'/sistem.php');
Route::name('esr_corner')->prefix('esr_corner')->group(__DIR__.'/esr_corner.php');
Route::name('mobile')->prefix('mobile')->group(__DIR__.'/mobile.php');
Route::name('questioning')->prefix('questioning')->group(__DIR__.'/questioning.php');
Route::name('report')->prefix('report')->group(__DIR__.'/report.php');

Route::get('csrf', function () {echo csrf_token();});
