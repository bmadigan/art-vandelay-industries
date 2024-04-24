@props([
    'label' => 'N/A',
    'color' => 'bg-slate-200 text-slate-500',
    'rounded' => true,
])

<span class="inline-flex items-center px-2 py-1 text-xxs font-medium uppercase {{ $color }} @if($rounded) rounded-md @endif">
    {{ $label }}
</span>
