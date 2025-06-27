<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

        // este

public function up(): void
{
    Schema::create('teams', function (Blueprint $table) {
        $table->engine = 'InnoDB';
        $table->id('codigo'); // PK
        $table->string('estadio');
        $table->integer('aforo');
        $table->integer('año');
        $table->string('presidente_dni');
        $table->timestamps();

        $table->foreign('presidente_dni')->references('dni')->on('presidents')->onDelete('cascade');
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
