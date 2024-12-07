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
        Schema::create('bodegas', function (Blueprint $table) {
            $table->id();

             
            $table->integer('cantidad'); 
            $table->decimal('precio', 8, 2);
            $table->unsignedBigInteger('instrumento') ->nullable();
            
            $table->timestamps();

            $table->foreign('instrumento')->references('id')->on('instrumentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bodegas');
    }
};
