@props(['id' => null, 'fullWidth' => true, 'selected' => false])
@aware(['variant' => 'tabs'])

@once
    @push('vendors')
        @vite('resources/js/vendor/tab/index.js')
    @endpush
@endonce

<li
    id="{{ $id }}"
    data-tw-merge
    role="presentation"
    {{ $attributes->class(merge(['focus-visible:outline-none', $fullWidth ? 'flex-1' : null, $variant == 'tabs' ? '-mb-px' : null]))->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>
    {{ $slot }}
</li>
