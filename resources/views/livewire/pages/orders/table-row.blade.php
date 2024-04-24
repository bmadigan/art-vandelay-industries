<tr>
    <td class="whitespace-nowrap py-3 text-xs font-medium text-slate-900 sm:pl-0">
        <div>
            <div class="mt-1 text-xs leading-5 text-gray-500">Order Num:</div>
            {{ $order->order_number }}
        </div>
        <div>
            <div class="mt-1 text-xs leading-5 text-gray-500">PO Num:</div>
            {{ $order->po_number }}
        </div>
    </td>
    <td class="whitespace-nowrap px-3 py-4 text-xxs text-slate-500">
        <x-status-badge :label="$order->orderStatus->name" :color="$order->orderStatus->color" />
    </td>
    <td class="whitespace-nowrap px-3 py-4 text-xxs text-slate-500">
        <x-status-badge :label="$order->orderType->name" :color="$order->orderType->color" />
    </td>
    <td class="whitespace-nowrap px-3 py-4 text-xs text-slate-500">{{ $order->customer->full_name ?? 'n/a' }}</td>
    <td class="whitespace-nowrap px-3 py-4 text-xs text-slate-500">{{ $order->total_amount }}</td>
    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">

        <x-menu>
            <x-menu.button>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
            </x-menu.button>

            <x-menu.items>
                <x-dialog wire:model="showEditOrder">
                    <x-dialog.open>
                        <x-menu.close>
                            <x-menu.item>Update Order Info</x-menu.item>
                        </x-menu.close>
                    </x-dialog.open>
                    <x-dialog.panel>
                        <form wire:submit="save" class="w-full">
                            <div class="flex flex-col items-start p-4">
                                <x-dialog.header>
                                    Update Order
                                </x-dialog.header>

                                <div class="mt-2 w-full grid grid-cols-1 gap-x-6 gap-y-2 sm:grid-cols-6">
                                    FORM GOES HERE
                                </div>

                                <div class="mt-4 mb-2">
                                    <span class="text-sm font-semibold text-slate-700 uppercase">Customer Location</span>
                                    <div class="mt-1 text-xs text-slate-400">
                                        The customer's location is used to calculate taxes and shipping costs.
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
                                            Save Order
                                        </x-primary-button>
                                    </x-dialog.footer>
                                </div>
                            </div>
                        </form>
                    </x-dialog.panel>
                </x-dialog>

                <x-menu.item>
                    <a href="#"
                       wire:confirm="Are you sure you want to delete this Order?"
                       wire:click="$parent.delete({{ $order->id }})"
                       class="text-rose-500 hover:text-rose-900">Delete Customer</a>
                </x-menu.item>

            </x-menu.items>
        </x-menu>
    </td>
</tr>

