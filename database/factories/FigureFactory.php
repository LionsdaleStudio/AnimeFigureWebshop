<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Figure>
 */
class FigureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $abc = array_merge(range("A", "Z"), range(0,9));
        return [
            "name" => fake()->firstName(),
            "price" => fake()->randomFloat(2,25, 5000),
            "picture" => "placeholder.jpg",
            "description" => implode(fake()->randomElements($abc,6)),
            "origin" => fake()->country(),
            "limited" => fake()->boolean(30),
            "quantity" => fake()->numberBetween(0,23)
        ];
    }
}
