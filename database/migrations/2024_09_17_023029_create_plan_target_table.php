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
        Schema::create('plan_target', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->string('item');
            $table->string('management_ut');
            $table->string('dept_head_ut');
            $table->string('supervisor_ut');
            $table->string('leader_ut');
            $table->string('pjo_mitra');
            $table->string('pengawas_mitra');
            $table->string('pic_esr_mitra');
            $table->string('advisor_qa');
            $table->string('psce');
            $table->string('qa_officer');
            $table->string('all_karyawan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_target');
    }
};
