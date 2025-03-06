<form
    method="{{$form['method'] ?? 'POST'}}"
    action="{{$form['action'] ?? ''}}"
    class="max-w-lg space-y-4 p-8 pt-20"
>
    @csrf

    @foreach($form['fields'] as $property => $field)
        <fieldset>
            <div class="flex justify-between gap-x-2">
                <x-ui.form.label for="{{ $property }}" class="w-1/2 text-right">{{ $field['label'] }}</x-ui.form.label>
                <x-ui.form.input
                    type="{{ $field['type'] ?? 'text' }}"
                    name="{{ $property }}"
                    id="{{ $property }}"
                    placeholder="{{ $field['placeholder'] ?? '' }}"
                    value="{{ old($property) }}"
                    required="{{ $field['required'] ?? false }}"
                />
            </div>

            @error($property)
                <p class="text-sm font-bold text-red-500 text-right">{{ $message }}</p>
            @enderror
        </fieldset>
    @endforeach

    <p class="text-right">
        <x-ui.button type="submit">{{ $form['submitText'] }}</x-ui.button>
    </p>
</form>
