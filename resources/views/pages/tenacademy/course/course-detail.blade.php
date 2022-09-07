@extends('pages.tenacademy.layouts.app')

@section('content')
    <!-- Page Title -->
    <style>
        .dlist li {
            list-style-type: disc;
        }

        .dlist1 li {
            list-style-type: disc;

        }

        h2 {
            color: #03382e;
        }
    </style>
    <section class="page-title">
        <div class="auto-container">
            <h1>{{ $title }}</h1>

            <!-- Search Boxed -->
            {{-- <div class="search-boxed">
                <div class="search-box">
                    <form method="post" action="contact.html">
                        <div class="form-group">
                            <input type="search" name="search-field" value="" placeholder="What do you want to learn?"
                                required>
                            <button type="submit"><span class="icon fa fa-search"></span></button>
                        </div>
                    </form>
                </div>
            </div> --}}

        </div>
    </section>
    <!--End Page Title-->
    @if (session('success'))
        <div class="alert alert-success"></div>
    @endif


    <!-- Intro Courses -->
    <section class="intro-section">
        <div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20"
            data-paroller-type="foreground" data-paroller-direction="vertical"
            style="background-image: url(images/icons/icon-1.png)"></div>
        <div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20"
            data-paroller-type="foreground" data-paroller-direction="vertical"
            style="background-image: url(images/icons/icon-2.png)"></div>
        <div class="circle-one"></div>
        <div class="auto-container">
            <div class="sec-title">
                <h2>Learn User Interface and <br> User Experience</h2>
            </div>

            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="content-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-column">

                            <!-- Intro Info Tabs-->
                            <div class="intro-info-tabs">
                                <!-- Intro Tabs-->
                                <div class="intro-tabs tabs-box">

                                    <!--Tab Btns-->
                                    <ul class="tab-btns tab-buttons clearfix">
                                        <li data-tab="#prod-overview" class="tab-btn active-btn">Overview</li>
                                        <li data-tab="#prod-curriculum" class="tab-btn">Curriculum</li>
                                        {{-- <li data-tab="#prod-announcement" class="tab-btn">Announcement</li> --}}
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

                                                        <h2>What you’ll learn?</h2>
                                                        <ul class="review-list">
                                                            <li>Master Premiere Pro and be CONFIDENT Editing Your Own Videos
                                                            </li>
                                                            <li>By the end of the course, you'll have edited your promo
                                                                video with the supplied footage (video clips, photos,
                                                                graphics, music, etc.), or your own footage!</li>
                                                            <li>Export and save your videos for 4K & High Definition
                                                                playback.
                                                            </li>
                                                            <li>Design clean and professional titles for you videos.</li>
                                                            <li>Color correct your video to fix issues with white balance
                                                                and exposure.</li>
                                                            <li>Apply visual effects such as stabilizing shaky video,
                                                                removing grain, and making video more cinematic with
                                                                overlays.</li>
                                                            <li>Edit an entire video from beginning to end, using
                                                                professional and efficient techniques.</li>
                                                            <li>Start a project with the right settings for any type of
                                                                video, from any camera.</li>
                                                            <li>Edit your videos, and make them more dynamic with cutaway
                                                                footage and photos.</li>
                                                            <li>Add motion to your titles, photos, and videos... making them
                                                                more visually interesting.</li>
                                                            <li>Add a feeling to your video with color grading.</li>
                                                            <li>Edit green screen footage and, add backgrounds that actually
                                                                look good.</li>
                                                        </ul>
                                                        <h2>Requirements</h2>
                                                        <ul class="requirement-list">
                                                            <li>Students should have Adobe Premiere Pro installed on their
                                                                computers to follow along. There are A LOT OF PRACTICE
                                                                EXERCISES throughout this course with downloadable practice
                                                                clips. We want you to follow along.</li>
                                                            <li>We teach this course using the Adobe Premiere Pro CC
                                                                (creative cloud) versions, so it would be best if you're
                                                                using CC. But you can still learn using CS6, CS5, CS4, or
                                                                even CS3!</li>

                                                        </ul>
                                                        <h2>Description</h2>
                                                        <ul class="description-list">
                                                            <h3>Start editing your video professionally with Adobe Premiere
                                                                Pro CC!</h3>
                                                            <li>If you are looking for a video editing application that will
                                                                allow you to edit videos however you want them, Adobe
                                                                Premiere Pro is the best answer. Premiere Pro is used by
                                                                professionals across the world for every type of production
                                                                from business & marketing videos, music videos to
                                                                documentaries, feature films. This full course is the best
                                                                way to jump right in and start editing.</li>
                                                            <h3>Make videos the way you imagine them!</h3>
                                                            <li>Practice editing while you learn. This course includes
                                                                practice video files so you can follow along and actually
                                                                learn by doing.</li>
                                                            <h3>By the end of the course, you'll have edited a 1-minute
                                                                documentary with the supplied footage.</h3>
                                                            <li>I'll be teaching the course using the creative cloud
                                                                version, but if you have a previous version (Mac or PC), you
                                                                can still learn to edit like a pro.</li>
                                                            <h3>What makes me qualified to teach you?</h3>
                                                            <li>My name is Phil and I've been editing videos with Adobe
                                                                Premiere Pro for over a decade. Plus I'm the creator of some
                                                                of the world's most popular video editing courses - with
                                                                over 3,000,000 students and thousands of 5-star reviews like
                                                                these from the Adobe Premiere Pro course:

                                                                Truly gives you a great hands on training so that you can
                                                                actually edit video on premiere. Great course. - Jeff
                                                                Gilbert

                                                                Awesome course, easy to follow! - Tim Clark

                                                                Your course is amazing, so I can say that I am learning a
                                                                lot. Your English is very easy to understand ( I'm from
                                                                Brazil). Thanks for sharing your amazing knowledge. -
                                                                Jerilson Duarte</li>
                                                            <h3>My Promise to You</h3>
                                                            <li>I'm a full time video editor and online teacher. I'll be
                                                                here for you every step of the way. If you have any
                                                                questions about the course content or anything related to
                                                                this topic, you can always post a question in the course or
                                                                send me a direct message.</li>
                                                            <h3>What is this Adobe Premiere Pro course all about?</h3>
                                                            <li>In this complete guide to Adobe Premiere Pro video editing
                                                                course, you'll not only learn all of the editing tools
                                                                available in Premiere Pro, but also how to edit with the
                                                                mindset of a professional editor.</li>
                                                            <h3>This course will cover everything you need to know to start
                                                                video editing, including:</h3>
                                                            <li>
                                                                <ul class="dlist">
                                                                    <li>
                                                                        <h3>Starting a project</h3>
                                                                    </li>
                                                                    <li>
                                                                        <h3>Editing your videos</h3>
                                                                    </li>
                                                                    <li>
                                                                        <h3>Adding video and audio transitions</h3>
                                                                    </li>
                                                                    <li>
                                                                        <h3>Adding professional and modern titles (even some
                                                                            with motion)</h3>
                                                                    </li>
                                                                    <li>
                                                                        <h3>Improving audio and finding great free music for
                                                                            your projects</h3>
                                                                    </li>
                                                                    <li>
                                                                        <h3>Correcting and grading the color of your video
                                                                            to give it a great style</h3>
                                                                    </li>
                                                                    <li>
                                                                        <h3>Adding visual effects to your projects</h3>
                                                                    </li>
                                                                    <li>
                                                                        <h3>Editing green screen (chroma key) footage</h3>
                                                                    </li>
                                                                    <li>
                                                                        <h3>Exporting your video for high-quality playback
                                                                            on any device</h3>
                                                                    </li>
                                                                    <li>
                                                                        <h3>Advanced editing skills</h3>
                                                                    </li>
                                                                    <li>
                                                                        <h3>Advanced color grading</h3>
                                                                    </li>
                                                                    <li>
                                                                        <h3>Advanced efficiency tips</h3>
                                                                    </li>
                                                                    <li>
                                                                        <h3>So much more!</h3>
                                                                    </li>
                                                                    Learn from someone who is currently working in the
                                                                    industry, who knows the most current editing techniques,
                                                                    and who has a Bachelor of Arts in Film and Television
                                                                    Production from one of the country's top film schools.
                                                                </ul>
                                                            </li>
                                                            <h3>BONUS: As a bonus, you'll receive supplemental video and
                                                                audio clips to practice with while I teach you with.</h3>
                                                            <li>By the end of this course, your confidence as a video editor
                                                                will soar You'll have a thorough understanding of how to use
                                                                Adobe Premiere Pro for fun or as a career opportunity.</li>
                                                            <h4>Go ahead and click the enroll button, and I'll see you in
                                                                lesson 1!</h4>
                                                            <li>Cheers,

                                                                Phil</li>


                                                            <h2>Who this course is for:</h2>
                                                            <ul class="dlist1">
                                                                <li>You are a video creator (or want to make videos), and
                                                                    are wanting to edit videos with THE BEST video editing
                                                                    application today.</li>
                                                                <li>You might know how to edit with Final Cut, iMovie, Sony
                                                                    Vegas, Premiere Elements, Windows Movie Maker, Camtasia,
                                                                    Screenflow, etc. But you want to transition to editing
                                                                    with Premiere Pro.</li>
                                                                <li>You are a complete beginner who has never opened
                                                                    Premiere Pro (or have never learned how to use it
                                                                    properly).</li>
                                                                <li>You have played around with Premiere Pro, but need some
                                                                    help becoming a more efficient editor.</li>
                                                            </ul>
                                                        </ul>


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
                                                            <ul class="content">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                                                            class="">What is UI/ UX
                                                                            Design?</a>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <div class="minutes">35 Minutes</div>
                                                                    </div>
                                                                </div>
                                                            </ul>
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
                                        {{-- <div class="tab" id="prod-announcement">
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
                                        </div> --}}

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

                    <!-- Video Column -->
                    <div class="video-column col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-column sticky-top">
                            <!-- Video Box -->
                            <div class="intro-video" style="background-image: url(https://via.placeholder.com/354x253)">
                                <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                    class="lightbox-image intro-video-box"><span class="fa fa-play"><i
                                            class="ripple"></i></span></a>
                                <h4>Preview this course</h4>
                            </div>
                            <!-- End Video Box -->
                            <div class="price">{{ $title }}</div>
                            <div class="price">{{ $price }}</div>
                            <div class="time-left">{{ $duration }}</div>
                            <div>
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $course_id }}" name="id">
                                    <input type="hidden" value="{{ $title }}" name="name">
                                    <input type="hidden" value="{{ $price }}" name="price">
                                    <button type="submit" class="theme-btn btn-style-three" id="addtocart"><span
                                            class="txt">Add To Cart <i class="fa fa-angle-right"></i></span></button>
                                </form>
                                <a href="#" class="theme-btn btn-style-two"><span class="txt">Buy Now <i
                                            class="fa fa-angle-right"></i></span></a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End intro Courses -->
@endsection
