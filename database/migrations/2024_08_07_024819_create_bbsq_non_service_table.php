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
        Schema::create('bbsq_non_service', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('nama_pengawas');
            $table->string('nama_karyawan');
            $table->string('jabatan_karyawan');
            $table->smallInteger('perusahaan_karyawan');
            $table->string('jenis_pekerjaan')->nullable();
            $table->smallInteger('lokasi');
            $table->string('checklist_deskripsi')->nullable();
            $table->longText('prosedur');
            $table->longText('peralatan');
            $table->longText('lingkungan_kerja');
            $table->longText('karyawan');
            $table->string('tta_temuan');
            $table->smallInteger('kategori_deviasi_tta');
            $table->smallInteger('folowup_tta');
            $table->smallInteger('kategori_deviasi_kta');
            $table->smallInteger('folowup_kta');
            $table->string('kontrol_tambahan')->nullable();
            $table->smallInteger('feedback_1');
            $table->smallInteger('feedback_2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bbsq_non_service');
    }
};
