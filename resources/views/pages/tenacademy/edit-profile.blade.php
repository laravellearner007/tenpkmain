@extends('pages.tenacademy.layouts.app')
@section('title', 'Edit Profile')
@section('content')
    <!-- Page Title -->
    <section class="page-title style-two">
        <div class="auto-container">
            <h1>Edit Profile</h1>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Edit Profile Section -->
    <section class="edit-profile-section">
        <div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20"
            data-paroller-type="foreground" data-paroller-direction="vertical"
            style="background-image: url(images/icons/icon-1.png)"></div>
        <div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20"
            data-paroller-type="foreground" data-paroller-direction="vertical"
            style="background-image: url(images/icons/icon-2.png)"></div>
        <div class="auto-container">

            <div class="row clearfix">

                <!-- Image Section -->
                <div class="image-column col-lg-3 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="https://via.placeholder.com/278x319" alt="" />
                        </div>
                        <a href="#" class="theme-btn btn-style-three"><span class="txt">Upload Picture <i
                                    class="fa fa-angle-right"></i></span></a>
                        <a href="#" class="theme-btn btn-style-two"><span class="txt">Delete Picture <i
                                    class="fa fa-angle-right"></i></span></a>
                    </div>
                </div>

                <!-- Content Section -->
                <div class="content-column col-lg-9 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!-- Edit Profile Info Tabs-->
                        <div class="edit-profile-info-tabs">
                            <!-- Profile Tabs-->
                            <div class="edit-profile-tabs tabs-box">

                                <!--Tab Btns-->
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li data-tab="#prod-overview" class="tab-btn active-btn">Overview</li>
                                    <li data-tab="#prod-bookmark" class="tab-btn">Bookmarks</li>
                                    <li data-tab="#prod-billing" class="tab-btn">Billing</li>
                                    <li data-tab="#prod-setting" class="tab-btn">Settings</li>
                                    <li data-tab="#prod-billing" class="tab-btn">Billing</li>
                                    <li data-tab="#prod-setting" class="tab-btn">Settings</li>
                                </ul>

                                <!--Tabs Container-->
                                <div class="tabs-content">

                                    <!--Tab / Active Tab-->
                                    <div class="tab active-tab" id="prod-overview">
                                        <div class="content">
                                            <!-- Title Box -->
                                            <div class="title-box">
                                                <h5>Edit Profile</h5>
                                            </div>

                                            <!-- Profile Form -->
                                            <div class="profile-form">

                                                <!-- Profile Form -->
                                                <form method="post" action="blog.html">
                                                    <div class="row clearfix">

                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                            <input type="text" name="username" placeholder="First Name"
                                                                required="">
                                                            <span class="icon flaticon-edit-1"></span>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                            <input type="text" name="username" placeholder="Last Name"
                                                                required="">
                                                            <span class="icon flaticon-edit-1"></span>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                            <input type="email" name="email" placeholder="Email"
                                                                required="">
                                                            <span class="icon flaticon-edit-1"></span>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                            <input type="text" name="phone" placeholder="Phone"
                                                                required="">
                                                            <span class="icon flaticon-edit-1"></span>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                            <select class="custom-select-box">
                                                                <option>Member Type</option>
                                                                <option>Member 01</option>
                                                                <option>Member 02</option>
                                                                <option>Member 03</option>
                                                                <option>Member 04</option>
                                                                <option>Member 05</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                            <textarea class="" name="message" placeholder="Your Message"></textarea>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group text-right">
                                                            <button class="theme-btn btn-style-two" type="submit"
                                                                name="submit-form"><span class="txt">Cancel <i
                                                                        class="fa fa-angle-right"></i></span></button>
                                                            <button class="theme-btn btn-style-three" type="submit"
                                                                name="submit-form"><span class="txt">Save Change <i
                                                                        class="fa fa-angle-right"></i></span></button>
                                                        </div>

                                                    </div>
                                                </form>

                                            </div>

                                        </div>
                                    </div>

                                    <!-- Tab -->
                                    <div class="tab" id="prod-bookmark">
                                        <div class="content">

                                            <!-- Title Box -->
                                            <div class="title-box">
                                                <h5>Edit Bookmark</h5>
                                            </div>

                                            <!-- Profile Form -->
                                            <div class="profile-form">

                                                <!-- Profile Form -->
                                                <form method="post" action="blog.html">
                                                    <div class="row clearfix">

                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                            <input type="text" name="username"
                                                                placeholder="First Name" required="">
                                                            <span class="icon flaticon-edit-1"></span>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                            <input type="text" name="username" placeholder="Last Name"
                                                                required="">
                                                            <span class="icon flaticon-edit-1"></span>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                            <input type="email" name="email" placeholder="Email"
                                                                required="">
                                                            <span class="icon flaticon-edit-1"></span>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                            <input type="text" name="phone" placeholder="Phone"
                                                                required="">
                                                            <span class="icon flaticon-edit-1"></span>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                            <select class="custom-select-box">
                                                                <option>Member Type</option>
                                                                <option>Member 01</option>
                                                                <option>Member 02</option>
                                                                <option>Member 03</option>
                                                                <option>Member 04</option>
                                                                <option>Member 05</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                            <textarea class="" name="message" placeholder="Your Message"></textarea>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group text-right">
                                                            <button class="theme-btn btn-style-two" type="submit"
                                                                name="submit-form"><span class="txt">Cancel <i
                                                                        class="fa fa-angle-right"></i></span></button>
                                                            <button class="theme-btn btn-style-three" type="submit"
                                                                name="submit-form"><span class="txt">Save Change <i
                                                                        class="fa fa-angle-right"></i></span></button>
                                                        </div>

                                                    </div>
                                                </form>

                                            </div>


                                        </div>
                                    </div>

                                    <!-- Tab -->
                                    <div class="tab" id="prod-billing">
                                        <div class="content">

                                            <!-- Title Box -->
                                            <div class="title-box">
                                                <h5>Edit Billing</h5>
                                            </div>

                                            <!-- Profile Form -->
                                            <div class="profile-form">

                                                <!-- Profile Form -->
                                                <form method="post" action="blog.html">
                                                    <div class="row clearfix">

                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                            <input type="text" name="username"
                                                                placeholder="First Name" required="">
                                                            <span class="icon flaticon-edit-1"></span>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                            <input type="text" name="username" placeholder="Last Name"
                                                                required="">
                                                            <span class="icon flaticon-edit-1"></span>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                            <input type="email" name="email" placeholder="Email"
                                                                required="">
                                                            <span class="icon flaticon-edit-1"></span>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                            <input type="text" name="phone" placeholder="Phone"
                                                                required="">
                                                            <span class="icon flaticon-edit-1"></span>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                            <select class="custom-select-box">
                                                                <option>Member Type</option>
                                                                <option>Member 01</option>
                                                                <option>Member 02</option>
                                                                <option>Member 03</option>
                                                                <option>Member 04</option>
                                                                <option>Member 05</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                            <textarea class="" name="message" placeholder="Your Message"></textarea>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group text-right">
                                                            <button class="theme-btn btn-style-two" type="submit"
                                                                name="submit-form"><span class="txt">Cancel <i
                                                                        class="fa fa-angle-right"></i></span></button>
                                                            <button class="theme-btn btn-style-three" type="submit"
                                                                name="submit-form"><span class="txt">Save Change <i
                                                                        class="fa fa-angle-right"></i></span></button>
                                                        </div>

                                                    </div>
                                                </form>

                                            </div>


                                        </div>
                                    </div>

                                    <!-- Tab -->
                                    <div class="tab" id="prod-setting">
                                        <div class="content">

                                            <!-- Title Box -->
                                            <div class="title-box">
                                                <h5>Edit Setting</h5>
                                            </div>

                                            <!-- Profile Form -->
                                            <div class="profile-form">

                                                <!-- Profile Form -->
                                                <form method="post" action="blog.html">
                                                    <div class="row clearfix">

                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                            <input type="text" name="username"
                                                                placeholder="First Name" required="">
                                                            <span class="icon flaticon-edit-1"></span>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                            <input type="text" name="username" placeholder="Last Name"
                                                                required="">
                                                            <span class="icon flaticon-edit-1"></span>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                            <input type="email" name="email" placeholder="Email"
                                                                required="">
                                                            <span class="icon flaticon-edit-1"></span>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                            <input type="text" name="phone" placeholder="Phone"
                                                                required="">
                                                            <span class="icon flaticon-edit-1"></span>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                            <select class="custom-select-box">
                                                                <option>Member Type</option>
                                                                <option>Member 01</option>
                                                                <option>Member 02</option>
                                                                <option>Member 03</option>
                                                                <option>Member 04</option>
                                                                <option>Member 05</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                            <textarea class="" name="message" placeholder="Your Message"></textarea>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group text-right">
                                                            <button class="theme-btn btn-style-two" type="submit"
                                                                name="submit-form"><span class="txt">Cancel <i
                                                                        class="fa fa-angle-right"></i></span></button>
                                                            <button class="theme-btn btn-style-three" type="submit"
                                                                name="submit-form"><span class="txt">Save Change <i
                                                                        class="fa fa-angle-right"></i></span></button>
                                                        </div>

                                                    </div>
                                                </form>

                                            </div>


                                        </div>
                                    </div>

                                    <!-- Tab -->
                                    <div class="tab" id="prod-billing">
                                        <div class="content">

                                            <!-- Title Box -->
                                            <div class="title-box">
                                                <h5>Edit Billing</h5>
                                            </div>

                                            <!-- Profile Form -->
                                            <div class="profile-form">

                                                <!-- Profile Form -->
                                                <form method="post" action="blog.html">
                                                    <div class="row clearfix">

                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                            <input type="text" name="username"
                                                                placeholder="First Name" required="">
                                                            <span class="icon flaticon-edit-1"></span>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                            <input type="text" name="username" placeholder="Last Name"
                                                                required="">
                                                            <span class="icon flaticon-edit-1"></span>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                            <input type="email" name="email" placeholder="Email"
                                                                required="">
                                                            <span class="icon flaticon-edit-1"></span>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                            <input type="text" name="phone" placeholder="Phone"
                                                                required="">
                                                            <span class="icon flaticon-edit-1"></span>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                            <select class="custom-select-box">
                                                                <option>Member Type</option>
                                                                <option>Member 01</option>
                                                                <option>Member 02</option>
                                                                <option>Member 03</option>
                                                                <option>Member 04</option>
                                                                <option>Member 05</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                            <textarea class="" name="message" placeholder="Your Message"></textarea>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group text-right">
                                                            <button class="theme-btn btn-style-two" type="submit"
                                                                name="submit-form"><span class="txt">Cancel <i
                                                                        class="fa fa-angle-right"></i></span></button>
                                                            <button class="theme-btn btn-style-three" type="submit"
                                                                name="submit-form"><span class="txt">Save Change <i
                                                                        class="fa fa-angle-right"></i></span></button>
                                                        </div>

                                                    </div>
                                                </form>

                                            </div>


                                        </div>
                                    </div>

                                    <!-- Tab -->
                                    <div class="tab" id="prod-setting">
                                        <div class="content">

                                            <!-- Title Box -->
                                            <div class="title-box">
                                                <h5>Edit Setting</h5>
                                            </div>

                                            <!-- Profile Form -->
                                            <div class="profile-form">

                                                <!-- Profile Form -->
                                                <form method="post" action="blog.html">
                                                    <div class="row clearfix">

                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                            <input type="text" name="username"
                                                                placeholder="First Name" required="">
                                                            <span class="icon flaticon-edit-1"></span>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                            <input type="text" name="username" placeholder="Last Name"
                                                                required="">
                                                            <span class="icon flaticon-edit-1"></span>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                            <input type="email" name="email" placeholder="Email"
                                                                required="">
                                                            <span class="icon flaticon-edit-1"></span>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                            <input type="text" name="phone" placeholder="Phone"
                                                                required="">
                                                            <span class="icon flaticon-edit-1"></span>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                            <select class="custom-select-box">
                                                                <option>Member Type</option>
                                                                <option>Member 01</option>
                                                                <option>Member 02</option>
                                                                <option>Member 03</option>
                                                                <option>Member 04</option>
                                                                <option>Member 05</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                            <textarea class="" name="message" placeholder="Your Message"></textarea>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group text-right">
                                                            <button class="theme-btn btn-style-two" type="submit"
                                                                name="submit-form"><span class="txt">Cancel <i
                                                                        class="fa fa-angle-right"></i></span></button>
                                                            <button class="theme-btn btn-style-three" type="submit"
                                                                name="submit-form"><span class="txt">Save Change <i
                                                                        class="fa fa-angle-right"></i></span></button>
                                                        </div>

                                                    </div>
                                                </form>

                                            </div>


                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Profile Section -->


@endsection
