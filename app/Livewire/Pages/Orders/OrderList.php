<?php

namespace App\Livewire\Pages\Orders;

use App\Enums\DateRange;
use App\Models\Order;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Reactive;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;
use Masmerise\Toaster\Toaster;

#[Title('Order Management')]
class OrderList extends Component
{
    use WithPagination;

    public $search = '';

    public Filters $filters;


    #[Computed(cache: false)]
    public function orders()
    {
        // Step 1, start the query
        $query = Order::query()
            ->withCount('shipments');

        // If we are searching, do that here.
        if ($this->search !== '') {
            $query = $query->whereAny([
                'order_number',
                'po_number',
            ], 'LIKE', "%$this->search%");
        }

        // Apply any Date Filters
        $query = $this->filters->apply($query);

        return $query
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
