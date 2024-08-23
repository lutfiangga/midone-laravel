<div
    data-tw-merge
    {{ $attributes->class(['full-calendar-draggable'])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>{{ $slot }}</div>

@once
    @push('vendors')
        @vite('resources/js/vendor/calendar/index.js')
        @vite('resources/js/vendor/calendar/plugins/interaction.js')
    @endpush
@endonce

@once
    @push('scripts')
        @vite('resources/js/components/calendar/draggable/index.js')
    @endpush
@endonce
