<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- Stylesheets -->
    <link href="{{ asset('tenacademy/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('tenacademy/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('tenacademy/css/responsive.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('tenacademy/images/favicon.png') }}" type="image/x-icon">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Titillium+Web:wght@300;400;600;700;900&display=swap"
        rel="stylesheet">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    @yield('css_link')
</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        @include('pages.tenacademy.layouts.inc.header')
        <!-- End Main Header -->

        @yield('content')
        <!--Main Footer-->
        @include('pages.tenacademy.layouts.inc.footer')

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
    <script src="{{ asset('tenacademy/js/jquery.js') }}"></script>
    <script src="{{ asset('tenacademy/js/popper.min.js') }}"></script>
    <script src="{{ asset('tenacademy/js/jquery.scrollTo.js') }}"></script>
    <script src="{{ asset('tenacademy/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('tenacademy/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('tenacademy/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('tenacademy/js/appear.js') }}"></script>
    <script src="{{ asset('tenacademy/js/swiper.min.js') }}"></script>
    <script src="{{ asset('tenacademy/js/element-in-view.js') }}"></script>
    <script src="{{ asset('tenacademy/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('tenacademy/js/parallax.min.js') }}"></script>
    <script src="{{ asset('tenacademy/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('tenacademy/js/jquery.countdown.js') }}"></script>
    <!--Master Slider-->
    <script src="{{ asset('tenacademy/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('tenacademy/js/owl.js') }}"></script>
    <script src="{{ asset('tenacademy/js/wow.js') }}"></script>
    <script src="{{ asset('tenacademy/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('tenacademy/js/script.js') }}"></script>
    @yield('js_link')

</body>

</html>
