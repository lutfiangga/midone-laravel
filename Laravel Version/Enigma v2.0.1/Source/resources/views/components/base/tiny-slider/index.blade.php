@props(['config' => null])

<div
    data-config="{{ $config }}"
    {{ $attributes->class(merge(['tiny-slider', $attributes->whereStartsWith('class')->first()]))->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>
    {{ $slot }}
</div>

@once
    @push('vendors')
        @vite('resources/js/vendor/tiny-slider/index.js')
    @endpush
@endonce

@once
    @push('scripts')
        @vite('resources/js/components/tiny-slider/index.js')
    @endpush
@endonce
