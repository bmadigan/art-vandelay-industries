<?php

namespace App\Livewire\Pages\Orders;

use App\Models\Order;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Reactive;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
use Masmerise\Toaster\Toaster;

#[Title('Order Management')]
class OrderList extends Component
{
    use WithPagination;

    public $search = '';

    #[Reactive]
    public Filters $filters;

    #[Computed(cache: false)]
    public function orders()
    {
        if ($this->search === '') {
            return Order::query()
                ->withCount('shipments')
                ->orderBy('created_at', 'desc')
                ->paginate(50);
        }

        return Order::query()
            ->whereAny([
                'order_number',
                'po_number',
            ], 'LIKE', "%$this->search%")
            ->withCount('shipments')
            ->orderBy('created_at', 'desc')
            ->paginate(50);
    }

    public function delete($orderId): void
    {
        $order = Order::find($orderId);

        $order->delete();

        Toaster::success('🗑️ Order has been deleted!');
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.orders.order-list');
    }
}
