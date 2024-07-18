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

Route::name('inventaris')->prefix('inventaris')->group(__DIR__.'/inventaris.php');
Route::name('surat')->prefix('surat')->group(__DIR__.'/surat.php');
Route::name('employee')->prefix('employee')->group(__DIR__.'/employee.php');
Route::name('esr_corner')->prefix('esr_corner')->group(__DIR__.'/esr_corner.php');

Route::get('genba', function () { return view('questioning.genba.index'); });
Route::get('genba/add', function () { return view('questioning.genba.add'); })->name('genba.add');

Route::get('bbsq_service', function () { return view('questioning.bbsq_service.index'); });
Route::get('bbsq_service/add', function () { return view('questioning.bbsq_service.add'); })->name('bbsq_service.add');

Route::get('bbsq_non_service', function () { return view('questioning.bbsq_non_service.index'); });
Route::get('bbsq_non_service/add', function () { return view('questioning.bbsq_non_service.add'); })->name('bbsq_non_service.add');

Route::get('green_card', function () { return view('questioning.green_card.index'); });
Route::get('green_card/add', function () { return view('questioning.green_card.add'); })->name('green_card.add');
Route::get('green_card/show', function () { return view('questioning.green_card.detail'); })->name('green_card.show');

Route::get('safety_talk', function () { return view('questioning.safety_talk.index'); });
Route::get('safety_talk/add', function () { return view('questioning.safety_talk.add'); })->name('safety_talk.add');

Route::get('personal_contact', function () { return view('questioning.personal_contact.index'); });
Route::get('personal_contact/add', function () { return view('questioning.personal_contact.add'); })->name('personal_contact.add');

Route::get('jsa', function () { return view('questioning.jsa.index'); });
Route::get('jsa/add', function () { return view('questioning.jsa.add'); })->name('jsa.add');

Route::get('p5m', function () { return view('questioning.p5m.index'); });
Route::get('p5m/add', function () { return view('questioning.p5m.add'); })->name('p5m.add');

Route::get('inspeksi_sarana', function () { return view('questioning.inspeksi_sarana.index'); });
Route::get('inspeksi_sarana/add', function () { return view('questioning.inspeksi_sarana.add'); })->name('inspeksi_sarana.add');

Route::get('audit_apd', function () { return view('questioning.audit_apd.index'); });
Route::get('audit_apd/add', function () { return view('questioning.audit_apd.add'); })->name('audit_apd.add');

Route::get('inspeksi_tools', function () { return view('questioning.inspeksi_tools.index'); });
Route::get('inspeksi_tools/add', function () { return view('questioning.inspeksi_tools.add'); })->name('inspeksi_tools.add');

Route::get('housekeeping', function () { return view('questioning.housekeeping.index'); });
Route::get('housekeeping/add', function () { return view('questioning.housekeeping.add'); })->name('housekeeping.add');

Route::get('scml', function () { return view('questioning.scml.index'); });
Route::get('scml/add', function () { return view('questioning.scml.add'); })->name('scml.add');