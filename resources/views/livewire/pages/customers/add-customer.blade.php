<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add New Customer
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <form wire:submit.prevent="save" class="space-y-6">
                <div class="bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl py-12 mx-auto">
                        <div class="space-y-6">
                            <div>
                                <x-input-label for="first_name">First Name</x-input-label>
                                <x-text-input wire:model="first_name" id="first_name" name="first_name" type="text" class="mt-1 block w-full" required autofocus autocomplete="first_name" />
                                <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                            </div>
                            <div>
                                <x-input-label for="last_name">Last Name</x-input-label>
                                <x-text-input wire:model="last_name" id="last_name" last_name="last_name" type="text" class="mt-1 block w-full" required />
                                <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
                            </div>
                            <div>
                                <x-input-label for="email_primary">Primary Email Address</x-input-label>
                                <x-text-input wire:model="email_primary" id="email_primary" email_primary="email_primary" type="text" class="mt-1 block w-full" required />
                                <x-input-error class="mt-2" :messages="$errors->get('email_primary')" />
                            </div>
                            <div>
                                <x-input-label for="first_name">Email for Invoice</x-input-label>
                                <x-text-input wire:model="email_invoice" id="email_invoice" email_invoice="email_invoice" type="text" class="mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('email_invoice')" />
                            </div>
                            <div>
                                <x-input-label for="first_name">Street Address</x-input-label>
                                <x-text-input wire:model="street_address" id="street_address" street_address="street_address" type="text" class="mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('street_address')" />
                            </div>
                            <div>
                                <x-input-label for="city">City</x-input-label>
                                <x-text-input wire:model="city" id="city" city="city" type="text" class="mt-1 block w-full"  />
                                <x-input-error class="mt-2" :messages="$errors->get('city')" />
                            </div>
                            <div>
                                <x-input-label for="state">State</x-input-label>
                                <x-text-input wire:model="state" id="state" state="state" type="text" class="mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('state')" />
                            </div>
                            <div>
                                <x-input-label for="city">Zip/Postal Code</x-input-label>
                                <x-text-input wire:model="zip" id="zip" zip="zip" type="text" class="mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('zip')" />
                            </div>
                            <div>
                                <x-input-label for="phone_primary">Primary Phone Number</x-input-label>
                                <x-text-input wire:model="phone_primary" id="phone_primary" phone_primary="phone_primary" type="text" class="mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('phone_primary')" />
                            </div>
                            <div>
                                <x-input-label for="notes">Customer Notes</x-input-label>
                                <x-textarea-input wire:model="notes" id="notes" />
                            </div>
                        </div>

                        <div class="flex items-center gap-4 mt-4">
                            <x-primary-button>
                                Save Customer
                                <div wire:loading.flex class="flex absolute top-0 right-0 bottom-0 items-end">
                                    <x-spinner class="h-5 w-5 text-white" />
                                </div>
                            </x-primary-button>

                            <x-action-message class="me-3" on="customer-added">
                                Customer has been added.
                            </x-action-message>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

