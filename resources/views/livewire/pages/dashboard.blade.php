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
                            <span class="text-4xl font-extrabold tracking-tight text-slate-800">405</span>
                        </p>
                    </div>
                    <div class="bg-stone-200 px-4 py-6 sm:px-6 lg:px-8 rounded-b-xl">
                        <p class="text-sm font-medium leading-6 text-slate-500">Monthly Order Total</p>
                        <p class="mt-2 flex items-baseline gap-x-2">
                            <span class="text-4xl font-extrabold tracking-tight text-slate-800">3.65</span>
                            <span class="text-sm text-slate-400">mins</span>
                        </p>
                    </div>
                    <div class="bg-stone-200 px-4 py-6 sm:px-6 lg:px-8 rounded-b-xl">
                        <p class="text-sm font-medium leading-6 text-slate-500">Active Shipments</p>
                        <p class="mt-2 flex items-baseline gap-x-2">
                            <span class="text-4xl font-extrabold tracking-tight text-slate-800">3</span>
                        </p>
                    </div>
                    <div class="bg-stone-200 px-4 py-6 sm:px-6 lg:px-8 rounded-b-xl">
                        <p class="text-sm font-medium leading-6 text-slate-500">Products for ReOrder Pts</p>
                        <p class="mt-2 flex items-baseline gap-x-2">
                            <span class="text-4xl font-extrabold tracking-tight text-slate-800">54</span>
                            <span class="text-sm text-slate-400">(fake/random)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8">

            <div class="grid grid-cols-1 my-4 xl:grid-cols-2 xl:gap-4">
                <!-- Upcoming Shipments widget -->
                <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800 xl:mb-0">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center mb-4">
                            <x-icon.transportation class="w-6 h-6 mr-2" />
                            <span class="text-lg font-medium text-slate-800">Upcoming Shipments</span>
                        </div>
                        <a class="text-xs font-semibold text-sky-500">View All</a>
                    </div>

                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th scope="col" class="p-2 text-xs font-medium tracking-wider text-left text-slate-500 uppercase">
                                Shipment Tracking
                            </th>
                            <th scope="col" class="p-2 text-xs font-medium tracking-wider text-left text-slate-500 uppercase">
                                Status
                            </th>
                            <th scope="col" class="p-2 text-xs font-medium tracking-wider text-left text-slate-500 uppercase">
                                Scheduled Dates
                            </th>
                            <th scope="col" class="p-2 text-xs font-medium tracking-wider text-left text-slate-500 uppercase">
                                Customer Information
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800">
                        <tr>
                            <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                Payment from <span class="font-semibold">Bonnie Green</span>
                            </td>
                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                Apr 23 ,2021
                            </td>
                            <td class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                $2300
                            </td>
                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                0047568936
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                <!--Recent Orders widget -->
                <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800 xl:mb-0">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center mb-4">
                            <x-icon.credit-card class="w-6 h-6 mr-2" />
                            <span class="text-lg font-medium text-slate-800">Recent Orders</span>
                        </div>
                        <a class="text-xs font-semibold text-sky-500">View All</a>
                    </div>

                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th scope="col" class="p-2 text-xs font-medium tracking-wider text-left text-slate-500 uppercase">
                                Shipment Tracking
                            </th>
                            <th scope="col" class="p-2 text-xs font-medium tracking-wider text-left text-slate-500 uppercase">
                                Status
                            </th>
                            <th scope="col" class="p-2 text-xs font-medium tracking-wider text-left text-slate-500 uppercase">
                                Scheduled Dates
                            </th>
                            <th scope="col" class="p-2 text-xs font-medium tracking-wider text-left text-slate-500 uppercase">
                                Customer Information
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800">
                        <tr>
                            <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                Payment from <span class="font-semibold">Bonnie Green</span>
                            </td>
                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                Apr 23 ,2021
                            </td>
                            <td class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                $2300
                            </td>
                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                0047568936
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </x-page-wrapper>

</div>
