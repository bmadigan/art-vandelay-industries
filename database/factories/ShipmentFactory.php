<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Shipment;

class ShipmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shipment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'customer_id' => $this->faker->randomNumber(),
            'transportation_type' => $this->faker->numberBetween(-10000, 10000),
            'tracking_number' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'carrier' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'scheduled_date' => $this->faker->dateTime(),
            'actual_date' => $this->faker->dateTime(),
            'shipment_status' => $this->faker->numberBetween(-10000, 10000),
            'order_id' => $this->faker->randomNumber(),
        ];
    }
}
