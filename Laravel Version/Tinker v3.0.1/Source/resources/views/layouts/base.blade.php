<!DOCTYPE html>
<!--
Template Name: Tinker - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html
    class="{{ $darkMode ? 'dark' : '' }}{{ $colorScheme != 'default' ? ' ' . $colorScheme : '' }}"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
>
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link
        href="{{ Vite::asset('resources/images/logo.svg') }}"
        rel="shortcut icon"
    >
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <meta
        name="description"
        content="Tinker admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities."
    >
    <meta
        name="keywords"
        content="admin template, Tinker Admin Template, dashboard template, flat admin template, responsive admin template, web app"
    >
    <meta
        name="author"
        content="LEFT4CODE"
    >

    @yield('head')

    <!-- BEGIN: CSS Assets-->
    @vite('resources/css/app.css')
    @stack('styles')
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body>
    @yield('content')

    @vite('resources/js/app.js')

    <!-- BEGIN: Vendor JS Assets-->
    @stack('vendors')
    <!-- END: Vendor JS Assets-->

    <!-- BEGIN: Pages, layouts, components JS Assets-->
    @stack('scripts')
    <!-- END: Pages, layouts, components JS Assets-->
</body>

</html>
