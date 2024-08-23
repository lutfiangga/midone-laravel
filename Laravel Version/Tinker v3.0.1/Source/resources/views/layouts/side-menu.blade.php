@extends('../layouts/base')

@section('head')
    @yield('subhead')
@endsection

@section('content')
    <div class="-mx-3 bg-black/[0.15] py-5 px-3 dark:bg-transparent sm:-mx-8 sm:px-8 md:py-0">
        <x-dark-mode-switcher />
        <x-main-color-switcher />
        <x-mobile-menu />
        <div class="mt-[4.7rem] flex overflow-hidden md:mt-0">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav z-10 hidden overflow-x-hidden px-5 pb-16 md:block md:w-[105px] xl:w-[250px]">
                <a
                    class="intro-x mt-3 flex items-center pt-4 pl-5"
                    href=""
                >
                    <img
                        class="w-6"
                        src="{{ Vite::asset('resources/images/logo.svg') }}"
                        alt="Tinker Tailwind HTML Admin Template"
                    />
                    <span class="ml-3 hidden text-lg text-white xl:block">
                        Tinker
                    </span>
                </a>
                <div class="side-nav__divider my-6"></div>
                <ul>
                    <!-- BEGIN: First Child -->
                    @foreach ($sideMenu as $menuKey => $menu)
                        @if ($menu == 'divider')
                            <li @class([
                                'side-nav__divider my-6',
                            
                                // Animation
                                'opacity-0 animate-[0.4s_ease-in-out_0.1s_intro-divider] animate-fill-mode-forwards animate-delay-' .
                                (array_search($menuKey, array_keys($sideMenu)) + 1) * 10,
                            ])></li>
                        @else
                            <li>
                                <a
                                    href="{{ isset($menu['route_name']) ? route($menu['route_name'], $menu['params']) : 'javascript:;' }}"
                                    @class([
                                        $firstLevelActiveIndex == $menuKey
                                            ? 'side-menu side-menu--active'
                                            : 'side-menu',
                                    
                                        // Animation
                                        '[&:not(.side-menu--active)]:opacity-0 [&:not(.side-menu--active)]:translate-x-[50px] animate-[0.4s_ease-in-out_0.1s_intro-menu] animate-fill-mode-forwards animate-delay-' .
                                        (array_search($menuKey, array_keys($sideMenu)) + 1) * 10,
                                    ])
                                >
                                    <div class="side-menu__icon">
                                        <x-base.lucide icon="{{ $menu['icon'] }}" />
                                    </div>
                                    <div class="side-menu__title">
                                        {{ $menu['title'] }}
                                        @if (isset($menu['sub_menu']))
                                            <div
                                                class="side-menu__sub-icon {{ $firstLevelActiveIndex == $menuKey ? 'transform rotate-180' : '' }}">
                                                <x-base.lucide icon="ChevronDown" />
                                            </div>
                                        @endif
                                    </div>
                                </a>
                                @if (isset($menu['sub_menu']))
                                    <ul class="{{ $firstLevelActiveIndex == $menuKey ? 'side-menu__sub-open' : '' }}">
                                        @foreach ($menu['sub_menu'] as $subMenuKey => $subMenu)
                                            <li>
                                                <a
                                                    href="{{ isset($subMenu['route_name']) ? route($subMenu['route_name'], $subMenu['params']) : 'javascript:;' }}"
                                                    @class([
                                                        $secondLevelActiveIndex == $subMenuKey
                                                            ? 'side-menu side-menu--active'
                                                            : 'side-menu',
                                                    
                                                        // Animation
                                                        '[&:not(.side-menu--active)]:opacity-0 [&:not(.side-menu--active)]:translate-x-[50px] animate-[0.4s_ease-in-out_0.1s_intro-menu] animate-fill-mode-forwards animate-delay-' .
                                                        (array_search($subMenuKey, array_keys($menu['sub_menu'])) + 1) * 10,
                                                    ])
                                                >
                                                    <div class="side-menu__icon">
                                                        <x-base.lucide icon="{{ $subMenu['icon'] }}" />
                                                    </div>
                                                    <div class="side-menu__title">
                                                        {{ $subMenu['title'] }}
                                                        @if (isset($subMenu['sub_menu']))
                                                            <div
                                                                class="side-menu__sub-icon {{ $secondLevelActiveIndex == $subMenuKey ? 'transform rotate-180' : '' }}">
                                                                <x-base.lucide icon="ChevronDown" />
                                                            </div>
                                                        @endif
                                                    </div>
                                                </a>
                                                @if (isset($subMenu['sub_menu']))
                                                    <ul
                                                        class="{{ $secondLevelActiveIndex == $subMenuKey ? 'side-menu__sub-open' : '' }}">
                                                        @foreach ($subMenu['sub_menu'] as $lastSubMenuKey => $lastSubMenu)
                                                            <li>
                                                                <a
                                                                    href="{{ isset($lastSubMenu['route_name']) ? route($lastSubMenu['route_name'], $lastSubMenu['params']) : 'javascript:;' }}"
                                                                    @class([
                                                                        $thirdLevelActiveIndex == $lastSubMenuKey
                                                                            ? 'side-menu side-menu--active'
                                                                            : 'side-menu',
                                                                    
                                                                        // Animation
                                                                        '[&:not(.side-menu--active)]:opacity-0 [&:not(.side-menu--active)]:translate-x-[50px] animate-[0.4s_ease-in-out_0.1s_intro-menu] animate-fill-mode-forwards animate-delay-' .
                                                                        (array_search($lastSubMenuKey, array_keys($subMenu['sub_menu'])) + 1) * 10,
                                                                    ])
                                                                >
                                                                    <div class="side-menu__icon">
                                                                        <x-base.lucide icon="{{ $lastSubMenu['icon'] }}" />
                                                                    </div>
                                                                    <div class="side-menu__title">
                                                                        {{ $lastSubMenu['title'] }}
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endif
                    @endforeach
                    <!-- END: First Child -->
                </ul>
            </nav>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div @class([
                'rounded-[30px] md:rounded-[35px/50px_0px_0px_0px] min-w-0 min-h-screen max-w-full md:max-w-none bg-slate-100 flex-1 pb-10 px-4 md:px-6 relative md:ml-4 dark:bg-darkmode-700',
                "before:content-[''] before:w-full before:h-px before:block",
                "after:content-[''] after:z-[-1] after:rounded-[40px_0px_0px_0px] after:w-full after:inset-y-0 after:absolute after:left-0 after:bg-white/10 after:mt-8 after:-ml-4 after:dark:bg-darkmode-400/50",
            ])>
                <x-top-bar />
                @yield('subcontent')
            </div>
            <!-- END: Content -->
        </div>
    </div>
@endsection

@once
    @push('scripts')
        @vite('resources/js/vendor/tippy/index.js')
    @endpush
@endonce

@once
    @push('scripts')
        @vite('resources/js/layouts/side-menu/index.js')
    @endpush
@endonce
