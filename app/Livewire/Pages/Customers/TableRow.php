<?php

namespace App\Livewire\Pages\Customers;

use App\Livewire\Forms\CustomerForm;
use Livewire\Component;

class TableRow extends Component
{
    public $customer;

    public CustomerForm $form;

    public $showEditCustomer = false;

    public function mount()
    {
        $this->form->setCustomer($this->customer);
    }

    public function save()
    {
        $this->form->update();

        $this->customer->refresh();

        $this->reset('showEditCustomer');
    }

    public function render()
    {
        return view('livewire.pages.customers.table-row');
    }
}
