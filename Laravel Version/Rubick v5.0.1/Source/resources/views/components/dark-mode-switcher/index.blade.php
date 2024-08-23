<!-- BEGIN: Dark Mode Switcher -->
<div
    class="dark-mode-switcher {{ $darkMode ? 'dark-mode-switcher--active' : '' }} box group fixed bottom-0 right-0 z-50 mb-10 mr-10 flex h-12 w-40 cursor-pointer items-center justify-center rounded-full border shadow-md"
    data-url="{{ route('dark-mode-switcher') }}"
>
    <div class="mr-4 text-slate-600 dark:text-slate-200">Dark Mode</div>
    <div @class([
        'border w-[38px] h-[24px] p-px outline-none rounded-full relative cursor-pointer',
        'before:content-[\'\'] before:w-[22px] before:h-[22px] before:transition-all before:duration-200 before:shadow-[1px_1px_3px_rgba(0,0,0,0.25)] before:absolute before:inset-y-0 before:my-auto before:rounded-full',
        'group-[.dark-mode-switcher--active]:bg-primary group-[.dark-mode-switcher--active]:border-primary',
        'group-[.dark-mode-switcher--active]:before:ml-[13px] group-[.dark-mode-switcher--active]:before:bg-white',
    ])></div>
</div>
<!-- END: Dark Mode Switcher -->

@once
    @push('scripts')
        @vite('resources/js/components/dark-mode-switcher/index.js')
    @endpush
@endonce
