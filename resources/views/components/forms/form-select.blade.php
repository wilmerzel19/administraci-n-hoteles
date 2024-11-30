@props(['id', 'name', 'data', 'value', 'label'])
<div class="border border-gray-400 p-2 bg-gray-100 shadow-lg mb-4 rounded-lg">
    <x-input-label for="name" value="{{$label}}" />
    <select class="w-full rounded-md" id="{{$id}}" name="{{$name}}">
        <option value="">Seleccione una opción</option>
        @foreach($data as $value => $texto)
            <option value="{{$value}}">{{$texto}}</option>
        @endforeach
    </select>
    <x-input-error class="mt-2" :messages="$errors->get($name)" />
</div>
