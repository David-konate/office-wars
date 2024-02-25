<?php

namespace Database\Factories;

use App\Models\Site;
use App\Models\Event;
use App\Models\Planet;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $randomPlanetId = Planet::inRandomOrder()->value('id');
        $randomSiteId = Site::inRandomOrder()->value('id');

        // Liste des noms de fichiers d'images possibles

        return [
            'eventName' => $this->faker->words(2, true),
            'eventDescription' => $this->faker->paragraph,
            'dateTime' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'slug' => Str::slug($this->faker->words(2, true)),
            'planet_id' => $randomPlanetId,

        ];
    }
}
