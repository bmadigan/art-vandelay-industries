<?php

namespace App\Livewire\Pages;

use App\Models\Order;
use App\Models\Shipment;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard Logistics')]
class Dashboard extends Component
{
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
