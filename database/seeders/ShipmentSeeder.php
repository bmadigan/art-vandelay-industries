<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Shipment;
use App\Models\Transaction;
use Illuminate\Database\Seeder;

class ShipmentSeeder extends Seeder
{
    public function run(): void
    {
        $orders = Order::all();

        $orders->each(function ($order) {
            Shipment::factory()->create([
                'order_id' => $order->id,
                'customer_id' => $order->customer_id,
                'scheduled_date' => $order->created_at->addDays(1),
                'actual_date' => $order->created_at->addDays(2),
            ]);
        });
    }
}
