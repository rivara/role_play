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
    Schema::create('vehiculos', function (Blueprint $table) {
        $table->id();
        $table->integer('precio_mes');
        $table->integer('autonomia');
        $table->integer('duracion');
        $table->string('requerimiento');
        $table->unsignedBigInteger('cliente_id')->nullable();
        $table->timestamps();
    
        $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('set null');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
