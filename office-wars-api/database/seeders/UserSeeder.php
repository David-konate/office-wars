<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // création de l'administrateur
        User::create([
            'userPseudo' => 'R2D2',
            'userLastName' => 'R2',
            'userFirstName' => 'D2',
            'password' => Hash::make('Azerty@123'),
            'email' => 'admin@boss.fr',
            'bookingHistory' => 'Booking history for admin...', // Adjust as needed within the 350-character limit
            'userImage' => 'resources/images/users/r2d2.jpg',
            'role' => 'admin',
            'slug' => Str::slug('administrateur'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        // création d'un utilisateur test
        User::create([
            'userPseudo' => 'Mara',
            'userLastName' => 'Mara',
            'userFirstName' => 'Jane',
            'password' => Hash::make('Azerty@123'),
            'email' => 'utilisateur@use.fr',
            'bookingHistory' => 'Booking history for user...',
            'userImage' => 'resources/images/users/mara.jpg',
            'role' => 'user',
            'slug' => Str::slug('utilisateur'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        // création de 6 utilisateurs aléatoires
        User::factory(6)->create();
    }
}
