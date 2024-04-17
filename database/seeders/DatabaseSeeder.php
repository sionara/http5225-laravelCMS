<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Employee;
use App\Models\Item;
use App\Models\Sale;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => '1234',
        ]);

        Employee::factory(10)->create();

        Sale::factory()->create([
            'date' => '2024-04-16',
            'item' => 'Dog Leash',
            'employee_id' => 1,
        ]);

        Sale::factory()->create([
            'date' => '2024-04-16',
            'item' => 'Dog Collar',
            'employee_id' => 2,
        ]);

        Sale::factory()->create([
            'date' => '2024-04-16',
            'item' => 'Dog Kennel',
            'employee_id' => 3,
        ]);

        Sale::factory()->create([
            'date' => '2024-04-16',
            'item' => 'Dog Food',
            'employee_id' => 1,
        ]);

        Item::factory()->create([
            'item' => 'Dog Leash',
            'price' => 30.5,
            'inventory' => 3,
            'category' => 'Canine',
        ]);

        Item::factory()->create([
            'item' => 'Dog Collar',
            'price' => 20.0,
            'inventory' => 10,
            'category' => 'Canine',
        ]);

        Item::factory()->create([
            'item' => 'Dog Kennel',
            'price' => 100.5,
            'inventory' => 0,
            'category' => 'Canine',
        ]);

        Item::factory()->create([
            'item' => 'Dog Food',
            'price' => 10.87,
            'inventory' => 5,
            'category' => 'Canine',
        ]);
    }
}
