@extends('pages.tenacademy.layouts.app')

@section('content')
    <!-- Page Title -->
    <section class="page-title">
        <div class="auto-container">
            <h1>Contact Us</h1>

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

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20"
            data-paroller-type="foreground" data-paroller-direction="vertical"
            style="background-image: url(images/icons/icon-1.png)"></div>
        <div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20"
            data-paroller-type="foreground" data-paroller-direction="vertical"
            style="background-image: url(images/icons/icon-2.png)"></div>
        <div class="auto-container">
            <div class="inner-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <h2>Get in touch</h2>
                </div>

                <!-- Contact Form -->
                <div class="contact-form">

                    <!-- Profile Form -->
                    <form method="post" action="sendemail.php" id="contact-form">
                        <div class="row clearfix">

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="username" placeholder="First Name*" required="">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="lastname" placeholder="Last Name*" required="">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="email" name="email" placeholder="Email Address*" required="">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="phone" placeholder="Phone Number*" required="">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea class="" name="message" placeholder="Send Message"></textarea>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group text-right">
                                <button class="theme-btn btn-style-three" type="submit" id="submit"
                                    name="submit-form"><span class="txt">Send Message <i
                                            class="fa fa-angle-right"></i></span></button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

            <!-- Contact Info Section -->
            <div class="contact-info-section">
                <div class="title-box">
                    <h2>Contact Information</h2>
                    <div class="text">Lorem Ipsum is simply dummy text of the printing <br> and typesetting industry.
                    </div>
                </div>

                <div class="row clearfix">

                    <!-- Info Column -->
                    <div class="info-column col-lg-4 col-md-6 col-sm-12">
                        <div class="info-inner">
                            <div class="icon fa fa-phone"></div>
                            <strong>Phone</strong>
                            <ul>
                                <li><a href="tel:+1-123-456-7890">+1 (123) 456-7890</a></li>
                                <li><a href="tel:+1-123-456-7890">+1 (123) 456-7890</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Info Column -->
                    <div class="info-column col-lg-4 col-md-6 col-sm-12">
                        <div class="info-inner">
                            <div class="icon fa fa-envelope-o"></div>
                            <strong>Email</strong>
                            <ul>
                                <li><a href="mailto:info@yourcompany.com">info@yourcompany.com</a></li>
                                <li><a href="mailto:infobootcamp@gmail.com">infobootcamp@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Info Column -->
                    <div class="info-column col-lg-4 col-md-6 col-sm-12">
                        <div class="info-inner">
                            <div class="icon fa fa-map-marker"></div>
                            <strong>Address</strong>
                            <ul>
                                <li>Portfolio Technology 07, Capetown 12 Road, Chicago, 2436, USA</li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Page Section -->

    <!-- Map Section -->
    <section class="map-section">
        <!-- Map Boxed -->
        <div class="map-boxed">
            <!--Map Outer-->
            <div class="col-lg-7 maps">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.8690599650324!2d73.09430814333295!3d33.52359494108848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfedbbd397b177%3A0xef34955c9950c2e7!2sThe%20Educational%20Network!5e0!3m2!1sen!2s!4v1654497708690!5m2!1sen!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <!-- End Map Section -->
@endsection
@section('js_link')
    <script>
        $(document).ready(function() {
            $("#submit").click(function() {
                //  alert("d");
            })
        });
    </script>
@endsection
