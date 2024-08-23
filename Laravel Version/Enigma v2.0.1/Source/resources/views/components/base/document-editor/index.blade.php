<div class="editor document-editor">
    <div class="document-editor__toolbar"></div>
    <div class="document-editor__editable-container">
        <div class="document-editor__editable">
            {{ $slot }}
        </div>
    </div>
</div>

@once
    @push('vendors')
        @vite('resources/js/vendor/ckeditor/document/index.js')
    @endpush
@endonce

@once
    @push('scripts')
        @vite('resources/js/components/document-editor/index.js')
    @endpush
@endonce
