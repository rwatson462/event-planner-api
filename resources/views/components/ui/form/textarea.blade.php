<textarea {{ $attributes->merge([
     'class' => 'flex-grow border border-slate-400 rounded text-sm px-1',
     'rows' => 4,
]) }}>{{ $slot }}</textarea>
