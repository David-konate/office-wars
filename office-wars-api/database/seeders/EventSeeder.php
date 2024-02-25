<?php

namespace Database\Seeders;


use App\Models\Event;
use App\Models\Image;

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::factory(20)->create()->each(function ($event) {
            // Liste des noms de fichiers d'images possibles
            $imageOptions = ['module.jpg', 'feteNaboo.jpg', 'fetelumiere.jpg', 'stmp.jpg', 'tunisia.jpg'];

            // Associer images à l'événement
            foreach ($imageOptions as $imageName) {
                Image::create([
                    'event_id'   => $event->id,
                    'imagePath'  => $imageName, // Tu devras peut-être ajuster cela en fonction de ta structure réelle de stockage des images
                ]);
            }
        });
    }
}
