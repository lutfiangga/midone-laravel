@props(['width' => 'w-auto', 'height' => 'h-auto'])

<div class="{{ $width }} {{ $height }}">
    <x-base.chart
        id="report-pie-chart"
        {{ $attributes->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
    >
    </x-base.chart>
</div>

@once
    @push('scripts')
        @vite('resources/js/components/report-pie-chart/index.js')
    @endpush
@endonce
