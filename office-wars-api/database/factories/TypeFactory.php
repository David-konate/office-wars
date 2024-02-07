<?php

namespace Database\Factories;

use Illuminate\Support\Str;

use Faker\Generator as Faker;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Type>
 */
class TypeFactory extends Factory
{
    protected $model = Type::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nameType = $this->faker->word;

        return [
            'nameType' => $nameType,
            'slug' => Str::slug($nameType),
        ];
    }
}
