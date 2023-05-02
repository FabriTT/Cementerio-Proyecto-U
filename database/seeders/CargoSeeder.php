<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Cargo;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $car1=new Cargo;
        $car1->id_car='AUSE';
        $car1->descripcion_car='Administrador de usuarios';
        $car1->save();

        $car2=new Cargo;
        $car2->id_car='AACT';
        $car2->descripcion_car='Administrador de actas de defuncion';
        $car2->save();

        $car3=new Cargo;
        $car3->id_car='ANIC';
        $car3->descripcion_car='Administrador de nichos';
        $car3->save();

        $car4=new Cargo;
        $car4->id_car='ASER';
        $car4->descripcion_car='Administrador de servicios';
        $car4->save();

        $car5=new Cargo;
        $car5->id_car='AVEN';
        $car5->descripcion_car='Administrador de ventas';
        $car5->save();

        $car6=new Cargo;
        $car6->id_car='ASEG';
        $car6->descripcion_car='Administrador de seguridad';
        $car6->save();

        $car7=new Cargo;
        $car7->id_car='SUDO';
        $car7->descripcion_car='Super usuario';
        $car7->save();

        
    }
}
