@extends('layouts.common')
@section('title', 'Home Page')
@section('content')

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
    <!--=  White Quote Section Area Start   =-->
    <!--=====================================-->
    @include('pages.snippets.white-quote-one')

    <!--=====================================-->
    <!--=      About Section Start          =-->
    <!--=====================================-->
    @include('pages.snippets.about')

    <!--=====================================-->
    <!--=      Team Details Area Start      =-->
    <!--=====================================-->
    @include('pages.snippets.team')

    <!--=====================================-->
    <!--=        Service Area Start         =-->
    <!--=====================================-->
    @include('pages.snippets.services')

    <!--=====================================-->
    <!--=      Clients Feedback Area Start  =-->
    <!--=====================================-->
    @include('pages.snippets.feedback')

    <!--=====================================-->
    <!--=      Statistics Area Start      =-->
    <!--=====================================-->
    @include('pages.snippets.statistics')

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
                arrows: true,
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

    <script>
        // Wrap every letter in a span
        var textWrapper = document.querySelector('.ml9 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({loop: true})
            .add({
                targets: '.ml9 .letter',
                scale: [0, 1],
                duration: 900,
                elasticity: 600,
                delay: (el, i) => 45 * (i+1)
            }).add({
            targets: '.ml9',
            opacity: 0,
            duration: 900,
            easing: "easeOutExpo",
            delay: 1000
        });
    </script>
@endsection

