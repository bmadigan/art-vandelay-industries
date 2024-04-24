<tr>
    <td class="whitespace-nowrap py-3 text-xs font-medium text-slate-900 sm:pl-0">
        <div>
            <div class="mt-1 text-xs leading-5 text-slate-500">Order Num:</div>
            {{ $order->order_number }}
        </div>
        <div>
            <div class="mt-1 text-xs leading-5 text-slate-500">PO Num:</div>
            {{ $order->po_number }}
        </div>
    </td>
    <td class="whitespace-nowrap px-3 py-4 text-xxs text-slate-500">
        <x-status-badge :label="$order->orderStatus->name" :color="$order->orderStatus->color" />
    </td>
    <td class="whitespace-nowrap px-3 py-4 text-xxs text-slate-500">
        <x-status-badge :label="$order->orderType->name" :color="$order->orderType->color" />
    </td>
    <td class="whitespace-nowrap px-3 py-4 text-xs text-slate-900">
        <div class="flex items-center pb-2">
            <div>
                <img src="{{ $order->customer->avatar }}" class="rounded-full w-6 mr-1">
            </div>
            <div class="text-slate-900 text-sm font-medium">{{ $order->customer->full_name ?? 'n/a' }}</div>
        </div>
        <div class="flex items-center">
            <x-icon.mail class="w-3 h-3 mr-1 text-slate-400" />
            {{ $order->customer->email_primary ?? 'n/a' }}
        </div>
        <div class="flex items-center">
            <x-icon.map-marker class="w-3 h-3 mr-1 text-slate-400" />
            {{ $order->customer->city_state ?? 'n/a' }}
        </div>
    </td>
    <td class="whitespace-nowrap px-3 py-4 text-xs text-slate-900">
        @if($order->shipments_count > 0)
            @foreach($order->shipments as $shipment)
                <div class="flex items-center">
                    <x-icon.transportation class="w-3 h-3 mr-1 text-slate-400" />
                    {{ $order->customer->city_state ?? 'n/a' }}
                </div>
                <div class="flex items-center">
                    <x-icon.truck class="w-3 h-3 mr-1 text-slate-400" />
                    {{ $shipment->tracking_number ?? 'n/a' }}
                </div>
            @endforeach
        @else
            <div>
                Shipping Not Available
            </div>
        @endif
    </td>
    <td class="whitespace-nowrap px-3 py-4 text-xs text-slate-900">
        <div>
            <div class="mt-1 text-xs leading-5 text-slate-500">Total Amount:</div>
            {{ $order->order_amount }}
        </div>
        <div>
            <div class="mt-1 text-xs leading-5 text-slate-500">Created On:</div>
            {{ $order->order_date }}
        </div>

    </td>
    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">

        <x-menu>
            <x-menu.button>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
            </x-menu.button>

            <x-menu.items>
                <x-dialog wire:model="showOrder">
                    <x-dialog.open>
                        <x-menu.close>
                            <x-menu.item>Order Information</x-menu.item>
                        </x-menu.close>
                    </x-dialog.open>
                    <x-dialog.panel>
                        <form wire:submit="save" class="w-full">
                            <div class="flex flex-col items-start p-4">
                                <x-dialog.header>
                                    <div class="flex items-center justify-between">
                                        <div class="flex-none w-1/3">
                                            <div class="text-xs text-slate-400 uppercase leading-loose">Order Number</div>
                                            {{ $order->order_number }}
                                        </div>
                                        <div>
                                            <x-status-badge :label="$order->orderStatus->name" :color="$order->orderStatus->color" />
                                        </div>
                                        <div>
                                            <div class="text-xs text-slate-400 uppercase leading-loose">Order Date</div>
                                            {{ $order->order_date }}
                                        </div>
                                    </div>
                                </x-dialog.header>

                                <div class="mt-2 w-full">
                                    <div class="rounded-lg w-full bg-slate-50 shadow-sm ring-1 ring-gray-900/5 py-4 px-6">
                                        <div class="flex">
                                            <div class="w-1/6">
                                                <img src="{{ $order->customer->avatar }}" class="rounded-full w-10" />
                                            </div>
                                            <div class="w-1/3">
                                                <div class="text-xs mb-0 text-slate-400 uppercase leading-loose">Order Amount</div>
                                                <span class="text-2xl mt-0 text-slate-900 font-medium">{{ $order->order_amount }}</span>
                                            </div>
                                            <div>
                                                <dl class="grid grid-cols-1 sm:grid-cols-2 w-full">
                                                    <div class="px-1 pb-2 sm:col-span-1 sm:px-0">
                                                        <dt class="text-xs font-medium leading-6 text-slate-400">Customer</dt>
                                                        <dd class="mt-0 text-xs leading-6 text-slate-900">{{ $order->customer->full_name }}</dd>
                                                    </div>
                                                    <div class="px-1 pb-2 sm:col-span-1 sm:px-0">
                                                        <dt class="text-xs font-medium leading-6 text-slate-400">PO Number</dt>
                                                        <dd class="mt-0 text-xs leading-6 text-slate-900">{{ $order->po_number }}</dd>
                                                    </div>
                                                    <div class="px-1 py-1 sm:col-span-1 sm:px-0">
                                                        <dt class="text-xs font-medium leading-6 text-slate-400">Location</dt>
                                                        <dd class="mt-0 text-xs leading-6 text-slate-900">
                                                            <div class="mb-0">{{ $order->customer->city }}</div>
                                                            <div class="mt-0">{{ $order->customer->state }}</div>
                                                        </dd>
                                                    </div>
                                                    <div class="px-1 py-1 sm:col-span-1 sm:px-0">
                                                        <dt class="text-xs font-medium leading-6 text-slate-400">Discounted at</dt>
                                                        <dd class="mt-0 text-xs leading-6 text-slate-900 text-center">
                                                            {{ \Illuminate\Support\Number::percentage($order->discount) }}
                                                        </dd>
                                                    </div>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 mb-2 w-full">
                                    <span class="text-sm font-semibold text-slate-700 uppercase">Shipping Information</span>

                                    @if($order->shipments_count > 0)
                                        @foreach($order->shipments as $shipment)

                                            <div class="mt-4 w-full">
                                                <div class="rounded-lg w-full bg-slate-50 shadow-sm ring-1 ring-gray-900/5 py-4 px-6">
                                                    <dl class="grid grid-cols-1 sm:grid-cols-2 w-full">
                                                        <div class="px-1 pb-2 sm:col-span-1 sm:px-0">
                                                            <dt class="text-xs font-medium leading-6 text-slate-400">Shipping Location</dt>
                                                            <dd class="mt-0 text-xs leading-6 text-slate-900">{{ $order->customer->city_state ?? 'n/a' }}</dd>
                                                        </div>
                                                        <div class="px-1 pb-2 sm:col-span-1 sm:px-0">
                                                            <dt class="text-xs font-medium leading-6 text-slate-400">Expected Delivery Date</dt>
                                                            <dd class="mt-0 text-xs leading-6 text-slate-900">{{ $shipment->scheduled_delivery_date }}</dd>
                                                        </div>
                                                        <div class="px-1 pb-2 sm:col-span-1 sm:px-0">
                                                            <dt class="text-xs font-medium leading-6 text-slate-400">Tracking Information</dt>
                                                            <dd class="mt-0 text-xs leading-6 text-slate-900">
                                                                {{ $shipment->tracking_number ?? 'n/a' }}
                                                            </dd>
                                                        </div>
                                                        <div class="px-1 pb-2 sm:col-span-1 sm:px-0">
                                                            <dt class="text-xs font-medium leading-6 text-slate-400">Actual Delivery Date</dt>
                                                            <dd class="mt-0 text-xs leading-6 text-slate-900">{{ $shipment->actual_delivery_date }}</dd>
                                                        </div>
                                                        <div class="px-1 pb-2 sm:col-span-1 sm:px-0">
                                                            <dt class="text-xs font-medium leading-6 text-slate-400">Type</dt>
                                                            <dd class="mt-0 text-xs leading-6 text-slate-900">
                                                                {{ $shipment->transportationType->name ?? 'n/a' }}
                                                            </dd>
                                                        </div>
                                                        <div class="px-1 pb-2 sm:col-span-1 sm:px-0">
                                                            <dt class="text-xs font-medium leading-6 text-slate-400">Carrier</dt>
                                                            <dd class="mt-0 text-xs leading-6 text-slate-900">{{ $shipment->carrier }}</dd>
                                                        </div>
                                                    </dl>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="my-4 py-8 px-4 text-sm rounded-md bg-slate-100 text-slate-600 text-center">
                                            There is no shipping information for this order.
                                        </div>
                                    @endif
                                </div>

                                <div class="mt-4 mb-2 w-full">
                                    <span class="text-sm font-semibold text-slate-700 uppercase">Products for this Order</span>

                                    @if($order->order_items_count > 0)
                                        <div class="mt-4 w-full">
                                            <div class="rounded-lg w-full bg-slate-50 shadow-sm ring-1 ring-gray-900/5 py-4 px-6">
                                                <table class="min-w-full divide-y divide-slate-50">
                                                    <tbody>
                                                    <thead>
                                                        <tr>
                                                            <th class="px-1 py-1.5 text-left text-sm font-bold text-slate-900">Product</th>
                                                            <th class="px-1 py-1.5 text-left text-sm font-bold text-slate-900">Quantity</th>
                                                            <th class="px-1 py-1.5 text-left text-sm font-bold text-slate-900">Price</th>
                                                            <th class="px-1 py-1.5 text-left text-sm font-bold text-slate-900">SKU</th>
                                                        </tr>
                                                    </thead>
                                                    @foreach($order->orderItems as $orderItem)
                                                    <tr>
                                                        <td class="whitespace-nowrap py-1.5 text-xs text-slate-700 sm:pl-0">{{ $orderItem->product->name }}</td>
                                                        <td class="whitespace-nowrap py-1.5 text-xs text-slate-700 sm:pl-0">{{ $orderItem->item_quantity }}</td>
                                                        <td class="whitespace-nowrap py-1.5 text-xs text-slate-700 sm:pl-0">{{ $orderItem->item_price }}</td>
                                                        <td class="whitespace-nowrap py-1.5 text-xs text-slate-700 sm:pl-0">{{ $orderItem->product_sku }}</td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    @else
                                        <div class="my-4 py-8 px-4 text-sm rounded-md bg-slate-100 text-slate-600 text-center">
                                            There are no order items.
                                        </div>
                                    @endif
                                </div>

                                <div class="mt-1 ml-auto">
                                    <x-dialog.footer>
                                        <x-dialog.close>
                                            <x-secondary-button type="button">
                                                Close Window
                                            </x-secondary-button>
                                        </x-dialog.close>

                                        @if($order->canBeCanceled())
                                        <x-danger-button type="button" wire:click="$parent.delete($order->id)">
                                            Cancel Order
                                        </x-danger-button>
                                        @endif
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
                       class="text-rose-500 hover:text-rose-900">Delete Order</a>
                </x-menu.item>

            </x-menu.items>
        </x-menu>
    </td>
</tr>

