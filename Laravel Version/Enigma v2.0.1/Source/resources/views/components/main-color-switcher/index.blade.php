<!-- BEGIN: Main Color Switcher -->
<div
    class="fixed bottom-0 right-0 z-50 flex items-center justify-center h-12 px-5 mb-10 border rounded-full shadow-md box mr-52">
    <div class="hidden mr-4 text-slate-600 dark:text-slate-200 sm:block">
        Color Scheme
    </div>
    <a
        class="{{ $colorScheme == 'default' ? 'border-slate-300 dark:border-darkmode-800/80' : 'border-white dark:border-darkmode-600' }} mr-1 block h-8 w-8 cursor-pointer rounded-full border-4 bg-blue-800 hover:border-slate-200"
        href="{{ route('color-scheme-switcher', ['color_scheme' => 'default']) }}"
    ></a>
    <a
        class="{{ $colorScheme == 'theme-1' ? 'border-slate-300 dark:border-darkmode-800/80' : 'border-white dark:border-darkmode-600' }} mr-1 block h-8 w-8 cursor-pointer rounded-full border-4 bg-emerald-900 hover:border-slate-200"
        href="{{ route('color-scheme-switcher', ['color_scheme' => 'theme-1']) }}"
    ></a>
    <a
        class="{{ $colorScheme == 'theme-2' ? 'border-slate-300 dark:border-darkmode-800/80' : 'border-white dark:border-darkmode-600' }} mr-1 block h-8 w-8 cursor-pointer rounded-full border-4 bg-blue-900 hover:border-slate-200"
        href="{{ route('color-scheme-switcher', ['color_scheme' => 'theme-2']) }}"
    ></a>
    <a
        class="{{ $colorScheme == 'theme-3' ? 'border-slate-300 dark:border-darkmode-800/80' : 'border-white dark:border-darkmode-600' }} mr-1 block h-8 w-8 cursor-pointer rounded-full border-4 bg-cyan-900 hover:border-slate-200"
        href="{{ route('color-scheme-switcher', ['color_scheme' => 'theme-3']) }}"
    ></a>
    <a
        class="{{ $colorScheme == 'theme-4' ? 'border-slate-300 dark:border-darkmode-800/80' : 'border-white dark:border-darkmode-600' }} block h-8 w-8 cursor-pointer rounded-full border-4 bg-indigo-900 hover:border-slate-200"
        href="{{ route('color-scheme-switcher', ['color_scheme' => 'theme-4']) }}"
    ></a>
</div>
<!-- END: Main Color Switcher -->
