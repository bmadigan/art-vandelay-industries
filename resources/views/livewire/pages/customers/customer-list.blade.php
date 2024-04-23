<div>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-slate-800 leading-tight">
                Customers
            </h2>

            <livewire:pages.customers.add-customer-dialog @saved="$refresh" />

        </div>
    </x-slot>

    <div class="flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-4 align-middle sm:px-6 lg:px-8">
                <table class="min-w-full divide-y divide-slate-300">
                    <thead>
                        <tr>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-bold text-slate-900 sm:pl-0">Name</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-bold text-slate-900">Email Primary</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-bold text-slate-900">Email Invoice</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-bold text-slate-900">Location</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-bold text-slate-900">Customer Since</th>
                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                    @foreach($this->customers as $customer)
                        <livewire:pages.customers.table-row :$customer wire:key="tr-parent-{{ $customer->id }}" />
                    @endforeach
                    </tbody>
                </table>

                <div class="mt-6 px-2">
                    {!! $this->customers->links() !!}
                </div>

            </div>

        </div>
    </div>

</div>

