<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <meta name="description" content="">
    <!-- discription for website  -->
    <title>Nirvan Yatra</title>

    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon.png') }}s">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Just+Another+Hand&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/gotur-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/daterangepicker-master/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/slick-carousel/slick.css') }}">

    <link href="https://fonts.cdnfonts.com/css/samarkan" rel="stylesheet">
    <!-- samarkan font -->

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/gotur.css') }}">
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url('{{ asset('storage/logos/logo-light.png') }}');">
        </div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">

        @include('landing_page.header')

        @include('landing_page.main_slide')

        {{-- @include('landing_page.main_app') --}}
        @yield('content')

        @include('landing_page.footer')

    </div>
    <!-- /.page-wrapper -->

    <div class="header-right-sidebar">
        <div class="header-right-sidebar__overlay header-right-sidebar__toggler"></div>
        <div class="header-right-sidebar__content">
            <span class="header-right-sidebar__close header-right-sidebar__toggler"><i class="fa fa-times"></i></span>
            <div class="header-right-sidebar__logo-box">
                <a href="index.html" aria-label="logo image"> <img src="{{ asset('assets/images/logo/logo-dark.png') }}"
                        width="158" alt="gotur"> </a>
            </div>
            <div class="header-right-sidebar__container">
                <div class="header-right-sidebar__container__about wow fadeInUp" data-wow-duration='1500ms'
                    data-wow-delay='300ms'>
                    <h3 class="header-right-sidebar__container__title">We’re Number One Travel Adventure Company</h3>
                    <p class="header-right-sidebar__container__text">It is a long established fact that a reader will be
                        distracted the readable content of a page when looking at layout the point of using lorem the is
                        Ipsum less normal distribution of letters.</p>
                </div>
                <div class="header-right-sidebar__container__contact">
                    <h3 class="header-right-sidebar__container__title">Contact Us</h3>
                    <ul class="header-right-sidebar__container__list list-unstyled">
                        <li class="header-right-sidebar__container__list__item wow fadeInUp" data-wow-duration='1500ms'
                            data-wow-delay='300ms'>
                            <div class="header-right-sidebar__container__icon">
                                <i class="icon-email"></i>
                            </div>
                            <div class="header-right-sidebar__container__list__content">
                                <span class="header-right-sidebar__container__list__title">send email</span>
                                <a href="mailto:nirvanyatra@gmail.com">nirvanyatra@gmail.com</a>
                            </div>
                        </li>
                        <li class="header-right-sidebar__container__list__item wow fadeInUp" data-wow-duration='1500ms'
                            data-wow-delay='500ms'>
                            <div class="header-right-sidebar__container__icon">
                                <i class="icon-telephone"></i>
                            </div>
                            <div class="header-right-sidebar__container__list__content">
                                <span class="header-right-sidebar__container__list__title">call agent</span>
                                <a href="tel:+919011011366">+91 90110 11366</a>
                            </div>
                        </li>
                        <li class="header-right-sidebar__container__list__item wow fadeInUp" data-wow-duration='1500ms'
                            data-wow-delay='700ms'>
                            <div class="header-right-sidebar__container__icon">
                                <i class="icon-clock"></i>
                            </div>
                            <div class="header-right-sidebar__container__list__content">
                                <span class="header-right-sidebar__container__list__title">opening time</span>
                                <p>Hours: Mon-Sun: 8am – 8pm</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.header-right-sidebar__content -->
    </div>
    <div id="scroll-top" class="scroll-top">
        <span id="scroll-top-value" class="scroll-top-value"></span>
    </div>

    <script src="{{ asset('assets/vendors/jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/slick-carousel/slick.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('assets/vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/daterangepicker-master/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/daterangepicker-master/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-circleType/jquery.circleType.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-lettering/jquery.lettering.min.js') }}"></script>

    <!-- GSAP -->
    <script src="{{ asset('assets/vendors/gsap/gsap.js') }}"></script>
    <script src="{{ asset('assets/vendors/gsap/scrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/gsap/splittext.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/gsap/gotur-gsap.js') }}"></script>

    <!-- template js -->
    <script src="{{ asset('assets/js/gotur.js') }}"></script>
</body>

</html>