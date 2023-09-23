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
        Schema::create('fiis_tipos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categoria_id');

            $table->string('sigla', 15);
            $table->string('nome', 100);
            $table->string('descricao', 255);

            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('fiis_categorias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fiis_tipos');
    }
};
