@extends('pages.tenacademy.layouts.app')
@section('title', 'Blog')
@section('content')
    <!-- Page Title -->
    <section class="page-title">
        <div class="auto-container">
            <h1>Blogs</h1>

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

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20"
            data-paroller-type="foreground" data-paroller-direction="vertical"
            style="background-image: url(images/icons/icon-1.png)"></div>
        <div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20"
            data-paroller-type="foreground" data-paroller-direction="vertical"
            style="background-image: url(images/icons/icon-2.png)"></div>
        <div class="circle-one"></div>
        <div class="circle-two"></div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-9 col-md-12 col-sm-12">
                    <div class="our-courses">

                        <!-- Options View -->
                        <div class="options-view">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h3>Featured Posts</h3>
                                </div>
                                <div class="pull-right clearfix">
                                    <!-- List View -->
                                    <ul class="list-view">
                                        <li class="active"><a href="#"><span class="icon flaticon-grid"></span></a>
                                        </li>
                                        <li><a href="#"><span class="icon flaticon-list-1"></span></a></li>
                                    </ul>

                                    <!-- Type Form -->
                                    <div class="type-form">
                                        <form method="post" action="index.html">

                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <select class="custom-select-box">
                                                    <option>Newest</option>
                                                    <option>Old</option>
                                                </select>
                                            </div>

                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">

                            <!-- Cource Block Two -->
                            <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="blog-detail.html"><img src="https://via.placeholder.com/270x150"
                                                alt="" /></a>
                                    </div>
                                    <div class="lower-content">
                                        <h5><a href="blog-detail.html">10 amazing web of demos Developers</a></h5>
                                        <div class="text">And meat blessed void a fruit gathered waters.</div>
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <div class="students">By David Smith</div>
                                            </div>
                                            <div class="pull-right">
                                                <div class="hours">11 Jan 20</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Cource Block Two -->
                            <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="blog-detail.html"><img src="https://via.placeholder.com/270x150"
                                                alt="" /></a>
                                    </div>
                                    <div class="lower-content">
                                        <h5><a href="blog-detail.html">10 amazing web of demos Developers</a></h5>
                                        <div class="text">And meat blessed void a fruit gathered waters.</div>
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <div class="students">By David Smith</div>
                                            </div>
                                            <div class="pull-right">
                                                <div class="hours">11 Jan 20</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Cource Block Two -->
                            <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="blog-detail.html"><img src="https://via.placeholder.com/270x150"
                                                alt="" /></a>
                                    </div>
                                    <div class="lower-content">
                                        <h5><a href="blog-detail.html">10 amazing web of demos Developers</a></h5>
                                        <div class="text">And meat blessed void a fruit gathered waters.</div>
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <div class="students">By David Smith</div>
                                            </div>
                                            <div class="pull-right">
                                                <div class="hours">11 Jan 20</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Cource Block Two -->
                            <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="blog-detail.html"><img src="https://via.placeholder.com/270x150"
                                                alt="" /></a>
                                    </div>
                                    <div class="lower-content">
                                        <h5><a href="blog-detail.html">10 amazing web of demos Developers</a></h5>
                                        <div class="text">And meat blessed void a fruit gathered waters.</div>
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <div class="students">By David Smith</div>
                                            </div>
                                            <div class="pull-right">
                                                <div class="hours">11 Jan 20</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Cource Block Two -->
                            <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="blog-detail.html"><img src="https://via.placeholder.com/270x150"
                                                alt="" /></a>
                                    </div>
                                    <div class="lower-content">
                                        <h5><a href="blog-detail.html">10 amazing web of demos Developers</a></h5>
                                        <div class="text">And meat blessed void a fruit gathered waters.</div>
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <div class="students">By David Smith</div>
                                            </div>
                                            <div class="pull-right">
                                                <div class="hours">11 Jan 20</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Cource Block Two -->
                            <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="blog-detail.html"><img src="https://via.placeholder.com/270x150"
                                                alt="" /></a>
                                    </div>
                                    <div class="lower-content">
                                        <h5><a href="blog-detail.html">10 amazing web of demos Developers</a></h5>
                                        <div class="text">And meat blessed void a fruit gathered waters.</div>
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <div class="students">By David Smith</div>
                                            </div>
                                            <div class="pull-right">
                                                <div class="hours">11 Jan 20</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Cource Block Two -->
                            <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="blog-detail.html"><img src="https://via.placeholder.com/270x150"
                                                alt="" /></a>
                                    </div>
                                    <div class="lower-content">
                                        <h5><a href="blog-detail.html">10 amazing web of demos Developers</a></h5>
                                        <div class="text">And meat blessed void a fruit gathered waters.</div>
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <div class="students">By David Smith</div>
                                            </div>
                                            <div class="pull-right">
                                                <div class="hours">11 Jan 20</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Cource Block Two -->
                            <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="blog-detail.html"><img src="https://via.placeholder.com/270x150"
                                                alt="" /></a>
                                    </div>
                                    <div class="lower-content">
                                        <h5><a href="blog-detail.html">10 amazing web of demos Developers</a></h5>
                                        <div class="text">And meat blessed void a fruit gathered waters.</div>
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <div class="students">By David Smith</div>
                                            </div>
                                            <div class="pull-right">
                                                <div class="hours">11 Jan 20</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Cource Block Two -->
                            <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="blog-detail.html"><img src="https://via.placeholder.com/270x150"
                                                alt="" /></a>
                                    </div>
                                    <div class="lower-content">
                                        <h5><a href="blog-detail.html">10 amazing web of demos Developers</a></h5>
                                        <div class="text">And meat blessed void a fruit gathered waters.</div>
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <div class="students">By David Smith</div>
                                            </div>
                                            <div class="pull-right">
                                                <div class="hours">11 Jan 20</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Post Share Options -->
                        <div class="styled-pagination">
                            <ul class="clearfix">
                                <li class="prev"><a href="#"><span class="fa fa-angle-left"></span> </a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li class="active"><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#">8</a></li>
                                <li class="next"><a href="#"><span class="fa fa-angle-right"></span> </a></li>
                            </ul>
                        </div>

                    </div>

                </div>

                <!-- Sidebar Side -->
                <div class="sidebar-side style-two col-lg-3 col-md-12 col-sm-12">
                    <div class="sidebar-inner sticky-top">
                        <aside class="sidebar ">

                            <!-- Popular Posts -->
                            <div class="sidebar-widget popular-posts">

                                <!-- Sidebar Title -->
                                <div class="sidebar-title">
                                    <h5>Recent Posts</h5>
                                </div>

                                <div class="widget-content">
                                    <article class="post">
                                        <div class="post-inner">
                                            <figure class="post-thumb"><a href="blog-detail.html"><img
                                                        src="https://via.placeholder.com/70x80" alt=""></a>
                                            </figure>
                                            <div class="text"><a href="blog-detail.html">Writing a Simple App</a></div>
                                            <div class="post-info">By Steve Krug</div>
                                        </div>
                                    </article>

                                    <article class="post">
                                        <div class="post-inner">
                                            <figure class="post-thumb"><a href="blog-detail.html"><img
                                                        src="https://via.placeholder.com/70x80" alt=""></a>
                                            </figure>
                                            <div class="text"><a href="blog-detail.html">Writing a Simple App</a></div>
                                            <div class="post-info">By Steve Krug</div>
                                        </div>
                                    </article>

                                    <article class="post">
                                        <div class="post-inner">
                                            <figure class="post-thumb"><a href="blog-detail.html"><img
                                                        src="https://via.placeholder.com/70x80" alt=""></a>
                                            </figure>
                                            <div class="text"><a href="blog-detail.html">Writing a Simple App</a></div>
                                            <div class="post-info">By Steve Krug</div>
                                        </div>
                                    </article>
                                </div>
                            </div>

                            <!-- Popular Tags -->
                            <div class="sidebar-widget popular-tags">

                                <!-- Sidebar Title -->
                                <div class="sidebar-title">
                                    <h5>Tags</h5>
                                </div>

                                <div class="widget-content">
                                    <a href="#">#Webdesign</a>
                                    <a href="#">#Mobileapp</a>
                                    <a href="#">#Design</a>
                                    <a href="#">#Hack</a>
                                    <a href="#">#Webdesign</a>
                                    <a href="#">#Hack</a>
                                    <a href="#">#Design</a>
                                    <a href="#">#Hack</a>
                                </div>
                            </div>

                        </aside>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Popular Courses -->
    <section class="popular-courses-section">
        <div class="auto-container">
            <div class="sec-title">
                <h2>Most Popular Posts</h2>
            </div>

            <div class="row clearfix">

                <!-- Cource Block Two -->
                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="blog-detail.html"><img src="https://via.placeholder.com/370x253"
                                    alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h5><a href="blog-detail.html">How to Create and Use Bash Scripts</a></h5>
                            <div class="text">Replenish him third creature and meat blessed void a fruit gathered you’re,
                                they’re two waters.</div>
                            <div class="clearfix">
                                <div class="pull-left">
                                    <div class="students">12 Lecturer</div>
                                </div>
                                <div class="pull-right">
                                    <div class="hours">54 Hours</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cource Block Two -->
                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="blog-detail.html"><img src="https://via.placeholder.com/370x253"
                                    alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h5><a href="blog-detail.html">How to Create and Use Bash Scripts</a></h5>
                            <div class="text">Replenish him third creature and meat blessed void a fruit gathered you’re,
                                they’re two waters.</div>
                            <div class="clearfix">
                                <div class="pull-left">
                                    <div class="students">12 Lecturer</div>
                                </div>
                                <div class="pull-right">
                                    <div class="hours">54 Hours</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cource Block Two -->
                <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="blog-detail.html"><img src="https://via.placeholder.com/370x253"
                                    alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h5><a href="blog-detail.html">How to Create and Use Bash Scripts</a></h5>
                            <div class="text">Replenish him third creature and meat blessed void a fruit gathered you’re,
                                they’re two waters.</div>
                            <div class="clearfix">
                                <div class="pull-left">
                                    <div class="students">12 Lecturer</div>
                                </div>
                                <div class="pull-right">
                                    <div class="hours">54 Hours</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Popular Courses -->
@endsection
