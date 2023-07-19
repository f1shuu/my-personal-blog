@props(['name', 'textColor' => 'black'])

<x-form.field>
    <x-form.label name="{{ str_replace('_', ' ', $name) }}"/>

    <input class="text-{{ $textColor }} border border-gray-400 p-2 w-full rounded-xl"
           name="{{ $name }}"
           id="{{ $name }}"
           {{ $attributes(['value' => old($name)]) }}
    >

    <x-form.error name="{{ $name }}"/>
</x-form.field>
