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
        $table->id('code');           // PK
        $table->integer('minute');
        $table->string('description')->nullable();
        $table->unsignedBigInteger('player_code'); // jugador que hizo el gol
        $table->unsignedBigInteger('game_code'); // partido en el que hizo el gol
        $table->timestamps();

        $table->foreign('player_code')->references('code')->on('players')->onDelete('cascade');
        $table->foreign('game_code')->references('code')->on('games')->onDelete('cascade');
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
