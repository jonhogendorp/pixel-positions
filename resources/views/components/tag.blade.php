@props(['size' => 'base'])

@php
    $classes = 'bg-white/10 hover:bg-white/25 rounded-full text-white transition-colors duration-300';

    if ($size === 'sm') {
        $classes .= ' px-2 py-1 text-2xs';
    } elseif ($size === 'base') {
        $classes .= ' px-4 py-2 text-sm';
    } elseif ($size === 'lg') {
        $classes .= ' px-6 py-3 text-lg';
    }
@endphp


<a class="{{ $classes }}" href="#">{{ $slot }}</a>
