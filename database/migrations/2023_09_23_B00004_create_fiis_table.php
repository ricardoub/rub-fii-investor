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
        Schema::create('fiis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('administradora_id');
            $table->unsignedBigInteger('tipo_id');
            $table->unsignedBigInteger('segmento_id');

            $table->string('codigo', 25);
            $table->string('nome_pregao', 255)->nullable();
            $table->string('razao_social', 255)->nullable();
            $table->text('descricao', 255)->nullable();
            $table->text('caracteristicas', 255)->nullable();
            $table->string('cnpj',18)->nullable();
            $table->string('prazo_duracao', 25)->nullable();
            $table->date('data_inicio')->nullable();
            $table->date('data_termino')->nullable();
            $table->smallInteger('dia_data_com')->nullable();
            $table->string('url_fundsexplorer')->nullable();

            $table->decimal('taxa_de_administracao', $precision = 6, $scale = 3)->nullable();
            $table->decimal('taxa_de_gestao', $precision = 6, $scale = 3)->nullable();
            $table->decimal('taxa_de_performance', $precision = 6, $scale = 3)->nullable();

            $table->timestamps();

            $table->foreign('administradora_id')->references('id')->on('fiis_administradoras');
            $table->foreign('tipo_id')->references('id')->on('fiis_tipos');
            $table->foreign('segmento_id')->references('id')->on('fiis_segmentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fiis');
    }
};
