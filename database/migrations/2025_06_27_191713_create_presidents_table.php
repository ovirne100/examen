<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

        //este

public function up(): void
{
    Schema::create('presidents', function (Blueprint $table) {
        $table->string('dni')->primary(); // PK
        $table->string('nombre');
        $table->string('apellidos');
        $table->date('fecha_nac');
        $table->integer('año');
        $table->timestamps();
    });
}
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presidents');
    }
};
