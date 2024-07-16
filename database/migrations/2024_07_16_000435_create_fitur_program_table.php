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
        Schema::create('fitur_program', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('url')->nullable();
            $table->string('icon')->nullable();
            $table->string('kode');
            $table->string('parent_kode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fitur_program');
    }
};
