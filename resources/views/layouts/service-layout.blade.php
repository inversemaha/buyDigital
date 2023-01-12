<!DOCTYPE html>
<html class="no-js smooth-scroll" lang="en">
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Buy Digital | Official Website</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="robots" content="all"/>
    <meta name="robots" content="max-snippet:20, max-image-preview:large"/>
    <meta name="theme-color" content="#ff914f"/>
    <meta name="msapplication-navbutton-color" content="#ff914f"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#ff914f"/>
    <meta name="robots" content="index,follow"/>
    <meta name="distribution" content="web"/>
    <meta name="copyright" content="Buy Digital"/>
    <meta name='language' content='English'/>
    <link rel="canonical" href="https://buydigitalbd.com/"/>
    <meta name="publisher" content=""/>

    <meta name="twitter:card" content=""/>
    <meta property="twitter:title" content=""/>
    <meta property="twitter:description" content=""/>
    <meta property="twitter:locale" content="en-GB"/>
    <meta property="twitter:image" content=""/>
    <meta property="twitter:url" content="https://twitter.com/"/>

    <meta property="og:type" content="article"/>
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:locale" content="en-GB"/>
    <meta property="og:image" content=""/>
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content="GG Link">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/media/favicon.png">
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="/assets/css/vendor/slick.css">
    <link rel="stylesheet" href="/assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="/assets/css/vendor/sal.css">
    <link rel="stylesheet" href="/assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/vendor/green-audio-player.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/odometer-theme-default.css">
    <script src="/assets/js/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="/assets/js/slick.js"></script>
    <script src="/assets/js/anime.min.js"></script>
    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="/assets/css/app.css">
    <style>
        .logo-size{
            height: 60px !important;
        }
        .mainmenu > li > a {
            color: var(--color-dark);
        }
        .axil-sticky .mainmenu > li > a {
            color: var(--color-dark);
        }
    </style>

</head>

<body class="sticky-header">
@include('sweetalert::alert')
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->
<a href="#main-wrapper" id="backto-top" class="back-to-top">
    <i class="far fa-angle-double-up"></i>
</a>

<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->

<div class="my_switcher d-none d-lg-block">
    <ul>
        <li title="Light Mode">
            <a href="javascript:void(0)" class="setColor light" data-theme="light">
                <i class="fal fa-lightbulb-on"></i>
            </a>
        </li>
        <li title="Dark Mode">
            <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                <i class="fas fa-moon"></i>
            </a>
        </li>
    </ul>
</div>

