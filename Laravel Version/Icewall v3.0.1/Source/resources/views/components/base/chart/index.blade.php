<canvas
    {{ $attributes->class(merge(['chart', $attributes->whereStartsWith('class')->first()]))->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
></canvas>

@once
    @push('vendors')
        @vite('resources/js/vendor/chartjs/index.js')
    @endpush
@endonce
