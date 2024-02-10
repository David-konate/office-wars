<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UserFactory extends Factory
{
    protected $model = User::class;
    protected static ?string $password;

    public function definition(): array
    {
        $faker = Faker::create();

        return [
            'userPseudo' => $faker->userName,
            'userLastName' => $faker->lastName,
            'userFirstName' => $faker->firstName,
            'password' => static::$password ??= Hash::make('Azerty@123'),
            'email' => $faker->unique()->safeEmail,
            'bookingHistory' => $faker->text(200),
            'userImage' => '',
            'role' => 'user',
            'slug' => Str::slug($faker->userName),
            'remember_token' => Str::random(10),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
