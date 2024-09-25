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
            $table->string('perusahaan_karyawan');
            $table->string('jenis_pekerjaan')->nullable();
            $table->string('lokasi');
            $table->string('checklist_deskripsi')->nullable();
            $table->longText('prosedur');
            $table->longText('peralatan');
            $table->longText('lingkungan_kerja');
            $table->longText('karyawan');
            $table->text('tta_temuan');
            $table->string('kategori_deviasi_tta');
            $table->string('folowup_tta');
            $table->string('kategori_deviasi_kta');
            $table->string('folowup_kta');
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
