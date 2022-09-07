@extends('pages.tenacademy.layouts.app')

@section('title', 'Blog Detail')
@section('content')
    <!-- Page Title -->
    <section class="page-title">
        <div class="auto-container">
            <h1>Blogs Single</h1>

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

                <!-- Sidebar Side -->
                <div class="sidebar-side style-two blog-sidebar col-lg-3 col-md-12 col-sm-12">
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
                                                        src="https://via.placeholder.com/70x80" alt=""></a></figure>
                                            <div class="text"><a href="blog-detail.html">Writing a Simple App</a></div>
                                            <div class="post-info">By Steve Krug</div>
                                        </div>
                                    </article>

                                    <article class="post">
                                        <div class="post-inner">
                                            <figure class="post-thumb"><a href="blog-detail.html"><img
                                                        src="https://via.placeholder.com/70x80" alt=""></a></figure>
                                            <div class="text"><a href="blog-detail.html">Writing a Simple App</a></div>
                                            <div class="post-info">By Steve Krug</div>
                                        </div>
                                    </article>

                                    <article class="post">
                                        <div class="post-inner">
                                            <figure class="post-thumb"><a href="blog-detail.html"><img
                                                        src="https://via.placeholder.com/70x80" alt=""></a></figure>
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

                <!-- Content Side -->
                <div class="content-side blog-detail-column col-lg-9 col-md-12 col-sm-12">
                    <div class="blog-detail">
                        <div class="inner-box">
                            <h2>10 Amazing web of demos and <br> developers</h2>
                            <ul class="author-info">
                                <li>By David Smith</li>
                                <li><span class="theme_color">11 January 2020</span></li>
                                <li>15 Commnets</li>
                            </ul>
                            <div class="image">
                                <img src="https://via.placeholder.com/790x350" alt="" />
                            </div>
                            <h4>10 amazing web of demos Developers</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                                nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod
                                mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                                wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                aliquip ex ea commodo consequat.And meat blessed void a fruit gathered waters.</p>
                            <h4>25 That Prevent Job Seekers From Overcoming Failure</h4>
                            <p>Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend
                                euismod pellentesque vel, sagittis vel justo. In libero urna, venenatis sit amet ornare non,
                                suscipit nec risus. Sed consequat justo non mauris pretium at tempor justo sodales. Quisque
                                tincidunt laoreet malesuada. Cum sociis natoque penatibus et magnis dis parturient montes,
                                nascetur ridiculus mus. Integer vitae ante enim. Fusce sed elit est. Suspendisse sit amet
                                mauris in quam pretium faucibus et aliquam odio.</p>
                            <div class="social-box">
                                <span>Share this article on </span>
                                <a href="#" class="fa fa-facebook-square"></a>
                                <a href="#" class="fa fa-twitter-square"></a>
                                <a href="#" class="fa fa-linkedin-square"></a>
                                <a href="#" class="fa fa-github"></a>
                            </div>
                        </div>

                        <!-- Post Share Options -->
                        <div class="styled-pagination text-center">
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

                        <!-- Comments Area -->
                        <div class="comments-area">
                            <div class="group-title">
                                <h4>Recent Comments</h4>
                            </div>

                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb"><img src="https://via.placeholder.com/90x90"
                                            alt=""></div>
                                    <div class="comment-info clearfix"><strong>Anna Sthesia</strong>
                                        <div class="comment-time">June 28, 2019</div>
                                    </div>
                                    <div class="text">It is a long established fact that a reader will be distracted by
                                        the readable content of a page when looking at its layout. The point of using Lorem
                                        Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                        using 'Content here, content here', making it look like readable English.</div>
                                    <a class="theme-btn reply-btn" href="#"> Reply</a>
                                </div>
                            </div>

                            <div class="comment-box reply-comment">
                                <div class="comment">
                                    <div class="author-thumb"><img src="https://via.placeholder.com/90x90"
                                            alt=""></div>
                                    <div class="comment-info clearfix"><strong>Paul Molive </strong>
                                        <div class="comment-time">July 01, 2019</div>
                                    </div>
                                    <div class="text">It is a long established fact that a reader will be distracted by
                                        the readable content of a page when looking at its layout. The point of using Lorem
                                        Ipsum is that it has a more-or-less normal tion of letters, as opposed to using
                                        'Content here</div>
                                    <a class="theme-btn reply-btn" href="#"> Reply</a>
                                </div>
                            </div>

                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb"><img src="https://via.placeholder.com/90x90"
                                            alt=""></div>
                                    <div class="comment-info clearfix"><strong>Mouna Sthesia </strong>
                                        <div class="comment-time">June 28, 2019</div>
                                    </div>
                                    <div class="text">It is a long established fact that a reader will be distracted by
                                        the readable content of a page when looking at its layout. The point of using Lorem
                                        Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
                                        using 'Content here, content here', making it look like readable English.</div>
                                    <a class="theme-btn reply-btn" href="#"> Reply</a>
                                </div>
                            </div>

                        </div>

                        <!-- Comment Form -->
                        <div class="comment-form">
                            <div class="group-title">
                                <h4>Leave Comment</h4>
                            </div>

                            <!--Comment Form-->
                            <form method="post" action="blog.html">
                                <div class="row clearfix">

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Full Name*" required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email Address*" required>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea class="" name="message" placeholder="Write your comment..."></textarea>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-three" type="submit" name="submit-form"><span
                                                class="txt">Submit Your Comment <i
                                                    class="fa fa-angle-right"></i></span></button>
                                    </div>

                                </div>
                            </form>

                        </div>
                        <!--End Comment Form -->

                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
