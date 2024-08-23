@props(['width' => 'w-auto', 'height' => 'h-auto'])

<div class="{{ $width }} {{ $height }}">
    <x-base.chart
        class="donut-chart"
        {{ $attributes->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
    >
    </x-base.chart>
</div>

@once
    @push('scripts')
        @vite('resources/js/components/donut-chart/index.js')
    @endpush
@endonce
