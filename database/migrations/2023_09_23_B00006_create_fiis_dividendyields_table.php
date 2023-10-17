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
        /**
         *   T   B   M   m
         *                 100,00 ( 5,2) %
         *               1.000,00 ( 6,2)
         *              10.000,00 ( 7,2)
         *             100.000,00 ( 8,2)
         *           1.000.000,00 ( 9,2) vlr, %_ipo
         *          10.000.000,00 (10,2)
         *         100.000.000,00 (11,2)
         *       1.000.000.000,00 (12,2) vlr_ipo
         *      10.000.000.000,00 (13,2)
         *     100.000.000.000,00 (14,2)
         * 100.000.000.000.000,00 (17,2)
         */

         Schema::create('fiis_dividendyields', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fii_id');

            $table->string('competencia', 6)->nullable();
            $table->decimal('valor_mes_1', $precision = 9, $scale = 2)->nullable();
            $table->decimal('valor_mes_3', $precision = 9, $scale = 2)->nullable();
            $table->decimal('valor_mes_6', $precision = 9, $scale = 2)->nullable();
            $table->decimal('valor_mes_12', $precision = 9, $scale = 2)->nullable();
            $table->decimal('valor_desde_ipo', $precision = 12, $scale = 2)->nullable();

            $table->decimal('percentual_mes_1', $precision = 5, $scale = 2)->nullable();
            $table->decimal('percentual_mes_3', $precision = 5, $scale = 2)->nullable();
            $table->decimal('percentual_mes_6', $precision = 5, $scale = 2)->nullable();
            $table->decimal('percentual_mes_12', $precision = 5, $scale = 2)->nullable();
            $table->decimal('percentual_desde_ipo', $precision = 9, $scale = 2)->nullable();

            $table->timestamps();

            $table->foreign('fii_id')->references('id')->on('fiis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fiis_dividendyields');
    }
};
