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
                    <li><a href="/find-out-more/strategy-and-innovation">Strategy and Innovation</a></li>
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
                            <h2 class="title">Strategy and Innovation</h2>
                            <p>Marketing strategy alludes to the overall strategy of a business to reach potential clients
                                and convert them into clients of its products and services. A marketing strategy contains the
                                company’s esteem recommendation, key brand information, data on target customer
                                demographics, and other high-level components. In all aspects of the branding strategy and
                                innovation, we are open and willing to engage with your thoughts and insightful outcomes for
                                your business.<br>
                                Our team is ready to explore your thoughts, if you’re willing to delve into it.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 d-none d-lg-block" data-sal="slide-left" data-sal-duration="800">
                    <div class="case-study-featured-thumb">
                        <img src="/assets/media/services/Strategy-and-Innovation.png" alt="Strategy-and-Innovation">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
