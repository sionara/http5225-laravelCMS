<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // added data from previous db manually, no need for seeder to create fake data.
            // 'date' => fake()->unique()->date(),
            // 'item' => fake()-> ,
            // 'employee_id',
        ];
    }
}
