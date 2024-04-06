<?php

namespace Database\Seeders;

use App\Models\Inventory;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Warehouse;
use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();

        $products->each(function ($product) {
            Inventory::factory()->create([
                'warehouse_id' => Warehouse::inRandomOrder()->first()->id,
                'product_id' => $product->id,
            ]);
        });

    }
}
