<div class="editor">
    {{ $slot }}
</div>

@once
    @push('vendors')
        @vite('resources/js/vendor/ckeditor/balloon-block/index.js')
    @endpush
@endonce

@once
    @push('scripts')
        @vite('resources/js/components/balloon-block-editor/index.js')
    @endpush
@endonce
