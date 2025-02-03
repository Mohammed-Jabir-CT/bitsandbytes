<?php

namespace Database\Factories;

use App\Models\Genre;
use App\Models\Identity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Story>
 */
class StoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $identity = fake()->numberBetween(1,4);
        $genre = Genre::inRandomOrder()->where('identity_id', $identity)->first()->id;

        return [
            'title' => fake()->words(3, true),
            'body' => fake()->paragraphs(3, true),
            'identity_id' => $identity,
            'genre_id' => $genre,
            'views' => fake()->randomNumber(4)
        ];
    }
}
