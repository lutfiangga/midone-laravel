@props(['multiple' => null])

<form
    {{ $attributes->class(merge(['[&.dropzone]:border-2 [&.dropzone]:border-dashed dropzone [&.dropzone]:border-darkmode-200/60 [&.dropzone]:dark:bg-darkmode-600 [&.dropzone]:dark:border-white/5', $attributes->whereStartsWith('class')->first()]))->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>
    <div class="fallback">
        <input
            name="file"
            type="file"
            {{ $multiple ? 'multiple' : '' }}
        />
    </div>
    <div
        class="dz-message"
        data-dz-message
    >
        {{ $slot }}
    </div>
</form>

@once
    @push('vendors')
        @vite('resources/js/vendor/dropzone/index.js')
    @endpush
@endonce

@once
    @push('scripts')
        @vite('resources/js/components/dropzone/index.js')
    @endpush
@endonce
