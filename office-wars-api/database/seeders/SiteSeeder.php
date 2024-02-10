<?php

namespace Database\Seeders;

use App\Models\Site;
use App\Models\Planet;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Créez le site "Casicanto"
        Site::create([
            'siteName' => 'Casicanto',
            'siteDescription' => 'Description de Casicanto.',
            'touristActivities' => 'Activités touristiques à Casicanto.',
            'attractionType' => 'Type d\'attraction à Casicanto.',
            'shops' => 'Boutiques à Casicanto.',
            'slug' => Str::slug('Casicanto'),
            'planet_id' => Planet::inRandomOrder()->first()->id,
        ]);

        // Ajoutez plusieurs images au site "Casicanto"

        // Créez le site "Palais de Jabba"
        Site::create([
            'siteName' => 'Palais de Jabba',
            'siteDescription' => 'Description du Palais de Jabba.',
            'touristActivities' => 'Activités touristiques au Palais de Jabba.',
            'attractionType' => 'Type d\'attraction au Palais de Jabba.',
            'shops' => 'Boutiques au Palais de Jabba.',
            'slug' => Str::slug('Palais de Jabba'),
            'planet_id' => Planet::inRandomOrder()->first()->id,
        ]);

        // Ajoutez plusieurs images au site "Palais de Jabba"

        // Rajoutez le lieu "Temple Jedi"
        Site::create([
            'siteName' => 'Temple Jedi',
            'siteDescription' => 'Description du Temple Jedi.',
            'touristActivities' => 'Activités touristiques au Temple Jedi.',
            'attractionType' => 'Type d\'attraction au Temple Jedi.',
            'shops' => 'Boutiques au Temple Jedi.',
            'slug' => Str::slug('Temple Jedi'),
            'planet_id' => Planet::inRandomOrder()->first()->id,
        ]);

        // Ajoutez plusieurs images au site "Temple Jedi"

        // Rajoutez le lieu "Gungan City"
        Site::create([
            'siteName' => 'Gungan City',
            'siteDescription' => 'Description de Gungan City.',
            'touristActivities' => 'Activités touristiques à Gungan City.',
            'attractionType' => 'Type d\'attraction à Gungan City.',
            'shops' => 'Boutiques à Gungan City.',
            'slug' => Str::slug('Gungan City'),
            'planet_id' => Planet::inRandomOrder()->first()->id,
        ]);

        // Ajoutez plusieurs images au site "Gungan City"

        // Rajoutez le lieu "Château de Maz"
        Site::create([
            'siteName' => 'Château de Maz',
            'siteDescription' => 'Description du Château de Maz.',
            'touristActivities' => 'Activités touristiques au Château de Maz.',
            'attractionType' => 'Type d\'attraction au Château de Maz.',
            'shops' => 'Boutiques au Château de Maz.',
            'slug' => Str::slug('Château de Maz'),
            'planet_id' => Planet::inRandomOrder()->first()->id,
        ]);


        // Rajoutez le lieu "Palais de Theed"
        Site::create([
            'siteName' => 'Palais de Theed',
            'siteDescription' => 'Description du Palais de Theed.',
            'touristActivities' => 'Activités touristiques au Palais de Theed.',
            'attractionType' => 'Type d\'attraction au Palais de Theed.',
            'shops' => 'Boutiques au Palais de Theed.',
            'slug' => Str::slug('Palais de Theed'),
            'planet_id' => Planet::inRandomOrder()->first()->id,
        ]);
    }
}
