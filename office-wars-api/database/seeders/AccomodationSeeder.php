<?php

namespace Database\Seeders;

use App\Models\Accomodation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccomodationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Accomodation::factory(20)->create();
    }
}
