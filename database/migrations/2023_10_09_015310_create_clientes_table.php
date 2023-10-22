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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_cliente', 50);
            $table->string('apellido_paterno_cliente', 50);
            $table->string('apellido_materno_cliente', 50);
            $table->string('email', 100);
            $table->integer('telefono');
            $table->string('direccion', 255);
            $table->unsignedBigInteger('equipo_id')->nullable();
            $table->unsignedBigInteger('sesion_id')->nullable();
            $table->unsignedBigInteger('transaccion_id')->nullable();
            $table->unsignedBigInteger('contrato_id')->nullable();
            $table->unsignedBigInteger('users_id')->nullable();
            $table->timestamps();


            $table->foreign('equipo_id')->references('id')->on('equipos');
            $table->foreign('sesion_id')->references('id')->on('sesiones');
            $table->foreign('transaccion_id')->references('id')->on('transacciones');
            $table->foreign('contrato_id')->references('id')->on('contratos');
            $table->foreign('users_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
