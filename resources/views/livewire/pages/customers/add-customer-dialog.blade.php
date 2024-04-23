<div>
    <x-dialog wire:model="show">
        <x-dialog.open>
            <x-primary-button type="button">
                <x-icon.add class="mr-2"/>
                Add Customer
            </x-primary-button>
        </x-dialog.open>
        <x-dialog.panel>
            <form wire:submit="add" class="w-full">
                <div class="flex flex-col items-start p-4">
                    <x-dialog.header>
                        Create New Customer
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
                            <x-text-input wire:model="form.address" id="address" />
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
                                Create Customer
                            </x-primary-button>
                        </x-dialog.footer>
                    </div>
                </div>
            </form>
        </x-dialog.panel>
    </x-dialog>
</div>
