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
        Schema::create('musica', function (Blueprint $table) {
            $table->id(); // Columna ID autoincremental
            $table->string('titulo'); // Título de la música
            $table->string('artista'); // Artista
            $table->string('genero')->nullable(); // Género de la música (opcional)
            $table->integer('duracion'); // Duración en segundos
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('musica');
    }
};
