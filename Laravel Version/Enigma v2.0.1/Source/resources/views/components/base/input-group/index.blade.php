@props(['inputGroup' => null])

<div
    data-tw-merge
    {{ $attributes->class(['flex'])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>
    {{ $slot }}
</div>
