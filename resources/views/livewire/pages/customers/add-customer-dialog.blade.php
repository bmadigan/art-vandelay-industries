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
                    <div class="flex items-center pb-4 mb-4 w-full border-b">
                        <div class="text-lg font-medium text-gray-900">Create Customer</div>
                    </div>
                    <div class="mb-2 w-full">
                        <label class="block text-sm font-medium text-gray-700" for="name">
                            First Name
                        </label>
                        <input autofocus wire:model="form.firstName" id="firstName"
                               class="py-2 pr-4 pl-2 mt-2 w-full text-sm rounded-lg border border-gray-400 sm:text-base focus:outline-none focus:border-blue-400" />
                        @error('form.firstName')<span class="text-sm text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-2 w-full">
                        <label class="block text-sm font-medium text-gray-700" for="slug">
                            Last Name
                        </label>
                        <input wire:model="form.lastName" id="lastName"
                               class="py-2 pr-4 pl-2 mt-2 w-full text-sm rounded-lg border border-gray-400 sm:text-base focus:outline-none focus:border-blue-400" />
                        @error('form.lastName')<span class="text-sm text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-2 w-full">
                        <label class="block text-sm font-medium text-gray-700" for="slug">
                            Email (Primary)
                        </label>
                        <input wire:model="form.emailPrimary" id="emailPrimary"
                               class="py-2 pr-4 pl-2 mt-2 w-full text-sm rounded-lg border border-gray-400 sm:text-base focus:outline-none focus:border-blue-400" />
                        @error('form.emailPrimary')<span class="text-sm text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mt-4 ml-auto">
                        <x-dialog.footer>
                            <x-primary-button type="submit">
                                Create Customer
                            </x-primary-button>
                            <x-dialog.close>
                                <x-secondary-button type="button">
                                    Cancel
                                </x-secondary-button>
                            </x-dialog.close>
                        </x-dialog.footer>
                    </div>
                </div>
            </form>
        </x-dialog.panel>

    </x-dialog>
</div>
