<tr>
    <td class="whitespace-nowrap py-3 text-sm font-medium text-slate-900 sm:pl-0">
        {{ $customer->full_name }}
    </td>
    <td class="whitespace-nowrap px-3 py-4 text-sm text-slate-500">{{ $customer->email_primary ?? 'n/a'}}</td>
    <td class="whitespace-nowrap px-3 py-4 text-sm text-slate-500">{{ $customer->email_invoice ?? 'n/a' }}</td>
    <td class="whitespace-nowrap px-3 py-4 text-sm text-slate-500">{{ $customer->city_state ?? 'n/a'}}</td>
    <td class="whitespace-nowrap px-3 py-4 text-sm text-slate-500">{{ $customer->customer_since }}</td>
    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">

        <x-menu>
            <x-menu.button>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
            </x-menu.button>

            <x-menu.items>
                <x-dialog wire:model="showEditCustomer">
                    <x-dialog.open>
                        <x-menu.close>
                            <x-menu.item>Update Customer Info</x-menu.item>
                        </x-menu.close>
                    </x-dialog.open>
                    <x-dialog.panel>
                        <form wire:submit="save" class="w-full">
                            <div class="flex flex-col items-start p-4">
                                <x-dialog.header>
                                    Update Customer
                                </x-dialog.header>

                                <div class="mt-2 w-full grid grid-cols-1 gap-x-6 gap-y-2 sm:grid-cols-6">
                                    <div class="sm:col-span-3">
                                        <x-input-label>First Name</x-input-label>
                                        <x-text-input wire:model="form.firstName" id="firstName" class="w-full" />
                                        <x-input-error for="form.firstName" :messages="$errors->get('form.firstName')" />
                                    </div>
                                    <div class="sm:col-span-3">
                                        <x-input-label>Last Name</x-input-label>
                                        <x-text-input wire:model="form.lastName" id="lastName" />
                                        <x-input-error for="form.lastName" :messages="$errors->get('form.lastName')" />
                                    </div>
                                    <div class="sm:col-span-6">
                                        <x-input-label>Email <span class="text-slate-400">(Primary)</span></x-input-label>
                                        <x-text-input wire:model="form.emailPrimary" id="emailPrimary" />
                                        <x-input-error for="form.emailPrimary" :messages="$errors->get('form.emailPrimary')" />
                                    </div>
                                    <div class="sm:col-span-6">
                                        <x-input-label>Email <span class="text-slate-400">(Invoice)</span></x-input-label>
                                        <x-text-input wire:model="form.emailInvoice" id="emailInvoice" />
                                    </div>
                                </div>

                                <div class="mt-4 mb-2">
                                    <span class="text-sm font-semibold text-slate-700 uppercase">Customer Location</span>
                                    <div class="mt-1 text-xs text-slate-400">
                                        The customer's location is used to calculate taxes and shipping costs.
                                    </div>
                                </div>

                                <div class="mt-2 w-full grid grid-cols-1 gap-x-6 gap-y-2 sm:grid-cols-6">
                                    <div class="sm:col-span-6">
                                        <x-input-label>Street Address</x-input-label>
                                        <x-text-input wire:model="form.streetAddress" id="streetAddress" />
                                    </div>
                                    <div class="sm:col-span-3">
                                        <x-input-label>City</x-input-label>
                                        <x-text-input wire:model="form.city" id="city" />
                                    </div>
                                    <div class="sm:col-span-2">
                                        <x-input-label>State</x-input-label>
                                        <x-text-input wire:model="form.state" id="state" />
                                    </div>
                                    <div class="sm:col-span-1">
                                        <x-input-label>Zip/Postal</x-input-label>
                                        <x-text-input wire:model="form.zip" id="zip" />
                                    </div>
                                </div>

                                <div class="mt-4 mb-2">
                                    <span class="text-sm font-semibold text-slate-700 uppercase">Customer Contact & Notes</span>
                                </div>

                                <div class="mt-2 w-full grid grid-cols-1 gap-x-6 gap-y-2 sm:grid-cols-6">
                                    <div class="sm:col-span-6">
                                        <x-input-label>Phone</x-input-label>
                                        <x-text-input wire:model="form.phonePrimary" id="phonePrimary" />
                                    </div>
                                    <div class="sm:col-span-6">
                                        <x-input-label>Customer Notes</x-input-label>
                                        <x-textarea-input wire:model="form.notes" id="notes" />
                                    </div>
                                </div>

                                <div class="mt-1 ml-auto">
                                    <x-dialog.footer>
                                        <x-dialog.close>
                                            <x-secondary-button type="button">
                                                Cancel
                                            </x-secondary-button>
                                        </x-dialog.close>

                                        <x-primary-button type="submit">
                                            Save Customer
                                        </x-primary-button>
                                    </x-dialog.footer>
                                </div>
                            </div>
                        </form>
                    </x-dialog.panel>
                </x-dialog>

                <x-menu.item>
                    <a href="#"
                            wire:confirm="Are you sure you want to remove this Customer?"
                            wire:click="$parent.delete({{ $customer->id }})"
                            class="text-rose-500 hover:text-rose-900">Delete Customer</a>
                </x-menu.item>

            </x-menu.items>
        </x-menu>
    </td>
</tr>

