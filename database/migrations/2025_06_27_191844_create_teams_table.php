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
        $table->id('code'); // PK
        $table->string('name');
        $table->integer('stadium');
        $table->integer('capacity');
        $table->string('year');
        $table->string('president_dni'); // 1 a 1 relacion con presidents
        $table->timestamps();

        $table->foreign('president_dni')->references('dni')->on('presidents')->onDelete('cascade');
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
