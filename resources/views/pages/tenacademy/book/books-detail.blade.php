@extends('pages.tenacademy.layouts.app')

@section('title', 'Book Detail')
@section('content')
    <!-- Page Title -->
    <section class="page-title">
        <div class="auto-container">
            <h1>Book Description</h1>

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

    <!-- Books Detail Section -->
    <section class="books-detail-section">
        <div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20"
            data-paroller-type="foreground" data-paroller-direction="vertical"
            style="background-image: url(images/icons/icon-1.png)"></div>
        <div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20"
            data-paroller-type="foreground" data-paroller-direction="vertical"
            style="background-image: url(images/icons/icon-2.png)"></div>
        <div class="circle-one"></div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Info Section -->
                <div class="info-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="https://via.placeholder.com/200x250" alt="" />
                        </div>
                        <ul class="book-info">
                            <li>Published Date: <span>20 March 2020</span></li>
                            <li>Downloaded: <span>125 Times</span></li>
                        </ul>
                        <a href="#" class="theme-btn btn-style-three"><span class="txt">Add To Cart <i
                                    class="fa fa-angle-right"></i></span></a>
                        <a href="#" class="theme-btn btn-style-two"><span class="txt">Buy Now <i
                                    class="fa fa-angle-right"></i></span></a>
                    </div>
                </div>

                <!-- Content Section -->
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2>Don’t Make Me Think</h2>
                        <div class="author">By Steve Krug</div>
                        <h4>Description</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                            ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                            tation ullamcorper <br> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                            doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer
                            adipiscing elit, sed diam nonummy nibh euismod quis nostrud exerci tation ullamcorper tincidunt
                            ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                            tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                        <p>mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                            diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
                            ad minim veniam,suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                            ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                            tation ullamcorper</p>
                        <h5>Book Information</h5>
                        <ul class="book-info">
                            <li>Page Count: <span>252</span></li>
                            <li>Word Count: <span>49568</span></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Books Page Section -->

@endsection
