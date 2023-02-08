@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5 rounded-md shadow-sm']) !!}>
