@props([
    'disabled' => false,
    'rows' => 4,
])

<textarea {{ $disabled ? 'disabled' : '' }}  rows="{{ $rows }}" {!! $attributes->merge(['class' => 'block w-full rounded-md border-0 py-1.5 text-slate-700 shadow-sm ring-1 ring-inset ring-slate-100 placeholder:text-slate-400 focus:ring-2 focus:ring-inset focus:ring-sky-300 sm:text-sm sm:leading-6']) !!}></textarea>
