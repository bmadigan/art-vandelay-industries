<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use App\Models\Customer;

#[Title('Customer List')]
class Customers extends Component
{
    #[Computed(cache: false)]
    public function customers()
    {
        return Customer::query()->orderBy('last_name')->take(5)->get();
    }

    public function render()
    {
        return view('livewire.pages.customers');
    }
}
