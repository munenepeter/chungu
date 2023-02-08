@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-green-600']) }}>
    {{ $value ?? $slot }}
</label>
