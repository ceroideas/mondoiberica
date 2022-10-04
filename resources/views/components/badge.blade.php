@props(['color' => 'gray'])

<div class="flex space-x-2">
    <div class="flex space-x-2">
        <div {{ $attributes->merge(['class' => 'rounded text-' . $color . '-500 bg-' . $color . '-50 px-3']) }}>
            {{ $slot }}
        </div>
    </div>

    {{-- Carge colors --}}
    <div class="bg-sky-50 hidden text-sky-500 h-10 w-10"></div>
    <div class="bg-red-50 hidden text-red-500 h-10 w-10"></div>
    <div class="bg-green-50 hidden text-green-500 h-10 w-10"></div>
    <div class="bg-amber-50 hidden text-amber-500 h-10 w-10"></div>
    <div class="bg-gray-50 hidden text-gray-500 h-10 w-10"></div>
</div>
