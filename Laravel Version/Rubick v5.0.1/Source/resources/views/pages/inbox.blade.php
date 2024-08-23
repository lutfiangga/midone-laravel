@extends('../layouts/' . $layout)

@section('subhead')
    <title>Inbox - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6 mt-8">
        <div class="col-span-12 lg:col-span-3 2xl:col-span-2">
            <h2 class="mt-2 mr-auto text-lg font-medium intro-y">Inbox</h2>
            <!-- BEGIN: Inbox Menu -->
            <div class="p-5 mt-6 intro-y box bg-primary">
                <x-base.button
                    class="w-full mt-1 bg-white text-slate-600 dark:border-darkmode-300 dark:bg-darkmode-300 dark:text-slate-300"
                    type="button"
                >
                    <x-base.lucide
                        class="w-4 h-4 mr-2"
                        icon="Edit"
                    /> Compose
                </x-base.button>
                <div class="pt-6 mt-6 text-white border-t border-white/10 dark:border-darkmode-400">
                    <a
                        class="flex items-center px-3 py-2 font-medium rounded-md bg-white/10 dark:bg-darkmode-700"
                        href=""
                    >
                        <x-base.lucide
                            class="w-4 h-4 mr-2"
                            icon="Mail"
                        /> Inbox
                    </a>
                    <a
                        class="flex items-center px-3 py-2 mt-2 rounded-md"
                        href=""
                    >
                        <x-base.lucide
                            class="w-4 h-4 mr-2"
                            icon="Star"
                        /> Marked
                    </a>
                    <a
                        class="flex items-center px-3 py-2 mt-2 rounded-md"
                        href=""
                    >
                        <x-base.lucide
                            class="w-4 h-4 mr-2"
                            icon="Inbox"
                        /> Draft
                    </a>
                    <a
                        class="flex items-center px-3 py-2 mt-2 rounded-md"
                        href=""
                    >
                        <x-base.lucide
                            class="w-4 h-4 mr-2"
                            icon="Send"
                        /> Sent
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
                <div class="pt-4 mt-4 text-white border-t border-white/10 dark:border-darkmode-400">
                    <a
                        class="flex items-center px-3 py-2 truncate"
                        href=""
                    >
                        <div class="w-2 h-2 mr-3 rounded-full bg-pending"></div>
                        Custom Work
                    </a>
                    <a
                        class="flex items-center px-3 py-2 mt-2 truncate rounded-md"
                        href=""
                    >
                        <div class="w-2 h-2 mr-3 rounded-full bg-success"></div>
                        Important Meetings
                    </a>
                    <a
                        class="flex items-center px-3 py-2 mt-2 truncate rounded-md"
                        href=""
                    >
                        <div class="w-2 h-2 mr-3 rounded-full bg-warning"></div>
                        Work
                    </a>
                    <a
                        class="flex items-center px-3 py-2 mt-2 truncate rounded-md"
                        href=""
                    >
                        <div class="w-2 h-2 mr-3 rounded-full bg-pending"></div>
                        Design
                    </a>
                    <a
                        class="flex items-center px-3 py-2 mt-2 truncate rounded-md"
                        href=""
                    >
                        <div class="w-2 h-2 mr-3 rounded-full bg-danger"></div>
                        Next Week
                    </a>
                    <a
                        class="flex items-center px-3 py-2 mt-2 truncate rounded-md"
                        href=""
                    >
                        <x-base.lucide
                            class="w-4 h-4 mr-2"
                            icon="Plus"
                        /> Add New Label
                    </a>
                </div>
            </div>
            <!-- END: Inbox Menu -->
        </div>
        <div class="col-span-12 lg:col-span-9 2xl:col-span-10">
            <!-- BEGIN: Inbox Filter -->
            <div class="flex flex-col-reverse items-center intro-y sm:flex-row">
                <div class="relative w-full mt-3 mr-auto sm:mt-0 sm:w-auto">
                    <x-base.lucide
                        class="absolute inset-y-0 left-0 z-10 w-4 h-4 my-auto ml-3 text-slate-500"
                        icon="Search"
                    />
                    <x-base.form-input
                        class="!box w-full px-10 sm:w-64"
                        type="text"
                        placeholder="Search mail"
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
                        <x-base.menu.items class="!-ml-[228px] mt-2.5 w-[478px] pt-2">
                            <div class="grid grid-cols-12 gap-4 p-3 gap-y-3">
                                <div class="col-span-6">
                                    <x-base.form-label
                                        class="text-xs"
                                        for="input-filter-1"
                                    >
                                        From
                                    </x-base.form-label>
                                    <x-base.form-input
                                        class="flex-1"
                                        id="input-filter-1"
                                        type="text"
                                        placeholder="example@gmail.com"
                                    />
                                </div>
                                <div class="col-span-6">
                                    <x-base.form-label
                                        class="text-xs"
                                        for="input-filter-2"
                                    >
                                        To
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
                                        Subject
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
                                        Has the Words
                                    </x-base.form-label>
                                    <x-base.form-input
                                        class="flex-1"
                                        id="input-filter-4"
                                        type="text"
                                        placeholder="Job, Work, Documentation"
                                    />
                                </div>
                                <div class="col-span-6">
                                    <x-base.form-label
                                        class="text-xs"
                                        for="input-filter-5"
                                    >
                                        Doesn't Have
                                    </x-base.form-label>
                                    <x-base.form-input
                                        class="flex-1"
                                        id="input-filter-5"
                                        type="text"
                                        placeholder="Job, Work, Documentation"
                                    />
                                </div>
                                <div class="col-span-6">
                                    <x-base.form-label
                                        class="text-xs"
                                        for="input-filter-6"
                                    >
                                        Size
                                    </x-base.form-label>
                                    <x-base.form-select
                                        class="flex-1"
                                        id="input-filter-6"
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
                        Start a Video Call
                    </x-base.button>
                    <x-base.menu>
                        <x-base.menu.button
                            class="px-2 box"
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
                                    icon="User"
                                /> Contacts
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
            <!-- END: Inbox Filter -->
            <!-- BEGIN: Inbox Content -->
            <div class="mt-5 intro-y box">
                <div class="flex flex-col-reverse p-5 border-b border-slate-200/60 text-slate-500 sm:flex-row">
                    <div
                        class="flex items-center px-5 pt-5 mt-3 -mx-5 border-t border-slate-200/60 sm:mx-0 sm:mt-0 sm:border-0 sm:px-0 sm:pt-0">
                        <x-base.form-check.input
                            class="border-slate-400 checked:border-primary"
                            type="checkbox"
                        />
                        <x-base.menu
                            class="ml-1"
                            placement="bottom-start"
                        >
                            <x-base.menu.button
                                class="block w-5 h-5"
                                href="#"
                            >
                                <x-base.lucide
                                    class="w-5 h-5"
                                    icon="ChevronDown"
                                />
                            </x-base.menu.button>
                            <x-base.menu.items class="w-32 text-slate-800 dark:text-slate-300">
                                <x-base.menu.item>All</x-base.menu.item>
                                <x-base.menu.item>None</x-base.menu.item>
                                <x-base.menu.item>Read</x-base.menu.item>
                                <x-base.menu.item>Unread</x-base.menu.item>
                                <x-base.menu.item>Starred</x-base.menu.item>
                                <x-base.menu.item>Unstarred</x-base.menu.item>
                            </x-base.menu.items>
                        </x-base.menu>
                        <a
                            class="flex items-center justify-center w-5 h-5 ml-5"
                            href="#"
                        >
                            <x-base.lucide
                                class="w-4 h-4"
                                icon="RefreshCw"
                            />
                        </a>
                        <a
                            class="flex items-center justify-center w-5 h-5 ml-5"
                            href="#"
                        >
                            <x-base.lucide
                                class="w-4 h-4"
                                icon="MoreHorizontal"
                            />
                        </a>
                    </div>
                    <div class="flex items-center sm:ml-auto">
                        <div class="">1 - 50 of 5,238</div>
                        <a
                            class="flex items-center justify-center w-5 h-5 ml-5"
                            href="#"
                        >
                            <x-base.lucide
                                class="w-4 h-4"
                                icon="ChevronLeft"
                            />
                        </a>
                        <a
                            class="flex items-center justify-center w-5 h-5 ml-5"
                            href="#"
                        >
                            <x-base.lucide
                                class="w-4 h-4"
                                icon="ChevronRight"
                            />
                        </a>
                        <a
                            class="flex items-center justify-center w-5 h-5 ml-5"
                            href="#"
                        >
                            <x-base.lucide
                                class="w-4 h-4"
                                icon="Settings"
                            />
                        </a>
                    </div>
                </div>
                <div class="overflow-x-auto sm:overflow-x-visible">
                    @foreach ($fakers as $faker)
                        <div class="intro-y">
                            <div @class([
                                'transition duration-200 ease-in-out transform cursor-pointer inline-block sm:block border-b border-slate-200/60 dark:border-darkmode-400',
                                'hover:scale-[1.02] hover:relative hover:z-20 hover:shadow-md hover:border-0 hover:rounded',
                                'bg-slate-100 text-slate-600 dark:text-slate-500 dark:bg-darkmode-400/70' => !$faker[
                                    'true_false'
                                ][0],
                                'bg-white text-slate-800 dark:text-slate-300 dark:bg-darkmode-600' =>
                                    $faker['true_false'][0],
                            ])>
                                <div class="flex px-5 py-3">
                                    <div class="flex items-center flex-none mr-5 w-72">
                                        <x-base.form-check.input
                                            class="flex-none border-slate-400 checked:border-primary"
                                            type="checkbox"
                                            checked="{{ $faker['true_false'][0] }}"
                                        />
                                        <a
                                            class="flex items-center justify-center flex-none w-5 h-5 ml-4 text-slate-400"
                                            href="#"
                                        >
                                            <x-base.lucide
                                                class="w-4 h-4"
                                                icon="Star"
                                            />
                                        </a>
                                        <a
                                            class="flex items-center justify-center flex-none w-5 h-5 ml-2 text-slate-400"
                                            href="#"
                                        >
                                            <x-base.lucide
                                                class="w-4 h-4"
                                                icon="Bookmark"
                                            />
                                        </a>
                                        <div class="relative flex-none w-6 h-6 ml-5 image-fit">
                                            <img
                                                class="rounded-full"
                                                src="{{ Vite::asset($faker['photos'][0]) }}"
                                                alt="Midone Tailwind HTML Admin Template"
                                            />
                                        </div>
                                        <div @class(['ml-3 truncate', 'font-medium' => $faker['true_false'][0]])>
                                            {{ $faker['users'][0]['name'] }}
                                        </div>
                                    </div>
                                    <div class="w-64 truncate sm:w-auto">
                                        <span @class(['ml-3 truncate', 'font-medium' => $faker['true_false'][0]])>
                                            {{ $faker['news'][0]['super_short_content'] }}
                                        </span>
                                        {{ $faker['news'][0]['short_content'] }}
                                    </div>
                                    <div @class([
                                        'pl-10 ml-auto whitespace-nowrap',
                                        'font-medium' => $faker['true_false'][0],
                                    ])>
                                        {{ $faker['times'][0] }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="flex flex-col items-center p-5 text-center text-slate-500 sm:flex-row sm:text-left">
                    <div>4.41 GB (25%) of 17 GB used Manage</div>
                    <div class="mt-2 sm:ml-auto sm:mt-0">
                        Last account activity: 36 minutes ago
                    </div>
                </div>
            </div>
            <!-- END: Inbox Content -->
        </div>
    </div>
@endsection
