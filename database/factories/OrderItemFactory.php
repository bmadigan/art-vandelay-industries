<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\OrderItem;

class OrderItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderItem::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'order_id' => $this->faker->randomNumber(),
            'product_id' => $this->faker->randomNumber(),
            'item_quantity' => $this->faker->numberBetween(-10000, 10000),
            'product_price' => $this->faker->numberBetween(-10000, 10000),
            'product_sku' => $this->faker->regexify('[A-Za-z0-9]{100}'),
        ];
    }
}
