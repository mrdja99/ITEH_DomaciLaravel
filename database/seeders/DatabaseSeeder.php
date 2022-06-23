<?php

namespace Database\Seeders;

use App\Models\Film;
use App\Models\Gledalac;
use App\Models\Projekcija;
use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Factories\FilmFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){

        Projekcija::truncate();
        Gledalac::truncate();
        User::truncate();
        Film::truncate();


        User::factory(10)->create();
        $this -> call(GledalacSeeder::class);



        $projekcija1 = Projekcija::create([
            'time'=> '18h',
            'cinema'=> 'Roda Cineplex',
            'hall' => 'Sala 1'
        ]);

        $projekcija2 = Projekcija::create([
            'time'=> '20h',
            'cinema'=> 'Tuckwood Cineplex',
            'hall' => 'Sala Merilin Monro'
        ]);

        $projekcija3 = Projekcija::create([
            'time'=> '19h',
            'cinema'=> 'Cinegrand',
            'hall' => 'Sala 3'
        ]);

        $film1 = Film::create([
            'title'=> 'Jurassic Park',
            'director'=> 'Spielberg',
            'actors' => 'Pratt',
            'synopsys' => 'New movie in cinemas',
            'projekcija_id' => 2,
            'producer' => 'Cooper'
        ]);

        $film2 = Film::create([
            'title'=> 'Pulp Fiction',
            'director'=> 'Quentin Tarantino',
            'actors' => 'John Travolta',
            'synopsys' => 'Old classic Taratino movie',
            'projekcija_id' => 1,
            'producer' => 'Samuel L. Jackson'
        ]);

        $film3 = Film::create([
            'title'=> 'Titanic',
            'director'=> 'James Cameron',
            'actors' => 'Leonardo DiCaprio',
            'synopsys' => 'Oscar winner from 1998',
            'projekcija_id' => 3,
            'producer' => 'Kate Winslet'
        ]);
    }
}
