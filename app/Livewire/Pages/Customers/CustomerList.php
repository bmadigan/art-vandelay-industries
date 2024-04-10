<?php

namespace App\Livewire\Pages\Customers;

use Livewire\Component;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use App\Models\Customer;

#[Title('Customer List')]
class CustomerList extends Component
{
    #[Computed(cache: false)]
    public function customers()
    {
        return Customer::query()->orderBy('id', 'desc')->take(10)->get();
    }

    public function render()
    {
        return view('livewire.pages.customers.customer-list');
    }
}
