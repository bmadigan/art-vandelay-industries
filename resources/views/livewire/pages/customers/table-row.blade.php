<tr>
    <td class="whitespace-nowrap py-3 text-sm font-medium text-slate-900 sm:pl-0">
        {{ $customer->full_name }}
    </td>
    <td class="whitespace-nowrap px-3 py-4 text-sm text-slate-500">{{ $customer->email_primary ?? 'n/a'}}</td>
    <td class="whitespace-nowrap px-3 py-4 text-sm text-slate-500">{{ $customer->email_invoice ?? 'n/a' }}</td>
    <td class="whitespace-nowrap px-3 py-4 text-sm text-slate-500">{{ $customer->city_state ?? 'n/a'}}</td>
    <td class="whitespace-nowrap px-3 py-4 text-sm text-slate-500">{{ $customer->customer_since }}</td>
    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
        <a href="#" wire:click.prevent="$dispatch('open-modal', 'create-new-customer')" class="mr-2 text-sky-600 hover:text-sky-900">Edit</a>
        <button type="button"
           wire:confirm="Are you sure you want to remove this Customer?"
           wire:click="$parent.delete({{ $customer->id }})"
           class="text-rose-500 hover:text-rose-900">Delete</button>
    </td>
</tr>

