<?php

namespace App\Livewire\Forms;

use App\Models\Customer;
use Livewire\Attributes\Rule;
use Livewire\Form;

class CustomerForm extends Form
{
    #[Rule('required|min:3')]
    public string $firstName = '';

    #[Rule('required|min:2')]
    public string $lastName = '';

    #[Rule('required|email')]
    public string $emailPrimary = '';

    public string $emailInvoice = '';

    public string $streetAddress = '';

    public string $city = '';

    public string $state = '';

    public string $zip = '';

    public string $phonePrimary = '';

    public string $notes = '';

    public Customer $customer;

    public function setCustomer($customer)
    {
        $this->customer = $customer;
        $this->firstName = $customer->first_name;
        $this->lastName = $customer->last_name;
        $this->emailPrimary = $customer->email_primary;
        $this->emailInvoice = $customer->email_invoice;
        $this->streetAddress = $customer->street_address;
        $this->city = $customer->city;
        $this->state = $customer->state;
        $this->zip = $customer->zip;
        $this->phonePrimary = $customer->phone_primary;
        $this->notes = $customer->notes;
    }

    public function save(): void
    {
        $this->validate();

        Customer::create([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email_primary' => $this->emailPrimary,
            'email_invoice' => $this->emailInvoice,
            'street_address' => $this->streetAddress,
            'city' => $this->city,
            'state' => $this->state,
            'zip' => $this->zip,
            'phone_primary' => $this->phonePrimary,
            'notes' => $this->notes,
        ]);
    }

    public function update(): void
    {
        $this->validate();

        $this->customer->update([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email_primary' => $this->emailPrimary,
            'email_invoice' => $this->emailInvoice,
            'street_address' => $this->streetAddress,
            'city' => $this->city,
            'state' => $this->state,
            'zip' => $this->zip,
            'phone_primary' => $this->phonePrimary,
            'notes' => $this->notes,
        ]);
    }
}
