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
        Schema::create('flpg', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('nama_pengawas');
            $table->string('lokasi');
            $table->string('jenis_pekerjaan');
            $table->string('aktivitas_flpg');
            $table->longText('aktivitas');
            $table->text('catatan');
            $table->smallInteger('is_flpg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flpg');
    }
};
