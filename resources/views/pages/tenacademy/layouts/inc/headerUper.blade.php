<div class="header-upper">
    <div class="auto-container">
        <div class="clearfix">

            <div class="pull-left logo-box">
                <div class="logo"><a href="{{ url('pages/tenacademy/') }}"><img src="https://via.placeholder.com/230x60"
                            alt="" title="Bootcamp"></a></div>
            </div>

            <div class="nav-outer clearfix">
                <!--Mobile Navigation Toggler-->
                <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                <!-- Main Menu -->
                <nav class="main-menu show navbar-expand-md">
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li class=""><a href="{{ url('pages/tenacademy/') }}">Home</a>
                            </li>
                            <li class="dropdown"><a href="#">Pages</a>
                                <ul>
                                    <li><a href="{{ route('price') }}">Pricing</a></li>
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                    <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                                    <li><a href="{{ route('comming-soon') }}">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Courses</a>
                                <ul>
                                    <li><a href="{{ route('course.grid') }}">Courses As Grid</a></li>
                                    <li><a href="{{ route('course.list') }}">Courses As List</a></li>
                                    <li><a href="{{ route('course.topic') }}">Course Topics</a></li>
                                    <li><a href="{{ route('course.lesson') }}">Course Lesson</a></li>
                                    {{-- <li><a href="{{ route('course.details') }}">Course Details</a></li> --}}
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Profiles</a>
                                <ul>
                                    <li><a href="{{ route('intro-profile') }}">Instructor Profile</a></li>
                                    <li><a href="{{ route('student-profile') }}">Student Profile</a></li>
                                    <li><a href="{{ route('edit-profile') }}">Edit Profile</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Blog</a>
                                <ul>
                                    <li><a href="{{ route('blog') }}">Blog</a></li>
                                    <li><a href="{{ route('blog-detail') }}">Blog Detail</a></li>
                                    <li><a href="{{ route('error') }}">Not Found / 404</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                        </ul>
                    </div>

                </nav>

            </div>

        </div>
    </div>
</div>
