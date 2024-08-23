@extends('../layouts/' . $layout)

@section('subhead')
    <title>Slider - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">Slider</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 intro-y lg:col-span-6">
            <!-- BEGIN: Single Item -->
            <x-base.preview-component class="intro-y box">
                <div
                    class="flex flex-col items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Single Item</h2>
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
                        <div class="mx-6">
                            <x-base.tiny-slider
                                id="single-item-slider"
                                config="single-item"
                            >
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            1
                                        </h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            2
                                        </h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            3
                                        </h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            4
                                        </h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            5
                                        </h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            6
                                        </h3>
                                    </div>
                                </div>
                            </x-base.tiny-slider>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="mx-6">
                                <x-base.tiny-slider
                                    id="single-item-slider"
                                    config="single-item"
                                >
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                1
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                2
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                3
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                4
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                5
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                6
                                            </h3>
                                        </div>
                                    </div>
                                </x-base.tiny-slider>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Single Item -->
            <!-- BEGIN: Multiple Item -->
            <x-base.preview-component class="mt-5 intro-y box">
                <div
                    class="flex flex-col items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Multiple Item
                    </h2>
                    <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label htmlFor="show-example-2">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-2"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <div class="mx-6">
                            <x-base.tiny-slider
                                id="multiple-item-slider"
                                config="multiple-items"
                            >
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            1
                                        </h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            2
                                        </h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            3
                                        </h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            4
                                        </h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            5
                                        </h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            6
                                        </h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            7
                                        </h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            8
                                        </h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            9
                                        </h3>
                                    </div>
                                </div>
                            </x-base.tiny-slider>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="mx-6">
                                <x-base.tiny-slider
                                    id="multiple-item-slider"
                                    config="multiple-items"
                                >
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                1
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                2
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                3
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                4
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                5
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                6
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                7
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                8
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                9
                                            </h3>
                                        </div>
                                    </div>
                                </x-base.tiny-slider>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Multiple Item -->
            <!-- BEGIN: Responsive Display -->
            <x-base.preview-component class="mt-5 intro-y box">
                <div
                    class="flex flex-col items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Responsive Display
                    </h2>
                    <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label htmlFor="show-example-3">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-3"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <div class="pb-8 mx-6">
                            <x-base.tiny-slider
                                id="responsive-slider"
                                config="responsive"
                            >
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            1
                                        </h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            2
                                        </h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            3
                                        </h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            4
                                        </h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            5
                                        </h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            6
                                        </h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            7
                                        </h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            8
                                        </h3>
                                    </div>
                                </div>
                            </x-base.tiny-slider>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="pb-8 mx-6">
                                <x-base.tiny-slider
                                    id="responsive-slider"
                                    config="responsive"
                                >
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                1
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                2
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                3
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                4
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                5
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                6
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                7
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                8
                                            </h3>
                                        </div>
                                    </div>
                                </x-base.tiny-slider>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Responsive Display -->
        </div>
        <div class="col-span-12 intro-y lg:col-span-6">
            <!-- BEGIN: Center Mode -->
            <x-base.preview-component class="intro-y box">
                <div
                    class="flex flex-col items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">Center Mode</h2>
                    <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label htmlFor="show-example-4">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-4"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <div class="mx-6">
                            <x-base.tiny-slider
                                id="center-mode-slider"
                                config="center-mode"
                            >
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            1
                                        </h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            2
                                        </h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            3
                                        </h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            4
                                        </h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            5
                                        </h3>
                                    </div>
                                </div>
                                <div class="h-32 px-2">
                                    <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                        <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                            6
                                        </h3>
                                    </div>
                                </div>
                            </x-base.tiny-slider>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="mx-6">
                                <x-base.tiny-slider
                                    id="center-mode-slider"
                                    config="center-mode"
                                >
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                1
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                2
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                3
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                4
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                5
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="h-32 px-2">
                                        <div class="h-full rounded-md bg-slate-100 dark:bg-darkmode-400">
                                            <h3 class="flex items-center justify-center h-full text-2xl font-medium">
                                                6
                                            </h3>
                                        </div>
                                    </div>
                                </x-base.tiny-slider>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Center Mode -->
            <!-- BEGIN: Fade Animation -->
            <x-base.preview-component class="mt-5 intro-y box">
                <div
                    class="flex flex-col items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Fade Animation
                    </h2>
                    <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label htmlFor="show-example-5">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-5"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <div class="pb-8 mx-6">
                            <x-base.tiny-slider config="fade-mode" id="fade-animation-slider">
                                <div class="h-64 px-2">
                                    <div class="h-full overflow-hidden rounded-md image-fit">
                                        <img
                                            src="{{ Vite::asset($fakers[0]['images'][0]) }}"
                                            alt="Midone Tailwind HTML Admin Template"
                                        />
                                    </div>
                                </div>
                                <div class="h-64 px-2">
                                    <div class="h-full overflow-hidden rounded-md image-fit">
                                        <img
                                            src="{{ Vite::asset($fakers[1]['images'][1]) }}"
                                            alt="Midone Tailwind HTML Admin Template"
                                        />
                                    </div>
                                </div>
                                <div class="h-64 px-2">
                                    <div class="h-full overflow-hidden rounded-md image-fit">
                                        <img
                                            src="{{ Vite::asset($fakers[2]['images'][2]) }}"
                                            alt="Midone Tailwind HTML Admin Template"
                                        />
                                    </div>
                                </div>
                            </x-base.tiny-slider>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="pb-8 mx-6">
                                <x-base.tiny-slider config="fade-mode" id="fade-animation-slider">
                                    <div class="h-64 px-2">
                                        <div class="h-full overflow-hidden rounded-md image-fit">
                                            <img
                                                src="{{ Vite::asset($fakers[0]['images'][0]) }}"
                                                alt="Midone Tailwind HTML Admin Template"
                                            />
                                        </div>
                                    </div>
                                    <div class="h-64 px-2">
                                        <div class="h-full overflow-hidden rounded-md image-fit">
                                            <img
                                                src="{{ Vite::asset($fakers[1]['images'][1]) }}"
                                                alt="Midone Tailwind HTML Admin Template"
                                            />
                                        </div>
                                    </div>
                                    <div class="h-64 px-2">
                                        <div class="h-full overflow-hidden rounded-md image-fit">
                                            <img
                                                src="{{ Vite::asset($fakers[2]['images'][2]) }}"
                                                alt="Midone Tailwind HTML Admin Template"
                                            />
                                        </div>
                                    </div>
                                </x-base.tiny-slider>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Fade Animation -->
        </div>
    </div>
@endsection
