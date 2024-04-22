<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' =>$this->faker->sentence(3),
            'rating' => $this->faker->randomFloat(2, 1, 5),
            'age_category_id' => $this->faker->numberBetween(1,5),
            'description' => $this->faker->text(),
            'image' => $this->faker->word(),
            'year_of_publishing' => $this->faker->numberBetween(1990, 2024)
        ];
    }
}
