<!DOCTYPE html>
<html
    lang="en"
    dir="ltr"
    class="light-style"
    data-theme="theme-default"
    data-assets-path="/assets/"
    data-template="vertical-menu-template-free"
>
    <head>
        <title inertia>{{ config('app.name', 'Laravel') }}</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
        <meta name="description" content=""/>
        <link rel="icon" type="image/x-icon" href="{{asset('web/assets/img/favicon.png')}}"/>
        <link rel="stylesheet" href="{{asset('assets/vendor/fonts/boxicons.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/vendor/css/core.css')}}" class="template-customizer-core-css"/>
        <link rel="stylesheet" href="{{asset('assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css"/>
        <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}"/>
        @routes
        @viteReactRefresh
        @vite(['resources/js/app.jsx', "resources/js/Pages/{$page['component']}.jsx"])
        @inertiaHead
    </head>
    <body>
        @inertia
        <script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
    </body>
</html>
