<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->string('referencia_ubicacion')->nullable(); // Nuevo campo
            $table->string('telefono', 10)->change(); // Ajustar el campo 'telefono' para aceptar 10 caracteres
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {

        }
    };
