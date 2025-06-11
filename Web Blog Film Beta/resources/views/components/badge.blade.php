@props(['textColor', 'bgColor'])

@php
    $textColor = match ($textColor) {
        'red' => 'text-red-800',
        'yellow' => 'text-yellow-800',
        'orange' => 'text-orange-800',
        'blue' => 'text-blue-800',
        'white' => 'text-white',
        default => 'text-white',
    };

    $bgColor = match ($bgColor) {
        'red' => 'bg-red-600',
        'yellow' => 'bg-yellow-800',
        'orange' => 'bg-orange-800',
        'blue' => 'bg-blue-800',
        'white' => 'bg-white-800',
        default => 'bg-gray-800',
    };
@endphp

<button {{ $attributes }} class="{{ $textColor }} {{ $bgColor}} rounded-xl px-3 py-1 text-base">
    {{ $slot }} </button>
