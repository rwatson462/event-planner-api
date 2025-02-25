<button {{ $attributes->merge([
    'type' => 'button',
    'class' => 'rounded text-sm bg-sky-600 shadow border-slate-100 px-2 py-1 text-white font-bold cursor-pointer'
]) }}>{{ $slot }}</button>
