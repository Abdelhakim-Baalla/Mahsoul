@props(['label' => '', 'name' => '', 'type' => 'text', 'value' => '', 'required' => false, 'placeholder' => '', 'error' => ''])
<div class="w-full">
    @if($label)
    <label for="{{ $name }}" class="block text-sm font-medium text-forest mb-1.5">{{ $label }}</label>
    @endif
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ old($name, $value) }}"
           class="w-full px-4 py-3 border border-earth-300 input-eco focus:ring-2 focus:ring-forest-500 focus:border-forest-500 transition"
           @if($required) required @endif @if($placeholder) placeholder="{{ $placeholder }}" @endif>
    @if($error)
    <p class="mt-1 text-sm text-red-600">{{ $error }}</p>
    @endif
</div>