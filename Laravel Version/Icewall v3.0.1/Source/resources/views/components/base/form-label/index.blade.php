@aware(['formInline' => null, 'class' => null])

<label
    data-tw-merge
    {{ $attributes->class(['inline-block mb-2', $formInline ? 'mb-2 sm:mb-0 sm:mr-5 sm:text-right' : null])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>
    {{ $slot }}
</label>
