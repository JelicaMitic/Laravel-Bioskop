<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv'=>$this->faker->realText($maxNbChars = 20),
            'godina'=>$this->faker->numberBetween($min = 1950, $max = 2022),
            'zanr_id'=>$this->faker->numberBetween($min = 1, $max = 30),
            'reziser_id'=>$this->faker->numberBetween($min = 1, $max = 30),
            'opis'=>$this->faker->realText($maxNbChars = 60)
        ];
    }
}
