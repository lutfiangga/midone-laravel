@aware(['inputGroup' => null])

<div
    data-tw-merge
    {{ $attributes->class([
            'py-2 px-3 bg-slate-100 border shadow-sm border-slate-200 text-slate-600 dark:bg-darkmode-900/20 dark:border-darkmode-900/20 dark:text-slate-400',
            $inputGroup ? 'rounded-none [&:not(:first-child)]:border-l-transparent first:rounded-l last:rounded-r' : null,
        ])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>
    {{ $slot }}
</div>
