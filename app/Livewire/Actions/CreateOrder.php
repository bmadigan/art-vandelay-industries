<?php

namespace App\Livewire\Actions;

use App\Models\Customer;
use App\Models\Order;

class CreateOrder
{
    /**
     * This is currently being used for a Que'd job generator to mimic users using the app.
     */
    public function __invoke(): void
    {
        $customerId = Customer::inRandomOrder()->first()->id;

        $order = Order::create([
            'order_number' => 'ORD-'.time(),
            'order_type' => rand(1, 2),
            'order_status' => '1',
            'po_employee_id' => auth()->user()->id,
            'po_number' => 'PO-'.time(),
            'customer_id' => $customerId,
            'total_order_items_price' => 0,
            'discount' => 0,
            'shipping_cost' => rand(800, 2500),
            'total_amount' => rand(5000, 80000),
            'user_id' => auth()->user()->id,
        ]);

        // Dispatch Event
    }
}
