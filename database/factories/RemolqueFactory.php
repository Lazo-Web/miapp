<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Remolque>
 */
class RemolqueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "matricula" => $this->faker->bothify('?-####-?'),
            "marca" => $this->faker->text(7),
            "numero_chasis" => $this->faker->bothify('??#??????????#####'),
            "matriculacion" => $this->faker->dateTimeThisYear(),
            "ultima_itv" => $this->faker->dateTimeThisYear(now(), null),
            "atp" => $this->faker->dateTimeThisYear(now(), null),
        ];
    }
}

