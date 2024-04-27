<div>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-slate-800 leading-tight">
                Supply Chain Dashboard
            </h2>
        </div>
    </x-slot>

    <x-page-wrapper>

        <div>
            <div class="mx-auto max-w-7xl">
                <div class="grid grid-cols-1 gap-px sm:grid-cols-2 lg:grid-cols-4 rounded-md">
                    <div class="bg-stone-200 px-4 py-6 sm:px-6 lg:px-8 rounded-b-xl">
                        <p class="text-sm font-medium leading-6 text-slate-500">Active Orders</p>
                        <p class="mt-2 flex items-baseline gap-x-2">
                            <span class="text-4xl font-extrabold tracking-tight text-slate-800">
                                {{ $this->total_active_orders }}
                            </span>
                        </p>
                    </div>
                    <div class="bg-stone-200 px-4 py-6 sm:px-6 lg:px-8 rounded-b-xl">
                        <p class="text-sm font-medium leading-6 text-slate-500">30 Day Order Total</p>
                        <p class="mt-2 flex items-baseline gap-x-2">
                            <span class="text-2xl text-slate-400">$</span>
                            <span class="text-4xl font-extrabold tracking-tight text-slate-800">
                                {{ $this->total_order_30_days }}
                            </span>
                            <span class="text-sm text-slate-400">USD</span>
                        </p>
                    </div>
                    <div class="bg-stone-200 px-4 py-6 sm:px-6 lg:px-8 rounded-b-xl">
                        <p class="text-sm font-medium leading-6 text-slate-500">Active Shipments</p>
                        <p class="mt-2 flex items-baseline gap-x-2">
                            <span class="text-4xl font-extrabold tracking-tight text-slate-800">
                                {{ $this->total_active_shipments }}
                            </span>
                        </p>
                    </div>
                    <div class="bg-stone-200 px-4 py-6 sm:px-6 lg:px-8 rounded-b-xl">
                        <p class="text-sm font-medium leading-6 text-slate-500">Products for ReOrder Pts</p>
                        <p class="mt-2 flex items-baseline gap-x-2">
                            <span class="text-4xl font-extrabold tracking-tight text-slate-800">
                                {{ $this->products_for_reorder }}
                            </span>
                            <span class="text-sm text-slate-400">(fake/random)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8">

            <div class="grid grid-cols-1 my-4 xl:grid-cols-2 xl:gap-4">
                <!-- Upcoming Shipments widget -->
                <div class="p-4 mb-4 bg-white border border-slate-200 rounded-lg shadow-sm sm:p-6 xl:mb-0">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center mb-4">
                            <x-icon.transportation class="w-6 h-6 mr-2" />
                            <span class="text-lg font-medium text-slate-800">Upcoming Shipments</span>
                        </div>
                        <a class="text-xs font-semibold text-sky-500">View All</a>
                    </div>

                    <table class="min-w-full divide-y divide-slate-200 dark:divide-slate-600">
                        <thead class="bg-slate-50 dark:bg-slate-700">
                        <tr>
                            <th scope="col" class="p-2 text-xs font-medium tracking-wider text-left text-slate-500 uppercase">
                                Type
                            </th>
                            <th scope="col" class="p-2 text-xs font-medium tracking-wider text-left text-slate-500 uppercase">
                                Shipment Tracking
                            </th>
                            <th scope="col" class="p-2 text-xs font-medium tracking-wider text-left text-slate-500 uppercase">
                                Scheduled Dates
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white">
                        @foreach($this->shipments as $shipment)
                            <tr>
                                <td class="p-4 text-xs font-normal text-slate-900 whitespace-nowrap">
                                    <x-status-badge :label="$shipment->transportationType->name" :color="$shipment->transportationType->color" />
                                </td>
                                <td class="p-4 text-xs font-normal text-slate-900 whitespace-nowrap">
                                    <div>
                                        <span class="text-slate-500">Tracking Num:</span>
                                        {{ $shipment->tracking_number ?? 'n/a' }}
                                    </div>
                                    {{ $shipment->order->customer->city_state ?? 'n/a' }}
                                </td>
                                <td class="p-4 text-xs font-normal text-slate-900 whitespace-nowrap">
                                    <div>
                                        {{ $shipment->scheduled_delivery_date ?? 'n/a' }}
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
                <!--Recent Orders widget -->
                <div class="p-4 mb-4 bg-white border border-slate-200 rounded-lg shadow-sm sm:p-6 xl:mb-0">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center mb-4">
                            <x-icon.credit-card class="w-6 h-6 mr-2" />
                            <span class="text-lg font-medium text-slate-800">Recent Orders</span>
                        </div>
                        <a href="{{ route('orders') }}" class="text-xs font-semibold text-sky-500">
                            View All
                        </a>
                    </div>

                    <table class="min-w-full divide-y divide-slate-200 dark:divide-slate-600">
                        <thead class="bg-slate-50 dark:bg-slate-700">
                        <tr>
                            <th scope="col" class="p-2 text-xs font-medium tracking-wider text-left text-slate-500 uppercase">
                                Order Info
                            </th>
                            <th scope="col" class="p-2 text-xs font-medium tracking-wider text-left text-slate-500 uppercase">
                                Status
                            </th>
                            <th scope="col" class="p-2 text-xs font-medium tracking-wider text-left text-slate-500 uppercase">
                                Customer Information
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white">
                        @foreach($this->orders as $order)
                        <tr>
                            <td class="p-4 text-xs font-normal text-slate-900 whitespace-nowrap">
                                <div class="font-bold">{{ $order->order_amount }}</div>
                                <div class="text-slate-500">{{ $order->order_date }}</div>
                            </td>
                            <td class="p-4 text-xs font-normal text-slate-500 whitespace-nowrap">
                                <x-status-badge :label="$order->orderStatus->name" :color="$order->orderStatus->color" />
                            </td>
                            <td class="p-4 text-xs font-normal text-slate-900 whitespace-nowrap">
                                {{ $order->customer->full_name ?? 'n/a' }}
                                <div class="text-slate-500">{{ $order->customer->email_primary ?? 'n/a' }}</div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </x-page-wrapper>

</div>
