@extends('../layouts/' . $layout)

@section('subhead')
    <title>Update Profile - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">Update Profile</h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
        <div class="flex flex-col-reverse col-span-12 lg:col-span-4 lg:block 2xl:col-span-3">
            <div class="mt-5 intro-y box">
                <div class="relative flex items-center p-5">
                    <div class="w-12 h-12 image-fit">
                        <img
                            class="rounded-full"
                            src="{{ Vite::asset($fakers[0]['photos'][0]) }}"
                            alt="Midone Tailwind HTML Admin Template"
                        />
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="text-base font-medium">
                            {{ $fakers[0]['users'][0]['name'] }}
                        </div>
                        <div class="text-slate-500">{{ $fakers[0]['jobs'][0] }}</div>
                    </div>
                    <x-base.menu>
                        <x-base.menu.button
                            class="block w-5 h-5"
                            href="#"
                            tag="a"
                        >
                            <x-base.lucide
                                class="w-5 h-5 text-slate-500"
                                icon="MoreHorizontal"
                            />
                        </x-base.menu.button>
                        <x-base.menu.items class="w-56">
                            <x-base.menu.header> Export Options</x-base.menu.header>
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
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a
                        class="flex items-center font-medium text-primary"
                        href=""
                    >
                        <x-base.lucide
                            class="w-4 h-4 mr-2"
                            icon="Activity"
                        /> Personal
                        Information
                    </a>
                    <a
                        class="flex items-center mt-5"
                        href=""
                    >
                        <x-base.lucide
                            class="w-4 h-4 mr-2"
                            icon="Box"
                        /> Account Settings
                    </a>
                    <a
                        class="flex items-center mt-5"
                        href=""
                    >
                        <x-base.lucide
                            class="w-4 h-4 mr-2"
                            icon="Lock"
                        /> Change Password
                    </a>
                    <a
                        class="flex items-center mt-5"
                        href=""
                    >
                        <x-base.lucide
                            class="w-4 h-4 mr-2"
                            icon="Settings"
                        /> User
                        Settings
                    </a>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a
                        class="flex items-center"
                        href=""
                    >
                        <x-base.lucide
                            class="w-4 h-4 mr-2"
                            icon="Activity"
                        /> Email
                        Settings
                    </a>
                    <a
                        class="flex items-center mt-5"
                        href=""
                    >
                        <x-base.lucide
                            class="w-4 h-4 mr-2"
                            icon="Box"
                        /> Saved Credit
                        Cards
                    </a>
                    <a
                        class="flex items-center mt-5"
                        href=""
                    >
                        <x-base.lucide
                            class="w-4 h-4 mr-2"
                            icon="Lock"
                        /> Social Networks
                    </a>
                    <a
                        class="flex items-center mt-5"
                        href=""
                    >
                        <x-base.lucide
                            class="w-4 h-4 mr-2"
                            icon="Settings"
                        /> Tax
                        Information
                    </a>
                </div>
                <div class="flex p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <x-base.button
                        class="px-2 py-1"
                        type="button"
                        variant="primary"
                    >
                        New Group
                    </x-base.button>
                    <x-base.button
                        class="px-2 py-1 ml-auto"
                        type="button"
                        variant="outline-secondary"
                    >
                        New Quick Link
                    </x-base.button>
                </div>
            </div>
        </div>
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
            <!-- BEGIN: Display Information -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="mr-auto text-base font-medium">
                        Display Information
                    </h2>
                </div>
                <div class="p-5">
                    <div class="flex flex-col xl:flex-row">
                        <div class="flex-1 mt-6 xl:mt-0">
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 2xl:col-span-6">
                                    <div>
                                        <x-base.form-label for="update-profile-form-1">
                                            Display Name
                                        </x-base.form-label>
                                        <x-base.form-input
                                            id="update-profile-form-1"
                                            type="text"
                                            value="{{ $fakers[0]['users'][0]['name'] }}"
                                            placeholder="Input text"
                                            disabled
                                        />
                                    </div>
                                    <div class="mt-3">
                                        <x-base.form-label for="update-profile-form-2">
                                            Nearest MRT Station
                                        </x-base.form-label>
                                        <x-base.tom-select
                                            class="w-full"
                                            id="update-profile-form-2"
                                        >
                                            <option value="1">Admiralty</option>
                                            <option value="2">Aljunied</option>
                                            <option value="3">Ang Mo Kio</option>
                                            <option value="4">Bartley</option>
                                            <option value="5">Beauty World</option>
                                        </x-base.tom-select>
                                    </div>
                                </div>
                                <div class="col-span-12 2xl:col-span-6">
                                    <div class="mt-3 2xl:mt-0">
                                        <x-base.form-label for="update-profile-form-3">
                                            Postal Code
                                        </x-base.form-label>
                                        <x-base.tom-select
                                            class="w-full"
                                            id="update-profile-form-3"
                                        >
                                            <option value="1">
                                                018906 - 1 STRAITS BOULEVARD SINGA...
                                            </option>
                                            <option value="2">
                                                018910 - 5A MARINA GARDENS DRIVE...
                                            </option>
                                            <option value="3">
                                                018915 - 100A CENTRAL BOULEVARD...
                                            </option>
                                            <option value="4">
                                                018925 - 21 PARK STREET MARINA...
                                            </option>
                                            <option value="5">
                                                018926 - 23 PARK STREET MARINA...
                                            </option>
                                        </x-base.tom-select>
                                    </div>
                                    <div class="mt-3">
                                        <x-base.form-label for="update-profile-form-4">
                                            Phone Number
                                        </x-base.form-label>
                                        <x-base.form-input
                                            id="update-profile-form-4"
                                            type="text"
                                            value="65570828"
                                            placeholder="Input text"
                                        />
                                    </div>
                                </div>
                                <div class="col-span-12">
                                    <div class="mt-3">
                                        <x-base.form-label for="update-profile-form-5">
                                            Address
                                        </x-base.form-label>
                                        <x-base.form-textarea
                                            id="update-profile-form-5"
                                            value="10 Anson Road, International Plaza, #10-11, 079903
                        Singapore, Singapore"
                                            placeholder="Adress"
                                        ></x-base.form-textarea>
                                    </div>
                                </div>
                            </div>
                            <x-base.button
                                class="w-20 mt-3"
                                type="button"
                                variant="primary"
                            >
                                Save
                            </x-base.button>
                        </div>
                        <div class="mx-auto w-52 xl:mr-0 xl:ml-6">
                            <div
                                class="p-5 border-2 border-dashed rounded-md shadow-sm border-slate-200/60 dark:border-darkmode-400">
                                <div class="relative h-40 mx-auto cursor-pointer image-fit zoom-in">
                                    <img
                                        class="rounded-md"
                                        src="{{ Vite::asset($fakers[0]['photos'][0]) }}"
                                        alt="Midone Tailwind HTML Admin Template"
                                    />
                                    <x-base.tippy
                                        class="absolute top-0 right-0 flex items-center justify-center w-5 h-5 -mt-2 -mr-2 text-white rounded-full bg-danger"
                                        as="div"
                                        content="Remove this profile photo?"
                                    >
                                        <x-base.lucide
                                            class="w-4 h-4"
                                            icon="X"
                                        />
                                    </x-base.tippy>
                                </div>
                                <div class="relative mx-auto mt-5 cursor-pointer">
                                    <x-base.button
                                        class="w-full"
                                        type="button"
                                        variant="primary"
                                    >
                                        Change Photo
                                    </x-base.button>
                                    <x-base.form-input
                                        class="absolute top-0 left-0 w-full h-full opacity-0"
                                        type="file"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Display Information -->
            <!-- BEGIN: Personal Information -->
            <div class="mt-5 intro-y box">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="mr-auto text-base font-medium">
                        Personal Information
                    </h2>
                </div>
                <div class="p-5">
                    <div class="grid grid-cols-12 gap-x-5">
                        <div class="col-span-12 xl:col-span-6">
                            <div>
                                <x-base.form-label for="update-profile-form-6">Email</x-base.form-label>
                                <x-base.form-input
                                    id="update-profile-form-6"
                                    type="text"
                                    value="{{ $fakers[0]['users'][0]['email'] }}"
                                    placeholder="Input text"
                                    disabled
                                />
                            </div>
                            <div class="mt-3">
                                <x-base.form-label for="update-profile-form-7">Name</x-base.form-label>
                                <x-base.form-input
                                    id="update-profile-form-7"
                                    type="text"
                                    value="{{ $fakers[0]['users'][0]['name'] }}"
                                    placeholder="Input text"
                                    disabled
                                />
                            </div>
                            <div class="mt-3">
                                <x-base.form-label for="update-profile-form-8">
                                    ID Type
                                </x-base.form-label>
                                <x-base.form-select id="update-profile-form-8">
                                    <option>IC</option>
                                    <option>FIN</option>
                                    <option>Passport</option>
                                </x-base.form-select>
                            </div>
                            <div class="mt-3">
                                <x-base.form-label for="update-profile-form-9">
                                    ID Number
                                </x-base.form-label>
                                <x-base.form-input
                                    id="update-profile-form-9"
                                    type="text"
                                    value="357821204950001"
                                    placeholder="Input text"
                                />
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-6">
                            <div class="mt-3 xl:mt-0">
                                <x-base.form-label for="update-profile-form-10">
                                    Phone Number
                                </x-base.form-label>
                                <x-base.form-input
                                    id="update-profile-form-10"
                                    type="text"
                                    value="65570828"
                                    placeholder="Input text"
                                />
                            </div>
                            <div class="mt-3">
                                <x-base.form-label for="update-profile-form-11">
                                    Address
                                </x-base.form-label>
                                <x-base.form-input
                                    id="update-profile-form-11"
                                    type="text"
                                    value="10 Anson Road, International Plaza, #10-11, 079903 Singapore, Singapore"
                                    placeholder="Input text"
                                />
                            </div>
                            <div class="mt-3">
                                <x-base.form-label for="update-profile-form-12">
                                    Bank Name
                                </x-base.form-label>
                                <x-base.tom-select
                                    class="w-full"
                                    id="update-profile-form-12"
                                >
                                    <option value="1">SBI - STATE BANK OF INDIA</option>
                                    <option value="2">CITI BANK - CITI BANK</option>
                                </x-base.tom-select>
                            </div>
                            <div class="mt-3">
                                <x-base.form-label for="update-profile-form-13">
                                    Bank Account
                                </x-base.form-label>
                                <x-base.form-input
                                    id="update-profile-form-13"
                                    type="text"
                                    value="DBS Current 011-903573-0"
                                    placeholder="Input text"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <x-base.button
                            class="w-20 mr-auto"
                            type="button"
                            variant="primary"
                        >
                            Save
                        </x-base.button>
                        <a
                            class="flex items-center text-danger"
                            href=""
                        >
                            <x-base.lucide
                                class="w-4 h-4 mr-1"
                                icon="Trash"
                            /> Delete
                            Account
                        </a>
                    </div>
                </div>
            </div>
            <!-- END: Personal Information -->
        </div>
    </div>
@endsection
