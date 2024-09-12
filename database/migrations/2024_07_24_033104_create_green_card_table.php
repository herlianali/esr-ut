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
        Schema::create('green_card', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('jabatan');
            $table->string('pengawas')->nullable();
            $table->string('nama_pengawas');
            $table->string('non_pengawas')->nullable();
            $table->string('nama_lengkap');
            $table->string('nrp');
            $table->string('perusahaan');
            $table->string('sektor');
            $table->string('laporan_bahaya')->nullable();
            $table->string('lokasi_bahaya');
            $table->string('detail_lokasi');
            $table->string('sektor_bahaya');
            $table->string('tindakan');
            $table->string('ketegori_deviasi');
            $table->smallInteger('kategori_temuan');
            $table->string('kta_lanjut1')->nullable();
            $table->smallInteger('kontribusi');
            $table->string('kta_lanjut2')->nullable();
            $table->string('penjelasan');
            $table->string('tindakan_perbaikan')->nullable();
            $table->string('usulan_tindakan');
            $table->string('foto')->nullable();
            $table->smallInteger('is_perbaikan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('green_card');
    }
};
