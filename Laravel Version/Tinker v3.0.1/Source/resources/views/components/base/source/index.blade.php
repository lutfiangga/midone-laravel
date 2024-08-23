<div {{ $attributes->class('source hidden')->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}>
    {{ $slot }}
</div>

@once
    @push('scripts')
        @vite('resources/js/components/source/index.js')
    @endpush
@endonce
