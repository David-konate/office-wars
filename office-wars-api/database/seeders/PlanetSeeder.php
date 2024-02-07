<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Planet;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Création de la planète Naboo avec des données aléatoires
        Planet::create([
            'planetName' => 'Naboo',
            'planetDescription' => $faker->text($faker->numberBetween(250, 400)),
            'galacticCoordinates' => $faker->word,
            'population' => $faker->numberBetween(100000, 10000000),
            'slug' => 'naboo',
        ]);

        // Création de la planète Tatooine
        Planet::create([
            'planetName' => 'Tatooine',
            'planetDescription' => $faker->text($faker->numberBetween(250, 400)),
            'galacticCoordinates' => $faker->word,
            'population' => $faker->numberBetween(100000, 10000000),
            'slug' => 'tatooine',
        ]);

        // Création de la planète Cantonica
        Planet::create([
            'planetName' => 'Cantonica',
            'planetDescription' => $faker->text($faker->numberBetween(250, 400)),
            'galacticCoordinates' => $faker->word,
            'population' => $faker->numberBetween(100000, 10000000),
            'slug' => 'cantonica',
        ]);

        // Création de la planète Coruscant
        Planet::create([
            'planetName' => 'Coruscant',
            'planetDescription' => $faker->text($faker->numberBetween(250, 400)),
            'galacticCoordinates' => $faker->word,
            'population' => $faker->numberBetween(100000, 10000000),
            'slug' => 'coruscant',
        ]);

        // Création de la planète Geonosis
        Planet::create([
            'planetName' => 'Geonosis',
            'planetDescription' => $faker->text($faker->numberBetween(250, 400)),
            'galacticCoordinates' => $faker->word,
            'population' => $faker->numberBetween(100000, 10000000),
            'slug' => 'geonosis',
        ]);

        // Création de la planète Mandalore
        Planet::create([
            'planetName' => 'Mandalore',
            'planetDescription' => $faker->text($faker->numberBetween(250, 400)),
            'galacticCoordinates' => $faker->word,
            'population' => $faker->numberBetween(100000, 10000000),
            'slug' => 'mandalore',
        ]);

        // Création de la planète Takodana
        Planet::create([
            'planetName' => 'Takodana',
            'planetDescription' => $faker->text($faker->numberBetween(250, 400)),
            'galacticCoordinates' => $faker->word,
            'population' => $faker->numberBetween(100000, 10000000),
            'slug' => 'takodana',

        ]);
    }
}
