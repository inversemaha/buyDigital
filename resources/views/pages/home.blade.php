@extends('layouts.common')
@section('title', 'Home Page')
@section('content')

    {{--<!--=====================================-->
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    <div class="breadcrum-area breadcrumb-banner">
        <div class="container">
            <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                <h1 class="title h2">Best solutions for your business</h1>
                <p>Give your business a unique logo to stand out from crowd. We’ll create logo specifically for your company.</p>
            </div>
            <div class="banner-thumbnail" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                <img class="paralax-image" src="assets/media/banner/banner-thumb-4.png" alt="Illustration">
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                <img src="assets/assets/media/others/bubble-9.png" alt="Bubble">
            </li>
            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="assets/assets/media/others/bubble-21.png" alt="Bubble">
            </li>
            <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                <img src="assets/assets/media/others/line-4.png" alt="Line">
            </li>
        </ul>
    </div>--}}


    <!--=====================================-->
    <!--=        Banner Area Start         =-->
    <!--=====================================-->
    <section class="banner banner-style-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-7">
                    <div class="banner-content">
                        <h1 class="title" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="200">

                            Digital marketing company
                        </h1>
                        <div data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                            <a href="#services" class="axil-btn btn-fill-white btn-large">Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--=====================================-->
    <!--=        Service Area Start         =-->

    <div class="section section-padding" id="services">
        <div class="container">
            <div class="section-heading heading-left">
                <span class="subtitle">We Design And Implement</span>
                <h2 class="title">Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                     data-sal-delay="100">
                    <div class="services-grid service-style-2">
                        <div class="thumbnail">
                            <img src="assets/media/icon/icon-29.png" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#">Media Buying </a></h5>
                            <p>We design professional looking yet simple Logo. Our designs are search engine and user
                                friendly.</p>
                            <a href="/find-out-more" class="more-btn">Find out more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                     data-sal-delay="200">
                    <div class="services-grid service-style-2">
                        <div class="thumbnail">
                            <img src="assets/media/icon/icon-27.png" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#">Creative Development</a></h5>
                            <p>We design professional looking yet simple websites. Our designs are search engine and
                                user friendly.</p>
                            <a href="/find-out-more" class="more-btn">Find out more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                     data-sal-delay="300">
                    <div class="services-grid service-style-2 active">
                        <div class="thumbnail">
                            <img src="assets/media/icon/icon-28.png" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#">Social Media Planing</a></h5>
                            <p>We design professional looking yet Mobile Apps. Our designs are search engine
                                and user friendly. </p>
                            <a href="/find-out-more" class="more-btn">Find out more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                     data-sal-delay="100">
                    <div class="services-grid service-style-2">
                        <div class="thumbnail">
                            <img src="assets/media/icon/icon-4.png" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#">Web Design</a></h5>
                            <p>From simple Content Management System to complex eCommerce developer, we cover it
                                all.</p>
                            <a href="/find-out-more" class="more-btn">Find out more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                     data-sal-delay="200">
                    <div class="services-grid service-style-2">
                        <div class="thumbnail">
                            <img src="assets/media/icon/icon-30.png" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#">Video production</a></h5>
                            <p>From simple Content Management System to complex eCommerce developer, we cover it
                                all.</p>
                            <a href="/find-out-more" class="more-btn">Find out more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                     data-sal-delay="200">
                    <div class="services-grid service-style-2">
                        <div class="thumbnail">
                            <img src="assets/media/icon/icon-30.png" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#">Media Planning and Strategist</a></h5>
                            <p>From simple Content Management System to complex eCommerce developer, we cover it
                                all.</p>
                            <a href="/find-out-more" class="more-btn">Find out more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                     data-sal-delay="200">
                    <div class="services-grid service-style-2">
                        <div class="thumbnail">
                            <img src="assets/media/icon/icon-30.png" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#">Influencer Marketing</a></h5>
                            <p>From simple Content Management System to complex eCommerce developer, we cover it
                                all.</p>
                            <a href="/find-out-more" class="more-btn">Find out more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                     data-sal-delay="200">
                    <div class="services-grid service-style-2">
                        <div class="thumbnail">
                            <img src="assets/media/icon/icon-30.png" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#">Website & App Development</a></h5>
                            <p>From simple Content Management System to complex eCommerce developer, we cover it
                                all.</p>
                            <a href="/find-out-more" class="more-btn">Find out more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                     data-sal-delay="200">
                    <div class="services-grid service-style-2">
                        <div class="thumbnail">
                            <img src="assets/media/icon/icon-30.png" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#">AD Network</a></h5>
                            <p>From simple Content Management System to complex eCommerce developer, we cover it
                                all.</p>
                            <a href="/find-out-more" class="more-btn">Find out more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                     data-sal-delay="200">
                    <div class="services-grid service-style-2">
                        <div class="thumbnail">
                            <img src="assets/media/icon/icon-30.png" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#">ATL/ BTL Support or Offline activation</a></h5>
                            <p>From simple Content Management System to complex eCommerce developer, we cover it
                                all.</p>
                            <a href="/find-out-more" class="more-btn">Find out more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                     data-sal-delay="200">
                    <div class="services-grid service-style-2">
                        <div class="thumbnail">
                            <img src="assets/media/icon/icon-30.png" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#">SEO</a></h5>
                            <p>From simple Content Management System to complex eCommerce developer, we cover it
                                all.</p>
                            <a href="/find-out-more" class="more-btn">Find out more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                     data-sal-delay="200">
                    <div class="services-grid service-style-2">
                        <div class="thumbnail">
                            <img src="assets/media/icon/icon-30.png" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#">SEM</a></h5>
                            <p>From simple Content Management System to complex eCommerce developer, we cover it
                                all.</p>
                            <a href="/find-out-more" class="more-btn">Find out more</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Development Service -->

    <section id="about" class="section section-padding-equal case-study-featured-area bg-color-dark">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6 sal-animate" data-sal="slide-right" data-sal-duration="800">
                    <div class="case-study-featured">
                        <div class="section-heading heading-left heading-light">
                            <span class="subtitle">About</span>
                            <h2 class="title">Buy Digital</h2>
                            <p>
                                Buy Digital is a 360 degree digital marketing agency that focuses on driving results via
                                effective, measurable 360 degree in digital solution
                            </p>
                            <br>
                            <p>
                                We can partner with you to develop your marketing plans and execute winning strategies
                                to generate and convert results to build brands. From media buying, creative and website
                                design, development and optimization, to increasing sales through tactical digital
                                marketing activities. We work with our clients to increase brand awareness and
                                visibility on digital platforms, generate more sales opportunities and maximize the
                                marketing return on investment budget (ROI).
                            </p>


                        </div>

                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 d-none d-lg-block sal-animate" data-sal="slide-left"
                     data-sal-duration="800">

                    <div class="case-study-featured-thumb">
                        <img src="assets/media/images/home2.jpeg" alt="travel">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--=====================================-->
    <!--=      Team Details Area Start      =-->
    <!--=====================================-->
    <section class="section-padding-equal team-details-area" id="team">
        <div class="container">
            <div class="section-heading">
                <span class="subtitle">Meet Our</span>
                <h3 class="title">Digital Business Team</h3>
            </div>
            {{--<div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="team-details-content">
                        <h2 class="title">Ralph Edwards</h2>
                        <span class="subtitle">Communications Strategist</span>
                        <ul class="social-share list-unstyled">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                        <p>Phasellus in libero et nunc malesuada tincidunt. Morbi auctor tristique semper. Nunc
                            condimentum dapibus felis, non volutpat ligula dapibus non. Quisque varius massa magna, eget
                            iaculis ipsum tincidunt sed. Sed tempus magna id nunc posuere auctor. Morbi aliquam a justo
                            eget cursus. Donec at quam id ex mollis dapibus eget ac sem. Maecenas pharetra bibendum
                            massa, ut tincidunt lectus.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team-details-thumb">
                        <img class="paralax-image" src="assets/media/team/team-9.png" alt="Thumbnail">
                    </div>
                </div>
            </div>--}}
            <div class="row align-items-center">
                <!-- Carousel -->
                <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="team-details-content">
                                        <h2 class="title">Ralph Edwards</h2>
                                        <span class="subtitle">Communications Strategist</span>
                                        <ul class="social-share list-unstyled">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                        <p>Phasellus in libero et nunc malesuada tincidunt. Morbi auctor tristique
                                            semper. Nunc condimentum dapibus felis, non volutpat ligula dapibus non.
                                            Quisque varius massa magna, eget iaculis ipsum tincidunt sed. Sed tempus
                                            magna id nunc posuere auctor. Morbi aliquam a justo eget cursus. Donec at
                                            quam id ex mollis dapibus eget ac sem. Maecenas pharetra bibendum massa, ut
                                            tincidunt lectus.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="team-details-thumb">
                                        <img src="assets/media/team/team-9.png" alt="Los Angeles"
                                             class="d-block paralax-image" style="width:100%">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="team-details-content">
                                        <h2 class="title">Chuk Naris</h2>
                                        <span class="subtitle">Communications Strategist</span>
                                        <ul class="social-share list-unstyled">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                        <p>Phasellus in libero et nunc malesuada tincidunt. Morbi auctor tristique
                                            semper. Nunc condimentum dapibus felis, non volutpat ligula dapibus non.
                                            Quisque varius massa magna, eget iaculis ipsum tincidunt sed. Sed tempus
                                            magna id nunc posuere auctor. Morbi aliquam a justo eget cursus. Donec at
                                            quam id ex mollis dapibus eget ac sem. Maecenas pharetra bibendum massa, ut
                                            tincidunt lectus.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="team-details-thumb">
                                        <img src="assets/media/team/team-2.png" alt="Los Angeles"
                                             class="d-block paralax-image" style="width:100%">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="team-details-content">
                                        <h2 class="title">Edwards Ralph </h2>
                                        <span class="subtitle">Communications Strategist</span>
                                        <ul class="social-share list-unstyled">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                        <p>Phasellus in libero et nunc malesuada tincidunt. Morbi auctor tristique
                                            semper. Nunc condimentum dapibus felis, non volutpat ligula dapibus non.
                                            Quisque varius massa magna, eget iaculis ipsum tincidunt sed. Sed tempus
                                            magna id nunc posuere auctor. Morbi aliquam a justo eget cursus. Donec at
                                            quam id ex mollis dapibus eget ac sem. Maecenas pharetra bibendum massa, ut
                                            tincidunt lectus.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="team-details-thumb">
                                        <img src="assets/media/team/team-4.png" alt="Los Angeles"
                                             class="d-block paralax-image" style="width:100%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </section>


    <section id="testimonial" class="section section-padding bg-color-dark">
        <div class="container">
            <div class="section-heading heading-light">
                <span class="subtitle">Statistics</span>
                <h2 class="title">We Are Trusted by <br>More than 300 Clients Worldwide</h2>

            </div>
            <div class="row">
                <div class="col-lg-4 col-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                     data-sal-delay="100">
                    <div class="counterup-progress">
                        <div class="icon">
                            <img src="assets/media/icon/icon-7.png" alt="Apple">
                        </div>
                        <div class="count-number h2">
                            <span class="number count odometer odometer-auto-theme" data-count="2">
                                <div
                                    class="odometer-inside">
                                    <span class="odometer-digit"><span class="odometer-digit-spacer">8</span>
                                        <span class="odometer-digit-inner">
                                            <span class="odometer-ribbon">
                                                <span class="odometer-ribbon-inner">
                                                    <span class="odometer-value">1</span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="odometer-digit"><span class="odometer-digit-spacer">8</span>
                                        <span class="odometer-digit-inner">
                                            <span class="odometer-ribbon">
                                                <span class="odometer-ribbon-inner">
                                                    <span class="odometer-value">5</span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                            </span>
                            <span class="symbol">+</span>
                        </div>
                        <h6 class="title">Years of exp.</h6>
                    </div>
                </div>
                <div class="col-lg-4 col-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                     data-sal-delay="300">
                    <div class="counterup-progress">
                        <div class="icon">
                            <img src="assets/media/icon/icon-9.png" alt="Apple">
                        </div>
                        <div class="count-number h2">
                            <span class="number count odometer odometer-auto-theme" data-count="300"><div
                                    class="odometer-inside"><span class="odometer-digit"><span
                                            class="odometer-digit-spacer">8</span><span
                                            class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                    class="odometer-ribbon-inner"><span class="odometer-value">6</span></span></span></span></span><span
                                        class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                            class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                    class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span><span
                                        class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                            class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                    class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>
                            <span class="symbol">+</span>
                        </div>
                        <h6 class="title">Happy Client's</h6>
                    </div>
                </div>
                <div class="col-lg-4 col-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                     data-sal-delay="400">
                    <div class="counterup-progress active">
                        <div class="icon">
                            <img src="assets/media/icon/icon-13.png" alt="Apple">
                        </div>
                        <div class="count-number h2">
                            <span class="number count odometer odometer-auto-theme" data-count="30"><div
                                    class="odometer-inside"><span class="odometer-digit"><span
                                            class="odometer-digit-spacer">8</span><span
                                            class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                    class="odometer-ribbon-inner"><span class="odometer-value">6</span></span></span></span></span><span
                                        class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                            class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                    class="odometer-ribbon-inner"><span class="odometer-value">4</span></span></span></span></span></div></span>
                            <span class="symbol">+</span>
                        </div>
                        <h6 class="title">Team members</h6>
                    </div>
                </div>
            </div>
        </div>
        <ul class="list-unstyled shape-group-10">
            <!-- <li class="shape shape-1"><img src="assets/media/others/line-9.png" alt="Circle"></li> -->
            <li class="shape shape-2"><img src="assets/media/others/bubble-42.png" alt="Circle"></li>
            <li class="shape shape-3"><img src="assets/media/others/bubble-43.png" alt="Circle"></li>
        </ul>
    </section>



    <!--=  Clients Review Area Start    =-->
    <!--=====================================-->
    <section id="testmonial" class="section section-padding ">
        <div class="container">
            <div class="section-heading heading-left">
                <!-- <span class="subtitle">Feedback</span> -->
                <h2 class="title">Feedback</h2>
                <p>Here are some user feedback about our services and how they help them achieve their goals.</p>
            </div>
            <div class="row">
                <div class="col-lg-3" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                    <div class="testimonial-grid active">
                        <!-- <span class="social-media"><img src="assets/media/icon/yelp-2.png" alt="Yelp"></span> -->
                        <p>“
                            Love working collaboratively with Buy Digital. Thanks buy digital for being authentic and
                            enthusiastic !
                            ”</p>
                        <div class="author-info">
                            <div class="thumb">
                                <img src="assets/media/images/npoly.png" alt="Npoly">
                            </div>
                            <div class="content">
                                <span class="name">Npoly</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                    <div class="testimonial-grid">
                        <!-- <span class="social-media"><img src="assets/media/icon/google-2.png" alt="google"></span> -->
                        <p>“
                            Highly recommended! Detail-oriented, considerate to clients, insightful and providing
                            top-notch services.
                            ”</p>
                        <div class="author-info">
                            <div class="thumb">
                                <img src="assets/media/images/shurjomukhi.png" alt="Shurjomukhi Limited">
                            </div>
                            <div class="content">
                                <span class="name">Shurjomukhi Limited </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="testimonial-grid">
                        <!-- <span class="social-media"><img src="assets/media/icon/google-2.png" alt="google"></span> -->
                        <p>“
                            The Buy Digital team is very easy to work with! They are well-organized, responsive and
                            provide good services.
                            ”</p>
                        <div class="author-info">
                            <div class="thumb">
                                <img src="assets/media/images/nitol-motors.png" alt="Nitol Motors">
                            </div>
                            <div class="content">
                                <span class="name">Nitol Motors</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                    <div class="testimonial-grid">
                        <!-- <span class="social-media"><img src="assets/media/icon/google-2.png" alt="google"></span> -->
                        <p style="font-size: 20px !important;">“
                            A good experience working with the team of buy digital. The team helped me get exactly what
                            I was looking for! Indeed overall is a pretty good agency to work with!
                            ”</p>
                        <div class="author-info">
                            <div class="thumb">
                                <img src="assets/media/images/seven-rings.png" alt="Seven Rings Cement">
                            </div>
                            <div class="content">
                                <span class="name">Seven Rings Cement </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group-4 list-unstyled">
            <li class="shape-1"><img src="assets/media/others/bubble-1.png" alt="Bubble"></li>
        </ul>
    </section>
@endsection

