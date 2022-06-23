<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjekcijaFactory extends Factory
{
    protected $model = Projekcija::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'time'=>$this->faker->word(),
            'cinema'=>$this->faker->sentence(),
            'hall'=>$this->faker->sentence()

        ];
    }
}
