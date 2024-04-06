<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->timestamps();
        });

        \App\Models\ProductCategory::create(['name' => 'Baloons', 'description' => 'Baloons for parties']);
        \App\Models\ProductCategory::create(['name' => 'Gloves', 'description' => 'Gloves for medical use']);
        \App\Models\ProductCategory::create(['name' => 'Condoms', 'description' => 'Condoms for safe sex']);
        \App\Models\ProductCategory::create(['name' => 'Bed Sheets', 'description' => 'Bed sheets for comfort']);
        \App\Models\ProductCategory::create(['name' => 'Clothing', 'description' => 'Clothing for all occasions']);
        \App\Models\ProductCategory::create(['name' => 'Catheters', 'description' => 'Catheters for medical use']);
        \App\Models\ProductCategory::create(['name' => 'Prophylactics', 'description' => 'Prophylactics for medical use']);
        \App\Models\ProductCategory::create(['name' => 'Adhesives', 'description' => 'Adhesives for all purposes']);
        \App\Models\ProductCategory::create(['name' => 'Foam', 'description' => 'Foam for all purposes']);
        \App\Models\ProductCategory::create(['name' => 'Toys', 'description' => 'Toys for all ages']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_categories');
    }
};
