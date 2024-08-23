<x-base.form-input
    type="text"
    {{ $attributes->class(merge(['datepicker', $attributes->whereStartsWith('class')->first()]))->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
/>

@once
    @push('vendors')
        @vite('resources/js/vendor/litepicker/index.js')
    @endpush
@endonce

@once
    @push('scripts')
        @vite('resources/js/components/litepicker/index.js')
    @endpush
@endonce
