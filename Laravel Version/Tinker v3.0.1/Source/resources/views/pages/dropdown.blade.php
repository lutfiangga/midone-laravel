@extends('../layouts/' . $layout)

@section('subhead')
    <title>Dropdown - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">Dropdown</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Basic Dropdown -->
            <x-base.preview-component class="intro-y box">
                <div
                    class="flex flex-col items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Basic Dropdown
                    </h2>
                    <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-1">
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
                        <div class="flex justify-center">
                            <x-base.menu>
                                <x-base.menu.button
                                    as="x-base.button"
                                    variant="primary"
                                >
                                    Show Dropdown
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.item>New Dropdown</x-base.menu.item>
                                    <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.menu>
                                <x-base.menu.button
                                    as="x-base.button"
                                    variant="primary"
                                >
                                    Show Dropdown
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.item>New Dropdown</x-base.menu.item>
                                    <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Basic Dropdown -->
            <!-- BEGIN: Header & Footer Dropdown -->
            <x-base.preview-component class="mt-5 intro-y box">
                <div
                    class="flex flex-col items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Header & Footer Dropdown
                    </h2>
                    <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-2">
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
                        <div class="flex justify-center">
                            <x-base.menu>
                                <x-base.menu.button
                                    as="x-base.button"
                                    variant="primary"
                                >
                                    Show Dropdown
                                </x-base.menu.button>
                                <x-base.menu.items class="w-56">
                                    <x-base.menu.header>Export Options</x-base.menu.header>
                                    <x-base.menu.divider />
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="w-4 h-4 mr-2"
                                            icon="Activity"
                                        />
                                        English
                                    </x-base.menu.item>
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="w-4 h-4 mr-2"
                                            icon="Box"
                                        />
                                        Indonesia
                                        <div class="px-1 ml-auto text-xs text-white rounded-full bg-danger">
                                            10
                                        </div>
                                    </x-base.menu.item>
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="w-4 h-4 mr-2"
                                            icon="Layout"
                                        />
                                        English
                                    </x-base.menu.item>
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="w-4 h-4 mr-2"
                                            icon="Sidebar"
                                        />
                                        Indonesia
                                    </x-base.menu.item>
                                    <x-base.menu.divider />
                                    <x-base.menu.footer>
                                        <x-base.button
                                            class="px-2 py-1"
                                            type="button"
                                            variant="primary"
                                        >
                                            Settings
                                        </x-base.button>
                                        <x-base.button
                                            class="px-2 py-1 ml-auto"
                                            type="button"
                                            variant="secondary"
                                        >
                                            View Profile
                                        </x-base.button>
                                    </x-base.menu.footer>
                                </x-base.menu.items>
                            </x-base.menu>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.menu>
                                <x-base.menu.button
                                    as="x-base.button"
                                    variant="primary"
                                >
                                    Show Dropdown
                                </x-base.menu.button>
                                <x-base.menu.items class="w-56">
                                    <x-base.menu.header>Export Options</x-base.menu.header>
                                    <x-base.menu.divider />
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="w-4 h-4 mr-2"
                                            icon="Activity"
                                        />
                                        English
                                    </x-base.menu.item>
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="w-4 h-4 mr-2"
                                            icon="Box"
                                        />
                                        Indonesia
                                        <div class="px-1 ml-auto text-xs text-white rounded-full bg-danger">
                                            10
                                        </div>
                                    </x-base.menu.item>
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="w-4 h-4 mr-2"
                                            icon="Layout"
                                        />
                                        English
                                    </x-base.menu.item>
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="w-4 h-4 mr-2"
                                            icon="Sidebar"
                                        />
                                        Indonesia
                                    </x-base.menu.item>
                                    <x-base.menu.divider />
                                    <x-base.menu.footer>
                                        <x-base.button
                                            class="px-2 py-1"
                                            type="button"
                                            variant="primary"
                                        >
                                            Settings
                                        </x-base.button>
                                        <x-base.button
                                            class="px-2 py-1 ml-auto"
                                            type="button"
                                            variant="secondary"
                                        >
                                            View Profile
                                        </x-base.button>
                                    </x-base.menu.footer>
                                </x-base.menu.items>
                            </x-base.menu>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Header & Footer Dropdown -->
            <!-- BEGIN: Icon Dropdown -->
            <x-base.preview-component class="mt-5 intro-y box">
                <div
                    class="flex flex-col items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Icon Dropdown
                    </h2>
                    <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-3">
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
                        <div class="flex justify-center">
                            <x-base.menu>
                                <x-base.menu.button
                                    as="x-base.button"
                                    variant="primary"
                                >
                                    Show Dropdown
                                </x-base.menu.button>
                                <x-base.menu.items class="w-48">
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="w-4 h-4 mr-2"
                                            icon="Edit"
                                        /> New
                                        Dropdown
                                    </x-base.menu.item>
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="w-4 h-4 mr-2"
                                            icon="Trash"
                                        />
                                        Delete Dropdown
                                    </x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.menu>
                                <x-base.menu.button
                                    as="x-base.button"
                                    variant="primary"
                                >
                                    Show Dropdown
                                </x-base.menu.button>
                                <x-base.menu.items class="w-48">
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="w-4 h-4 mr-2"
                                            icon="Edit"
                                        /> New
                                        Dropdown
                                    </x-base.menu.item>
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="w-4 h-4 mr-2"
                                            icon="Trash"
                                        />
                                        Delete Dropdown
                                    </x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Icon Dropdown -->
            <!-- BEGIN: Dropdown with close button -->
            <x-base.preview-component class="mt-5 intro-y box">
                <div
                    class="flex flex-col items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Dropdown with close button
                    </h2>
                    <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-4">
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
                        <div class="text-center">
                            <x-base.popover
                                class="inline-block"
                                placement="bottom-start"
                            >
                                <x-base.popover.button
                                    as="x-base.button"
                                    variant="primary"
                                >
                                    Filter Dropdown
                                    <x-base.lucide
                                        class="w-4 h-4 ml-2"
                                        icon="ChevronDown"
                                    />
                                </x-base.popover.button>
                                <x-base.popover.panel>
                                    <div class="p-2">
                                        <div>
                                            <div class="text-xs text-left">From</div>
                                            <x-base.form-input
                                                class="flex-1 mt-2"
                                                type="text"
                                                placeholder="example@gmail.com"
                                            />
                                        </div>
                                        <div class="mt-3">
                                            <div class="text-xs text-left">To</div>
                                            <x-base.form-input
                                                class="flex-1 mt-2"
                                                type="text"
                                                placeholder="example@gmail.com"
                                            />
                                        </div>
                                        <div class="flex items-center mt-3">
                                            <x-base.button
                                                class="w-32 ml-auto"
                                                data-dismiss="dropdown"
                                                variant="secondary"
                                            >
                                                Close
                                            </x-base.button>
                                            <x-base.button
                                                class="w-32 ml-2"
                                                variant="primary"
                                            >
                                                Search
                                            </x-base.button>
                                        </div>
                                    </div>
                                </x-base.popover.panel>
                            </x-base.popover>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="text-center">
                                <x-base.popover
                                    class="inline-block"
                                    placement="bottom-start"
                                >
                                    <x-base.popover.button
                                        as="x-base.button"
                                        variant="primary"
                                    >
                                        Filter Dropdown
                                        <x-base.lucide
                                            class="w-4 h-4 ml-2"
                                            icon="ChevronDown"
                                        />
                                    </x-base.popover.button>
                                    <x-base.popover.panel>
                                        <div class="p-2">
                                            <div>
                                                <div class="text-xs text-left">From</div>
                                                <x-base.form-input
                                                    class="flex-1 mt-2"
                                                    type="text"
                                                    placeholder="example@gmail.com"
                                                />
                                            </div>
                                            <div class="mt-3">
                                                <div class="text-xs text-left">To</div>
                                                <x-base.form-input
                                                    class="flex-1 mt-2"
                                                    type="text"
                                                    placeholder="example@gmail.com"
                                                />
                                            </div>
                                            <div class="flex items-center mt-3">
                                                <x-base.button
                                                    class="w-32 ml-auto"
                                                    data-dismiss="dropdown"
                                                    variant="secondary"
                                                >
                                                    Close
                                                </x-base.button>
                                                <x-base.button
                                                    class="w-32 ml-2"
                                                    variant="primary"
                                                >
                                                    Search
                                                </x-base.button>
                                            </div>
                                        </div>
                                    </x-base.popover.panel>
                                </x-base.popover>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Dropdown with close button -->
        </div>
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Scrolled Dropdown -->
            <x-base.preview-component class="intro-y box">
                <div
                    class="flex flex-col items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Scrolled Dropdown
                    </h2>
                    <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-5">
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
                        <div class="flex justify-center">
                            <x-base.menu>
                                <x-base.menu.button
                                    as="x-base.button"
                                    variant="primary"
                                >
                                    Show Dropdown
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40 h-32 overflow-y-auto">
                                    <x-base.menu.item>January</x-base.menu.item>
                                    <x-base.menu.item>February</x-base.menu.item>
                                    <x-base.menu.item>March</x-base.menu.item>
                                    <x-base.menu.item>June</x-base.menu.item>
                                    <x-base.menu.item>July</x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.menu>
                                <x-base.menu.button
                                    as="x-base.button"
                                    variant="primary"
                                >
                                    Show Dropdown
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40 h-32 overflow-y-auto">
                                    <x-base.menu.item>January</x-base.menu.item>
                                    <x-base.menu.item>February</x-base.menu.item>
                                    <x-base.menu.item>March</x-base.menu.item>
                                    <x-base.menu.item>June</x-base.menu.item>
                                    <x-base.menu.item>July</x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Scrolled Dropdown -->
            <!-- BEGIN: Header & Icon Dropdown -->
            <x-base.preview-component class="mt-5 intro-y box">
                <div
                    class="flex flex-col items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Header & Icon Dropdown
                    </h2>
                    <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-6">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-6"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <div class="flex justify-center">
                            <x-base.menu>
                                <x-base.menu.button
                                    as="x-base.button"
                                    variant="primary"
                                >
                                    Show Dropdown
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.header>Export Tools</x-base.menu.header>
                                    <x-base.menu.divider />
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="w-4 h-4 mr-2"
                                            icon="Printer"
                                        />
                                        Print
                                    </x-base.menu.item>
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="w-4 h-4 mr-2"
                                            icon="ExternalLink"
                                        />
                                        Excel
                                    </x-base.menu.item>
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="w-4 h-4 mr-2"
                                            icon="FileText"
                                        />
                                        CSV
                                    </x-base.menu.item>
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="w-4 h-4 mr-2"
                                            icon="Archive"
                                        />
                                        PDF
                                    </x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <x-base.menu>
                                <x-base.menu.button
                                    as="x-base.button"
                                    variant="primary"
                                >
                                    Show Dropdown
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.header>Export Tools</x-base.menu.header>
                                    <x-base.menu.divider />
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="w-4 h-4 mr-2"
                                            icon="Printer"
                                        />
                                        Print
                                    </x-base.menu.item>
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="w-4 h-4 mr-2"
                                            icon="ExternalLink"
                                        />
                                        Excel
                                    </x-base.menu.item>
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="w-4 h-4 mr-2"
                                            icon="FileText"
                                        />
                                        CSV
                                    </x-base.menu.item>
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="w-4 h-4 mr-2"
                                            icon="Archive"
                                        />
                                        PDF
                                    </x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Header & Icon Dropdown -->
            <!-- BEGIN: Dropdown Placement -->
            <x-base.preview-component class="mt-5 intro-y box">
                <div
                    class="flex flex-col items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400 sm:flex-row">
                    <h2 class="mr-auto text-base font-medium">
                        Dropdown Placement
                    </h2>
                    <x-base.form-switch class="w-full mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                        <x-base.form-switch.label for="show-example-7">
                            Show example code
                        </x-base.form-switch.label>
                        <x-base.form-switch.input
                            class="ml-3 mr-0"
                            id="show-example-7"
                            type="checkbox"
                        />
                    </x-base.form-switch>
                </div>
                <div class="p-5">
                    <x-base.preview>
                        <div class="text-center">
                            <x-base.menu
                                class="inline-block mb-2 mr-1"
                                placement="top-start"
                            >
                                <x-base.menu.button
                                    class="w-32"
                                    as="x-base.button"
                                    variant="primary"
                                >
                                    Top Start
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.item>New Dropdown</x-base.menu.item>
                                    <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                            <x-base.menu
                                class="inline-block mb-2 mr-1"
                                placement="top"
                            >
                                <x-base.menu.button
                                    class="w-32"
                                    as="x-base.button"
                                    variant="primary"
                                >
                                    Top
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.item>New Dropdown</x-base.menu.item>
                                    <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                            <x-base.menu
                                class="inline-block mb-2 mr-1"
                                placement="top-end"
                            >
                                <x-base.menu.button
                                    class="w-32"
                                    as="x-base.button"
                                    variant="primary"
                                >
                                    Top End
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.item>New Dropdown</x-base.menu.item>
                                    <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                            <x-base.menu
                                class="inline-block mb-2 mr-1"
                                placement="right-start"
                            >
                                <x-base.menu.button
                                    class="w-32"
                                    as="x-base.button"
                                    variant="primary"
                                >
                                    Right Start
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.item>New Dropdown</x-base.menu.item>
                                    <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                            <x-base.menu
                                class="inline-block mb-2 mr-1"
                                placement="right"
                            >
                                <x-base.menu.button
                                    class="w-32"
                                    as="x-base.button"
                                    variant="primary"
                                >
                                    Right
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.item>New Dropdown</x-base.menu.item>
                                    <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                            <x-base.menu
                                class="inline-block mb-2 mr-1"
                                placement="right-end"
                            >
                                <x-base.menu.button
                                    class="w-32"
                                    as="x-base.button"
                                    variant="primary"
                                >
                                    Right End
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.item>New Dropdown</x-base.menu.item>
                                    <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                            <x-base.menu
                                class="inline-block mb-2 mr-1"
                                placement="bottom-end"
                            >
                                <x-base.menu.button
                                    class="w-32"
                                    as="x-base.button"
                                    variant="primary"
                                >
                                    Bottom End
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.item>New Dropdown</x-base.menu.item>
                                    <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                            <x-base.menu
                                class="inline-block mb-2 mr-1"
                                placement="bottom"
                            >
                                <x-base.menu.button
                                    class="w-32"
                                    as="x-base.button"
                                    variant="primary"
                                >
                                    Bottom
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.item>New Dropdown</x-base.menu.item>
                                    <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                            <x-base.menu
                                class="inline-block mb-2 mr-1"
                                placement="bottom-start"
                            >
                                <x-base.menu.button
                                    class="w-32"
                                    as="x-base.button"
                                    variant="primary"
                                >
                                    Bottom Start
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.item>New Dropdown</x-base.menu.item>
                                    <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                            <x-base.menu
                                class="inline-block mb-2 mr-1"
                                placement="left-start"
                            >
                                <x-base.menu.button
                                    class="w-32"
                                    as="x-base.button"
                                    variant="primary"
                                >
                                    Left Start
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.item>New Dropdown</x-base.menu.item>
                                    <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                            <x-base.menu
                                class="inline-block mb-2 mr-1"
                                placement="left"
                            >
                                <x-base.menu.button
                                    class="w-32"
                                    as="x-base.button"
                                    variant="primary"
                                >
                                    Left
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.item>New Dropdown</x-base.menu.item>
                                    <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                            <x-base.menu
                                class="inline-block mb-2 mr-1"
                                placement="left-end"
                            >
                                <x-base.menu.button
                                    class="w-32"
                                    as="x-base.button"
                                    variant="primary"
                                >
                                    Left End
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.item>New Dropdown</x-base.menu.item>
                                    <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                        </div>
                    </x-base.preview>
                    <x-base.source>
                        <x-base.highlight>
                            <div class="text-center">
                                <x-base.menu
                                    class="inline-block mb-2 mr-1"
                                    placement="top-start"
                                >
                                    <x-base.menu.button
                                        class="w-32"
                                        as="x-base.button"
                                        variant="primary"
                                    >
                                        Top Start
                                    </x-base.menu.button>
                                    <x-base.menu.items class="w-40">
                                        <x-base.menu.item>New Dropdown</x-base.menu.item>
                                        <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                    </x-base.menu.items>
                                </x-base.menu>
                                <x-base.menu
                                    class="inline-block mb-2 mr-1"
                                    placement="top"
                                >
                                    <x-base.menu.button
                                        class="w-32"
                                        as="x-base.button"
                                        variant="primary"
                                    >
                                        Top
                                    </x-base.menu.button>
                                    <x-base.menu.items class="w-40">
                                        <x-base.menu.item>New Dropdown</x-base.menu.item>
                                        <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                    </x-base.menu.items>
                                </x-base.menu>
                                <x-base.menu
                                    class="inline-block mb-2 mr-1"
                                    placement="top-end"
                                >
                                    <x-base.menu.button
                                        class="w-32"
                                        as="x-base.button"
                                        variant="primary"
                                    >
                                        Top End
                                    </x-base.menu.button>
                                    <x-base.menu.items class="w-40">
                                        <x-base.menu.item>New Dropdown</x-base.menu.item>
                                        <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                    </x-base.menu.items>
                                </x-base.menu>
                                <x-base.menu
                                    class="inline-block mb-2 mr-1"
                                    placement="right-start"
                                >
                                    <x-base.menu.button
                                        class="w-32"
                                        as="x-base.button"
                                        variant="primary"
                                    >
                                        Right Start
                                    </x-base.menu.button>
                                    <x-base.menu.items class="w-40">
                                        <x-base.menu.item>New Dropdown</x-base.menu.item>
                                        <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                    </x-base.menu.items>
                                </x-base.menu>
                                <x-base.menu
                                    class="inline-block mb-2 mr-1"
                                    placement="right"
                                >
                                    <x-base.menu.button
                                        class="w-32"
                                        as="x-base.button"
                                        variant="primary"
                                    >
                                        Right
                                    </x-base.menu.button>
                                    <x-base.menu.items class="w-40">
                                        <x-base.menu.item>New Dropdown</x-base.menu.item>
                                        <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                    </x-base.menu.items>
                                </x-base.menu>
                                <x-base.menu
                                    class="inline-block mb-2 mr-1"
                                    placement="right-end"
                                >
                                    <x-base.menu.button
                                        class="w-32"
                                        as="x-base.button"
                                        variant="primary"
                                    >
                                        Right End
                                    </x-base.menu.button>
                                    <x-base.menu.items class="w-40">
                                        <x-base.menu.item>New Dropdown</x-base.menu.item>
                                        <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                    </x-base.menu.items>
                                </x-base.menu>
                                <x-base.menu
                                    class="inline-block mb-2 mr-1"
                                    placement="bottom-end"
                                >
                                    <x-base.menu.button
                                        class="w-32"
                                        as="x-base.button"
                                        variant="primary"
                                    >
                                        Bottom End
                                    </x-base.menu.button>
                                    <x-base.menu.items class="w-40">
                                        <x-base.menu.item>New Dropdown</x-base.menu.item>
                                        <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                    </x-base.menu.items>
                                </x-base.menu>
                                <x-base.menu
                                    class="inline-block mb-2 mr-1"
                                    placement="bottom"
                                >
                                    <x-base.menu.button
                                        class="w-32"
                                        as="x-base.button"
                                        variant="primary"
                                    >
                                        Bottom
                                    </x-base.menu.button>
                                    <x-base.menu.items class="w-40">
                                        <x-base.menu.item>New Dropdown</x-base.menu.item>
                                        <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                    </x-base.menu.items>
                                </x-base.menu>
                                <x-base.menu
                                    class="inline-block mb-2 mr-1"
                                    placement="bottom-start"
                                >
                                    <x-base.menu.button
                                        class="w-32"
                                        as="x-base.button"
                                        variant="primary"
                                    >
                                        Bottom Start
                                    </x-base.menu.button>
                                    <x-base.menu.items class="w-40">
                                        <x-base.menu.item>New Dropdown</x-base.menu.item>
                                        <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                    </x-base.menu.items>
                                </x-base.menu>
                                <x-base.menu
                                    class="inline-block mb-2 mr-1"
                                    placement="left-start"
                                >
                                    <x-base.menu.button
                                        class="w-32"
                                        as="x-base.button"
                                        variant="primary"
                                    >
                                        Left Start
                                    </x-base.menu.button>
                                    <x-base.menu.items class="w-40">
                                        <x-base.menu.item>New Dropdown</x-base.menu.item>
                                        <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                    </x-base.menu.items>
                                </x-base.menu>
                                <x-base.menu
                                    class="inline-block mb-2 mr-1"
                                    placement="left"
                                >
                                    <x-base.menu.button
                                        class="w-32"
                                        as="x-base.button"
                                        variant="primary"
                                    >
                                        Left
                                    </x-base.menu.button>
                                    <x-base.menu.items class="w-40">
                                        <x-base.menu.item>New Dropdown</x-base.menu.item>
                                        <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                    </x-base.menu.items>
                                </x-base.menu>
                                <x-base.menu
                                    class="inline-block mb-2 mr-1"
                                    placement="left-end"
                                >
                                    <x-base.menu.button
                                        class="w-32"
                                        as="x-base.button"
                                        variant="primary"
                                    >
                                        Left End
                                    </x-base.menu.button>
                                    <x-base.menu.items class="w-40">
                                        <x-base.menu.item>New Dropdown</x-base.menu.item>
                                        <x-base.menu.item>Delete Dropdown</x-base.menu.item>
                                    </x-base.menu.items>
                                </x-base.menu>
                            </div>
                        </x-base.highlight>
                    </x-base.source>
                </div>
            </x-base.preview-component>
            <!-- END: Dropdown Placement -->
        </div>
    </div>
@endsection
