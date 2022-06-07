@props(['active' => false])

@php
    $classes = 'block text-left p-2 text-sm hover:bg-gray-300 focus:bg-gray-300';
@endphp

<a {{ $attributes(['class' => $classes]) }}>
    {{$slot}}
</a>
