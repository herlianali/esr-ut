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
        Schema::create('questioning_option', function (Blueprint $table) {
            $table->id();
            $table->string('menu')->nullable();
            $table->string('title')->nullable();
            $table->text('pertanyaan')->nullable();
            $table->string('identifier')->nullable();
            $table->string('sub_identifier')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questioning_option');
    }
};
