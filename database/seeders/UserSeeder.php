<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(10)->create();
    }
}
