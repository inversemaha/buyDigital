@extends('layouts.common')
@section('title', 'career')
@section('content')

    <!--=====================================-->
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    <div class="breadcrum-area breadcrumb-banner">
        <div class="container">
            <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                <h1 class="title h2">Career Board</h1>
            </div>
            <div class="banner-thumbnail" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                <img class="paralax-image" src="/assets/media/banner/banner-thumb-4.png" alt="Illustration">
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                <img src="/assets/media/others/bubble-9.png" alt="Bubble">
            </li>
            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="/assets/media/others/bubble-21.png" alt="Bubble">
            </li>
            <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                <img src="/assets/media/others/line-4.png" alt="Line">
            </li>
        </ul>
    </div>




    <!--=====================================-->
    <!--=        Service Area Start         =-->

    <div class="section section-padding" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                     data-sal-delay="100">
                    <div class="services-grid service-style-2">
                        <div class="thumbnail">
                            <img src="/assets/media/icon/icon-29.png" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#">Media Buying  </a></h5>
                            <p>We design professional looking yet simple Logo. Our designs are search engine and user
                                friendly.</p>
                            <a href="/career/board/details" class="more-btn">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                     data-sal-delay="200">
                    <div class="services-grid service-style-2">
                        <div class="thumbnail">
                            <img src="/assets/media/icon/icon-27.png" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#">Creative Development</a></h5>
                            <p>We design professional looking yet simple websites. Our designs are search engine and
                                user friendly.</p>
                            <a href="/career/board/details" class="more-btn">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                     data-sal-delay="300">
                    <div class="services-grid service-style-2 active">
                        <div class="thumbnail">
                            <img src="/assets/media/icon/icon-28.png" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#">Social Media Planing</a></h5>
                            <p>We design professional looking yet Mobile Apps. Our designs are search engine
                                and user friendly. </p>
                            <a href="/career/board/details" class="more-btn">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                     data-sal-delay="100">
                    <div class="services-grid service-style-2">
                        <div class="thumbnail">
                            <img src="/assets/media/icon/icon-4.png" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#">Web Design</a></h5>
                            <p>From simple Content Management System to complex eCommerce developer, we cover it
                                all.</p>
                            <a href="/career/board/details" class="more-btn">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                     data-sal-delay="200">
                    <div class="services-grid service-style-2">
                        <div class="thumbnail">
                            <img src="/assets/media/icon/icon-30.png" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="#">Video production</a></h5>
                            <p>From simple Content Management System to complex eCommerce developer, we cover it
                                all.</p>
                            <a href="/career/board/details" class="more-btn">View Details</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Development Service -->

@endsection
