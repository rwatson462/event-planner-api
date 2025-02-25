<fieldset>
    <div class="flex justify-between gap-x-2">
        <x-ui.form.label for="{{ $attributes->get('property') }}" class="w-1/2 text-right">{{ $attributes->get('label') }}</x-ui.form.label>
        <x-ui.form.input type="{{ $attributes->get('type') }}" name="{{ $attributes->get('property') }}" id="{{ $attributes->get('property') }}" placeholder="{{ $attributes->get('placeholder', '') }}" value="{{ old($attributes->get('property')) }}"/>
    </div>

    @error($attributes->get('property'))
        <p class="text-sm font-bold text-red-500 text-right">{{ $message }}</p>
    @enderror
</fieldset>
