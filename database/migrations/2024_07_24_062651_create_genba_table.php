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
        Schema::create('genba', function (Blueprint $table) {
            $table->id();
            $table->datetimes('tanggal');
            $table->string('area');
            $table->string('lokasi');
            $table->string('nama_pengawas');
            $table->text('deskripsi_tindakan');
            $table->string('kategori_tindakan');
            $table->text('usulan_tindakan');
            $table->string('foto_tindakan');
            $table->string('follow_up_tindakan');
            $table->text('deskripsi_kondisi');
            $table->text('kategori_kondisi');
            $table->text('usulan_kondisi');
            $table->string('foto_kondisi');
            $table->string('follow_up_kondisi');
            $table->string('keikutsertaan');
            $table->string('penyelenggara');
            $table->string('dokumentasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genba');
    }
};
