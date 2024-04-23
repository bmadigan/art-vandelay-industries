<?php

namespace App\Livewire\Pages\Customers;

use App\Models\Customer;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Customer List')]
class CustomerList extends Component
{
    use WithPagination;

    public $search = '';

    #[Computed(cache: false)]
    public function customers()
    {
        if ($this->search === '') {
            return Customer::query()->orderBy('id', 'desc')->paginate(20);
        }

        return Customer::query()
            ->whereAny([
                'first_name',
                'last_name',
                'email_primary',
            ], 'LIKE', "%$this->search%")
            ->orderBy('id', 'desc')
            ->paginate(20);
    }

    public function delete($customerId)
    {
        // Should Authorize! But I need to get this out.
        $customer = Customer::find($customerId);

        $customer->delete();
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.customers.customer-list');
    }
}
