@extends('layouts.service-layout')
@section('title', 'Find more details')
@section('content')
    <!--=====================================-->
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    <div class="breadcrum-area">
        <div class="container">
            <div class="breadcrumb">
                <ul class="list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><a href="/find-out-more/social-media-planning">Social Media Planning:</a></li>
                </ul>
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100"><img
                    src="/assets/media/others/bubble-9.png" alt="Bubble"></li>
            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200"><img
                    src="/assets/media/others/bubble-11.png" alt="Bubble"></li>
            <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300"><img
                    src="/assets/media/others/line-4.png" alt="Line"></li>
        </ul>
    </div>
    <!--=====================================-->
    <!--=       Case Study Area Start       =-->
    <!--=====================================-->
    <section class="section section-padding-equal case-study-featured-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6" data-sal="slide-right" data-sal-duration="800">
                    <div class="case-study-featured">
                        <div class="section-heading heading-left">
                            <span class="subtitle">Services</span>
                            <h2 class="title">Social Media Planning</h2>
                            <p>Social media lets you prepare and determine your goal audience including refining your content
                                material or content development and cadence, analyzing follower engagement, and constructing
                                deeper relationships collectively alongside your audience to overall marketing strategy. If you’re
                                prepared to explore your media planning, you could get an exceptional deal with Buy Digital.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 d-none d-lg-block" data-sal="slide-left" data-sal-duration="800">
                    <div class="case-study-featured-thumb">
                        <img src="/assets/media/others/case-study-4.png" alt="travel">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
