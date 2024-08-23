@extends('../layouts/base')

@section('head')
    @yield('subhead')
@endsection

@section('content')
    <div
        class="pt-2 pb-7 before:absolute before:inset-0 before:bg-skew-pattern before:bg-fixed before:bg-no-repeat before:content-[''] dark:before:bg-skew-pattern-dark">
        <x-dark-mode-switcher />
        <x-main-color-switcher />
        <x-mobile-menu />
        <x-top-bar />
        <div @class([
            'relative',
            "before:content-[''] before:w-[95%] before:z-[-1] before:rounded-[1.3rem] before:bg-white/10 before:h-full before:-mt-4 before:absolute before:mx-auto before:inset-x-0 before:dark:bg-darkmode-400/50",
        
            // Animation
            'before:translate-y-[35px] before:opacity-0 before:animate-[0.4s_ease-in-out_0.1s_intro-wrapper] before:animate-fill-mode-forwards',
        ])>
            <div @class([
                'translate-y-0 bg-primary flex rounded-[1.3rem] -mt-[7px] md:mt-0 dark:bg-darkmode-400',
                'before:block before:absolute before:inset-0 before:bg-black/[0.15] before:rounded-[1.3rem] before:z-[-1]',
            
                // Animation
                'animate-[0.4s_ease-in-out_0.2s_intro-wrapper] animate-fill-mode-forwards translate-y-[35px]',
            ])>
                <!-- BEGIN: Side Menu -->
                <nav class="side-nav hidden w-[105px] overflow-x-hidden px-5 pt-8 pb-16 md:block xl:w-[250px]">
                    <ul>
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
                                                                            <x-base.lucide
                                                                                icon="{{ $lastSubMenu['icon'] }}"
                                                                            />
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
                    </ul>
                </nav>
                <!-- END: Side Menu -->
                <!-- BEGIN: Content -->
                <div
                    class="md:max-w-auto min-h-screen min-w-0 max-w-full flex-1 rounded-[1.3rem] bg-slate-100 px-4 pb-10 shadow-sm before:block before:h-px before:w-full before:content-[''] dark:bg-darkmode-700 md:px-[22px]">
                    @yield('subcontent')
                </div>
                <!-- END: Content -->
            </div>
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
