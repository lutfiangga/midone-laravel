<div {{ $attributes->class('preview-component')->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}>
    {{ $slot }}
</div>

@once
    @push('scripts')
        @vite('resources/js/components/preview-component/index.js')
    @endpush
@endonce
