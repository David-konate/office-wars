<?php

namespace Database\Seeders;

use App\Models\Site;
use App\Models\Event;
use App\Models\Image;
use App\Models\Planet;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $event1 = Event::create([
            'eventName' => "BountaRace",
            'eventDescription' => 'Description de la Course de la Bounta.',
            'dateTime' => now(),
            'slug' => Str::slug('Course de la Bounta'),
            'planet_id' => Planet::inRandomOrder()->first()->id,
            'site_id' => Site::inRandomOrder()->first()->id,
        ]);
        // Créer des images pour l'événement 1
        // $this->createEventImages($event1, 3);

        $event2 = Event::create([
            'eventName' => "GeoArena",

            'eventDescription' => 'Description de GeoArena.',
            'dateTime' => now(),
            'slug' => Str::slug('GeoArena'),
            'planet_id' => Planet::inRandomOrder()->first()->id,
            'site_id' => Site::inRandomOrder()->first()->id,
        ]);

        // Créer des images pour l'événement 2
        $this->createEventImages($event2, 2);

        $event3 = Event::create([
            'eventName' => "Naboo Light",

            'eventDescription' => 'Description de Naboo Light.',
            'dateTime' => now(),
            'slug' => Str::slug('Naboo Light'),
            'planet_id' => Planet::inRandomOrder()->first()->id,
            'site_id' => Site::inRandomOrder()->first()->id,
        ]);

        // Créer des images pour l'événement 3
        $this->createEventImages($event3, 1);
    }

    /**
     * Créer des images pour un événement spécifique.
     *
     * @param \App\Models\Event $event
     * @param int $count
     */
    private function createEventImages(Event $event, int $count): void
    {
        for ($i = 1; $i <= $count; $i++) {
            Image::create([
                'imageName' => "Event {$event->id} Image $i",
                'planet_id' => $event->planet_id,
                'site_id' => $event->site_id,
                'event_id' => $event->id,
                'slug' => Str::slug("Event {$event->id} Image $i"),
            ]);
        }
    }
}
