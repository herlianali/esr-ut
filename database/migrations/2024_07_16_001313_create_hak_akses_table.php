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
        Schema::create('hak_akses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_level_id');
            $table->unsignedBigInteger('fitur_program_id');
            $table->timestamps();
            $table->foreign('user_level_id')->references('id')
                ->on('user_level')->onDelete('cascade');
            $table->foreign('fitur_program_id')->references('id')
                ->on('fitur_program')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hak_akses');
    }
};
