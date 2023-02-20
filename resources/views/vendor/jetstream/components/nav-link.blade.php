@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-orange-550 text-sm font-medium leading-5 text-green-550 focus:outline-none focus:border-green-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-green-550 hover:text-orange-550 hover:border-orange-300 focus:outline-none focus:text-orange-550 focus:border-orange-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
