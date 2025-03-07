<textarea {{ $attributes->merge([
     'class' => 'flex-grow border border-slate-300 rounded text-sm px-1',
     'rows' => 4,
]) }}>{{ $slot }}</textarea>
