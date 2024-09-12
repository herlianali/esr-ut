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
        Schema::create('sda_air_efisiensi', function (Blueprint $table) {
            $table->id();
            $table->year('tahun');
            $table->double('rata_volume_air');
            $table->double('rata_jumlah_karyawan');
            $table->double('efisiensi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sda_air_efisiensi');
    }
};
