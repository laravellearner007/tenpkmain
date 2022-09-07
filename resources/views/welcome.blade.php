<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style media="screen">
        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        body {
            background-color: #fff;
            margin: 0 auto;
            font-family: 'Nunito', sans-serif;
            /* font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Ubuntu, Helvetica Neue, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, "Arial", "sans-serif"; */
            line-height: 22px;
            letter-spacing: 1px;
        }

        div.main-content {
            padding-bottom: 0;
        }

        .main-content {
            display: block;
            min-height: 495px;
        }

        a {
            /* color: #007bff; */
            text-decoration: none;
            background-color: transparent;
            transition: all .3s ease;
            color: #0688e2;
            /* -webkit-text-decoration-skip: objects; */
        }

        a {
            /* -webkit-transition: all .3s ease;
            -moz-transition: all .3s ease;
            -ms-transition: all .3s ease;
            -o-transition: all .3s ease; */
            transition: all .3s ease;
            color: #0688e2;
        }

        section {
            display: block;
        }

        .home-index .main-banner {
            display: flex;
            flex-wrap: wrap;
            padding-bottom: 0;
        }

        /* .home-index {
            background-image: url('img/desktop.png');
            background-size: cover;

        } */

        .main-banner {
            transition: all .4s ease;
        }

        .home-index .main-banner .index-link {
            width: 100%;
        }

        .index-grid {
            display: block;
            /* width: 33.33%;
      float: left; */
            position: relative;
        }

        .index-content {
            position: absolute;
            width: 80%;
            bottom: 8%;
            left: 50%;
            transform: translate(-50%);
            text-align: center;
            color: rgb(235, 228, 228);
            transition: all .4s ease;
            transition-property: all;
            transition-duration: 0.4s;
            transition-timing-function: ease;
            transition-delay: 0s;
            text-shadow: 2px 2px 4px rgb(37, 31, 31), 2px 2px 4px rgb(31, 16, 16);

            /* filter: drop-shadow(2px 2px 4px white); */
        }

        .index-content {
            margin-bottom: 80%;
        }

        @media (min-width: 414px) {
            .index-content {
                margin-bottom: 53%;
            }
        }


        .home-index .main-banner .index-link .index-content h2 {
            font-size: 40px;
            letter-spacing: 0;
        }

        .index-content h2 {
            margin-bottom: 10px;
            text-transform: uppercase;
            /* padding: 7px 35px; */
        }

        .ten {
            padding: 2% 25%;
        }

        .academy {
            padding: 2% 21%;

        }


        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 700;
            line-height: 1.25em;
            margin: 0;
            padding: 0;

        }

        .home-index .main-banner .index-link .index-content p {
            border: 1px solid #fff;
            display: inline-block;
            padding: 3px 25px;
            text-shadow: none;
            text-transform: uppercase;
        }

        p:last-child,
        p:last-of-type {
            margin-bottom: 0;
        }

        p {
            margin-top: 0;
            font-weight: 900;
            /* margin-bottom: 1rem; */
        }

        .index-content .index-desc {
            font-size: 16px;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .template-index .main-content {
            padding-bottom: 0;
        }

        .index-link {
            display: inherit;
        }





        img {
            max-width: 100%;
            height: auto;
            border: none;
            vertical-align: middle;
        }


        /* @media (max-width: 1026px) {




        } */



        @media (max-width: 500px) {
            .main-content {
                min-height: auto;
                padding-bottom: 0;
            }
        }

        .home-index .main-banner {
            display: flex;
            flex-wrap: wrap;
            padding-bottom: 0;
        }

        .home-index .main-banner .index-link {
            width: 100%;
        }

        .home-index .main-banner .index-link .index-image {
            width: 100%;
        }

        @media (min-width: 414px) {
            .home-index .main-banner .index-link {
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }
        }

        .home-index .main-banner .index-link .index-grid {
            width: 100%;
            float: none;
        }





        /* footer style */

        .home-index-footer .index-social {
            padding: 20px;
            padding-top: 30px;
        }

        .home-index-footer .index-social {
            text-align: center;
            /* padding: 40px 0; */
        }



        .social-icons li.tiktok:hover a {
            background-color: #c0c0bf !important;
        }

        .home-index-footer .index-social h5 {
            margin-bottom: 10px;
            color: #4e4e4e;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 12px;
            line-height: 1;
        }

        .social-icons {
            letter-spacing: -.33em;
            margin: 0;
            line-height: 0;
        }

        ul,
        ol {
            padding: 0;
            list-style: none;
            /* margin-bottom: 20px; */
        }

        .home-index-footer .index-social li {
            margin: 0 2px;
        }

        .social-icons li {
            letter-spacing: normal;
            display: inline-block;
            margin: 0 13px;
            width: 37px;
            height: 37px;
        }

        .home-index-footer .index-footer-copyright h4 {
            margin-bottom: 0;
            padding: 13px 0;
            background-color: #000;
            text-align: center;
            color: #fff;
            font-size: 12px;
        }

        .home-index-footer .index-social a {
            color: #4e4e4e;
        }

        .social-icons li a {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .social-icons a {
            font-size: 12px;
            /* display: block; */
            line-height: 38px;
            position: relative;
            top: 1px;
            width: 36px;
            height: 36px;
            border: none;
            /* -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%; */
            border-radius: 50%;
            text-align: center;
        }

        a:hover {
            color: #232323;
            outline: none;
            text-decoration: none;
        }

        .social-icons li.facebook:hover a,
        .social-icons li.twitter:hover a,
        .social-icons li.google_plus:hover a,
        .social-icons li.instagram:hover a,
        .social-icons li.rss:hover a,
        .social-icons li.pinterest:hover a,
        .social-icons li.tumblr:hover a,
        .social-icons li.snapchat:hover a,
        .social-icons li.youtube:hover a,
        .social-icons li.vimeo:hover a {
            background-color: #c0c0bf !important;
        }

        .social-icons li:hover a {
            color: #fff !important;
        }

        p:hover {
            background-color: rgb(212, 16, 16);
            color: white;
            transition: all .4s ease-in;

        }

        .tenlogo {
            position: absolute;
            top: 8%;
            left: 50%;
            width: 100px;
            height: 100px;
        }

        @media (min-width: 414px) {
            .tenlogo {
                position: absolute;
                top: 2%;
                left: 45%;
                width: 100px;
                height: 100px;
            }
        }
    </style>


</head>

<body class="template-index">
    {{-- <div class="header-img" style="padding:15px;text-align:center">
        <img src="img/logotrans1.png">

    </div> --}}
    <div class="main-content">

        <div class="shopify-section home-index">
            <img src="img/desktop.png" alt="">
            <section class="home-index home-index-desktop">

                <img class="tenlogo" src="img/tenlogo.png" alt="">

                <div class="main-banner" id="home-index-4-slider">

                    <a href="/pages/tentech" class="index-link">
                        <div class="index-grid men-content">


                            {{-- <img class="index-image" src="img/photo-1.jpg"> --}}
                            <div class="index-content">
                                <h2 class="ten">Ten Tech</h2>
                                <p>View</p>
                                <div class="index-desc"></div>



                            </div>

                        </div>
                    </a>
                    <a href="/pages/tenacademy" class="index-link">
                        <div class="index-grid women-content">


                            {{-- <img class="index-image" src="img/acedmey.jpg"> --}}
                            <div class="index-content">
                                <h2 class="academy">Ten Academy</h2>
                                <p>View</p>
                                <div class="index-desc"></div>



                            </div>

                        </div>
                    </a>
                    <a href="#" class="index-link">
                        <div class="index-grid kids-content">


                            {{-- <img class="index-image" src="img/youtube.jpg"> --}}
                            <div class="index-content">
                                <h2 class="automation">Ten Automation</h2>
                                <p>View</p>
                                <div class="index-desc"></div>



                            </div>

                        </div>
                    </a>
                </div>


            </section>
        </div>

    </div>
    <div id="shopify-section-home-index-footer" class="shopify-section">

        <section class="home-index-footer" id="slideshow-home-index-footer">
            <div class="footer-content">
                <div class="index-social">
                    <h5>be a part of our social family</h5>


                    <ul class="social-icons">

                        <li class="facebook">
                            <a href="#" title="Facebook" target="_blank">

                                <i class="fa fa-facebook fa-lg" aria-hidden="true"></i>

                            </a>
                        </li>






                        <li class="instagram">
                            <a href="#" title="Instagram" target="_blank">
                                <i class="fa fa-instagram fa-lg" aria-hidden="true"></i>
                            </a>
                        </li>



                        <li class="pinterest">
                            <a href="#" title="Pinterest" target="_blank">
                                <i class="fa fa-pinterest-p fa-lg" aria-hidden="true"></i>
                            </a>
                        </li>



                        <li class="snapchat">
                            <a href="#" title="Snapchat" target="_blank">
                                <i class="fa fa-snapchat-ghost fa-lg" aria-hidden="true"></i>
                            </a>
                        </li>


                        <li class="youtube">
                            <a href="#" title="YouTube" target="_blank">
                                <i class="fa fa-youtube fa-lg" aria-hidden="true"></i>
                            </a>
                        </li>




                        <li class="vimeo">
                            <a href="#" title="LinkedIn" target="_blank">
                                <i class="fa fa-linkedin fa-lg" aria-hidden="true"></i>
                            </a>
                        </li>

                    </ul>

                </div>
                <div class="index-footer-copyright">
                    <h4>© Copyright 2022 by The Educational Network. All Rights Reserved.</h4>
                </div>
            </div>
        </section>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
