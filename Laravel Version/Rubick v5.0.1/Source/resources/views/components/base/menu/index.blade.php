@props(['as' => 'div', 'placement' => 'bottom-end'])

@once
    @push('vendors')
        @vite('resources/js/vendor/dropdown/index.js')
    @endpush
@endonce

<{{ $as }}
    data-tw-merge
    data-tw-placement="{{ $placement }}"
    {{ $attributes->class(['dropdown relative'])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>{{ $slot }}</{{ $as }}>
