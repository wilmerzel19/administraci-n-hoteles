 @props(['name', 'id', 'value'])


<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    {{ $slot }}
    <input type="text" name="{{ $name }}" id="{{ $id }}" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $value }}">
</label>
