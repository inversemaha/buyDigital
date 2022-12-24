@extends('layouts.common')
@section('title', 'Our Sister Concern')
@section('content')

    <!--=====================================-->
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    <div class="breadcrum-area breadcrumb-banner">
        <div class="container">
            <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000"
                 data-sal-delay="300">
                <h1 class="title h2">Our Sister Concern</h1>
                {{--<p>We design and develop web and mobile applications for our clients worldwide.</p>--}}
            </div>
            <div class="banner-thumbnail thumbnail-3" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                <img src="assets/media/banner/banner-thumb-5.png" alt="Illustration">
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                <img src="assets/media/others/bubble-9.png" alt="Bubble">
            </li>
            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="assets/media/others/bubble-20.png" alt="Bubble">
            </li>
            <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                <img src="assets/media/others/line-4.png" alt="Line">
            </li>
        </ul>
    </div>
    <!--=====================================-->
    <!--=      Sister Concern  Area Start       =-->
    <!--=====================================-->
    <section class="pt--250 pt_lg--200 pt_md--100 pt_sm--80 case-study-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-sal="slide-right" data-sal-duration="1000">
                    <div class="case-study-featured-thumb thumb-1">
                        <img class="paralax-image" src="assets/media/sConcern/Influencer-Hub-Logo.jpg" alt="Sister Concern">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1" data-sal="slide-left" data-sal-duration="1000"
                     data-sal-delay="200">
                    <div class="case-study-featured">
                        <div class="section-heading heading-left">
                            {{--<span class="subtitle">Featured Sister Concern</span>--}}
                            <h2 class="title">Influencer Hub</h2>
                            <p>Influencer Hub is the leader in influencer marketing, providing advanced capabilities
                                that make finding and communicating with influencers faster, easier and cost effective
                                for brands. Quickly access real-time ROI and KPI reports to see who the top influencers
                                are, and the impact they are having with their followers.</p>
                            <a href="https://www.facebook.com/Influencerhub.bd" target="_blank"
                               class="axil-btn btn-fill-primary btn-large">Visit Us</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 offset-xl-1 order-lg-2" data-sal="slide-left" data-sal-duration="1000"
                     data-sal-delay="200">
                    <div class="case-study-featured-thumb thumb-2">
                        <img class="paralax-image" src="assets/media/sConcern/Adbliv-Logo.jpg" alt="Sister Concern">
                    </div>
                </div>
                <div class="col-lg-5 order-lg-1" data-sal="slide-right" data-sal-duration="1000">
                    <div class="case-study-featured">
                        <div class="section-heading heading-left">
                            {{--<span class="subtitle">Featured case study</span>--}}
                            <h2 class="title">Adbliv</h2>
                            <p>Adbliv is an ad network that has started operations in Bangladesh to develop an ecosystem
                                of full-stack SSP programmatic solutions. Adbliv has a commitment to work with
                                transparency and true ad visibility for advertisers and publishers in Bangladesh. Our
                                motto is to build an ecosystem with effective and transparent relationships between all
                                publishers and advertisers. Adbliv wants to bring creative and new touches to
                                advertisements.</p>
                            <a href="https://www.adbliv.com/" target="_blank" class="axil-btn btn-fill-primary btn-large">Visit Us</a>
                        </div>
                        {{--<div class="case-study-counterup">
                            <div class="single-counterup">
                                <h3 class="count-number">
                                    <span class="number count" data-count="15">15</span>
                                    <span class="symbol">%</span>
                                </h3>
                                <span class="counter-title">ROI increase</span>
                            </div>
                            <div class="single-counterup">
                                <h3 class="count-number">
                                    <span class="number count" data-count="60">60</span>
                                    <span class="symbol">k</span>
                                </h3>
                                <span class="counter-title">Monthly website visits</span>
                            </div>
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
