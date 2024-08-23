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
        <!-- BEGIN: Top Menu -->
        <nav @class([
            'top-nav hidden md:block xl:pt-[12px] z-50 relative xl:px-6 -mt-2 xl:-mt-[3px]',
        
            // Animation
            'animate-[0.4s_ease-in-out_0.3s_intro-top-menu] animate-fill-mode-forwards opacity-0 translate-y-[35px]',
        ])>
            <ul class="flex h-[50px] flex-wrap">
                @foreach ($topMenu as $menuKey => $menu)
                    <li>
                        <a
                            href="{{ isset($menu['route_name']) ? route($menu['route_name'], $menu['params']) : 'javascript:;' }}"
                            @class([
                                $firstLevelActiveIndex == $menuKey
                                    ? 'top-menu top-menu--active'
                                    : 'top-menu',
                            
                                // Animation
                                '[&:not(.top-menu--active)]:opacity-0 [&:not(.top-menu--active)]:translate-y-[50px] animate-[0.4s_ease-in-out_0.3s_intro-top-menu] animate-fill-mode-forwards animate-delay-' .
                                (array_search($menuKey, array_keys($topMenu)) + 1) * 10,
                            ])
                        >
                            <div class="top-menu__icon">
                                <x-base.lucide icon="{{ $menu['icon'] }}" />
                            </div>
                            <div class="top-menu__title">
                                {{ $menu['title'] }}
                                @if (isset($menu['sub_menu']))
                                    <x-base.lucide
                                        class="top-menu__sub-icon"
                                        icon="chevron-down"
                                    />
                                @endif
                            </div>
                        </a>
                        @if (isset($menu['sub_menu']))
                            <ul class="{{ $firstLevelActiveIndex == $menuKey ? 'top-menu__sub-open' : '' }}">
                                @foreach ($menu['sub_menu'] as $subMenuKey => $subMenu)
                                    <li>
                                        <a
                                            class="top-menu"
                                            href="{{ isset($subMenu['route_name']) ? route($subMenu['route_name'], $subMenu['params']) : 'javascript:;' }}"
                                        >
                                            <div class="top-menu__icon">
                                                <x-base.lucide icon="{{ $subMenu['icon'] }}" />
                                            </div>
                                            <div class="top-menu__title">
                                                {{ $subMenu['title'] }}
                                                @if (isset($subMenu['sub_menu']))
                                                    <x-base.lucide
                                                        class="top-menu__sub-icon"
                                                        icon="chevron-down"
                                                    />
                                                @endif
                                            </div>
                                        </a>
                                        @if (isset($subMenu['sub_menu']))
                                            <ul
                                                class="{{ $secondLevelActiveIndex == $subMenuKey ? 'top-menu__sub-open' : '' }}">
                                                @foreach ($subMenu['sub_menu'] as $lastSubMenuKey => $lastSubMenu)
                                                    <li>
                                                        <a
                                                            class="top-menu"
                                                            href="{{ isset($lastSubMenu['route_name']) ? route($lastSubMenu['route_name'], $lastSubMenu['params']) : 'javascript:;' }}"
                                                        >
                                                            <div class="top-menu__icon">
                                                                <x-base.lucide icon="{{ $lastSubMenu['icon'] }}" />
                                                            </div>
                                                            <div class="top-menu__title">{{ $lastSubMenu['title'] }}</div>
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
                @endforeach
            </ul>
        </nav>
        <!-- END: Top Menu -->
        <!-- BEGIN: Content -->
        <div @class([
            'relative',
            "before:content-[''] before:w-[95%] before:z-[-1] before:rounded-[1.3rem] before:bg-transparent xl:before:bg-white/10 before:h-full before:-mt-4 before:absolute before:mx-auto before:inset-x-0 before:dark:bg-darkmode-400/50",
        
            // Animation
            'before:translate-y-[35px] before:opacity-0 before:animate-[0.4s_ease-in-out_0.1s_intro-wrapper] before:animate-fill-mode-forwards',
        ])>
            <div @class([
                'translate-y-0 bg-transparent xl:bg-primary flex rounded-[1.3rem] md:pt-[80px] -mt-[7px] md:-mt-[67px] xl:-mt-[62px] dark:bg-transparent xl:dark:bg-darkmode-400',
                'before:hidden xl:before:block before:absolute before:inset-0 before:bg-black/[0.15] before:rounded-[1.3rem] before:z-[-1]',
            
                // Animation
                'animate-[0.4s_ease-in-out_0.2s_intro-wrapper] animate-fill-mode-forwards translate-y-[35px]',
            ])>
                <!-- BEGIN: Content -->
                <div
                    class="md:max-w-auto min-h-screen min-w-0 max-w-full flex-1 rounded-[1.3rem] bg-slate-100 px-4 pb-10 shadow-sm before:block before:h-px before:w-full before:content-[''] dark:bg-darkmode-700 md:px-[22px]">
                    @yield('subcontent')
                </div>
                <!-- END: Content -->
            </div>
        </div>
        <!-- END: Content -->
    </div>
@endsection

@once
    @push('scripts')
        @vite('resources/js/components/top-bar/index.js')
    @endpush
@endonce
