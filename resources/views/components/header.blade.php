@props(['title'])


<div>
    <x-slot name="header">
        <div class="flex items-center justify-between">

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $title }}
        </h2>


        {{$slot}}

    </x-slot>
