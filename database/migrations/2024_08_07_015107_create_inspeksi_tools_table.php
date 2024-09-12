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
        Schema::create('inspeksi_tools', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('nama_pengawas');
            $table->smallInteger('posisi');
            $table->string('laporan_ko');
            $table->smallInteger('is_laporan_ko');
            $table->date('tanggal_laporan');
            $table->string('inspeksi_tools');
            $table->smallInteger('is_inspeksi_tools');
            $table->date('tanggal_inspeksi');
            $table->string('jenis_tools');
            $table->string('deviasi_temuan');
            $table->string('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspeksi_tools');
    }
};
