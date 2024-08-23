@extends('../layouts/' . $layout)

@section('subhead')
    <title>Dashboard - Enigma - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8 xl:col-span-9">
                    <div class="flex items-center h-10 intro-y">
                        <h2 class="mr-5 text-lg font-medium truncate">General Report</h2>
                        <a
                            class="ml-auto truncate text-primary"
                            href=""
                        > Show More </a>
                    </div>
                    <div class="mt-5 intro-y">
                        <div class="grid grid-cols-12 box">
                            <div class="flex flex-col justify-center col-span-12 px-8 py-12 lg:col-span-4">
                                <x-base.lucide
                                    class="w-10 h-10 text-pending"
                                    icon="PieChart"
                                />
                                <div class="flex items-center justify-start mt-12 text-slate-600 dark:text-slate-300">
                                    My Total Assets
                                    <x-base.tippy content="Total value of your sales: $158.409.416">
                                        <x-base.lucide
                                            class="ml-1.5 h-4 w-4"
                                            icon="AlertCircle"
                                        />
                                    </x-base.tippy>
                                </div>
                                <div class="flex items-center justify-start mt-4">
                                    <div class="relative ml-0.5 pl-3 text-2xl font-medium">
                                        <span class="absolute top-0 left-0 -ml-0.5 text-xl font-medium">
                                            $
                                        </span>
                                        1,413,102.02
                                    </div>
                                    <a
                                        class="ml-4 text-slate-500"
                                        href=""
                                    >
                                        <x-base.lucide
                                            class="w-4 h-4"
                                            icon="RefreshCcw"
                                        />
                                    </a>
                                </div>
                                <div class="mt-4 text-xs text-slate-500">
                                    Last updated 1 hour ago
                                </div>
                                <x-base.button
                                    class="relative justify-start mt-12 rounded-full"
                                    variant="outline-secondary"
                                >
                                    Download Reports
                                    <span
                                        class="absolute right-0 top-0 bottom-0 my-auto ml-auto mr-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-primary text-white"
                                    >
                                        <x-base.lucide
                                            class="w-4 h-4"
                                            icon="ArrowRight"
                                        />
                                    </span>
                                </x-base.button>
                            </div>
                            <div
                                class="col-span-12 p-8 border-t border-dashed border-slate-200 dark:border-darkmode-300 lg:col-span-8 lg:border-t-0 lg:border-l">
                                <x-base.tab.group>
                                    <x-base.tab.list
                                        class="p-1 mx-auto mb-8 border border-dashed rounded-md w-60 border-slate-300 dark:border-darkmode-300"
                                        role="tablist"
                                        variant="pills"
                                    >
                                        <x-base.tab
                                            id="weekly-report-tab"
                                            selected
                                        >
                                            <x-base.tab.button
                                                class="w-full py-1.5 px-2"
                                                as="button"
                                            >
                                                Weekly
                                            </x-base.tab.button>
                                        </x-base.tab>
                                        <x-base.tab id="monthly-report-tab">
                                            <x-base.tab.button
                                                class="w-full py-1.5 px-2"
                                                as="button"
                                            >
                                                Monthly
                                            </x-base.tab.button>
                                        </x-base.tab>
                                    </x-base.tab.list>
                                    <x-base.tab.panels class="px-5 pb-5">
                                        <x-base.tab.panel
                                            class="grid grid-cols-12 gap-y-8 gap-x-10"
                                            id="weekly-report"
                                            selected
                                        >
                                            <div class="col-span-6 sm:col-span-6 md:col-span-4">
                                                <div class="text-slate-500">Unpaid Loan</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">4.501</div>
                                                    <x-base.tippy
                                                        class="flex ml-2 text-xs font-medium cursor-pointer text-danger"
                                                        content="2% Lower than last month"
                                                    >
                                                        2%
                                                        <x-base.lucide
                                                            class="ml-0.5 h-4 w-4"
                                                            icon="ChevronDown"
                                                        />
                                                    </x-base.tippy>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                                <div class="text-slate-500">Active Partner</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">2</div>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                                <div class="text-slate-500">Paid Installment</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">$72.000</div>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                                <div class="text-slate-500">Disbursement</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">$54.000</div>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                                <div class="text-slate-500">Success Payment</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">2.500</div>
                                                    <x-base.tippy
                                                        class="flex ml-2 text-xs font-medium cursor-pointer text-success"
                                                        content="52% Higher than last month"
                                                    >
                                                        52%
                                                        <x-base.lucide
                                                            class="ml-0.5 h-4 w-4"
                                                            icon="ChevronUp"
                                                        />
                                                    </x-base.tippy>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                                <div class="text-slate-500">Unpaid Loan</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">$72.000</div>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                                <div class="text-slate-500">Posted Campaign</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">4.501</div>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                                <div class="text-slate-500">Social Media</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">2</div>
                                                </div>
                                            </div>
                                            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                                                <div class="text-slate-500">Net Margin</div>
                                                <div class="mt-1.5 flex items-center">
                                                    <div class="text-base">$72.000</div>
                                                    <x-base.tippy
                                                        class="flex ml-2 text-xs font-medium cursor-pointer text-success"
                                                        content="49% Higher than last month"
                                                    >
                                                        49%
                                                        <x-base.lucide
                                                            class="ml-0.5 h-4 w-4"
                                                            icon="ChevronUp"
                                                        />
                                                    </x-base.tippy>
                                                </div>
                                            </div>
                                        </x-base.tab.panel>
                                    </x-base.tab.panels>
                                </x-base.tab.group>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->
                <!-- BEGIN: Sales Report -->
                <div
                    class="col-span-12 row-start-4 mt-6 md:col-span-6 lg:col-span-4 lg:row-start-3 xl:col-span-3 xl:row-start-auto xl:mt-8">
                    <div class="flex items-center h-10 intro-y">
                        <h2 class="mr-5 text-lg font-medium truncate">Sales Report</h2>
                        <a
                            class="ml-auto truncate text-primary"
                            href=""
                        > Show More </a>
                    </div>
                    <div class="mt-5 intro-y before:hidden xl:before:block">
                        <div class="p-5 box">
                            <div class="mt-3">
                                <x-report-donut-chart height="h-[196px]" />
                            </div>
                            <div class="mx-auto mt-8 w-52 sm:w-auto">
                                <div class="flex items-center">
                                    <div class="w-2 h-2 mr-3 rounded-full bg-primary"></div>
                                    <span class="truncate">17 - 30 Years old</span>
                                    <span class="ml-auto font-medium">62%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 mr-3 rounded-full bg-pending"></div>
                                    <span class="truncate">31 - 50 Years old</span>
                                    <span class="ml-auto font-medium">33%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 mr-3 rounded-full bg-warning"></div>
                                    <span class="truncate">&gt;= 50 Years old</span>
                                    <span class="ml-auto font-medium">10%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Sales Report -->
                <!-- BEGIN: Official Store -->
                <div class="col-span-12 mt-6 xl:col-span-8">
                    <div class="items-center block h-10 intro-y sm:flex">
                        <h2 class="mr-5 text-lg font-medium truncate">Official Store</h2>
                        <div class="relative mt-3 text-slate-500 sm:ml-auto sm:mt-0">
                            <x-base.lucide
                                class="absolute inset-y-0 left-0 z-10 w-4 h-4 my-auto ml-3"
                                icon="MapPin"
                            />
                            <x-base.form-input
                                class="!box pl-10 sm:w-56"
                                type="text"
                                placeholder="Filter by city"
                            />
                        </div>
                    </div>
                    <div class="p-5 mt-12 intro-y box sm:mt-5">
                        <div>
                            250 Official stores in 21 countries, click the marker to see
                            location details.
                        </div>
                        <x-leaflet-map class="mt-5 h-[310px] rounded-md bg-slate-200" />
                    </div>
                </div>
                <!-- END: Official Store -->
                <!-- BEGIN: Weekly Best Sellers -->
                <div class="col-span-12 mt-6 lg:col-span-8 xl:col-span-4">
                    <div class="flex items-center h-10 intro-y">
                        <h2 class="mr-5 text-lg font-medium truncate">
                            Weekly Best Sellers
                        </h2>
                    </div>
                    <div class="mt-5">
                        @foreach (array_slice($fakers, 0, 4) as $faker)
                            <div class="intro-y">
                                <div class="flex items-center px-4 py-4 mb-3 box zoom-in">
                                    <div class="flex-none w-10 h-10 overflow-hidden rounded-md image-fit">
                                        <img
                                            src="{{ Vite::asset($faker['photos'][0]) }}"
                                            alt="Midone Tailwind HTML Admin Template"
                                        />
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">{{ $faker['users'][0]['name'] }}</div>
                                        <div class="mt-0.5 text-xs text-slate-500">
                                            {{ $faker['dates'][0] }}
                                        </div>
                                    </div>
                                    <div
                                        class="px-2 py-1 text-xs font-medium text-white rounded-full cursor-pointer bg-success">
                                        137 Sales
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <a
                            class="block w-full py-4 text-center border border-dotted rounded-md intro-y border-slate-400 text-slate-500 dark:border-darkmode-300"
                            href=""
                        >
                            View More
                        </a>
                    </div>
                </div>
                <!-- END: Weekly Best Sellers -->
                <!-- BEGIN: Visitors -->
                <div class="col-span-12 mt-6 md:col-span-6 lg:col-span-4">
                    <div class="items-center block h-10 intro-y sm:flex">
                        <h2 class="mr-5 text-lg font-medium truncate">Visitors</h2>
                        <x-base.form-select class="!box mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                            <option value="custom-date">Custom Date</option>
                        </x-base.form-select>
                    </div>
                    <div class="p-5 mt-12 intro-y box sm:mt-5">
                        <div
                            class="flex pb-3 mb-3 border-b border-dashed border-slate-200 text-slate-500 dark:border-darkmode-300">
                            <div>Parameters</div>
                            <div class="ml-auto">Report Values</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div class="flex items-center">
                                <div>Site Visits</div>
                                <x-base.tippy
                                    class="flex ml-2 text-xs font-medium cursor-pointer text-danger"
                                    content="49% Higher than last month"
                                >
                                    -2%
                                    <x-base.lucide
                                        class="ml-0.5 h-4 w-4"
                                        icon="ChevronDown"
                                    />
                                </x-base.tippy>
                            </div>
                            <div class="ml-auto">4.500</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div class="flex items-center">
                                <div>Unique Visitors</div>
                            </div>
                            <div class="ml-auto">21</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div class="flex items-center">
                                <div>Page Views</div>
                                <x-base.tippy
                                    class="flex ml-2 text-xs font-medium cursor-pointer text-success"
                                    content="49% Higher than last month"
                                >
                                    5%
                                    <x-base.lucide
                                        class="ml-0.5 h-4 w-4"
                                        icon="ChevronUp"
                                    />
                                </x-base.tippy>
                            </div>
                            <div class="ml-auto">500</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div class="flex items-center">
                                <div>Bounce Rate</div>
                            </div>
                            <div class="ml-auto">3.420</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div class="flex items-center">
                                <div>% New Visits</div>
                                <x-base.tippy
                                    class="flex ml-2 text-xs font-medium cursor-pointer text-danger"
                                    content="49% Higher than last month"
                                >
                                    -9%
                                    <x-base.lucide
                                        class="ml-0.5 h-4 w-4"
                                        icon="ChevronDown"
                                    />
                                </x-base.tippy>
                            </div>
                            <div class="ml-auto">32%</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div class="flex items-center">
                                <div>Average Tim On Site</div>
                            </div>
                            <div class="ml-auto">1.5M</div>
                        </div>
                        <x-base.button
                            class="relative justify-start w-full mb-2 border-dashed border-slate-300 dark:border-darkmode-300"
                            variant="outline-secondary"
                        >
                            <span class="mr-5 truncate">View Full Report</span>
                            <span
                                class="absolute right-0 top-0 bottom-0 my-auto ml-auto mr-0.5 flex h-8 w-8 items-center justify-center"
                            >
                                <x-base.lucide
                                    class="w-4 h-4"
                                    icon="ArrowRight"
                                />
                            </span>
                        </x-base.button>
                    </div>
                </div>
                <!-- END: Visitors -->
                <!-- BEGIN: Most Viewed Pages -->
                <div class="col-span-12 mt-6 md:col-span-6 lg:col-span-4">
                    <div class="items-center block h-10 intro-y sm:flex">
                        <h2 class="mr-5 text-lg font-medium truncate">Most Viewed Pages</h2>
                        <x-base.form-select class="!box mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                            <option value="custom-date">Custom Date</option>
                        </x-base.form-select>
                    </div>
                    <div class="p-5 mt-12 intro-y box sm:mt-5">
                        <div
                            class="flex pb-3 mb-3 border-b border-dashed border-slate-200 text-slate-500 dark:border-darkmode-300">
                            <div>Page Names</div>
                            <div class="ml-auto">Page Views</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>/letz-lara…review/2653</div>
                            <div class="ml-auto">472</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>/midone…review/1674</div>
                            <div class="ml-auto">294</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>/profile…review/46789</div>
                            <div class="ml-auto">500</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>/profile…review/24357</div>
                            <div class="ml-auto">3.420</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>/letz-lara…review/2653</div>
                            <div class="ml-auto">83</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>/icewall…review/1674</div>
                            <div class="ml-auto">21</div>
                        </div>
                        <x-base.button
                            class="relative justify-start w-full mb-2 border-dashed border-slate-300 dark:border-darkmode-300"
                            variant="outline-secondary"
                        >
                            <span class="mr-5 truncate">View Full Report</span>
                            <span
                                class="absolute right-0 top-0 bottom-0 my-auto ml-auto mr-0.5 flex h-8 w-8 items-center justify-center"
                            >
                                <x-base.lucide
                                    class="w-4 h-4"
                                    icon="ArrowRight"
                                />
                            </span>
                        </x-base.button>
                    </div>
                </div>
                <!-- END: Most Viewed Pages -->
                <!-- BEGIN: Top Search Items -->
                <div class="col-span-12 mt-6 md:col-span-6 lg:col-span-4">
                    <div class="items-center block h-10 intro-y sm:flex">
                        <h2 class="mr-5 text-lg font-medium truncate">Top Search Items</h2>
                        <x-base.form-select class="!box mt-3 sm:ml-auto sm:mt-0 sm:w-auto">
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                            <option value="custom-date">Custom Date</option>
                        </x-base.form-select>
                    </div>
                    <div class="p-5 mt-12 intro-y box sm:mt-5">
                        <div
                            class="flex pb-3 mb-3 border-b border-dashed border-slate-200 text-slate-500 dark:border-darkmode-300">
                            <div>Keywords</div>
                            <div class="ml-auto">Searched</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>Laravel 8</div>
                            <div class="ml-auto">200</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>Eloquent</div>
                            <div class="ml-auto">50</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>CKEditor Source Build</div>
                            <div class="ml-auto">31</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>Midone Docs</div>
                            <div class="ml-auto">405</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>Vue 3 Release Date</div>
                            <div class="ml-auto">201</div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div>Install Vite Vue</div>
                            <div class="ml-auto">42</div>
                        </div>
                        <x-base.button
                            class="relative justify-start w-full mb-2 border-dashed border-slate-300 dark:border-darkmode-300"
                            variant="outline-secondary"
                        >
                            <span class="mr-5 truncate">View Full Report</span>
                            <span
                                class="absolute right-0 top-0 bottom-0 my-auto ml-auto mr-0.5 flex h-8 w-8 items-center justify-center"
                            >
                                <x-base.lucide
                                    class="w-4 h-4"
                                    icon="ArrowRight"
                                />
                            </span>
                        </x-base.button>
                    </div>
                </div>
                <!-- END: Top Search Items -->
                <!-- BEGIN: Weekly Top Products -->
                <div class="col-span-12 mt-6">
                    <div class="items-center block h-10 intro-y sm:flex">
                        <h2 class="mr-5 text-lg font-medium truncate">
                            Weekly Top Products
                        </h2>
                        <div class="flex items-center mt-3 sm:ml-auto sm:mt-0">
                            <x-base.button class="!box flex items-center text-slate-600 dark:text-slate-300">
                                <x-base.lucide
                                    class="hidden w-4 h-4 mr-2 sm:block"
                                    icon="FileText"
                                />
                                Export to Excel
                            </x-base.button>
                            <x-base.button class="!box ml-3 flex items-center text-slate-600 dark:text-slate-300">
                                <x-base.lucide
                                    class="hidden w-4 h-4 mr-2 sm:block"
                                    icon="FileText"
                                />
                                Export to PDF
                            </x-base.button>
                        </div>
                    </div>
                    <div class="mt-8 overflow-auto intro-y sm:mt-0 lg:overflow-visible">
                        <x-base.table class="border-separate border-spacing-y-[10px] sm:mt-2">
                            <x-base.table.thead>
                                <x-base.table.tr>
                                    <x-base.table.th class="border-b-0 whitespace-nowrap">
                                        IMAGES
                                    </x-base.table.th>
                                    <x-base.table.th class="border-b-0 whitespace-nowrap">
                                        PRODUCT NAME
                                    </x-base.table.th>
                                    <x-base.table.th class="text-center border-b-0 whitespace-nowrap">
                                        STOCK
                                    </x-base.table.th>
                                    <x-base.table.th class="text-center border-b-0 whitespace-nowrap">
                                        STATUS
                                    </x-base.table.th>
                                    <x-base.table.th class="text-center border-b-0 whitespace-nowrap">
                                        ACTIONS
                                    </x-base.table.th>
                                </x-base.table.tr>
                            </x-base.table.thead>
                            <x-base.table.tbody>
                                @foreach (array_slice($fakers, 0, 4) as $faker)
                                    <x-base.table.tr class="intro-x">
                                        <x-base.table.td
                                            class="w-40 border-b-0 bg-white shadow-[20px_3px_20px_#0000000b] first:rounded-l-md last:rounded-r-md dark:bg-darkmode-600"
                                        >
                                            <div class="flex">
                                                <div class="w-10 h-10 image-fit zoom-in">
                                                    <x-base.tippy
                                                        class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                        src="{{ Vite::asset($faker['images'][0]) }}"
                                                        alt="Midone Tailwind HTML Admin Template"
                                                        as="img"
                                                        content="{{ 'Uploaded at ' . $faker['dates'][0] }}"
                                                    />
                                                </div>
                                                <div class="w-10 h-10 -ml-5 image-fit zoom-in">
                                                    <x-base.tippy
                                                        class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                        src="{{ Vite::asset($faker['photos'][1]) }}"
                                                        alt="Midone Tailwind HTML Admin Template"
                                                        as="img"
                                                        content="{{ 'Uploaded at ' . $faker['dates'][1] }}"
                                                    />
                                                </div>
                                                <div class="w-10 h-10 -ml-5 image-fit zoom-in">
                                                    <x-base.tippy
                                                        class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                        src="{{ Vite::asset($faker['photos'][2]) }}"
                                                        alt="Midone Tailwind HTML Admin Template"
                                                        as="img"
                                                        content="{{ 'Uploaded at ' . $faker['dates'][2] }}"
                                                    />
                                                </div>
                                            </div>
                                        </x-base.table.td>
                                        <x-base.table.td
                                            class="border-b-0 bg-white shadow-[20px_3px_20px_#0000000b] first:rounded-l-md last:rounded-r-md dark:bg-darkmode-600"
                                        >
                                            <a
                                                class="font-medium whitespace-nowrap"
                                                href=""
                                            >
                                                {{ $faker['products'][0]['name'] }}
                                            </a>
                                            <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                                {{ $faker['products'][0]['category'] }}
                                            </div>
                                        </x-base.table.td>
                                        <x-base.table.td
                                            class="border-b-0 bg-white text-center shadow-[20px_3px_20px_#0000000b] first:rounded-l-md last:rounded-r-md dark:bg-darkmode-600"
                                        >
                                            {{ $faker['stocks'][0] }}
                                        </x-base.table.td>
                                        <x-base.table.td
                                            class="w-40 border-b-0 bg-white shadow-[20px_3px_20px_#0000000b] first:rounded-l-md last:rounded-r-md dark:bg-darkmode-600"
                                        >
                                            <div @class([
                                                'flex items-center justify-center',
                                                'text-success' => $faker['true_false'][0],
                                                'text-danger' => !$faker['true_false'][0],
                                            ])>
                                                <x-base.lucide
                                                    class="w-4 h-4 mr-2"
                                                    icon="CheckSquare"
                                                />
                                                {{ $faker['true_false'][0] ? 'Active' : 'Inactive' }}
                                            </div>
                                        </x-base.table.td>
                                        <x-base.table.td
                                            class="relative w-56 border-b-0 bg-white py-0 shadow-[20px_3px_20px_#0000000b] before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200 first:rounded-l-md last:rounded-r-md dark:bg-darkmode-600 before:dark:bg-darkmode-400"
                                        >
                                            <div class="flex items-center justify-center">
                                                <a
                                                    class="flex items-center mr-3"
                                                    href=""
                                                >
                                                    <x-base.lucide
                                                        class="w-4 h-4 mr-1"
                                                        icon="CheckSquare"
                                                    />
                                                    Edit
                                                </a>
                                                <a
                                                    class="flex items-center text-danger"
                                                    href=""
                                                >
                                                    <x-base.lucide
                                                        class="w-4 h-4 mr-1"
                                                        icon="Trash"
                                                    />
                                                    Delete
                                                </a>
                                            </div>
                                        </x-base.table.td>
                                    </x-base.table.tr>
                                @endforeach
                            </x-base.table.tbody>
                        </x-base.table>
                    </div>
                    <div class="flex flex-wrap items-center mt-3 intro-y sm:flex-row sm:flex-nowrap">
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
                </div>
                <!-- END: Weekly Top Products -->
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-3">
            <div class="pb-10 -mb-10 2xl:border-l">
                <div class="grid grid-cols-12 gap-x-6 gap-y-6 2xl:gap-x-0 2xl:pl-6">
                    <!-- BEGIN: Important Notes -->
                    <div class="col-span-12 mt-3 md:col-span-6 xl:col-span-12 2xl:mt-8">
                        <div class="flex items-center h-10 intro-x">
                            <h2 class="mr-auto text-lg font-medium truncate">
                                Important Notes
                            </h2>
                            <x-base.button
                                class="px-2 mr-2 tiny-slider-navigator border-slate-300 text-slate-600 dark:text-slate-300"
                                data-carousel="important-notes"
                                data-target="prev"
                            >
                                <x-base.lucide
                                    class="w-4 h-4"
                                    icon="ChevronLeft"
                                />
                            </x-base.button>
                            <x-base.button
                                class="px-2 mr-2 tiny-slider-navigator border-slate-300 text-slate-600 dark:text-slate-300"
                                data-carousel="important-notes"
                                data-target="next"
                            >
                                <x-base.lucide
                                    class="w-4 h-4"
                                    icon="ChevronRight"
                                />
                            </x-base.button>
                        </div>
                        <div class="mt-5 intro-x">
                            <div class="box zoom-in">
                                <x-base.tiny-slider id="important-notes">
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">
                                            Lorem Ipsum is simply dummy text
                                        </div>
                                        <div class="mt-1 text-slate-400">20 Hours ago</div>
                                        <div class="mt-1 text-justify text-slate-500">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s.
                                        </div>
                                        <div class="flex mt-5 font-medium">
                                            <x-base.button
                                                class="px-2 py-1"
                                                type="button"
                                                variant="secondary"
                                            >
                                                View Notes
                                            </x-base.button>
                                            <x-base.button
                                                class="px-2 py-1 ml-auto"
                                                type="button"
                                                variant="outline-secondary"
                                            >
                                                Dismiss
                                            </x-base.button>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">
                                            Lorem Ipsum is simply dummy text
                                        </div>
                                        <div class="mt-1 text-slate-400">20 Hours ago</div>
                                        <div class="mt-1 text-justify text-slate-500">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s.
                                        </div>
                                        <div class="flex mt-5 font-medium">
                                            <x-base.button
                                                class="px-2 py-1"
                                                type="button"
                                                variant="secondary"
                                            >
                                                View Notes
                                            </x-base.button>
                                            <x-base.button
                                                class="px-2 py-1 ml-auto"
                                                type="button"
                                                variant="outline-secondary"
                                            >
                                                Dismiss
                                            </x-base.button>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">
                                            Lorem Ipsum is simply dummy text
                                        </div>
                                        <div class="mt-1 text-slate-400">20 Hours ago</div>
                                        <div class="mt-1 text-justify text-slate-500">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s.
                                        </div>
                                        <div class="flex mt-5 font-medium">
                                            <x-base.button
                                                class="px-2 py-1"
                                                type="button"
                                                variant="secondary"
                                            >
                                                View Notes
                                            </x-base.button>
                                            <x-base.button
                                                class="px-2 py-1 ml-auto"
                                                type="button"
                                                variant="outline-secondary"
                                            >
                                                Dismiss
                                            </x-base.button>
                                        </div>
                                    </div>
                                </x-base.tiny-slider>
                            </div>
                        </div>
                    </div>
                    <!-- END: Important Notes -->
                    <!-- BEGIN: Recent Activities -->
                    <div class="col-span-12 mt-3 md:col-span-6 xl:col-span-4 2xl:col-span-12">
                        <div class="flex items-center h-10 intro-x">
                            <h2 class="mr-5 text-lg font-medium truncate">
                                Recent Activities
                            </h2>
                            <a
                                class="ml-auto truncate text-primary"
                                href=""
                            > Show More </a>
                        </div>
                        <div
                            class="relative mt-5 before:absolute before:ml-5 before:mt-5 before:block before:h-[85%] before:w-px before:bg-slate-200 before:dark:bg-darkmode-400">
                            <div class="relative flex items-center mb-3 intro-x">
                                <div
                                    class="before:absolute before:mt-5 before:ml-5 before:block before:h-px before:w-20 before:bg-slate-200 before:dark:bg-darkmode-400">
                                    <div class="flex-none w-10 h-10 overflow-hidden rounded-full image-fit">
                                        <img
                                            src="{{ Vite::asset($fakers[9]['photos'][0]) }}"
                                            alt="Midone Tailwind HTML Admin Template"
                                        />
                                    </div>
                                </div>
                                <div class="flex-1 px-5 py-3 ml-4 box zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">
                                            {{ $fakers[9]['users'][0]['name'] }}
                                        </div>
                                        <div class="ml-auto text-xs text-slate-500">07:00 PM</div>
                                    </div>
                                    <div class="mt-1 text-slate-500">Has joined the team</div>
                                </div>
                            </div>
                            <div class="relative flex items-center mb-3 intro-x">
                                <div
                                    class="before:absolute before:mt-5 before:ml-5 before:block before:h-px before:w-20 before:bg-slate-200 before:dark:bg-darkmode-400">
                                    <div class="flex-none w-10 h-10 overflow-hidden rounded-full image-fit">
                                        <img
                                            src="{{ Vite::asset($fakers[8]['photos'][0]) }}"
                                            alt="Midone Tailwind HTML Admin Template"
                                        />
                                    </div>
                                </div>
                                <div class="flex-1 px-5 py-3 ml-4 box zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">
                                            {{ $fakers[8]['users'][0]['name'] }}
                                        </div>
                                        <div class="ml-auto text-xs text-slate-500">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500">
                                        <div class="mt-1">Added 3 new photos</div>
                                        <div class="flex mt-2">
                                            <x-base.tippy
                                                class="w-8 h-8 mr-1 image-fit zoom-in"
                                                as="div"
                                                content="{{ $fakers[0]['products'][0]['name'] }}"
                                            >
                                                <img
                                                    class="border border-white rounded-md"
                                                    src="{{ Vite::asset($fakers[8]['photos'][0]) }}"
                                                    alt="Midone Tailwind HTML Admin Template"
                                                />
                                            </x-base.tippy>
                                            <x-base.tippy
                                                class="w-8 h-8 mr-1 image-fit zoom-in"
                                                as="div"
                                                content="{{ $fakers[1]['products'][0]['name'] }}"
                                            >
                                                <img
                                                    class="border border-white rounded-md"
                                                    src="{{ Vite::asset($fakers[8]['photos'][1]) }}"
                                                    alt="Midone Tailwind HTML Admin Template"
                                                />
                                            </x-base.tippy>
                                            <x-base.tippy
                                                class="w-8 h-8 mr-1 image-fit zoom-in"
                                                as="div"
                                                content="{{ $fakers[2]['products'][0]['name'] }}"
                                            >
                                                <img
                                                    class="border border-white rounded-md"
                                                    src="{{ Vite::asset($fakers[8]['photos'][2]) }}"
                                                    alt="Midone Tailwind HTML Admin Template"
                                                />
                                            </x-base.tippy>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-4 text-xs text-center intro-x text-slate-500">
                                12 November
                            </div>
                            <div class="relative flex items-center mb-3 intro-x">
                                <div
                                    class="before:absolute before:mt-5 before:ml-5 before:block before:h-px before:w-20 before:bg-slate-200 before:dark:bg-darkmode-400">
                                    <div class="flex-none w-10 h-10 overflow-hidden rounded-full image-fit">
                                        <img
                                            src="{{ Vite::asset($fakers[7]['photos'][0]) }}"
                                            alt="Midone Tailwind HTML Admin Template"
                                        />
                                    </div>
                                </div>
                                <div class="flex-1 px-5 py-3 ml-4 box zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">
                                            {{ $fakers[7]['users'][0]['name'] }}
                                        </div>
                                        <div class="ml-auto text-xs text-slate-500">07:00 PM</div>
                                    </div>
                                    <div class="mt-1 text-slate-500">
                                        Has changed
                                        <a
                                            class="text-primary"
                                            href=""
                                        >
                                            {{ $fakers[7]['products'][0]['name'] }}
                                        </a>
                                        price and description
                                    </div>
                                </div>
                            </div>
                            <div class="relative flex items-center mb-3 intro-x">
                                <div
                                    class="before:absolute before:mt-5 before:ml-5 before:block before:h-px before:w-20 before:bg-slate-200 before:dark:bg-darkmode-400">
                                    <div class="flex-none w-10 h-10 overflow-hidden rounded-full image-fit">
                                        <img
                                            src="{{ Vite::asset($fakers[6]['photos'][0]) }}"
                                            alt="Midone Tailwind HTML Admin Template"
                                        />
                                    </div>
                                </div>
                                <div class="flex-1 px-5 py-3 ml-4 box zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">
                                            {{ $fakers[6]['users'][0]['name'] }}
                                        </div>
                                        <div class="ml-auto text-xs text-slate-500">07:00 PM</div>
                                    </div>
                                    <div class="mt-1 text-slate-500">
                                        Has changed
                                        <a
                                            class="text-primary"
                                            href=""
                                        >
                                            {{ $fakers[6]['products'][0]['name'] }}
                                        </a>
                                        description
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Recent Activities -->
                    <!-- BEGIN: Transactions -->
                    <div class="col-span-12 mt-3 md:col-span-6 xl:col-span-4 2xl:col-span-12">
                        <div class="flex items-center h-10 intro-x">
                            <h2 class="mr-5 text-lg font-medium truncate">Transactions</h2>
                        </div>
                        <div class="mt-5">
                            @foreach (array_slice($fakers, 0, 5) as $faker)
                                <div class="intro-x">
                                    <div class="flex items-center px-5 py-3 mb-3 box zoom-in">
                                        <div class="flex-none w-10 h-10 overflow-hidden rounded-full image-fit">
                                            <img
                                                src="{{ Vite::asset($faker['photos'][0]) }}"
                                                alt="Midone Tailwind HTML Admin Template"
                                            />
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">{{ $faker['users'][0]['name'] }}</div>
                                            <div class="mt-0.5 text-xs text-slate-500">
                                                {{ $faker['dates'][0] }}
                                            </div>
                                        </div>
                                        <div @class([
                                            'text-success' => $faker['true_false'][0],
                                            'text-danger' => !$faker['true_false'][0],
                                        ])>
                                            {{ $faker['true_false'][0] ? '+' : '-' }}${{ $faker['totals'][0] }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <a
                                class="block w-full py-3 text-center border border-dotted rounded-md intro-x border-slate-400 text-slate-500 dark:border-darkmode-300"
                                href=""
                            >
                                View More
                            </a>
                        </div>
                    </div>
                    <!-- END: Transactions -->
                    <!-- BEGIN: Schedules -->
                    <div
                        class="col-span-12 mt-3 md:col-span-6 xl:col-span-4 xl:col-start-1 xl:row-start-2 2xl:col-span-12 2xl:col-start-auto 2xl:row-start-auto">
                        <div class="flex items-center h-10 intro-x">
                            <h2 class="mr-5 text-lg font-medium truncate">Schedules</h2>
                            <a
                                class="flex items-center ml-auto truncate text-primary"
                                href=""
                            >
                                <x-base.lucide
                                    class="w-4 h-4 mr-1"
                                    icon="Plus"
                                /> Add New Schedules
                            </a>
                        </div>
                        <div class="mt-5">
                            <div class="intro-x box">
                                <div class="p-5">
                                    <div class="flex">
                                        <x-base.lucide
                                            class="w-5 h-5 text-slate-500"
                                            icon="ChevronLeft"
                                        />
                                        <div class="mx-auto text-base font-medium">April</div>
                                        <x-base.lucide
                                            class="w-5 h-5 text-slate-500"
                                            icon="ChevronRight"
                                        />
                                    </div>
                                    <div class="grid grid-cols-7 gap-4 mt-5 text-center">
                                        <div class="font-medium">Su</div>
                                        <div class="font-medium">Mo</div>
                                        <div class="font-medium">Tu</div>
                                        <div class="font-medium">We</div>
                                        <div class="font-medium">Th</div>
                                        <div class="font-medium">Fr</div>
                                        <div class="font-medium">Sa</div>
                                        <div class="relative rounded py-0.5 text-slate-500">29</div>
                                        <div class="relative rounded py-0.5 text-slate-500">30</div>
                                        <div class="relative rounded py-0.5 text-slate-500">31</div>
                                        <div class="relative rounded py-0.5">1</div>
                                        <div class="relative rounded py-0.5">2</div>
                                        <div class="relative rounded py-0.5">3</div>
                                        <div class="relative rounded py-0.5">4</div>
                                        <div class="relative rounded py-0.5">5</div>
                                        <div class="relative rounded bg-success/20 py-0.5 dark:bg-success/30">
                                            6
                                        </div>
                                        <div class="relative rounded py-0.5">7</div>
                                        <div class="relative rounded bg-primary py-0.5 text-white">
                                            8
                                        </div>
                                        <div class="relative rounded py-0.5">9</div>
                                        <div class="relative rounded py-0.5">10</div>
                                        <div class="relative rounded py-0.5">11</div>
                                        <div class="relative rounded py-0.5">12</div>
                                        <div class="relative rounded py-0.5">13</div>
                                        <div class="relative rounded py-0.5">14</div>
                                        <div class="relative rounded py-0.5">15</div>
                                        <div class="relative rounded py-0.5">16</div>
                                        <div class="relative rounded py-0.5">17</div>
                                        <div class="relative rounded py-0.5">18</div>
                                        <div class="relative rounded py-0.5">19</div>
                                        <div class="relative rounded py-0.5">20</div>
                                        <div class="relative rounded py-0.5">21</div>
                                        <div class="relative rounded py-0.5">22</div>
                                        <div class="relative rounded bg-pending/20 py-0.5 dark:bg-pending/30">
                                            23
                                        </div>
                                        <div class="relative rounded py-0.5">24</div>
                                        <div class="relative rounded py-0.5">25</div>
                                        <div class="relative rounded py-0.5">26</div>
                                        <div class="relative rounded bg-primary/10 py-0.5 dark:bg-primary/50">
                                            27
                                        </div>
                                        <div class="relative rounded py-0.5">28</div>
                                        <div class="relative rounded py-0.5">29</div>
                                        <div class="relative rounded py-0.5">30</div>
                                        <div class="relative rounded py-0.5 text-slate-500">1</div>
                                        <div class="relative rounded py-0.5 text-slate-500">2</div>
                                        <div class="relative rounded py-0.5 text-slate-500">3</div>
                                        <div class="relative rounded py-0.5 text-slate-500">4</div>
                                        <div class="relative rounded py-0.5 text-slate-500">5</div>
                                        <div class="relative rounded py-0.5 text-slate-500">6</div>
                                        <div class="relative rounded py-0.5 text-slate-500">7</div>
                                        <div class="relative rounded py-0.5 text-slate-500">8</div>
                                        <div class="relative rounded py-0.5 text-slate-500">9</div>
                                    </div>
                                </div>
                                <div class="p-5 border-t border-slate-200/60">
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 mr-3 rounded-full bg-pending"></div>
                                        <span class="truncate">UI/UX Workshop</span>
                                        <span class="font-medium xl:ml-auto">23th</span>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 mr-3 rounded-full bg-primary"></div>
                                        <span class="truncate"> VueJs Frontend Development </span>
                                        <span class="font-medium xl:ml-auto">10th</span>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 mr-3 rounded-full bg-warning"></div>
                                        <span class="truncate">Laravel Rest API</span>
                                        <span class="font-medium xl:ml-auto">31th</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Schedules -->
                </div>
            </div>
        </div>
    </div>
@endsection
