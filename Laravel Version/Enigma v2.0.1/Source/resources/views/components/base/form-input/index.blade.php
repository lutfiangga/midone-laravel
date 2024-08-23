@props(['formInputSize' => null, 'rounded' => null])
@aware(['formInline' => null, 'inputGroup' => null])

<input
    data-tw-merge
    {{ $attributes->class(
            merge([
                'disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent',
                '[&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent',
                'transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80',
                $formInputSize == 'sm' ? 'text-xs py-1.5 px-2' : null,
                $formInputSize == 'lg' ? 'text-lg py-1.5 px-4' : null,
                $rounded ? 'rounded-full' : null,
                $formInline ? 'flex-1' : null,
                $inputGroup
                    ? 'rounded-none [&:not(:first-child)]:border-l-transparent first:rounded-l last:rounded-r z-10'
                    : null,
                $attributes->whereStartsWith('class')->first(),
            ]),
        )->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
/>
