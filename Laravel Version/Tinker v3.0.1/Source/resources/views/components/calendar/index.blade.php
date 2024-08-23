<div
    data-tw-merge
    {{ $attributes->class(['full-calendar'])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
></div>

@once
    @push('vendors')
        @vite('resources/js/vendor/calendar/index.js')
        @vite('resources/js/vendor/calendar/plugins/interaction.js')
        @vite('resources/js/vendor/calendar/plugins/day-grid.js')
        @vite('resources/js/vendor/calendar/plugins/time-grid.js')
        @vite('resources/js/vendor/calendar/plugins/list.js')
    @endpush
@endonce

@once
    @push('scripts')
        @vite('resources/js/components/calendar/index.js')
    @endpush
@endonce
