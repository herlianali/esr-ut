<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bbsq_service', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('nama_pengawas');
            $table->string('lokasi_pelaksanaan');
            $table->string('nama_karyawan');
            $table->smallInteger('perusahaan_karyawan');
            $table->string('aktivitas');
            $table->string('kategori_observasi');
            $table->longText('observasi');
            $table->text('catatan_deskripsi')->nullable();
            $table->text('deskripsi_perilaku')->nullable();
            $table->text('yang_dilakukan')->nullable();
            $table->smallInteger('rintangan')->nullable();
            $table->smallInteger('is_perilaku_beresiko')->nullable();
            $table->string('tindakan_perbaikan')->nullable();
            $table->string('tindakan_pencegahan')->nullable();
            $table->smallInteger('is_temuan_beresiko')->nullable();
            $table->text('catatan_deskripsi_2')->nullable();
            $table->text('deskripsi_perilaku_2')->nullable();
            $table->text('yang_dilakukan_2')->nullable();
            $table->smallInteger('rintangan_2')->nullable();
            $table->smallInteger('is_perilaku_beresiko_2')->nullable();
            $table->string('tindakan_perbaikan_2')->nullable();
            $table->string('tindakan_pencegahan_2')->nullable();
            $table->smallInteger('is_feedback_1')->nullable();
            $table->smallInteger('is_feedback_2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bbsq_service');
    }
};
