@props(['active'])

@php
$classes = ($active ?? false)
            ? 'py-3 px-6 hover:bg-blue-600 bg-gray-900 w-full'
            : 'py-3 px-6 hover:bg-blue-600 w-full';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
