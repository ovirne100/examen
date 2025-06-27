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
        Schema::create('players', function (Blueprint $table) {
            $table->id('codigo')->unique(); // clave natural
            $table->string('nombre');
            $table->string('posición');
            $table->date('fecha_nac');
            $table->unsignedBigInteger('team_codigo'); //fk a equipos
            // Clave foránea
            $table->foreign('team_codigo')->references('codigo')->on('teams');
            $table->timestamps();
        });
    }





    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
