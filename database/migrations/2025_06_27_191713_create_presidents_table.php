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
        $table->string('name');
        $table->string('last_name');
        $table->date('birth_date');
        $table->integer('year');
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
