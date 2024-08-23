@props(['to' => null])

<div
    id="{{ $to }}"
    {{ $attributes->class(merge(['tippy-content', $attributes->whereStartsWith('class')->first()]))->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>
    {{ $slot }}</div>

@once
    @push('scripts')
        @vite('resources/js/components/tippy-content/index.js')
    @endpush
@endonce
