<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Utilisez les IDs correspondants aux thèmes de la table themes
        DB::table('univers')->insert([
            ['univerTitle' => 'Star Wars', 'theme_id' => 1], // Cinema
            ['univerTitle' => 'Friends', 'theme_id' => 2], // Serie
            ['univerTitle' => 'Basket', 'theme_id' => 3], // Sport
        ]);
    }
}
