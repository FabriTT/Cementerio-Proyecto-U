<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use \App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Cliente::factory(10)->create();

        $cl1=new Cliente;
        $cl1->nombres_cli='Fabricio Gabriel';
        $cl1->paterno_cli='Torrez';
        $cl1->materno_cli='Torrez';
        $cl1->carnet_cli='12961156';
        $cl1->usuario_cli='CLI12961156';
        $cl1->contraseña_cli=Hash::make('12961156');
        $cl1->nacimiento_cli='2002-02-19';
        $cl1->telefono_cli='78837715';
        $cl1->correo_cli='fabricio.torrez123@gmail.com';
        $cl1->estado_cli=1;
        $cl1->save();

    }
}
