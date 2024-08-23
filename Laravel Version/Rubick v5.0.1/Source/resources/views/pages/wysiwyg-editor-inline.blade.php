@extends('../layouts/' . $layout)

@section('subhead')
    <title>Wysiwyg Editor - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="flex items-center mt-8">
        <h2 class="mr-auto text-lg font-medium">CKEditor</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Classic Editor -->
        <div class="col-span-12">
            <x-base.preview-component class="box">
                <div
                    class="flex flex-col items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Classic Editor
                    </h2>
                    <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label htmlFor="show-example-1">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-1"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <x-base.inline-editor>
                            <p>Content of the editor.</p>
                        </x-base.inline-editor>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.inline-editor>
                                <p>Content of the editor.</p>
                            </x-base.inline-editor>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
        </div>
        <!-- END: Classic Editor -->
    </div>
@endsection
