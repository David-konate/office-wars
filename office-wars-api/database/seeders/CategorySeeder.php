<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'categoryName' => 'Univer',
        ]);

        Category::create([
            'categoryName' => 'Character',
        ]);

        Category::create([
            'categoryName' => 'Story',
        ]);
        Category::create([
            'categoryName' => 'Team',
        ]);
        Category::create([
            'categoryName' => 'History ',
        ]);
    }
}
