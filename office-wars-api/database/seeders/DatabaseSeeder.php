<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            TypeSeeder::class,
            PlanetSeeder::class,
            UserSeeder::class,
            SiteSeeder::class,
            EventSeeder::class,
            ReviewSeeder::class,
            AccomodationSeeder::class,
            ImageSeeder::class,
        ]);
    }
}
