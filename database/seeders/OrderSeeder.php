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
        for($i = 0; $i < 100; $i++) {
            Order::factory()->create([
                'created_at' => now()->subDays(rand(5, 200)),
            ]);
        }

        $orders = Order::all();

        $orders->each(function ($order) {
            $order->orderItems()->saveMany(OrderItem::factory()->count(rand(1, 5))->create([

            ]));
        });

    }
}
