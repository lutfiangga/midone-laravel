@extends('../layouts/base')

@section('head')
    @yield('subhead')
@endsection

@section('content')
    <div class="py-5 md:py-0">
        <x-dark-mode-switcher />
        <x-main-color-switcher />
        <x-mobile-menu />
        <x-top-bar layout="top-menu" />
        <!-- BEGIN: Top Menu -->
        <nav @class([
            'top-nav relative z-50 hidden pt-32 -mt-4 md:block',
        
            // Animation
            'opacity-0 animate-[0.4s_ease-in-out_0.2s_intro-top-menu] animate-fill-mode-forwards',
        ])>
            <ul class="flex flex-wrap px-6 xl:px-[50px]">
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
            'max-w-full md:max-w-none rounded-[30px] md:rounded-[35px_35px_0_0] px-4 md:px-[22px] min-w-0 min-h-screen bg-slate-100 flex-1 pb-10 mt-5 relative dark:bg-darkmode-700',
            "before:content-[''] before:w-full before:h-px before:block",
        ])>
            @yield('subcontent')
        </div>
        <!-- END: Content -->
    </div>
@endsection
