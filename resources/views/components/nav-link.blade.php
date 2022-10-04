@props(['active'])

@php
    $classes = ($active ?? false)
				? 'text-white'
				: 'text-blue-lighter';
@endphp

<li class="flex">
    @if($active)
        <span class="bg-white left-0 w-2 absolute">&nbsp;</span>
    @endif
    <a {{ $attributes->merge(['class' => 'flex items-center '.$classes]) }}>
        {{ $slot }}
    </a>
</li>
