<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\OsiguravajucaKuca;

class ZaposleniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'email' => $this->faker->unique()->email(),
            'pozicija' => $this->faker->jobTitle(),
            'broj_kartice' => $this->faker->unique()->creditCardNumber(),
            'kuca_id' => OsiguravajucaKuca::factory()
        ];

    }
}
