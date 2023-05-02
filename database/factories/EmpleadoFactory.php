<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Empleado;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Empleado::class;

    public function definition(): array
    {
        $fecha_minima = strtotime('1983-01-01');
        $fecha_maxima = strtotime('2002-12-31');
        $carnet = sprintf("%04d%04d", fake()->numberBetween(1000, 9999), fake()->numberBetween(1000, 9999));
        $cargo = $this->faker->randomElement(['AACT','ANIC','ASEG','ASER','AUSE','AVEN','SUDO']);
        return [
            'id_car' => $cargo,
            'nombres_emp' => $this->faker->firstname()." ".$this->faker->firstname(),
            'paterno_emp' => $this->faker->lastname(),
            'materno_emp' => $this->faker->lastname(),
            'carnet_emp' => $carnet,
            'usuario_emp' => $cargo.$carnet,
            'contraseña_emp' => Hash::make($carnet),
            'nacimiento_emp' => $this->faker->date('Y-m-d', $this->faker->numberBetween($fecha_minima, $fecha_maxima)),
            'telefono_emp' => sprintf("%04d%04d", fake()->numberBetween(1000, 9999), fake()->numberBetween(1000, 9999)),
            'correo_emp' => $this->faker->unique()->safeEmail(),
            'estado_emp' => 1,
        ];
    }
}
