<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Warehouse;

class WarehouseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Warehouse::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'code' => $this->faker->regexify('[A-Za-z0-9]{25}'),
            'street_address' => $this->faker->regexify('[A-Za-z0-9]{200}'),
            'city' => $this->faker->city(),
            'state' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'zip' => $this->faker->postcode(),
        ];
    }
}
