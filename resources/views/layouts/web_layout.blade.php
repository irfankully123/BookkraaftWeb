<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('logo.svg') }}" type="image/x-icon">
    <link href="{{ asset('web/assets/css/css-css-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web/assets/css/css-slick-slick-theme.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('web/assets/css/css-slick-slick.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('web/assets/css/css-css-all-main.css') }}" rel="stylesheet">
    <link href="{{ asset('web/assets/css/css-css-custom.css') }}" rel="stylesheet">
    <link href="{{ asset('web/assets/css/css-css-wp-custom.css') }}" rel="stylesheet">
    <link href="{{ asset('web/assets/css/css-css-responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('web/assets/css/css-style1.css') }}">
    <link rel="stylesheet" href="{{ asset('web/assets/css/css-style2.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>@yield('title')</title>
    @yield('css')
</head>
<body class="testi-pg">
   @include('web.includes.header')
        @yield('content')
    @include('web.includes.footer')

    <script src="{{ asset('web/assets/js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('web/assets/js/1801-js-js-owl.js') }}"></script>
    <script src="{{ asset('web/assets/js/7637-js-js-wow.js') }}"></script>
    <script src="{{ asset('web/assets/js/2432-js-slick-slick.js') }}"></script>
    <script src="{{ asset('web/assets/js/6274-js-slick-slick.min.js') }}"></script>
    <script src="{{ asset('web/assets/js/4197-js-js-jquery.slicknav.js') }}"></script>
    <script src="{{ asset('web/assets/js/1151-js-js-fancybox.js') }}"></script>
    <script src="{{ asset('web/assets/js/8336-js-js-bootstrap.js') }}"></script>
    <script src="{{ asset('web/assets/js/9595-js-js-custom.js') }}"></script>
</body>

</html>
