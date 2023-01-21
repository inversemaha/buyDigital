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
                    <li><a href="/find-out-more/media-buying">Media Buying</a></li>
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
    <section >
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6" data-sal="slide-right" data-sal-duration="800">
                    <div class="case-study-featured">
                        <div class="section-heading heading-left">
                            <span class="subtitle">Services</span>
                            <h2 class="title">Media Buying</h2>
                            <p>If you’re trying to find digital ad visibility or impactful relationships with media owners that
                                result in greater reach with less investment, then media buying is your wise option media buying
                                can increase conversions and high ROI to clients and stakeholders.
                            <br>Want to know more?<br>
                                Please contact, <a href="mailto:sales@buydigitalbd.com">sales@buydigitalbd.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 d-none d-lg-block" data-sal="slide-left" data-sal-duration="800">
                    <div class="case-study-featured-thumb">
                        <img src="/assets/media/services/Media-Buying.png" alt="Media-Buying">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
