<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ranking>
 */
class RankingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();

        return [
            'resultQuizz' => $this->faker->randomFloat(2, 0, 100),
            'timeQuizz' => $this->faker->randomFloat(2, 0, 100),
            'user_id' => $user->id,
        ];
    }
}
