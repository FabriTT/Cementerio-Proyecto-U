<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \App\Models\Empleado;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Empleado::factory(10)->create();

        $emp1=new Empleado;
        $emp1->id_car='SUDO';
        $emp1->nombres_emp='Fabricio Gabriel';
        $emp1->paterno_emp='Torrez';
        $emp1->materno_emp='Torrez';
        $emp1->carnet_emp='12961156';
        $emp1->usuario_emp='SUDO12961156';
        $emp1->contraseña_emp=Hash::make('12961156');
        $emp1->nacimiento_emp='2002-02-19';
        $emp1->telefono_emp='78837715';
        $emp1->correo_emp='fabricio.torrez123@gmail.com';
        $emp1->estado_emp=1;
        $emp1->save();

    }
}
