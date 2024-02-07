<?php

namespace Database\Seeders;

use App\Models\Site;
use App\Models\Event;
use App\Models\Image;
use App\Models\Planet;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ajouter les images pour tous les sites
        Site::all()->each(function ($site) {
            $this->createImages($site, 'public/sites');
        });

        // Ajouter les images pour tous les événements
        Event::all()->each(function ($event) {
            $this->createImages($event, 'public/paysages');
        });

        // Ajouter les images pour toutes les planètes
        Planet::all()->each(function ($planet) {
            $this->createImages($planet, 'public/planets');
        });
    }

    /**
     * Crée des images pour une entité spécifique.
     *
     * @param \Illuminate\Database\Eloquent\Model $entity
     * @param string $folderPath
     * @return void
     */
    private function createImages($entity, string $folderPath): void
    {

        for ($i = 1; $i <= 4; $i++) {
            Image::factory()->create([
                'imageName' => "Image $i",
                'event_id' => $entity instanceof Event ? $entity->id : null,
                'site_id' => $entity instanceof Site ? $entity->id : null,
                'planet_id' => $entity instanceof Planet ? $entity->id : null,
                'imagePath' => $this->getRandomImageFromFolder($folderPath) ?? null,
                'slug' => Str::slug("Image $i"),
            ]);
        }
    }

    /**
     * Récupère de manière aléatoire le chemin d'une image dans le dossier spécifié.
     *
     * @param string $folderPath
     * @return string|null
     */
    private function getRandomImageFromFolder(string $folderPath): ?string
    {
        // Récupérez la liste des images dans le dossier spécifié
        $images = Storage::files($folderPath);

        // Choisissez une image de manière aléatoire
        $randomImage = count($images) > 0 ? $images[array_rand($images)] : null;

        // Retournez le chemin complet de l'image
        return $randomImage ? $randomImage : null;
    }
}
