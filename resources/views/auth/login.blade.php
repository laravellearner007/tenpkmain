@extends('pages.tenacademy.layouts.app')
@section('title', 'Login')
@section('content')

    <!-- Page Title -->
    <section class="page-title">
        <div class="auto-container">
            <h1>Login</h1>

            <!-- Search Boxed -->
            <div class="search-boxed">
                <div class="search-box">
                    <form method="post" action="contact.html">
                        <div class="form-group">
                            <input type="search" name="search-field" value="" placeholder="What do you want to learn?"
                                required>
                            <button type="submit"><span class="icon fa fa-search"></span></button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!--End Page Title-->

    <!-- Login Section -->
    <section class="login-section">
        <div class="auto-container">
            <div class="login-box">

                <!-- Title Box -->
                <div class="title-box">
                    <h2>Login</h2>
                    <div class="text"><span class="theme_color">Welcome!</span> Please confirm that you are visiting</div>
                </div>

                <!-- Login Form -->
                <div class="styled-form">
                    <form method="post" action="index.html">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" name="username" value="" placeholder="User Name" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <span class="eye-icon flaticon-eye"></span>
                            <input type="password" name="password" value="" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <div class="check-box">
                                        <input type="checkbox" name="remember-password" id="type-1">
                                        <label for="type-1">Remember Password</label>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="forgot">Forget Password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="button" class="theme-btn btn-style-three"><span class="txt">Login <i
                                        class="fa fa-angle-right"></i></span></button>
                        </div>
                        <div class="form-group">
                            <div class="users">New User? <a href="register.html">Sign Up</a></div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- End Login Section -->

@endsection
