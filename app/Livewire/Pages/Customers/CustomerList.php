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

    public ?Customer $currentCustomer = null;

    public string $firstName = '';
    public string $lastName = '';
    public string $emailPrimary = '';
    public string $emailInvoice = '';
    public string $streetAddress = '';
    public string $city = '';
    public string $state = '';
    public string $zip = '';
    public string $phonePrimary = '';
    public string $notes = '';

    public bool $showModal = false;

    #[Computed(cache: false)]
    public function customers()
    {
        return Customer::query()->orderBy('id', 'desc')->paginate(20);
    }

    public function openModal(): void
    {
        $this->showModal = true;
    }

    protected function rules(): array
    {
        return [
            'firstName' => 'required',
            'lastName' => 'required',
            'emailPrimary' => 'required|email',
        ];
    }

    protected function saveCustomer()
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

        $this->reset('showModal');
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.customers.customer-list');
    }
}
