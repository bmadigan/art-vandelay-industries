<div>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-slate-800 leading-tight">
                Order Management
            </h2>

        </div>
    </x-slot>

    <x-page-wrapper>
        <!-- Search / Filtering 0-->
        <div class="mb-2 flex justify-between items-center">
            <div>
                <div class="text-xs text-slate-500 italic leading-loose">Filter By Date Range:</div>
                <span class="isolate inline-flex rounded-md shadow-sm">
                  <button
                      wire:click="$set('filters.range', 'last7')"
                      type="button"
                      class="relative inline-flex items-center rounded-l-md px-3 py-2 text-sm font-semibold text-slate-900 ring-1 ring-inset ring-slate-300 hover:bg-slate-50 focus:z-10 @if($filters->range->value === 'last7') bg-sky-100 @else bg-white @endif">
                      7 Days
                  </button>
                  <button
                      wire:click="$set('filters.range', 'last30')"
                      type="button"
                      class="relative -ml-px inline-flex items-center px-3 py-2 text-sm font-semibold text-slate-900 ring-1 ring-inset ring-slate-300 hover:bg-slate-50 focus:z-10 @if($filters->range->value === 'last30') bg-sky-100 @else bg-white @endif">
                      30 Days
                  </button>
                  <button
                      wire:click="$set('filters.range', 'all')"
                      type="button"
                      class="relative -ml-px inline-flex items-center rounded-r-md px-3 py-2 text-sm font-semibold text-slate-900 ring-1 ring-inset ring-slate-300 hover:bg-slate-50 focus:z-10  @if($filters->range->value === 'all') bg-sky-100 @else bg-white @endif">
                      All Time
                  </button>
                </span>
            </div>

            <div class="relative w-1/3 text-sm text-slate-500">
                <input
                    placeholder="Search by order or po number"
                    wire:model.live="search"
                    type="text" class="w-full pl-10 pr-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring focus:ring-slate-100 focus:border-slate-100" >
                <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <x-icon.magnifier class="w-4 h-4" />
                </div>
            </div>
        </div>

        <table class="min-w-full divide-y divide-slate-300">
            <thead>
            <tr>
                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-bold text-slate-900 sm:pl-0">Order Identification</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-bold text-slate-900">Status</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-bold text-slate-900">Type</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-bold text-slate-900">Customer</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-bold text-slate-900">Shipping</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-bold text-slate-900">Amount</th>
                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
            @foreach($this->orders as $order)
                <livewire:pages.orders.table-row :$order wire:key="tr-parent-{{ $order->id }}" />
            @endforeach
            </tbody>
        </table>

        <div class="mt-6 px-2">
            {!! $this->orders->links() !!}
        </div>
    </x-page-wrapper>

</div>
