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
        Schema::create('personal_contact', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('nama_pengawas');
            $table->string('nama_karyawan');
            $table->string('jabatan');
            $table->smallInteger('perusahaan');
            $table->smallInteger('topik');
            $table->text('isi_pembahasan_topik');
            $table->text('isi_pembahasan_tta');
            $table->text('kesimpulan');
            $table->smallInteger('is_personal_contact');
            $table->smallInteger('is_persetujuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_contact');
    }
};
