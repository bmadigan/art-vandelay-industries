<?php

namespace App\Livewire\Pages;

use App\Models\Order;
use App\Models\Shipment;
use Illuminate\Support\Number;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard Logistics')]
class Dashboard extends Component
{
    #[Computed(cache: false)]
    public function totalActiveOrders()
    {
        return Order::active()->count();
    }

    #[Computed(cache: false)]
    public function totalOrder30Days()
    {
        $query = Order::where('order_status', '<=', 5)
            ->whereBetween('created_at', [now()->subDays(30), now()->startOfDay()])
            ->sum('total_amount');

        return Number::abbreviate($query, 2);
    }

    #[Computed(cache: false)]
    public function totalActiveShipments()
    {
        return Shipment::active()->count();
    }

    #[Computed(cache: false)]
    public function productsForReorder()
    {
        return rand(50, 200); // Fake for the dashboard
    }

    #[Computed(cache: false)]
    public function orders()
    {
        // Step 1, start the query
        return Order::query()
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
    }

    #[Computed(cache: false)]
    public function shipments()
    {
        // Step 1, start the query
        return Shipment::query()
            ->with('order', 'transportationType')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.dashboard');
    }
}
