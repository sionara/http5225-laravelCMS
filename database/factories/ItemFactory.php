<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'item' => fake()->randomElement(['Dog food', 'Cat food']),
            'price' => fake()->randomNumber(3),
            'inventory' => fake()->randomNumber(3),
            'category' => fake()->randomElement(['Canine', 'Feline', 'Piscine', 'Murine']),
        ];
    }
}
