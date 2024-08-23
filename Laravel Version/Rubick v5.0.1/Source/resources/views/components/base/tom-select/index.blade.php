<select {{ $attributes->class(['tom-select'])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}>
    {{ $slot }}
</select>

@once
    @push('vendors')
        @vite('resources/js/vendor/tom-select/index.js')
    @endpush
@endonce

@once
    @push('scripts')
        @vite('resources/js/components/tom-select/index.js')
    @endpush
@endonce
