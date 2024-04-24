<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        $product = Product::inRandomOrder()->first();

        return [
            'order_id' => Order::inRandomOrder()->first()->id,
            'product_id' => $product->id,
            'item_quantity' => $this->faker->numberBetween(10, 50),
            'product_price' => $product->price,
            'product_sku' => $product->code,
        ];
    }
}
