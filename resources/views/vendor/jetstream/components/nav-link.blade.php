@props(['active'])

@php
$classes =  'inline-flex items-center px-4 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} style="text-decoration: none ">
    {{ $slot }}
</a>
