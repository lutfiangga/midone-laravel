@props(['src' => null])

<img
    data-action="zoom"
    src="{{ $src }}"
    {{ $attributes->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
/>

@once
    @push('vendors')
        @vite('resources/js/vendor/image-zoom/index.js')
    @endpush
@endonce
