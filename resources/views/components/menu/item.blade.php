<button
    type="button"
    x-menu:item
    x-bind:class="{
        'bg-slate-100 text-slate-900': $menuItem.isActive,
        'text-slate-600': ! $menuItem.isActive,
        'opacity-50 cursor-not-allowed': $menuItem.isDisabled,
    }"
    class="flex items-center gap-2 w-full px-3 py-2 text-left text-sm hover:bg-slate-50 disabled:text-slate-500 transition-colors"
    {{ $attributes }}
>
    {{ $slot }}
</button>
