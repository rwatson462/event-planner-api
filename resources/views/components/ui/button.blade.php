<button {{ $attributes->merge([
    'type' => 'button',
    'class' => 'rounded-lg text-sm bg-sky-500 shadow border-sky-800 px-2 py-1 text-white cursor-pointer transition-all hover:bg-sky-600'
]) }}>{{ $slot }}</button>
