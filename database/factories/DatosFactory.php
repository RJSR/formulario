<?php

namespace Database\Factories;
use App\Models\Datos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Datos>
 */
class DatosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nombre" => $this->faker->company,
            "rif" => $this->faker->numerify,
            "tlf1" => $this->faker->phoneNumber,
            "tlf2" => $this->faker->phoneNumber,
            "correo1" => $this->faker->email,
            "correo2" => $this->faker->email,
            "diredo" => $this->faker->country,
            "dirpais" => $this->faker->country
        ];
    }
}
