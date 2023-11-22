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
        Schema::table('sesiones', function (Blueprint $table) {
            $table->renameColumn('date_start', 'fecha_inicio');
            $table->renameColumn('date_end', 'fecha_fin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sesiones', function (Blueprint $table) {
            $table->renameColumn('fecha_inicio', 'date_start');
            $table->renameColumn('fecha_fin', 'date_end');
        });
    }
};
