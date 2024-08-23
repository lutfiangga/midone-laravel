@extends('../layouts/base')

@section('head')
    @yield('subhead')
@endsection

@section('content')
    <div class="py-2">
        <x-dark-mode-switcher />
        <x-main-color-switcher />
        <x-mobile-menu />
        <div class="mt-[4.7rem] flex md:mt-0">
            <!-- BEGIN: Simple Menu -->
            <nav class="side-nav side-nav--simple hidden w-[85px] overflow-x-hidden pr-5 pb-16 md:block">
                <a
                    class="intro-x flex items-center pt-4 pl-5"
                    href=""
                >
                    <img
                        class="w-6"
                        src="{{ Vite::asset('resources/images/logo.svg') }}"
                        alt="Midone Tailwind HTML Admin Template"
                    />
                </a>
                <div class="side-nav__divider my-6"></div>
                <ul>
                    @foreach ($simpleMenu as $menuKey => $menu)
                        @if ($menu == 'divider')
                            <li @class([
                                'side-nav__divider my-6',

                                // Animation
                                'opacity-0 animate-[0.4s_ease-in-out_0.1s_intro-divider] animate-fill-mode-forwards animate-delay-' .
                                (array_search($menuKey, array_keys($simpleMenu)) + 1) * 10,
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
                                        (array_search($menuKey, array_keys($simpleMenu)) + 1) * 10,
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
                </ul>
            </nav>
            <!-- END: Simple Menu -->
            <!-- BEGIN: Content -->
            <div
                class="md:max-w-auto min-h-screen min-w-0 max-w-full flex-1 rounded-[30px] bg-slate-100 px-4 pb-10 before:block before:h-px before:w-full before:content-[''] dark:bg-darkmode-700 md:px-[22px]">
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
