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
            $table->bigIncrements('id_cli');
            $table->string('nombres_cli',75);
            $table->string('paterno_cli',25);
            $table->string('materno_cli',25);
            $table->string('carnet_cli',8)->unique();
            $table->string('usuario_cli',11)->unique();
            $table->string('contraseña_cli',60)->unique();
            $table->date('nacimiento_cli');
            $table->string('telefono_cli',8)->unique();
            $table->string('correo_cli',50)->unique();
            $table->boolean('estado_cli');
            $table->timestamps();
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
