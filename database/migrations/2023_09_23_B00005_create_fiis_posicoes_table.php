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
         *                 100,00 ( 5,2)
         *               1.000,00 ( 6,2)
         *              10.000,00 ( 7,2)
         *             100.000,00 ( 8,2)
         *           1.000.000,00 ( 9,2)
         *          10.000.000,00 (10,2)
         *         100.000.000,00 (11,2)
         *       1.000.000.000,00 (12,2)
         *      10.000.000.000,00 (13,2)
         *     100.000.000.000,00 (14,2)
         * 100.000.000.000.000,00 (17,2)
         */

         Schema::create('fiis_posicoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fii_id');

            $table->date('data_da_posicao');
            $table->decimal('cota_valor_mercado', $precision = 10, $scale = 2);
            $table->decimal('cota_valor_patrimonial', $precision = 10, $scale = 2)->nullable();
            $table->decimal('cota_pvp', $precision = 5, $scale = 2)->nullable();
            $table->decimal('valor_patrimonio_liquido', $precision = 17, $scale = 2)->nullable();

            $table->timestamps();

            $table->foreign('fii_id')->references('id')->on('fiis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fiis_posicoes');
    }
};
