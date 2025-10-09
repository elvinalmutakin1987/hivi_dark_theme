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
        Schema::table('venues', function (Blueprint $table) {
            $table->string('fac_cafe', 2)->nullable();
            $table->string('fac_makanan', 2)->nullable();
            $table->string('fac_minuman', 2)->nullable();
            $table->string('fac_mushola', 2)->nullable();
            $table->string('fac_parkir_motor', 2)->nullable();
            $table->string('fac_parkir_mobil', 2)->nullable();
            $table->string('fac_toko', 2)->nullable();
            $table->string('fac_shower', 2)->nullable();
            $table->string('fac_hot_shower', 2)->nullable();
            $table->string('fac_ruang_ganti', 2)->nullable();
            $table->string('fac_toilet', 2)->nullable();
            $table->string('fac_tribun', 2)->nullable();
            $table->string('fac_medis', 2)->nullable();
            $table->string('fac_warm_up', 2)->nullable();
            $table->string('fac_laktasi', 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('venues', function (Blueprint $table) {
            //
        });
    }
};
