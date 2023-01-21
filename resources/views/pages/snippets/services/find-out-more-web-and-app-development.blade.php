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
                    <li><a href="/find-out-more/web-and-app-development">Web and App development</a></li>
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
                            <h2 class="title">Web and App development</h2>
                            <p>A good website design is important because it makes a difference in centering the user’s eyes
                                and coordinating them where they ought to be looking. Your design can draw into consideration
                                extraordinary offers on your site, highlight calls to action and make it easier for users to
                                recognize buttons and intuitive components. All these things help users make the right move. On
                                the other hand, App has ended up exceptionally helpful and handy product for commerce on the
                                off chance that you’re interested in enriching your website or considering around to create any
                                app at that point we are here for you!<br>
                                For more info, please contact: <a href="mailto:sales@buydigital.bd">sales@buydigital.bd</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 d-none d-lg-block" data-sal="slide-left" data-sal-duration="800">
                    <div class="case-study-featured-thumb">
                        <img src="/assets/media/services/Website-and-App-Development.png" alt="Website-and-App-Development">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
