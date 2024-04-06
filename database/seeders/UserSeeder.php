<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        for($i = 0; $i < 25; $i++) {
            User::factory()->create([
                'role' => fake()->randomElement(['operations', 'operations', 'admin']),
            ]);
        }

        $me = User::factory()->create([
            'name' => 'Brad Madigan',
            'email' => 'bradmadigan@gmail.com',
            'role' => 'admin',
        ]);
    }
}
