<?php

namespace Database\Factories;

use App\Models\Projekcija;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

class FilmFactory extends Factory
{
    protected $model = Film::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->title(),
            'director'=>$this->faker->sentence(),
            'actors'=>$this->faker->paragraph(),
            'synopsys'=>$this->faker->paragraph(),
            'projekcija_id'=> Projekcija::factory(),
        ];
    }
}
