<?php

namespace App\Livewire\Pages\Customers;

use Livewire\Component;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use App\Models\Customer;
use Livewire\WithPagination;

#[Title('Customer List')]
class CustomerList extends Component
{
    use WithPagination;

    #[Computed(cache: false)]
    public function customers()
    {
        return Customer::query()->orderBy('id', 'desc')->paginate(20);
    }

    public function delete($customerId)
    {
        // Authorize!
        $customer = Customer::find($customerId);

        $customer->delete();
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.customers.customer-list');
    }
}
