@section('css_link')
    <style>
        nav.navbar.bootsnav {
            background-color: #fff;
        }
    </style>
@endsection
{{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav> --}}


<!-- Header
                            ============================================= -->
<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default attr-bg navbar-fixed dark no-background bootsnav">

        <div class="container-full">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav light">
                {{-- <ul>
                    <li class="button">
                        <a href="#">Login</a>
                    </li>
                </ul> --}}
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('tentech/img/logotrans.png') }}" class="logo" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="dropdown dropdown-right">
                        <a href="#home" class="smooth-menu homePage">Home</a>
                        {{-- <ul class="dropdown-menu">
                            <li><a href="index.html">Home Version One</a></li>
                            <li><a href="index-2.html">Home Version Two</a></li>
                            <li><a href="index-3.html">Home Version Three</a></li>
                            <li><a href="index-4.html">Home Version Four</a></li>
                            <li><a href="index-5.html">Home Version Five</a></li>
                            <li><a href="index-6.html">Home Version Six <span class="badge">New</span></a></li>
                            <li><a href="index-7.html">Home Version Seven <span class="badge">Trend</span></a></li>
                        </ul> --}}
                    </li>
                    <li>
                        <a class="smooth-menu" href="#services">Our Services</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="#overview">Overview</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="#projects">Our Projects</a>
                    </li>
                    {{-- <li>
                        <a class="smooth-menu" href="#pricing">Pricing</a>
                    </li> --}}
                    {{-- <li class="dropdown dropdown-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <ul class="dropdown-menu">
                            <li><a target="_blank" href="login.html">Login</a></li>
                            <li><a target="_blank" href="register.html">Register</a></li>
                            <li><a href="404.html">Error 404</a></li>
                        </ul>
                    </li> --}}
                    <li>
                        <a class="smooth-menu" href="#contact">Contact</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- End Navigation -->

</header>
<!-- End Header -->
