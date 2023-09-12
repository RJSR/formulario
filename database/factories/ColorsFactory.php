<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Colors>
 */
class ColorsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "maincolor" => $this->faker->hexColor,
            "seccolor" => $this->faker->hexColor,
            "thirdcolor" => $this->faker->hexColor,
            "bgcolor" => $this->faker->hexColor,
            "fontcolor" => $this->faker->hexColor,

        ];
    }
}
