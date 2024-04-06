<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(25)->create([
            'role' => fake()->randomElement(['operations', 'admin']),
        ]);

        $me = User::factory()->create([
            'name' => 'Brad Madigan',
            'email' => 'bradmadigan@gmail.com',
            'role' => 'admin',
        ]);
    }
}
