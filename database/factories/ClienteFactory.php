<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Cliente;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Cliente::class;

    public function definition(): array
    {

        $fecha_minima = strtotime('1983-01-01');
        $fecha_maxima = strtotime('2002-12-31');
        $carnet = sprintf("%04d%04d", fake()->numberBetween(1000, 9999), fake()->numberBetween(1000, 9999));
        
        return [
            'nombres_cli' => $this->faker->firstname()." ".$this->faker->firstname(),
            'paterno_cli' => $this->faker->lastname(),
            'materno_cli' => $this->faker->lastname(),
            'carnet_cli' => $carnet,
            'usuario_cli' => 'CLI'.$carnet,
            'contraseña_cli' => Hash::make($carnet),
            'nacimiento_cli' => $this->faker->date('Y-m-d', $this->faker->numberBetween($fecha_minima, $fecha_maxima)),
            'telefono_cli' => sprintf("%04d%04d", fake()->numberBetween(1000, 9999), fake()->numberBetween(1000, 9999)),
            'correo_cli' => $this->faker->unique()->safeEmail(),
            'estado_cli' => 1,
        ];
    }
}
