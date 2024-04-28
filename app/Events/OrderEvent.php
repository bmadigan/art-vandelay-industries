<?php

namespace App\Events;

use App\Models\Order;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class OrderEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $order;

    public $status;

    public function __construct(Order $order, $status = null)
    {
        $this->order = $order;
        $this->status = $status ?? $order->status;
    }

    public function broadcastOn(): Channel
    {
        return new Channel('orders.updated');
    }
}
