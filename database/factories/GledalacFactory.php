<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GledalacFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
        ];
    }
}
