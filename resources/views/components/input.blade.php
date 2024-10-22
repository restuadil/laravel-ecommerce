<!-- resources/views/components/input.blade.php -->
@props(['label', 'name', 'value' => '', 'type' => 'text'])

<div>
    <div class="flex flex-row gap-2 items-center">
        <label for="{{ $name }}" class="block text-sm font-medium text-gray-700">{{ $label }}
        </label>
        @error($name)
            <p class="ml-2 text-red-500 block text-sm font-medium">*{{ $message }}</p>
        @enderror
    </div>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ old($name, $value) }}"
        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
        placeholder="{{ $label }}">


</div>
