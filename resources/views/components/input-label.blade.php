@props(['value'])

<label {{ $attributes->merge(['class' => 'block leading-6 font-medium text-sm text-slate-700']) }}>
    {{ $value ?? $slot }}
</label>
