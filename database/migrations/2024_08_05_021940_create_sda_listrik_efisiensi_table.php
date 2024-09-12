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
        Schema::create('sda_listrik_efisiensi', function (Blueprint $table) {
            $table->id();
            $table->year('tahun');
            $table->double('rata_harga');
            $table->double('rata_kwh');
            $table->double('rata_%');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sda_listrik_efisiensi');
    }
};
