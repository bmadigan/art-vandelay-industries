<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'code' => $this->generateCode(),
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'reorder_quantity' => $this->faker->numberBetween(100, 500),
            'price' => $this->faker->numberBetween(1000, 200000),
            'product_category_id' => ProductCategory::factory(),
        ];
    }

    protected function generateCode()
    {
        $numberPart = str_pad(rand(0, 999), 3, '0', STR_PAD_LEFT);
        $letterPart = chr(rand(65, 90)).chr(rand(65, 90));
        $finalPart = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);

        return $numberPart.'-'.$letterPart.$finalPart;
    }
}
