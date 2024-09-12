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
        Schema::create('safety_talk', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('nama_pengawas');
            $table->string('lokasi');
            $table->string('nama_pemateri');
            $table->string('judul');
            $table->smallInteger('penyelenggara');
            $table->string('dokumentasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('safety_talk');
    }
};
