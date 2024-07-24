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
            $table->timestamp('tanggal_pelaksanaan');
            $table->string('area');
            $table->string('lokasi');
            $table->string('nama_pengawas');
            $table->text('deskripsi_temuan');
            $table->string('kategori_temuan');
            $table->text('usulan_tindakan');
            $table->string('foto_tindakan');
            $table->string('folow_up_tindakan');
            $table->text('deskripsi_temuan_2');
            $table->string('kategori_temuan_2');
            $table->text('usulan_tindakan_2');
            $table->string('foto_tindakan_2');
            $table->string('folow_up_tindakan_2');
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
