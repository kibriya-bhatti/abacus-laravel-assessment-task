@props(['value'])

<label {{ $attributes->merge(['class' => 'mt-2 font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
