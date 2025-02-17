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
        Schema::create('propiedades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('direccion');
            $table->bigInteger('id_agente')->unsigned()->nullable(); 
            $table->bigInteger('id_categoria')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('id_agente')->references('id')->on('agentes')->onDelete('set null');
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propiedades');
    }
};
