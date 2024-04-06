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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number', 100)->index();
            $table->integer('order_type');
            $table->integer('order_status');
            $table->unsignedInteger('po_employee_id');
            $table->string('po_number', 100)->nullable()->index();
            $table->unsignedInteger('customer_id');
            $table->integer('total_order_items_price');
            $table->integer('discount')->nullable();
            $table->integer('shipping_cost')->nullable();
            $table->integer('total_amount');
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
