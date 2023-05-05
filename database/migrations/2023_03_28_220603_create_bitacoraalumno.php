<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bitacoraalumno', function (Blueprint $table) {
            $table->id();
            $table->string('Matricula');
            $table->string('Usuario');
            $table->string('NumEquipo');
            $table->string('Aula');
            $table->string('horaEntrada');
            $table->string('HoraSalida');
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bitacoraalumno');
    }
};
