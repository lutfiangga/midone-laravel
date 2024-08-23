@props(['lat' => null, 'long' => null, 'sources' => null, 'apiKey' => null])

<div
    data-lat="{{ $lat }}"
    data-long="{{ $long }}"
    data-sources="{{ $sources }}"
    data-api-key="{{ $apiKey }}"
    {{ $attributes->class([
            'leaflet',
            '[&_.leaflet-tile-pane]:saturate-[.3]' => !$darkMode,
            '[&_.leaflet-tile-pane]:grayscale [&_.leaflet-tile-pane]:invert [&_.leaflet-tile-pane]:brightness-90 [&_.leaflet-tile-pane]:hue-rotate-15' => $darkMode,
        ])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>
</div>

@once
    @push('vendors')
        @vite('resources/js/vendor/leaflet-map/index.js')
    @endpush
@endonce

@once
    @push('scripts')
        @vite('resources/js/components/leaflet-map-loader/index.js')
    @endpush
@endonce
