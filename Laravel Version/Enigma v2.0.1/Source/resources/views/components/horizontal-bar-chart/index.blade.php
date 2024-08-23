@props(['width' => 'w-auto', 'height' => 'h-auto'])

<div class="{{ $width }} {{ $height }}">
    <x-base.chart
        class="horizontal-bar-chart"
        {{ $attributes->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
    >
    </x-base.chart>
</div>

@once
    @push('scripts')
        @vite('resources/js/components/horizontal-bar-chart/index.js')
    @endpush
@endonce
