<?php

namespace App\Livewire\Pages\Customers;

use App\Livewire\Forms\CustomerForm;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

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

        Toaster::success('🎉 Customer has been updated!');

        $this->reset('showEditCustomer');
    }

    public function render()
    {
        return view('livewire.pages.customers.table-row');
    }
}
