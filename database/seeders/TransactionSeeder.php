<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = Order::all();

        $orders->each(function ($order) {
            Transaction::factory()->create([
                'order_id' => $order->id,
                'customer_id' => $order->customer_id,
                'transaction_employee_id' => $order->po_employee_id,
                'user_id' => $order->user_id,
                'transaction_amount' => $order->total_amount,
                'transaction_date' => $order->created_at,
            ]);
        });
    }
}
