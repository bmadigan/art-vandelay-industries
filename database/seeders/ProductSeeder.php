<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productNames = [
            "Surgical Gloves",
            "Mattress",
            "Pillow",
            "XL Condom",
            "Large Balloons",
            "Bands",
            "Masks",
            "Bodysuit",
            "Catsuit",
            "Underwear",
            "Stockings",
            "Corset",
            "Queen sized Sheets",
            "Hoods",
            "Boots",
            "Dress",
            "Skirt",
            "Top",
            "Pants",
            "Bra",
            "Panties",
            "Swim Cap",
            "Wetsuit",
            "Bandages",
            "Tourniquet",
            "Adhesive",
            "Seals",
            "Catheters",
            "Tubing",
            "Examination Gloves",
            "Dental Dams",
            "Apron",
            "Thread",
            "Strips",
            "Tape",
            "Flooring",
            "Soles",
            "Insulation",
            "Gaskets",
            "Grommets",
            "Bushings",
            "O-rings",
            "Diaphragms",
            "Belts",
            "Rollers",
            "Toys",
            "Sculptures",
            "Coatings",
            "Paint",
            "Caulk",
        ];

        for($i=0; $i<500; $i++) {
            Product::factory()->create([
                'name' => Arr::random($productNames),
                'product_category_id' => ProductCategory::inRandomOrder()->first()->id,
            ]);
        }
    }
}
