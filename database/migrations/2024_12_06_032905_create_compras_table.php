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
        Schema::create('compras', function (Blueprint $table) {
            $table->id();

            
            $table->date('fecha');
            $table->unsignedBigInteger('usuario')->nullable(); 
            $table->unsignedBigInteger('instrumento')->nullable();  

            
            $table->timestamps();

            $table->foreign('usuario')->references('id')->on('usuarios'); 
            $table->foreign('instrumento')->references('id')->on('instrumentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};
