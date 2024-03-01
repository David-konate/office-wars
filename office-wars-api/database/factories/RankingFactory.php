<?php

namespace Database\Factories;

use App\Models\Univer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RankingFactory extends Factory
{
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $univerTitle = null;

        // Ajoutez la logique pour parfois laisser la colonne 'univer.univerTitle' vide
        if ($this->faker->boolean(30)) {
            $univerTitle = Univer::inRandomOrder()->first()->univerTitle;
        }

        return [
            'resultQuizz' => $this->faker->randomFloat(2, 0, 100),
            'timeQuizz' => $this->faker->randomFloat(2, 0, 100),
            'user_id' => $user->id,
            'level'  => $this->faker->randomElement([1, 2, 3]),
            'univer' => $univerTitle,
        ];
    }
}
