<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Order;
use App\Models\User;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'order_number' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'order_type' => $this->faker->numberBetween(-10000, 10000),
            'order_status' => $this->faker->numberBetween(-10000, 10000),
            'po_employee_id' => $this->faker->randomNumber(),
            'po_number' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'customer_id' => $this->faker->randomNumber(),
            'total_order_items_price' => $this->faker->numberBetween(-10000, 10000),
            'discount' => $this->faker->numberBetween(-10000, 10000),
            'shipping_cost' => $this->faker->numberBetween(-10000, 10000),
            'total_amount' => $this->faker->numberBetween(-10000, 10000),
            'user_id' => User::factory(),
        ];
    }
}
