<?php

namespace App\Livewire\Actions;

use App\Models\Order;
use App\Models\OrderStatus;
use Illuminate\Support\Facades\Log;

class CancelOrder
{
    public function __invoke(Order $order): bool
    {
        //$order = Order::active()->inRandomOrder()->first();

        if ($order->canBeCanceled()) {
            //ReStalk Inventory
            $order->orderItems()->delete();
            $order->shipments()->delete();

            $order->update([
                'order_status' => 6, // canceled
            ]);

            // Dispatch Event

            return true;
        }

        return false;
    }
}
