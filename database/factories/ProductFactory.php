<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'reorder_quantity' => $this->faker->numberBetween(-10000, 10000),
            'price' => $this->faker->randomFloat(2, 0, 99999999.99),
            'product_category_id' => ProductCategory::factory(),
        ];
    }
}
