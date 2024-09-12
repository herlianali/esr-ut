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
        Schema::create('inspeksi_sarana', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('nama_pengawas');
            $table->string('lokasi_inspeksi');
            $table->string('nomor_lambung');
            $table->string('checklist_inspeksi');
            $table->longText('kondisi_kendaraan');
            $table->text('catatan_kondisi_kendaraan');
            $table->longText('driver_dan_penumpang');
            $table->text('catatan_penumpang');
            $table->longText('prosedur_standar');
            $table->text('catatan_prosedur');
            $table->smallInteger('is_feedback');
            $table->text('catatan_khusus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspeksi_sarana');
    }
};
