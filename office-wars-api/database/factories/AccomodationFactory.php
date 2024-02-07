<?php

namespace Database\Factories;

use App\Models\Accomodation;
use App\Models\Site;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AccomodationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $site = Site::inRandomOrder()->first(); // Sélectionnez un site aléatoire

        $accommodationName = $this->faker->word;
        return [
            'accommodationName' => $accommodationName,
            'accommodationType' => $this->faker->word,
            'numberOfRoom' => $this->faker->numberBetween(1, 10),
            'rates' => $this->faker->randomFloat(2, 50, 500),
            'slug' => $this->faker->word,

            'site_id' => $site->id,
        ];
    }
}
