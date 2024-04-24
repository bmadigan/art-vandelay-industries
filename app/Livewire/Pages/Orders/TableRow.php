<?php

namespace App\Livewire\Pages\Orders;

use Livewire\Component;

class TableRow extends Component
{
    public $order;

    public $showEditOrder = false;

    public function render()
    {
        return view('livewire.pages.orders.table-row');
    }
}
