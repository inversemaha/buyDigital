@extends('layouts.service-layout')
@section('title', 'Privacy Policy')
@section('content')
    <!--=====================================-->
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    <div class="breadcrum-area breadcrumb-banner">
        <div class="container">
            <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                <h1 class="title h2">You may have a look to our services which can be the best solutions for your business needs.</h1>
                {{--<p>Give your business a unique logo to stand out from crowd. We’ll create logo specifically for your company.</p>--}}
            </div>
            <div class="banner-thumbnail" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                <img class="paralax-image" src="assets/media/banner/banner-thumb-4.png" alt="Illustration">
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                <img src="assets/media/others/bubble-9.png" alt="Bubble">
            </li>
            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="assets/media/others/bubble-21.png" alt="Bubble">
            </li>
            <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                <img src="assets/media/others/line-4.png" alt="Line">
            </li>
        </ul>
    </div>

    <!--=====================================-->
    <!--=        Service Area Start         =-->
    <!--=====================================-->
    @include('pages.snippets.services')


    <!--=====================================-->
    <!--=    Partner Section Area Start     =-->
    <!--=====================================-->
    <section class="section section-padding">
        <div class="container">
            <div class="section-heading">
                {{--<span class="subtitle">Meet Our</span>--}}
                <h3 class="title">Our Clients</h3>
            </div>
            <section class="customer-logos slider">
                <div class="slide"><img src="assets/media/clients/Akij-bakers-ltd.png"></div>
                <div class="slide"><img src="assets/media/clients/Anjans.png"></div>
                <div class="slide"><img src="assets/media/clients/Anwar-Cement-ltd.png"></div>
                <div class="slide"><img src="assets/media/clients/Anwar-Cement-Sheet-Ltd.png"></div>
                <div class="slide"><img src="assets/media/clients/Assurance-Developments.png"></div>
                <div class="slide"><img src="assets/media/clients/Bombay-sweets.png"></div>
                <div class="slide"><img src="assets/media/clients/BTI.png"></div>
                <div class="slide"><img src="assets/media/clients/City-group.png"></div>
                <div class="slide"><img src="assets/media/clients/Crown-Cement.png"></div>
                <div class="slide"><img src="assets/media/clients/CSRM.png"></div>
                <div class="slide"><img src="assets/media/clients/East-West-University.png"></div>
                <div class="slide"><img src="assets/media/clients/Haque.png"></div>
                <div class="slide"><img src="assets/media/clients/KSRM.png"></div>
                <div class="slide"><img src="assets/media/clients/Lankan-Alliance-Finance.png"></div>
                <div class="slide"><img src="assets/media/clients/LG-Butterfly.png"></div>
                <div class="slide"><img src="assets/media/clients/Milvik.png"></div>
                <div class="slide"><img src="assets/media/clients/National-Polymer.png"></div>
                <div class="slide"><img src="assets/media/clients/Nitol-Motors-Ltd.png"></div>
                <div class="slide"><img src="assets/media/clients/Paikaree.png"></div>
                <div class="slide"><img src="assets/media/clients/Panjeree-publications-Ltd.png"></div>
                <div class="slide"><img src="assets/media/clients/Real-Capita-Group.png"></div>
                <div class="slide"><img src="assets/media/clients/Romania-Food.png"></div>
                <div class="slide"><img src="assets/media/clients/Sara-Lifestyle.png"></div>
                <div class="slide"><img src="assets/media/clients/Seven-Rings-Cement.png"></div>
                <div class="slide"><img src="assets/media/clients/Shikho-Bangladesh.png"></div>
                <div class="slide"><img src="assets/media/clients/Shurjo-Pay.png"></div>
                <div class="slide"><img src="assets/media/clients/ULAB.png"></div>
                <div class="slide"><img src="assets/media/clients/Unimass-holdings-Ltd.png"></div>
            </section>

        </div>
        <ul class="shape-group-4 list-unstyled">
            <li class="shape-1"><img src="assets/media/others/bubble-1.png" alt="Bubble"></li>
        </ul>
    </section>

    <script>
        $(document).ready(function(){
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>
@endsection
