<?php

namespace Database\Factories;

use App\Models\Site;
use App\Models\Planet;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        $planet = Planet::inRandomOrder()->first();
        $accomodationName = $this->faker->word;
        return [
            'accomodationName' => $accomodationName,
            'accomodationType' => $this->faker->word,
            'numberOfRoom' => $this->faker->numberBetween(1, 10),
            'rates' => $this->faker->randomFloat(2, 50, 500),
            'slug' => $this->faker->word,
            "planet_id" =>  $planet->id,
        ];
    }
}
