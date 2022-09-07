@extends('pages.tenacademy.layouts.app')

@section('content')
    <!-- Page Title -->
    <section class="page-title">
        <div class="auto-container">
            <h1>Course Lesson</h1>

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

    <!-- Intro Section -->
    <section class="intro-section-two">
        <div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20"
            data-paroller-type="foreground" data-paroller-direction="vertical"
            style="background-image: url(images/icons/icon-1.png)"></div>
        <div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20"
            data-paroller-type="foreground" data-paroller-direction="vertical"
            style="background-image: url(images/icons/icon-2.png)"></div>
        <div class="circle-one"></div>
        <div class="auto-container">

            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="content-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-column">

                            <div class="course-video-box">
                                <div style="padding:56.25% 0 0 0;position:relative;"><iframe
                                        src="https://player.vimeo.com/video/243885948?color=ffffff&title=0&byline=0&portrait=0"
                                        style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0"
                                        allow="autoplay; fullscreen" allowfullscreen></iframe></div>
                                <script src="https://player.vimeo.com/api/player.js"></script>
                            </div>

                            <!-- Intro Info Tabs-->
                            <div class="intro-info-tabs">
                                <!-- Intro Tabs-->
                                <div class="intro-tabs tabs-box">

                                    <!--Tab Btns-->
                                    <ul class="tab-btns tab-buttons clearfix">
                                        <li data-tab="#prod-overview" class="tab-btn active-btn">Overview</li>
                                        <li data-tab="#prod-curriculum" class="tab-btn">Curriculum</li>
                                        <li data-tab="#prod-announcement" class="tab-btn">Announcement</li>
                                        <li data-tab="#prod-faq" class="tab-btn">FAQ</li>
                                        <li data-tab="#prod-reviews" class="tab-btn">Reviews</li>
                                    </ul>

                                    <!--Tabs Container-->
                                    <div class="tabs-content">

                                        <!--Tab / Active Tab-->
                                        <div class="tab active-tab" id="prod-overview">
                                            <div class="content">

                                                <!-- Cource Overview -->
                                                <div class="course-overview">
                                                    <div class="inner-box">
                                                        <h4>25 That Prevent Job Seekers From Overcoming Failure</h4>
                                                        <p>Phasellus enim magna, varius et commodo ut, ultricies vitae
                                                            velit. Ut nulla tellus, eleifend euismod pellentesque vel,
                                                            sagittis vel justo. In libero urna, venenatis sit amet ornare
                                                            non, suscipit nec risus. Sed consequat justo non mauris pretium
                                                            at tempor justo sodales. Quisque tincidunt laoreet malesuada.
                                                            Cum sociis natoque penatibus et magnis dis parturient montes,
                                                            nascetur.</p>
                                                        <ul class="student-list">
                                                            <li>23,564 Total Students</li>
                                                            <li><span class="theme_color">4.5</span> <span
                                                                    class="fa fa-star"></span><span
                                                                    class="fa fa-star"></span><span
                                                                    class="fa fa-star"></span><span
                                                                    class="fa fa-star"></span><span
                                                                    class="fa fa-star"></span> (1254 Rating)</li>
                                                            <li>256 Reviews</li>
                                                        </ul>
                                                        <h3>What you’ll learn?</h3>
                                                        <ul class="review-list">
                                                            <li>Phasellus enim magna, varius et commodo ut.</li>
                                                            <li>Sed consequat justo non mauris pretium at tempor justo.</li>
                                                            <li>Ut nulla tellus, eleifend euismod pellentesque vel, sagittis
                                                                vel justo</li>
                                                            <li>Phasellus enim magna, varius et commodo ut.</li>
                                                            <li>Phasellus enim magna, varius et commodo ut.</li>
                                                            <li>Sed consequat justo non mauris pretium at tempor justo.</li>
                                                            <li>Ut nulla tellus, eleifend euismod pellentesque vel, sagittis
                                                                vel justo</li>
                                                            <li>Phasellus enim magna, varius et commodo ut.</li>
                                                        </ul>
                                                        <h3>Requirements</h3>
                                                        <ul class="requirement-list">
                                                            <li>Phasellus enim magna, varius et commodo ut, ultricies vitae
                                                                velit. Ut nulla tellus, eleifend euismod pellentesque vel,
                                                                sagittis vel justo</li>
                                                            <li>Ultricies vitae velit. Ut nulla tellus, eleifend euismod
                                                                pellentesque vel.</li>
                                                            <li>Phasellus enim magna, varius et commodo ut.</li>
                                                            <li>Varius et commodo ut, ultricies vitae velit. Ut nulla
                                                                tellus.</li>
                                                            <li>Phasellus enim magna, varius et commodo ut.</li>
                                                        </ul>
                                                        <h3>Instructors</h3>

                                                        <div class="row clearfix">

                                                            <!-- Student Block -->
                                                            <div class="student-block col-lg-6 col-md-6 col-sm-12">
                                                                <div class="block-inner">
                                                                    <div class="image">
                                                                        <img src="https://via.placeholder.com/278x319"
                                                                            alt="" />
                                                                    </div>
                                                                    <h2>Stephane Smith</h2>
                                                                    <div class="text">Certified instructor Architecture&
                                                                        Developer</div>
                                                                    <div class="social-box">
                                                                        <a href="#" class="fa fa-facebook-square"></a>
                                                                        <a href="#" class="fa fa-twitter-square"></a>
                                                                        <a href="#" class="fa fa-linkedin-square"></a>
                                                                        <a href="#" class="fa fa-github"></a>
                                                                    </div>
                                                                    <a href="#" class="more">Know More <span
                                                                            class="fa fa-angle-right"></span></a>
                                                                </div>
                                                            </div>

                                                            <!-- Student Block -->
                                                            <div class="student-block col-lg-6 col-md-6 col-sm-12">
                                                                <div class="block-inner">
                                                                    <div class="image">
                                                                        <img src="https://via.placeholder.com/278x319"
                                                                            alt="" />
                                                                    </div>
                                                                    <h2>Marvin Zona</h2>
                                                                    <div class="text">Certified instructor Architecture&
                                                                        Developer</div>
                                                                    <div class="social-box">
                                                                        <a href="#" class="fa fa-facebook-square"></a>
                                                                        <a href="#" class="fa fa-twitter-square"></a>
                                                                        <a href="#" class="fa fa-linkedin-square"></a>
                                                                        <a href="#" class="fa fa-github"></a>
                                                                    </div>
                                                                    <a href="#" class="more">Know More <span
                                                                            class="fa fa-angle-right"></span></a>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- Tab -->
                                        <div class="tab" id="prod-curriculum">
                                            <div class="content">

                                                <!-- Accordion Box -->
                                                <ul class="accordion-box">

                                                    <!-- Block -->
                                                    <li class="accordion block">
                                                        <div class="acc-btn active">
                                                            <div class="icon-outer"><span
                                                                    class="icon icon-plus flaticon-angle-arrow-down"></span>
                                                            </div> UI/ UX Introduction
                                                        </div>
                                                        <div class="acc-content current">
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"></span>What is UI/ UX
                                                                            Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"><i
                                                                                    class="ripple"></i></span>What is UI/
                                                                            UX Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"></span>What is UI/ UX
                                                                            Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <!-- Block -->
                                                    <li class="accordion block">
                                                        <div class="acc-btn">
                                                            <div class="icon-outer"><span
                                                                    class="icon icon-plus flaticon-angle-arrow-down"></span>
                                                            </div> Color Theory
                                                        </div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"></span>What is UI/ UX
                                                                            Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"><i
                                                                                    class="ripple"></i></span>What is UI/
                                                                            UX Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"></span>What is UI/ UX
                                                                            Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <!-- Block -->
                                                    <li class="accordion block">
                                                        <div class="acc-btn">
                                                            <div class="icon-outer"><span
                                                                    class="icon icon-plus flaticon-angle-arrow-down"></span>
                                                            </div> Basic Typography
                                                        </div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"></span>What is UI/ UX
                                                                            Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"><i
                                                                                    class="ripple"></i></span>What is UI/
                                                                            UX Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"></span>What is UI/ UX
                                                                            Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <!-- Block -->
                                                    <li class="accordion block">
                                                        <div class="acc-btn">
                                                            <div class="icon-outer"><span
                                                                    class="icon icon-plus flaticon-angle-arrow-down"></span>
                                                            </div> Wireframing & Prototyping
                                                        </div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"></span>What is UI/ UX
                                                                            Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"><i
                                                                                    class="ripple"></i></span>What is UI/
                                                                            UX Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"></span>What is UI/ UX
                                                                            Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>

                                            </div>
                                        </div>

                                        <!-- Tab -->
                                        <div class="tab" id="prod-announcement">
                                            <div class="content">

                                                <!-- Accordion Box -->
                                                <ul class="accordion-box">

                                                    <!-- Block -->
                                                    <li class="accordion block">
                                                        <div class="acc-btn active">
                                                            <div class="icon-outer"><span
                                                                    class="icon icon-plus flaticon-angle-arrow-down"></span>
                                                            </div> UI/ UX Introduction
                                                        </div>
                                                        <div class="acc-content current">
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"></span>What is UI/ UX
                                                                            Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"><i
                                                                                    class="ripple"></i></span>What is UI/
                                                                            UX Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"></span>What is UI/ UX
                                                                            Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <!-- Block -->
                                                    <li class="accordion block">
                                                        <div class="acc-btn">
                                                            <div class="icon-outer"><span
                                                                    class="icon icon-plus flaticon-angle-arrow-down"></span>
                                                            </div> Color Theory
                                                        </div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"></span>What is UI/ UX
                                                                            Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"><i
                                                                                    class="ripple"></i></span>What is UI/
                                                                            UX Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"></span>What is UI/ UX
                                                                            Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <!-- Block -->
                                                    <li class="accordion block">
                                                        <div class="acc-btn">
                                                            <div class="icon-outer"><span
                                                                    class="icon icon-plus flaticon-angle-arrow-down"></span>
                                                            </div> Basic Typography
                                                        </div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"></span>What is UI/ UX
                                                                            Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"><i
                                                                                    class="ripple"></i></span>What is UI/
                                                                            UX Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"></span>What is UI/ UX
                                                                            Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <!-- Block -->
                                                    <li class="accordion block">
                                                        <div class="acc-btn">
                                                            <div class="icon-outer"><span
                                                                    class="icon icon-plus flaticon-angle-arrow-down"></span>
                                                            </div> Wireframing & Prototyping
                                                        </div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"></span>What is UI/ UX
                                                                            Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"><i
                                                                                    class="ripple"></i></span>What is UI/
                                                                            UX Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"></span>What is UI/ UX
                                                                            Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>

                                            </div>
                                        </div>

                                        <!-- Tab -->
                                        <div class="tab" id="prod-faq">
                                            <div class="content">

                                                <!-- Accordion Box -->
                                                <ul class="accordion-box">

                                                    <!-- Block -->
                                                    <li class="accordion block">
                                                        <div class="acc-btn active">
                                                            <div class="icon-outer"><span
                                                                    class="icon icon-plus flaticon-angle-arrow-down"></span>
                                                            </div> UI/ UX Introduction
                                                        </div>
                                                        <div class="acc-content current">
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"></span>What is UI/ UX
                                                                            Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"><i
                                                                                    class="ripple"></i></span>What is UI/
                                                                            UX Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"></span>What is UI/ UX
                                                                            Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <!-- Block -->
                                                    <li class="accordion block">
                                                        <div class="acc-btn">
                                                            <div class="icon-outer"><span
                                                                    class="icon icon-plus flaticon-angle-arrow-down"></span>
                                                            </div> Color Theory
                                                        </div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"></span>What is UI/ UX
                                                                            Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"><i
                                                                                    class="ripple"></i></span>What is UI/
                                                                            UX Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"></span>What is UI/ UX
                                                                            Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <!-- Block -->
                                                    <li class="accordion block">
                                                        <div class="acc-btn">
                                                            <div class="icon-outer"><span
                                                                    class="icon icon-plus flaticon-angle-arrow-down"></span>
                                                            </div> Basic Typography
                                                        </div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"></span>What is UI/ UX
                                                                            Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"><i
                                                                                    class="ripple"></i></span>What is UI/
                                                                            UX Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"></span>What is UI/ UX
                                                                            Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <!-- Block -->
                                                    <li class="accordion block">
                                                        <div class="acc-btn">
                                                            <div class="icon-outer"><span
                                                                    class="icon icon-plus flaticon-angle-arrow-down"></span>
                                                            </div> Wireframing & Prototyping
                                                        </div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"></span>What is UI/ UX
                                                                            Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"><i
                                                                                    class="ripple"></i></span>What is UI/
                                                                            UX Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="lightbox-image play-icon"><span
                                                                                class="fa fa-play"></span>What is UI/ UX
                                                                            Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>

                                            </div>
                                        </div>

                                        <!-- Tab -->
                                        <div class="tab" id="prod-reviews">
                                            <div class="content">

                                                <div class="cource-review-box">
                                                    <h4>Stephane Smith</h4>
                                                    <div class="rating">
                                                        <span class="total-rating">4.5</span> <span
                                                            class="fa fa-star"></span><span
                                                            class="fa fa-star"></span><span
                                                            class="fa fa-star"></span><span
                                                            class="fa fa-star"></span><span
                                                            class="fa fa-star"></span>&ensp; 256 Reviews
                                                    </div>
                                                    <div class="text">Phasellus enim magna, varius et commodo ut,
                                                        ultricies vitae velit. Ut nulla tellus, eleifend euismod
                                                        pellentesque vel, sagittis vel justo. In libero urna, venenatis sit
                                                        amet ornare non, suscipit nec risus.</div>
                                                    <div class="helpful">Was this review helpful?</div>
                                                    <ul class="like-option">
                                                        <li><span class="icon fa fa-thumbs-o-up"></span></li>
                                                        <li><span class="icon fa fa-thumbs-o-down"></span></li>
                                                        <span class="report">Report</span>
                                                    </ul>
                                                </div>

                                                <div class="cource-review-box">
                                                    <h4>Anna Sthesia</h4>
                                                    <div class="rating">
                                                        <span class="total-rating">4.5</span> <span
                                                            class="fa fa-star"></span><span
                                                            class="fa fa-star"></span><span
                                                            class="fa fa-star"></span><span
                                                            class="fa fa-star"></span><span
                                                            class="fa fa-star"></span>&ensp; 256 Reviews
                                                    </div>
                                                    <div class="text">Phasellus enim magna, varius et commodo ut,
                                                        ultricies vitae velit. Ut nulla tellus, eleifend euismod
                                                        pellentesque vel, sagittis vel justo. In libero urna, venenatis sit
                                                        amet ornare non, suscipit nec risus.</div>
                                                    <div class="helpful">Was this review helpful?</div>
                                                    <ul class="like-option">
                                                        <li><span class="icon fa fa-thumbs-o-up"></span></li>
                                                        <li><span class="icon fa fa-thumbs-o-down"></span></li>
                                                        <span class="report">Report</span>
                                                    </ul>
                                                </div>

                                                <div class="cource-review-box">
                                                    <h4>Petey Cruiser</h4>
                                                    <div class="rating">
                                                        <span class="total-rating">4.5</span> <span
                                                            class="fa fa-star"></span><span
                                                            class="fa fa-star"></span><span
                                                            class="fa fa-star"></span><span
                                                            class="fa fa-star"></span><span
                                                            class="fa fa-star"></span>&ensp; 256 Reviews
                                                    </div>
                                                    <div class="text">Phasellus enim magna, varius et commodo ut,
                                                        ultricies vitae velit. Ut nulla tellus, eleifend euismod
                                                        pellentesque vel, sagittis vel justo. In libero urna, venenatis sit
                                                        amet ornare non, suscipit nec risus.</div>
                                                    <div class="helpful">Was this review helpful?</div>
                                                    <ul class="like-option">
                                                        <li><span class="icon fa fa-thumbs-o-up"></span></li>
                                                        <li><span class="icon fa fa-thumbs-o-down"></span></li>
                                                        <span class="report">Report</span>
                                                    </ul>
                                                </div>

                                                <div class="cource-review-box">
                                                    <h4>Rick O'Shea</h4>
                                                    <div class="rating">
                                                        <span class="total-rating">4.5</span> <span
                                                            class="fa fa-star"></span><span
                                                            class="fa fa-star"></span><span
                                                            class="fa fa-star"></span><span
                                                            class="fa fa-star"></span><span
                                                            class="fa fa-star"></span>&ensp; 256 Reviews
                                                    </div>
                                                    <div class="text">Phasellus enim magna, varius et commodo ut,
                                                        ultricies vitae velit. Ut nulla tellus, eleifend euismod
                                                        pellentesque vel, sagittis vel justo. In libero urna, venenatis sit
                                                        amet ornare non, suscipit nec risus.</div>
                                                    <div class="helpful">Was this review helpful?</div>
                                                    <ul class="like-option">
                                                        <li><span class="icon fa fa-thumbs-o-up"></span></li>
                                                        <li><span class="icon fa fa-thumbs-o-down"></span></li>
                                                        <span class="report">Report</span>
                                                    </ul>

                                                    <a href="#" class="more">View More</a>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Accordian Column -->
                    <div class="accordian-column col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-column sticky-top">
                            <h4>Table of contents</h4>
                            <!-- Accordion Box -->
                            <ul class="accordion-box style-two">

                                <!-- Block -->
                                <li class="accordion block">
                                    <div class="acc-btn active">
                                        <div class="icon-outer"><span
                                                class="icon icon-plus flaticon-angle-arrow-down"></span></div> UI/ UX
                                        Introduction
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                        class="lightbox-image play-icon"><span
                                                            class="fa fa-play"></span>What is UI/ UX Design?</a>
                                                </div>
                                                <div class="pull-right">
                                                    <div class="minutes">2 Min 45 Sec</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                        class="lightbox-image play-icon"><span class="fa fa-play"><i
                                                                class="ripple"></i></span>What is UI/ UX Design?</a>
                                                </div>
                                                <div class="pull-right">
                                                    <div class="minutes">2 Min 45 Sec</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                        class="lightbox-image play-icon"><span
                                                            class="fa fa-play"></span>What is UI/ UX Design?</a>
                                                </div>
                                                <div class="pull-right">
                                                    <div class="minutes">2 Min 45 Sec</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Block -->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span
                                                class="icon icon-plus flaticon-angle-arrow-down"></span></div> Color Theory
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                        class="lightbox-image play-icon"><span
                                                            class="fa fa-play"></span>What is UI/ UX Design?</a>
                                                </div>
                                                <div class="pull-right">
                                                    <div class="minutes">2 Min 45 Sec</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                        class="lightbox-image play-icon"><span class="fa fa-play"><i
                                                                class="ripple"></i></span>What is UI/ UX Design?</a>
                                                </div>
                                                <div class="pull-right">
                                                    <div class="minutes">2 Min 45 Sec</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                        class="lightbox-image play-icon"><span
                                                            class="fa fa-play"></span>What is UI/ UX Design?</a>
                                                </div>
                                                <div class="pull-right">
                                                    <div class="minutes">2 Min 45 Sec</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Block -->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span
                                                class="icon icon-plus flaticon-angle-arrow-down"></span></div> Basic
                                        Typography
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                        class="lightbox-image play-icon"><span
                                                            class="fa fa-play"></span>What is UI/ UX Design?</a>
                                                </div>
                                                <div class="pull-right">
                                                    <div class="minutes">2 Min 45 Sec</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                        class="lightbox-image play-icon"><span class="fa fa-play"><i
                                                                class="ripple"></i></span>What is UI/ UX Design?</a>
                                                </div>
                                                <div class="pull-right">
                                                    <div class="minutes">2 Min 45 Sec</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                        class="lightbox-image play-icon"><span
                                                            class="fa fa-play"></span>What is UI/ UX Design?</a>
                                                </div>
                                                <div class="pull-right">
                                                    <div class="minutes">2 Min 45 Sec</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Block -->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span
                                                class="icon icon-plus flaticon-angle-arrow-down"></span></div> Wireframing
                                        & Prototyping
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                        class="lightbox-image play-icon"><span
                                                            class="fa fa-play"></span>What is UI/ UX Design?</a>
                                                </div>
                                                <div class="pull-right">
                                                    <div class="minutes">2 Min 45 Sec</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                        class="lightbox-image play-icon"><span class="fa fa-play"><i
                                                                class="ripple"></i></span>What is UI/ UX Design?</a>
                                                </div>
                                                <div class="pull-right">
                                                    <div class="minutes">2 Min 45 Sec</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                        class="lightbox-image play-icon"><span
                                                            class="fa fa-play"></span>What is UI/ UX Design?</a>
                                                </div>
                                                <div class="pull-right">
                                                    <div class="minutes">2 Min 45 Sec</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End intro Courses -->
@endsection
