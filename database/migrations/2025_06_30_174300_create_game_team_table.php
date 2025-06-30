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
        Schema::create('game_team', function (Blueprint $table) {
            $table->unsignedBigInteger('game_code'); 
            $table->unsignedBigInteger('team_code');

            $table->foreign('game_code')->references('code')->on('games')->onDelete('cascade');
            $table->foreign('team_code')->references('code')->on('games')->onDelete('cascade');

            $table->primary(['game_code', 'team_code']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_team');
    }
};
