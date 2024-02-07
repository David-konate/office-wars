<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence;

        return [
            'event_id' => Event::inRandomOrder()->first()->id,
            'rating' => $this->faker->numberBetween(1, 5),
            'visitorComment' => $this->faker->paragraph,
            'slug' => $this->faker->unique()->slug ?? Str::slug($title),

            'title' => $title,
        ];
    }
}
