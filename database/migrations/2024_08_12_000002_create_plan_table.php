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
        Schema::create('plan', function (Blueprint $table) {
            $table->id();
            $table->date('bulan');
            $table->unsignedBigInteger('pengawas_id');
            $table->double('gc_plan_awal');
            $table->double('gc_plan_proporsional');
            $table->double('st_plan_awal');
            $table->double('st_plan_proporsional');
            $table->double('jsa_plan_awal');
            $table->double('jsa_plan_proporsional');
            $table->double('p5m_plan_awal');
            $table->double('p5m_plan_proporsional');
            $table->double('flpg_plan_awal');
            $table->double('flpg_plan_proporsional');
            $table->double('hk_plan_awal');
            $table->double('hk_plan_proporsional');
            $table->timestamps();
            $table->foreign('pengawas_id')->references('id')->on('pengawas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan');
    }
};
