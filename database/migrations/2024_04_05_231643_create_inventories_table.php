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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->integer('minimum_quantity');
            $table->integer('maximum_quantity');
            $table->integer('quantity_on_hand');
            $table->integer('quantity_on_order');
            $table->integer('reorder_threshold');
            $table->foreignId('product_id');
            $table->foreignId('warehouse_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
