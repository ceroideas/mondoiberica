@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded shadow-sm border-gray-300 bg-blue-light focus:border-blue-light focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}>
