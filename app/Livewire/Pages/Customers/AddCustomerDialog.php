<?php

namespace App\Livewire\Pages\Customers;

use App\Livewire\Forms\CustomerForm;
use Livewire\Component;

class AddCustomerDialog extends Component
{
    public CustomerForm $form;

    public $show = false;

    public function add(): void
    {
        $this->form->save();

        $this->reset('show');

        $this->dispatch('saved');
    }

    public function render()
    {
        return view('livewire.pages.customers.add-customer-dialog');
    }
}
