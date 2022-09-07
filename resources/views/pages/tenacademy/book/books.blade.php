@extends('pages.tenacademy.layouts.app')

@section('title', 'Books')
@section('content')
    <!-- Page Title -->
    <section class="page-title">
        <div class="auto-container">
            <h1>Books</h1>

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

    <!-- Books Page Section -->
    <section class="books-page-section">
        <div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20"
            data-paroller-type="foreground" data-paroller-direction="vertical"
            style="background-image: url(images/icons/icon-1.png)"></div>
        <div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20"
            data-paroller-type="foreground" data-paroller-direction="vertical"
            style="background-image: url(images/icons/icon-2.png)"></div>
        <div class="circle-one"></div>
        <div class="auto-container">
            <div class="sec-title">
                <h2>Category</h2>
            </div>

            <div class="row clearfix">

                <!-- Category Section -->
                <div class="category-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!-- Books Info Tabs-->
                        <div class="books-info-tabs">
                            <!-- Books Tabs-->
                            <div class="books-tabs tabs-box">

                                <!--Tab Btns-->
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li data-tab="#prod-html" class="tab-btn active-btn">HTML</li>
                                    <li data-tab="#prod-ui" class="tab-btn">UI/ UX</li>
                                    <li data-tab="#prod-javascript" class="tab-btn">JavaScript</li>
                                    <li data-tab="#prod-coding" class="tab-btn">Coding</li>
                                    <li data-tab="#prod-typography" class="tab-btn">Typography</li>
                                </ul>

                                <!--Tabs Container-->
                                <div class="tabs-content">

                                    <!--Tab / Active Tab-->
                                    <div class="tab active-tab" id="prod-html">
                                        <div class="content">
                                            <div class="row clearfix">

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Don’t make me think</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">101 Design Methods</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Lean UX</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">The Elements of UX</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Designed for Use</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Design of Everyday</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Undercover UX</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Interaction Design</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Don’t make me think</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">101 Design Methods</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Lean UX</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">The Elements of UX</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <!-- Tab -->
                                    <div class="tab" id="prod-ui">
                                        <div class="content">
                                            <div class="row clearfix">

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Don’t make me think</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">101 Design Methods</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Lean UX</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">The Elements of UX</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Designed for Use</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Design of Everyday</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Undercover UX</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Interaction Design</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Don’t make me think</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">101 Design Methods</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Lean UX</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">The Elements of UX</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tab -->
                                    <div class="tab" id="prod-javascript">
                                        <div class="content">
                                            <div class="row clearfix">

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Don’t make me think</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">101 Design Methods</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Lean UX</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">The Elements of UX</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Designed for Use</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Design of Everyday</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Undercover UX</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Interaction Design</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Don’t make me think</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">101 Design Methods</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Lean UX</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">The Elements of UX</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tab -->
                                    <div class="tab" id="prod-coding">
                                        <div class="content">
                                            <div class="row clearfix">

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Don’t make me think</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">101 Design Methods</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Lean UX</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">The Elements of UX</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Designed for Use</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Design of Everyday</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Undercover UX</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Interaction Design</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Don’t make me think</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">101 Design Methods</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Lean UX</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">The Elements of UX</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tab -->
                                    <div class="tab" id="prod-typography">
                                        <div class="content">
                                            <div class="row clearfix">

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Don’t make me think</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">101 Design Methods</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Lean UX</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220" alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">The Elements of UX</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220"
                                                                alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Designed for Use</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220"
                                                                alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Design of Everyday</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220"
                                                                alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Undercover UX</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220"
                                                                alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Interaction Design</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220"
                                                                alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Don’t make me think</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220"
                                                                alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">101 Design Methods</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220"
                                                                alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">Lean UX</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Book Block -->
                                                <div class="book-block col-lg-3 col-md-4 col-sm-12">
                                                    <div class="inner-box">
                                                        <figure class="image-box">
                                                            <img src="https://via.placeholder.com/170x220"
                                                                alt="">
                                                            <!-- Overlay Box -->
                                                            <div class="overlay-box">
                                                                <div class="overlay-inner">
                                                                    <div class="content">
                                                                        <a href="books-detail.html" class="link"><span
                                                                                class="icon fa fa-link"></span></a>
                                                                        <a href="https://via.placeholder.com/170x220"
                                                                            data-fancybox="books" data-caption=""
                                                                            class="link"><span
                                                                                class="icon flaticon-full-screen"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <div class="lower-box">
                                                            <h6><a href="books-detail.html">The Elements of UX</a></h6>
                                                        </div>
                                                    </div>
                                                </div>

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

                <!-- Widgets Section -->
                <div class="widgets-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h5>Popular Books</h5>
                        <div class="widgets-outer">

                            <!-- Book Widget -->
                            <div class="book-widget">
                                <div class="widget-inner">
                                    <div class="image">
                                        <a href="books-detail.html"><img src="https://via.placeholder.com/100x120"
                                                alt="" /></a>
                                    </div>
                                    <a class="tag" href="books-detail.html"><span
                                            class="fa fa-bookmark-o"></span></a>
                                    <h6><a href="books-detail.html">Don’t Make Me <br> Think</a></h6>
                                    <div class="author">By Steve Krug</div>
                                </div>
                            </div>

                            <!-- Book Widget -->
                            <div class="book-widget">
                                <div class="widget-inner">
                                    <div class="image">
                                        <a href="books-detail.html"><img src="https://via.placeholder.com/100x120"
                                                alt="" /></a>
                                    </div>
                                    <a class="tag" href="books-detail.html"><span
                                            class="fa fa-bookmark-o"></span></a>
                                    <h6><a href="books-detail.html">Essential of <br> Interaction Design</a></h6>
                                    <div class="author">By Alan Cooper</div>
                                </div>
                            </div>

                            <!-- Book Widget -->
                            <div class="book-widget">
                                <div class="widget-inner">
                                    <div class="image">
                                        <a href="books-detail.html"><img src="https://via.placeholder.com/100x120"
                                                alt="" /></a>
                                    </div>
                                    <a class="tag" href="books-detail.html"><span
                                            class="fa fa-bookmark-o"></span></a>
                                    <h6><a href="books-detail.html">Non Designers <br> Design Book</a></h6>
                                    <div class="author">By Robin Williams</div>
                                </div>
                            </div>

                            <!-- Book Widget -->
                            <div class="book-widget">
                                <div class="widget-inner">
                                    <div class="image">
                                        <a href="books-detail.html"><img src="https://via.placeholder.com/100x120"
                                                alt="" /></a>
                                    </div>
                                    <a class="tag" href="books-detail.html"><span
                                            class="fa fa-bookmark-o"></span></a>
                                    <h6><a href="books-detail.html">Sketching User <br> Experience</a></h6>
                                    <div class="author">By Bill Buxton</div>
                                </div>
                            </div>

                            <!-- Book Widget -->
                            <div class="book-widget">
                                <div class="widget-inner">
                                    <div class="image">
                                        <a href="books-detail.html"><img src="https://via.placeholder.com/100x120"
                                                alt="" /></a>
                                    </div>
                                    <a class="tag" href="books-detail.html"><span
                                            class="fa fa-bookmark-o"></span></a>
                                    <h6><a href="books-detail.html">Rocket Surgery <br> Made Easy</a></h6>
                                    <div class="author">By Steve Krug</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Related Projects -->
        <div class="related-projects">
            <div class="auto-container">
                <div class="sec-title">
                    <h2>All Courses by Stephane</h2>
                </div>
                <div class="row clearfix">

                    <!-- Book Block -->
                    <div class="book-block col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="https://via.placeholder.com/270x300" alt="">
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="books-detail.html" class="link"><span
                                                    class="icon fa fa-link"></span></a>
                                            <a href="https://via.placeholder.com/270x300" data-fancybox="books"
                                                data-caption="" class="link"><span
                                                    class="icon flaticon-full-screen"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="lower-box">
                                <h6><a href="books-detail.html">Don’t make me think</a></h6>
                            </div>
                        </div>
                    </div>

                    <!-- Book Block -->
                    <div class="book-block col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="https://via.placeholder.com/270x300" alt="">
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="books-detail.html" class="link"><span
                                                    class="icon fa fa-link"></span></a>
                                            <a href="https://via.placeholder.com/270x300" data-fancybox="books"
                                                data-caption="" class="link"><span
                                                    class="icon flaticon-full-screen"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="lower-box">
                                <h6><a href="books-detail.html">Design of Everyday</a></h6>
                            </div>
                        </div>
                    </div>

                    <!-- Book Block -->
                    <div class="book-block col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="https://via.placeholder.com/270x300" alt="">
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="books-detail.html" class="link"><span
                                                    class="icon fa fa-link"></span></a>
                                            <a href="https://via.placeholder.com/270x300" data-fancybox="books"
                                                data-caption="" class="link"><span
                                                    class="icon flaticon-full-screen"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="lower-box">
                                <h6><a href="books-detail.html">Undercover UX Design</a></h6>
                            </div>
                        </div>
                    </div>

                    <!-- Book Block -->
                    <div class="book-block col-lg-3 col-md-4 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="https://via.placeholder.com/270x300" alt="">
                                <!-- Overlay Box -->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="books-detail.html" class="link"><span
                                                    class="icon fa fa-link"></span></a>
                                            <a href="https://via.placeholder.com/270x300" data-fancybox="books"
                                                data-caption="" class="link"><span
                                                    class="icon flaticon-full-screen"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="lower-box">
                                <h6><a href="books-detail.html">Interaction Design</a></h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- End Books Page Section -->

@endsection
