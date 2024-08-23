@props(['as' => 'span', 'content' => null])

@if (substr($as, 0, 2) == 'x-')
    <x-dynamic-component
        title="{{ $content }}"
        {{ $attributes->class(merge(['tooltip cursor-pointer', $attributes->whereStartsWith('class')->first()]))->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
        :component="substr($as, 2)"
    >{{ $slot }}</x-dynamic-component>
@else
    <{{ $as }}
        title="{{ $content }}"
        {{ $attributes->class(merge(['tooltip cursor-pointer', $attributes->whereStartsWith('class')->first()]))->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
    >{{ $slot }}</{{ $as }}>
@endif

@once
    @push('vendors')
        @vite('resources/js/vendor/tippy/index.js')
    @endpush
@endonce

@once
    @push('scripts')
        @vite('resources/js/components/tippy/index.js')
    @endpush
@endonce