<div id="main-wrapper" class="main-wrapper">

    <!--=====================================-->
    <!--=        Header Area Start       	=-->
    <!--=====================================-->
    <header class="header axil-header header-style-1">
        <div id="axil-sticky-placeholder"></div>
        <div class="axil-mainmenu">
            <div class="container">
                <div class="header-navbar">
                    <div class="header-logo">
                        <a href="/"><img class="light-version-logo logo-size"  src="/assets/media/logo.png" alt="logo"></a>
                        <a href="/"><img class="dark-version-logo logo-size" src="/assets/media/logo.png" alt="logo"></a>
                        <a href="/"><img class="sticky-logo logo-size" src="/assets/media/logo.png" alt="logo"></a>
                    </div>
                    <div class="header-main-nav">
                        <!-- Start Mainmanu Nav -->
                        <nav class="mainmenu-nav" id="mobilemenu-popup">
                            <div class="d-block d-lg-none">
                                <div class="mobile-nav-header">
                                    <div class="mobile-nav-logo">
                                        <a href="/">
                                            <img class="light-mode" src="/assets/media/logo.png" alt="Site Logo">
                                            <img class="dark-mode" src="/assets/media/logo.png" alt="Site Logo">
                                        </a>
                                    </div>
                                    <button class="mobile-menu-close" data-bs-dismiss="offcanvas"><i
                                            class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <ul class="mainmenu">
                                <li class="menu-item" data-section-anchor="about">
                                    <a href="/#about">About</a>
                                </li>
                                <li class="menu-item" data-section-anchor="service">
                                    <a href="/services">Services</a>
                                </li>
                                <li class="menu-item" data-section-anchor="team">
                                    <a href="/#team">Board Members</a>
                                </li>
                                <li class="menu-item" data-section-anchor="sisterConcern">
                                    <a href="/sisters-concern">Sister Concerns</a>
                                </li>
                                <li class="menu-item" data-section-anchor="career">
                                    <a href="/career/board">Career</a>
                                </li>
                                <li class="menu-item" data-section-anchor="contact">
                                    <a href="/#contact">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- End Mainmanu Nav -->
                    </div>

                    <div class="header-action">
                        <ul class="list-unstyled">
                            {{--<li class="sidemenu-btn d-lg-block d-none">
                                <button class="btn-wrap" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasMenuRight">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </li>--}}
                            <li class="mobile-menu-btn sidemenu-btn d-lg-none d-block">
                                <button class="btn-wrap" data-bs-toggle="offcanvas"
                                        data-bs-target="#mobilemenu-popup">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </li>
                            <li class="my_switcher d-block d-lg-none">
                                <ul>
                                    <li title="Light Mode">
                                        <a href="javascript:void(0)" class="setColor light" data-theme="light">
                                            <i class="fal fa-lightbulb-on"></i>
                                        </a>
                                    </li>
                                    <li title="Dark Mode">
                                        <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                                            <i class="fas fa-moon"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield("content")
    <!--=====================================-->
    <!--=        Footer Area Start       	=-->
    <!--=====================================-->


    <footer id="contact" class="bg-color-dark text-center text-lg-start text-white">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row my-4">
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase text-white mb-4">QUICK LINKS</h5>

                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#about" class="text-white"></i>About Us</a>
                        </li>
                        <li class="mb-2">
                            <a href="/#services" class="text-white"></i>Services</a>
                        </li>
                        <li class="mb-2">
                            <a href="/sisters-concern" class="text-white"></i>Sister Concerns</a>
                        </li>
                        <li class="mb-2">
                            <a href="/career/board" class="text-white"></i>Career</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase text-white mb-4">SOCIAL LINKS</h5>

                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="https://www.facebook.com/buydigitalbd/" class="text-white"><i class="fab fa-facebook-square  px-2"></i>Facebook</a>
                        </li>
                        <li class="mb-2">
                            <a href="https://www.instagram.com/buydigitalbd/" class="text-white"><i class="fab fa-instagram px-2"></i>Instagram </a>
                        </li>
                        <li class="mb-2">
                            <a href="https://www.linkedin.com/company/buy-digital-bd/" class="text-white"><i class="fab fa-linkedin px-2"></i>Linkedin</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase text-white mb-4">Contact</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p><i class="fas fa-map-marker-alt pe-2"></i>147/C Green Road, 4th Floor<i class="fas fa-building pe-2"></i></p>
                        </li>
                        <li>
                            <p><i class="fas fa-phone pe-2"></i>+880 1717-808849</p>
                        </li>
                        <li>
                            <p><i class="fas fa-envelope pe-2 mb-0"></i>sales@buydigitalbd.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2023 All Rights Reserved
            <a class="text-white" href="https://buydigitalbd.com/">Buy Digital.</a>
        </div>
        <!-- Copyright -->
    </footer>


    <!--=====================================-->
    <!--=       Offcanvas Menu Area       	=-->
    <!--=====================================-->
    <div class="offcanvas offcanvas-end header-offcanvasmenu" tabindex="-1" id="offcanvasMenuRight">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="row ">
                <div class="col-lg-5 col-xl-6">
                    <ul class="main-navigation list-unstyled">
                        <li><a  onclick="closeNav()" href="/#about">About</a></li>
                        <li><a id="serviceID" href="/#services">Services</a></li>
                        <li><a id="teamID" href="/#team">Board Members</a></li>
                        <li><a href="/sister-concern">Sister Concern</a></li>
                    </ul>
                </div>
                <div class="col-lg-7 col-xl-6">
                    <div class="contact-info-wrap">
                        <div class="contact-inner">
                            <address class="address">
                                <span class="title">Contact Information</span>
                                <p>147/C Green Road,<br> 4th Floor<i class="fas fa-building"></i></p>
                            </address>
                            <address class="address">
                                <span class="title">We're Available 24/7. Call Now.</span>
                                <a class="tel" href="tel:01717-808849"><i class="fas fa-phone"></i>(+880)
                                    1717-808849</a>
                                <a class="tel" href="mailto:sales@buydigitalbd.com "><i class="fas fa-envelope"></i>sales@buydigitalbd.com</a>
                            </address>
                        </div>
                        <div class="contact-inner">
                            <h5 class="title">Find us here</h5>
                            <div class="contact-social-share">
                                <ul class="social-share list-unstyled">
                                    <li><a href=" https://www.facebook.com/buydigitalbd/"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/buydigitalbd/"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/buy-digital-bd/"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jquery Js -->
<script src="/assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="/assets/js/vendor/bootstrap.min.js"></script>
<script src="/assets/js/vendor/isotope.pkgd.min.js"></script>
<script src="/assets/js/vendor/imagesloaded.pkgd.min.js"></script>
<script src="/assets/js/vendor/odometer.min.js"></script>
<script src="/assets/js/vendor/jquery-appear.js"></script>
<script src="/assets/js/vendor/slick.min.js"></script>
<script src="/assets/js/vendor/sal.js"></script>
<script src="/assets/js/vendor/jquery.magnific-popup.min.js"></script>
<script src="/assets/js/vendor/js.cookie.js"></script>
<script src="/assets/js/vendor/jquery.style.switcher.js"></script>
<script src="/assets/js/vendor/jquery.countdown.min.js"></script>
<script src="/assets/js/vendor/tilt.js"></script>
<script src="/assets/js/vendor/green-audio-player.min.js"></script>
<script src="/assets/js/vendor/jquery.nav.js"></script>

<!-- Site Scripts -->
<script src="/assets/js/app.js"></script>
<script>
    $('#offcanvasMenuRight').click(function() {
        $('#aboutID').modal('hide');
    });
</script>
</body>

</html>
