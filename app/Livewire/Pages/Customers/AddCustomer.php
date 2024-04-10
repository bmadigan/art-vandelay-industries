<?php

namespace App\Livewire\Pages\Customers;

use App\Models\Customer;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Add A Brand New Spanking Customer')]
class AddCustomer extends Component
{
    public $first_name;
    public $last_name;
    public $email_primary;
    public $email_invoice;
    public $street_address;
    public $city;
    public $state;
    public $zip;
    public $phone_primary;
    public $notes;

    public function save()
    {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email_primary' => 'required|email',
        ]);

        Customer::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email_primary' => $this->email_primary,
            'email_invoice' => $this->email_invoice,
            'street_address' => $this->street_address,
            'city' => $this->city,
            'state' => $this->state,
            'zip' => $this->zip,
            'phone_primary' => $this->phone_primary,
            'notes' => $this->notes,
        ]);

        $this->redirect(route('customers'));
    }

    public function render()
    {
        return view('livewire.pages.customers.add-customer');
    }
}
