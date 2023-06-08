@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-100 border-gray-700 bg-gray-100 text-gray-800 focus:border-indigo-100 focus:border-indigo-100 focus:ring-indigo-200 focus:ring-indigo-600 rounded-md shadow-sm']) !!}>
