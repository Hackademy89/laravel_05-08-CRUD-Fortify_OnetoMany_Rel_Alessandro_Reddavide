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
        Schema::create('movie_platform', function (Blueprint $table) {
            $table->id();
            $table->foreignId('movie_id')->constrained(); /* refactoring del commento sotto, capisce in automatico che movie_id deve*/
            $table->foreignId('platform_id')->constrained(); /* riferirsi a movie, lo stesso per platform*/

            // $table->unsignedBigInteger('movie_id');
            // $table->foreign('movie_id')->references('id')->on('movies');
            // $table->unsignedBigInteger('platform_id');
            // $table->foreign('platform_id')->references('id')->on('platforms');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie_platform');
    }
};
