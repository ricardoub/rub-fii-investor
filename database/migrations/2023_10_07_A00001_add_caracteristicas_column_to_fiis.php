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
        Schema::table('fiis', function (Blueprint $table) {
            $table->text('caracteristicas', 255)->after('descricao')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fiis', function (Blueprint $table) {
            Schema::dropColumn('caracteristicas');
        });
    }
};
