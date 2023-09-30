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
        Schema::create('fiis_administradoras', function (Blueprint $table) {
            $table->id();

            $table->string('nome', 255);
            $table->string('cnpj',16)->nullable();
            $table->string('telefone', 25)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('site', 255)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fiis_administradoras');
    }
};
