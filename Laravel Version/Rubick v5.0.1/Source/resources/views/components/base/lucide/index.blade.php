@props(['icon' => null, 'width' => 24, 'height' => 24])

<i
    data-lucide="{{ uncamelize($icon, '-') }}"
    width="{{ $width }}"
    height="{{ $height }}"
    {{ $attributes->class(merge(['stroke-1.5', $attributes->whereStartsWith('class')->first()]))->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
></i>

@once
    @push('vendors')
        @vite('resources/js/vendor/lucide/index.js')
    @endpush
@endonce

@once
    @push('scripts')
        @vite('resources/js/components/lucide/index.js')
    @endpush
@endonce
