@props(['as' => 'div'])

<{{ $as }}
    {{ $attributes->class(['p-5'])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>{{ $slot }}</{{ $as }}>
