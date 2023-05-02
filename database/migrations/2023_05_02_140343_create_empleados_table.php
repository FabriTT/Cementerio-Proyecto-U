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
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id_emp');
            $table->string('id_car');
            $table->string('nombres_emp',75);
            $table->string('paterno_emp',25);
            $table->string('materno_emp',25);
            $table->string('carnet_emp',8)->unique();
            $table->string('usuario_emp',12)->unique();
            $table->string('contraseña_emp',60)->unique();
            $table->date('nacimiento_emp');
            $table->string('telefono_emp',8)->unique();
            $table->string('correo_emp',50)->unique();
            $table->boolean('estado_emp');
            $table->foreign('id_car')->references('id_car')->on('cargos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
