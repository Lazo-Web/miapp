<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tractora>
 */
class TractoraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "matricula" => $this->faker->bothify('####-???'),
            "marca" => $this->faker->text(50),
            "modelo" => $this->faker->company(),
            "kilometraje" => $this->faker->randomNumber(6, false),
            "consumo_promedio" => $this->faker->numerify('##.##'),
            "matriculacion" => $this->faker->dateTimeThisYear(),
            "ultima_itv" => $this->faker->dateTimeThisYear(now(), null),
        ];
    }
}
