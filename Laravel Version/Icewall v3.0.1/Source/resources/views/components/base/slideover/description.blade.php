@props(['as' => 'div'])

<{{ $as }}
    {{ $attributes->class(['p-5 overflow-y-auto flex-1'])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>{{ $slot }}</{{ $as }}>
