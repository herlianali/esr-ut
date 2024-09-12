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
        Schema::create('jsa', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('nama_pengawas');
            $table->smallInteger('posisi');
            $table->string('review');
            $table->smallInteger('jenis_review');
            $table->string('judul_jsa');
            $table->string('nomor_jsa');
            $table->integer('jumlah_pekerja');
            $table->text('hasil_review');
            $table->string('sosialisasi_jsa');
            $table->smallInteger('shift');
            $table->string('lokasi_pelaksanan');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jsa');
    }
};
