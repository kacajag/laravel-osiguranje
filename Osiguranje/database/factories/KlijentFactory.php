<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Zaposleni;

class KlijentFactory extends Factory
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
            'zaposleni_id' => Zaposleni::factory()
        ];

    }
}
