<div
    data-tw-merge
    {{ $attributes->class(['block sm:flex items-center'])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>
    {{ $slot }}
</div>
