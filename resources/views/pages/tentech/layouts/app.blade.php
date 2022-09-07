<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    {{-- <title>{{ config('app.name', 'The Educational Network') }}</title> --}}

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="shortcut icon" href="{{ asset('tentech/img/favicon.png') }}" type="image/x-icon">

    {{-- Theme Setting --}}

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('tentech/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('tentech/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('tentech/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('tentech/css/elegant-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('tentech/css/flaticon-set.css') }}" rel="stylesheet" />
    <link href="{{ asset('tentech/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('tentech/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('tentech/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('tentech/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('tentech/css/bootsnav.css') }}" rel="stylesheet" />
    <link href="{{ asset('tentech/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('tentech/css/responsive.css') }}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap"
        rel="stylesheet">



    {{-- End Theme Setting --}}

    {{-- custom --}}
    {{-- @livewireStyles --}}
    <link href="{{ asset('tentech/css/customStyle.css') }}" rel="stylesheet">
    @yield('css_link')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>


    @include('pages.tentech.layouts.navbar')

    @yield('content')

    @include('pages.tentech.layouts.footer')


    @livewireScripts
    {{-- <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script> --}}

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('tentech/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('tentech/js/popper.min.js') }}"></script>
    <script src="{{ asset('tentech/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('tentech/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('tentech/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('tentech/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('tentech/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('tentech/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('tentech/js/wow.min.js') }}"></script>
    <script src="{{ asset('tentech/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('tentech/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('tentech/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('tentech/js/count-to.js') }}"></script>
    <script src="{{ asset('tentech/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('tentech/js/bootsnav.js') }}"></script>
    <script src="{{ asset('tentech/js/main.js') }}"></script>
    <script src="{{ asset('tentech/js/livewireScript.js') }}"></script>
    @yield('js_link')

</body>

</html>
