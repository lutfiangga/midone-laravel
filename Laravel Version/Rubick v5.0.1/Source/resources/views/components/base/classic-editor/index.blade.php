<div class="editor">
    {{ $slot }}
</div>

@once
    @push('vendors')
        @vite('resources/js/vendor/ckeditor/classic/index.js')
    @endpush
@endonce

@once
    @push('scripts')
        @vite('resources/js/components/classic-editor/index.js')
    @endpush
@endonce
