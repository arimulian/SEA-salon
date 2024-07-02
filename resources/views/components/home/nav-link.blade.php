@props(['active' => false])

@php
$classes = ($active ?? false)  ? "p-0.5 inline-block bg-blue-600 text-gray-100 rounded-lg  md:px-2
    font-semibold" :  "p-0.5 inline-block hover:bg-blue-600 hover:rounded-lg hover:text-gray-100 md:text-white md:px-2
    font-semibold";
@endphp

<li class="md:ml-4">
    <a wire:navigate
       {{ $attributes->merge(["class" => $classes ]) }}>{{$slot}}</a>
</li>