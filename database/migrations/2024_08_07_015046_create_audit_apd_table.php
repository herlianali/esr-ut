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
        Schema::create('audit_apd', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('nama_pengawas');
            $table->string('mialokasi');
            $table->longText('checklist_audit');
            $table->integer('jumlah_karyawan_audit');
            $table->smallInteger('is_deviasi');
            $table->string('deviasi');
            $table->integer('jumlah_karyawan_deviasi');
            $table->text('detail_temuan');
            $table->string('nama_karyawan');
            $table->string('jabatan_karyawan');
            $table->string('perusahaan');
            $table->string('validasi');
            $table->smallInteger('is_audit');
            $table->text('catatan_khusus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audit_apd');
    }
};
