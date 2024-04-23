<?php

namespace App\Livewire\Pages\Customers;

use Livewire\Component;

class TableRow extends Component
{
    public $customer;

    public function render()
    {
        return view('livewire.pages.customers.table-row');
    }
}
