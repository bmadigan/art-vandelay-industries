<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\Warehouse;

class InventoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inventory::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'minimum_quantity' => $this->faker->randomElement(['10', '25', '50', '100', '500', '1000']),
            'maximum_quantity' => $this->faker->randomElement(['1000', '2500', '5000']),
            'quantity_on_hand' => $this->faker->numberBetween(10, 10000),
            'quantity_on_order' => $this->faker->numberBetween(100, 10000),
            'reorder_threshold' => $this->faker->randomElement(['100', '200', '300', '500']),
            'product_id' => Product::factory(),
            'warehouse_id' => Warehouse::factory(),
        ];
    }
}
