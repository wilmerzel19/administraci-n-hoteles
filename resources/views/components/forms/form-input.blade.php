@props(['id', 'name', 'type', 'value', 'label'])
<div class="border border-gray-400 p-2 bg-gray-100 shadow-lg mb-4 rounded-lg">
    <x-input-label for="name" value="{{$label}}" />
    <x-text-input id="{{$id}}" name="{{$name}}" type="{{$type}}" class="mt-1 block w-full" :value="old($value)" required autofocus autocomplete="{{$name}}" />
    <x-input-error class="mt-2" :messages="$errors->get($name)" />
</div>
