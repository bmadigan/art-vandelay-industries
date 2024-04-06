<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = Order::factory()->count(2000)->create();

        $orders->each(function ($order) {
            $order->orderItems()->saveMany(OrderItem::factory()->count(rand(1, 5))->create([

            ]));
        });

    }
}
