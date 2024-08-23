@extends('../layouts/' . $layout)

@section('subhead')
    <title>File Manager - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6 mt-8">
        <div class="col-span-12 lg:col-span-3 2xl:col-span-2">
            <h2 class="mt-2 mr-auto text-lg font-medium intro-y">
                File Manager
            </h2>
            <!-- BEGIN: File Manager Menu -->
            <div class="p-5 mt-6 intro-y box">
                <div class="mt-1">
                    <a
                        class="flex items-center px-3 py-2 font-medium text-white rounded-md bg-primary"
                        href=""
                    >
                        <x-base.lucide
                            class="w-4 h-4 mr-2"
                            icon="Image"
                        /> Images
                    </a>
                    <a
                        class="flex items-center px-3 py-2 mt-2 rounded-md"
                        href=""
                    >
                        <x-base.lucide
                            class="w-4 h-4 mr-2"
                            icon="Video"
                        /> Videos
                    </a>
                    <a
                        class="flex items-center px-3 py-2 mt-2 rounded-md"
                        href=""
                    >
                        <x-base.lucide
                            class="w-4 h-4 mr-2"
                            icon="File"
                        /> Documents
                    </a>
                    <a
                        class="flex items-center px-3 py-2 mt-2 rounded-md"
                        href=""
                    >
                        <x-base.lucide
                            class="w-4 h-4 mr-2"
                            icon="Users"
                        /> Shared
                    </a>
                    <a
                        class="flex items-center px-3 py-2 mt-2 rounded-md"
                        href=""
                    >
                        <x-base.lucide
                            class="w-4 h-4 mr-2"
                            icon="Trash"
                        /> Trash
                    </a>
                </div>
                <div class="pt-4 mt-4 border-t border-slate-200 dark:border-darkmode-400">
                    <a
                        class="flex items-center px-3 py-2 rounded-md"
                        href=""
                    >
                        <div class="w-2 h-2 mr-3 rounded-full bg-pending"></div>
                        Custom Work
                    </a>
                    <a
                        class="flex items-center px-3 py-2 mt-2 rounded-md"
                        href=""
                    >
                        <div class="w-2 h-2 mr-3 rounded-full bg-success"></div>
                        Important Meetings
                    </a>
                    <a
                        class="flex items-center px-3 py-2 mt-2 rounded-md"
                        href=""
                    >
                        <div class="w-2 h-2 mr-3 rounded-full bg-warning"></div>
                        Work
                    </a>
                    <a
                        class="flex items-center px-3 py-2 mt-2 rounded-md"
                        href=""
                    >
                        <div class="w-2 h-2 mr-3 rounded-full bg-pending"></div>
                        Design
                    </a>
                    <a
                        class="flex items-center px-3 py-2 mt-2 rounded-md"
                        href=""
                    >
                        <div class="w-2 h-2 mr-3 rounded-full bg-danger"></div>
                        Next Week
                    </a>
                    <a
                        class="flex items-center px-3 py-2 mt-2 rounded-md"
                        href=""
                    >
                        <x-base.lucide
                            class="w-4 h-4 mr-2"
                            icon="Plus"
                        /> Add New Label
                    </a>
                </div>
            </div>
            <!-- END: File Manager Menu -->
        </div>
        <div class="col-span-12 lg:col-span-9 2xl:col-span-10">
            <!-- BEGIN: File Manager Filter -->
            <div class="flex flex-col-reverse items-center intro-y sm:flex-row">
                <div class="relative w-full mt-3 mr-auto sm:mt-0 sm:w-auto">
                    <x-base.lucide
                        class="absolute inset-y-0 left-0 z-10 w-4 h-4 my-auto ml-3 text-slate-500"
                        icon="Search"
                    />
                    <x-base.form-input
                        class="!box w-full px-10 sm:w-64"
                        type="text"
                        placeholder="Search files"
                    />
                    <x-base.menu
                        class="absolute inset-y-0 right-0 flex items-center mr-3"
                        placement="bottom-start"
                    >
                        <x-base.menu.button
                            class="block w-4 h-4"
                            href="#"
                            role="button"
                            as="a"
                        >
                            <x-base.lucide
                                class="w-4 h-4 cursor-pointer text-slate-500"
                                icon="ChevronDown"
                            />
                        </x-base.menu.button>
                        <x-base.menu.items class="-ml-[228px] mt-2.5 w-[478px] pt-2">
                            <div class="grid grid-cols-12 gap-4 p-3 gap-y-3">
                                <div class="col-span-6">
                                    <x-base.form-label
                                        class="text-xs"
                                        for="input-filter-1"
                                    >
                                        File Name
                                    </x-base.form-label>
                                    <x-base.form-input
                                        class="flex-1"
                                        id="input-filter-1"
                                        type="text"
                                        placeholder="Type the file name"
                                    />
                                </div>
                                <div class="col-span-6">
                                    <x-base.form-label
                                        class="text-xs"
                                        for="input-filter-2"
                                    >
                                        Shared With
                                    </x-base.form-label>
                                    <x-base.form-input
                                        class="flex-1"
                                        id="input-filter-2"
                                        type="text"
                                        placeholder="example@gmail.com"
                                    />
                                </div>
                                <div class="col-span-6">
                                    <x-base.form-label
                                        class="text-xs"
                                        for="input-filter-3"
                                    >
                                        Created At
                                    </x-base.form-label>
                                    <x-base.form-input
                                        class="flex-1"
                                        id="input-filter-3"
                                        type="text"
                                        placeholder="Important Meeting"
                                    />
                                </div>
                                <div class="col-span-6">
                                    <x-base.form-label
                                        class="text-xs"
                                        for="input-filter-4"
                                    >
                                        Size
                                    </x-base.form-label>
                                    <x-base.form-select
                                        class="flex-1"
                                        id="input-filter-4"
                                    >
                                        <option>10</option>
                                        <option>25</option>
                                        <option>35</option>
                                        <option>50</option>
                                    </x-base.form-select>
                                </div>
                                <div class="flex items-center col-span-12 mt-3">
                                    <x-base.button
                                        class="w-32 ml-auto"
                                        variant="secondary"
                                    >
                                        Create Filter
                                    </x-base.button>
                                    <x-base.button
                                        class="w-32 ml-2"
                                        variant="primary"
                                    >
                                        Search
                                    </x-base.button>
                                </div>
                            </div>
                        </x-base.menu.items>
                    </x-base.menu>
                </div>
                <div class="flex w-full sm:w-auto">
                    <x-base.button
                        class="mr-2 shadow-md"
                        variant="primary"
                    >
                        Upload New Files
                    </x-base.button>
                    <x-base.menu>
                        <x-base.menu.button
                            class="!box px-2"
                            as="x-base.button"
                        >
                            <span class="flex items-center justify-center w-5 h-5">
                                <x-base.lucide
                                    class="w-4 h-4"
                                    icon="Plus"
                                />
                            </span>
                        </x-base.menu.button>
                        <x-base.menu.items class="w-40">
                            <x-base.menu.item>
                                <x-base.lucide
                                    class="w-4 h-4 mr-2"
                                    icon="File"
                                /> Share Files
                            </x-base.menu.item>
                            <x-base.menu.item>
                                <x-base.lucide
                                    class="w-4 h-4 mr-2"
                                    icon="Settings"
                                /> Settings
                            </x-base.menu.item>
                        </x-base.menu.items>
                    </x-base.menu>
                </div>
            </div>
            <!-- END: File Manager Filter -->
            <!-- BEGIN: Directory & Files -->
            <div class="grid grid-cols-12 gap-3 mt-5 intro-y sm:gap-6">
                @foreach ($fakers as $faker)
                    <div class="col-span-6 intro-y sm:col-span-4 md:col-span-3 2xl:col-span-2">
                        <div class="relative px-3 pt-8 pb-5 rounded-md file box zoom-in sm:px-5">
                            <div class="absolute top-0 left-0 mt-3 ml-3">
                                <x-base.form-check.input
                                    class="border"
                                    type="checkbox"
                                    checked="{{ $faker['true_false'][0] }}"
                                />
                            </div>
                            @if ($faker['files'][0]['type'] == 'Empty Folder')
                                <x-base.file-icon
                                    class="w-3/5 mx-auto"
                                    variant="empty-directory"
                                />
                            @elseif ($faker['files'][0]['type'] == 'Folder')
                                <x-base.file-icon
                                    class="w-3/5 mx-auto"
                                    variant="directory"
                                />
                            @elseif ($faker['files'][0]['type'] == 'Image')
                                <x-base.file-icon
                                    class="w-3/5 mx-auto"
                                    src="{{ Vite::asset(strtolower($faker['files'][0]['file_name'])) }}"
                                    variant="image"
                                />
                            @else
                                <x-base.file-icon
                                    class="w-3/5 mx-auto"
                                    type="{{ $faker['files'][0]['type'] }}"
                                    variant="file"
                                />
                            @endif
                            <a
                                class="block mt-4 font-medium text-center truncate"
                                href=""
                            >
                                {{ explode('/', $faker['files'][0]['file_name'])[count(explode('/', $faker['files'][0]['file_name'])) - 1] }}
                            </a>
                            <div class="mt-0.5 text-center text-xs text-slate-500">
                                {{ $faker['files'][0]['size'] }}
                            </div>
                            <x-base.menu class="absolute top-0 right-0 mt-3 ml-auto mr-2">
                                <x-base.menu.button
                                    class="block w-5 h-5"
                                    href="#"
                                    as="a"
                                >
                                    <x-base.lucide
                                        class="w-5 h-5 text-slate-500"
                                        icon="MoreVertical"
                                    />
                                </x-base.menu.button>
                                <x-base.menu.items class="w-40">
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="w-4 h-4 mr-2"
                                            icon="Users"
                                        /> Share
                                        File
                                    </x-base.menu.item>
                                    <x-base.menu.item>
                                        <x-base.lucide
                                            class="w-4 h-4 mr-2"
                                            icon="Trash"
                                        /> Delete
                                    </x-base.menu.item>
                                </x-base.menu.items>
                            </x-base.menu>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- END: Directory & Files -->
            <!-- BEGIN: Pagination -->
            <div class="flex flex-wrap items-center mt-6 intro-y sm:flex-row sm:flex-nowrap">
                <x-base.pagination class="w-full sm:mr-auto sm:w-auto">
                    <x-base.pagination.link>
                        <x-base.lucide
                            class="w-4 h-4"
                            icon="ChevronsLeft"
                        />
                    </x-base.pagination.link>
                    <x-base.pagination.link>
                        <x-base.lucide
                            class="w-4 h-4"
                            icon="ChevronLeft"
                        />
                    </x-base.pagination.link>
                    <x-base.pagination.link>...</x-base.pagination.link>
                    <x-base.pagination.link>1</x-base.pagination.link>
                    <x-base.pagination.link active>2</x-base.pagination.link>
                    <x-base.pagination.link>3</x-base.pagination.link>
                    <x-base.pagination.link>...</x-base.pagination.link>
                    <x-base.pagination.link>
                        <x-base.lucide
                            class="w-4 h-4"
                            icon="ChevronRight"
                        />
                    </x-base.pagination.link>
                    <x-base.pagination.link>
                        <x-base.lucide
                            class="w-4 h-4"
                            icon="ChevronsRight"
                        />
                    </x-base.pagination.link>
                </x-base.pagination>
                <x-base.form-select class="!box mt-3 w-20 sm:mt-0">
                    <option>10</option>
                    <option>25</option>
                    <option>35</option>
                    <option>50</option>
                </x-base.form-select>
            </div>
            <!-- END: Pagination -->
        </div>
    </div>
@endsection
