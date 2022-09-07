@extends('pages.tenacademy.layouts.app')
@section('title', 'Price')
@section('content')
    <!-- Page Title -->
    <section class="page-title">
        <div class="auto-container">
            <h1>Pricing</h1>

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

    <!-- Pricing Section -->
    <section class="pricing-section price-page-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title style-two centered">
                <h2>Plans & Pricing</h2>
                <div class="text">There are many variations of passages of Lorem Ipsum available,</div>
            </div>

            <div class="pricing-tabs tabs-box">

                <!-- Tab Btns -->
                <ul class="tab-buttons clearfix">
                    <li data-tab="#prod-monthly" class="tab-btn active-btn">Monthly</li>
                    <li data-tab="#prod-yearly" class="tab-btn">Annually</li>
                </ul>


                <!--Tabs Container-->
                <div class="tabs-content">

                    <!--Tab-->
                    <div class="tab active-tab" id="prod-monthly">
                        <div class="content">
                            <div class="row clearfix">

                                <!-- Price Block -->
                                <div class="price-block style-two col-lg-4 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <span class="icon"><img src="https://via.placeholder.com/285x130"
                                                    alt="" /></span>
                                        </div>
                                        <h3>Basic</h3>
                                        <div class="text">Replenish him third creature and meat of the blessed void good a
                                            fruit</div>
                                        <a href="course.html" class="theme-btn btn-style-eight"><span class="txt">Start
                                                Plan</span></a>
                                        <div class="price">$14.99 <span>Per month</span></div>
                                    </div>
                                </div>

                                <!-- Price Block -->
                                <div class="price-block style-two col-lg-4 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <span class="icon"><img src="https://via.placeholder.com/285x130"
                                                    alt="" /></span>
                                        </div>
                                        <h3>Standard</h3>
                                        <div class="text">Replenish him third creature and meat of the blessed void good a
                                            fruit</div>
                                        <a href="course.html" class="theme-btn btn-style-eight"><span class="txt">Start
                                                Plan</span></a>
                                        <div class="price">$29.99 <span>Per month</span></div>
                                    </div>
                                </div>

                                <!-- Price Block -->
                                <div class="price-block style-two col-lg-4 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <span class="icon"><img src="https://via.placeholder.com/285x130"
                                                    alt="" /></span>
                                        </div>
                                        <h3>Premium</h3>
                                        <div class="text">Replenish him third creature and meat of the blessed void good a
                                            fruit</div>
                                        <a href="course.html" class="theme-btn btn-style-eight"><span class="txt">Start
                                                Plan</span></a>
                                        <div class="price">$49.99 <span>Per month</span></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--Tab-->
                    <div class="tab" id="prod-yearly">
                        <div class="content">
                            <div class="row clearfix">

                                <!-- Price Block -->
                                <div class="price-block style-two col-lg-4 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <span class="icon"><img src="https://via.placeholder.com/285x130"
                                                    alt="" /></span>
                                        </div>
                                        <h3>Basic</h3>
                                        <div class="text">Replenish him third creature and meat of the blessed void good a
                                            fruit</div>
                                        <a href="course.html" class="theme-btn btn-style-eight"><span class="txt">Start
                                                Plan</span></a>
                                        <div class="price">$14.99 <span>Per month</span></div>
                                    </div>
                                </div>

                                <!-- Price Block -->
                                <div class="price-block style-two col-lg-4 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <span class="icon"><img src="https://via.placeholder.com/285x130"
                                                    alt="" /></span>
                                        </div>
                                        <h3>Standard</h3>
                                        <div class="text">Replenish him third creature and meat of the blessed void good a
                                            fruit</div>
                                        <a href="course.html" class="theme-btn btn-style-eight"><span class="txt">Start
                                                Plan</span></a>
                                        <div class="price">$24.99 <span>Per month</span></div>
                                    </div>
                                </div>

                                <!-- Price Block -->
                                <div class="price-block style-two col-lg-4 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <span class="icon"><img src="https://via.placeholder.com/285x130"
                                                    alt="" /></span>
                                        </div>
                                        <h3>Premium</h3>
                                        <div class="text">Replenish him third creature and meat of the blessed void good a
                                            fruit</div>
                                        <a href="course.html" class="theme-btn btn-style-eight"><span class="txt">Start
                                                Plan</span></a>
                                        <div class="price">$49.99 <span>Per month</span></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- End Pricing Section -->



@endsection
