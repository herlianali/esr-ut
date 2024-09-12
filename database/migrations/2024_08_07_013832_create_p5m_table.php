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
        Schema::create('p5m', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->smallInteger('shift');
            $table->string('nama_pengawas');
            $table->string('dokumentasi');
            $table->string('nama_pemateri');
            $table->text('materi_kplh');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p5m');
    }
};
