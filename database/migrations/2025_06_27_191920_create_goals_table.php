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
    Schema::create('goals', function (Blueprint $table) {
        $table->id('codigo');           // PK
        $table->integer('minuto');
        $table->string('desc');
        $table->unsignedBigInteger('jugador_id'); // FK a jugadores
        $table->unsignedBigInteger('partido_id'); // FK a partidos
        $table->timestamps();

        $table->foreign('jugador_id')->references('codigo')->on('players')->onDelete('cascade');
        $table->foreign('partido_id')->references('codigo')->on('games')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goals');
    }
};
