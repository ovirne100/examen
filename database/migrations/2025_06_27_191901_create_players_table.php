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
            $table->id('code')->unique(); // pk
            $table->string('name');
            $table->string('position');
            $table->date('birth_date');

            $table->unsignedBigInteger('team_code'); // fk de teams
            $table->foreign('team_code')->references('code')->on('teams')->onDelete('cascade');
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
