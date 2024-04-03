<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lname' => fake()->lastName(),
            'fname' => fake()->firstName(),
            'sin' => fake()->randomNumber(9),
            'phone' => fake()->phoneNumber(),
            'role' => fake()->randomElement(['Sales', 'Stock', 'Manager', 'Assistant']),
        ];
    }
}
