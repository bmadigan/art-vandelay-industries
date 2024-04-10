<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               Customer Listings
            </h2>
            <x-secondary-button>Add New Customer</x-secondary-button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @foreach($this->customers as $customer)
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <div class="flex items-center justify-between">
                            <div>
                                <h1 class="text-lg font-semibold text-gray-800">{{ $customer->first_name }} {{ $customer->last_name }}</h1>
                                <p class="text-sm text-gray-600">{{ $customer->email }}</p>
                            </div>
                            <div>
                                <button class="text-sm text-blue-500">Edit</button>
                                <button class="text-sm text-red-500">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-app-layout>

