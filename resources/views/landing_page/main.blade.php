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
        <div class="preloader__image" style="background-image: url('{{ asset('assets/images/loader.png') }}');"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">


        @include('landing_page.header')

        @include('landing_page.main_slide')

        <section class="about-two about-two--two section-space" id="about">
            <div class="container">
                <div class="row gutter-y-40">
                    <div class="col-lg-6">
                        <div class="about-two__thumb wow fadeInLeft" data-wow-duration='1500ms' data-wow-delay='300ms'>
                            <div class="about-two__thumb__item  ">
                                <img src="{{ asset('assets/images/about/about-2-1.jpg') }}" alt="gotur image">
                            </div>
                            <!-- /.about-two__thumb__item -->
                            <div class="about-two__thumb__item-small  ">
                                <img src="{{ asset('assets/images/about/about-s-2-1.jpg') }}" alt="gotur image">
                            </div>
                            <!-- /.about-two__thumb__item -->
                            <div class="about-two__thumb__funfact">
                                <div class="about-two__thumb__funfact__icon">
                                    <i class="icon-icon-4"></i>
                                </div>
                                <!-- /.about-two__thumb__funfact__icon -->
                                <div class="about-two__thumb__funfact__content count-box">
                                    <h2 class="about-two__thumb__funfact__count">
                                        <span class="count-text" data-stop="25" data-speed="2000"></span>
                                        <span>Years</span>
                                    </h2>
                                    <!-- /.about-two__thumb__funfact__count -->
                                    <p class="about-two__thumb__funfact__text">Of Experience</p>
                                    <!-- /.about-two__thumb__funfact__text -->
                                </div>
                                <!-- /.about-two__thumb__funfact__content -->
                            </div>
                            <!-- /.about-two__thumb__funfact -->
                            <div class="about-two__thumb__item-element">
                                <img src="{{ asset('assets/images/shapes/corki.png') }}" alt="gotur image">
                            </div>
                            <!-- /.about-two__thumb__item -->
                        </div>
                        <!-- /.about-two__left -->
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="about-two__right">
                            <div class="sec-title  ">
                                <h6 class="sec-title__tagline bw-split-in-right">About company</h6>
                                <!-- /.sec-title__tagline -->
                                <h3 class="sec-title__title bw-split-in-left">Adventure. Serenity. Self-Discovery.
                                </h3>
                                <!-- /.sec-title__title -->
                            </div>
                            <!-- /.sec-title -->
                            <p class="about-two__top__text wow fadeInUp" data-wow-duration='1500ms'
                                data-wow-delay='300ms'>Nirvan Yatra isn’t just about travel—it’s about experiences that
                                refresh your soul. From peaceful camping under the stars to exhilarating treks and
                                spiritual retreats, we create journeys that stay with you forever.
                            </p>
                            <!-- /.about-two__top__text -->
                            <div class="about-two__feature">
                                <div class="row gutter-y-20 gutter-x-20">
                                    <div class="col-xl-6 col-lg-12 col-md-6 wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='300ms'>
                                        <div class="about-two__feature-vestion">
                                            <div class="about-two__feature_icon">
                                                <i class="icon-flag"></i>
                                            </div>
                                            <!-- /.about-two__feature_icon -->
                                            <div class="about-two__feature-content">
                                                <h5 class="about-two__feature-title">Trusted Travel Experts</h5>
                                                <!-- /.about-two__feature-title -->
                                                <p class="about-two__feature-text">Unique adventures designed for true
                                                    explorers.
                                                </p>
                                                <!-- /.about-two__feature-text -->
                                            </div>
                                            <!-- /.about-two__feature-content -->
                                        </div>
                                        <!-- /.about-two__feature-vestion -->
                                    </div>
                                    <!-- /.col-xl-6 col-lg-12 col-md-6 -->
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="about-two__feature-vestion wow fadeInUp"
                                            data-wow-duration='1500ms' data-wow-delay='400ms'>
                                            <div class="about-two__feature_icon">
                                                <i class="icon-misstion"></i>
                                            </div>
                                            <!-- /.about-two__feature_icon -->
                                            <div class="about-two__feature-content">
                                                <h5 class="about-two__feature-title">Our Vision</h5>
                                                <!-- /.about-two__feature-title -->
                                                <p class="about-two__feature-text"> Connecting people with nature,
                                                    adventure, and inner peace.
                                                </p>
                                                <!-- /.about-two__feature-text -->
                                            </div>
                                            <!-- /.about-two__feature-content -->
                                        </div>
                                        <!-- /.about-two__feature-vestion -->
                                    </div>
                                    <!-- /.col-xl-6 col-lg-12 col-md-6 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.about-two__feature -->
                            <div class="about-two__button wow fadeInUp" data-wow-duration='1500ms'
                                data-wow-delay='300ms'>
                                <a href="blog-details-left.html" class="gotur-btn gotur-btn--primary">Discover More
                                    <span class="icon"><i class="icon-right"></i></span><!-- /.icon --></a>
                                <div class="about-two__button__author">
                                    <div class="about-two__button__author__thumb">
                                        <img src="{{ asset('assets/images/resources/about-author-1-1.') }}jpg"
                                            alt="author">
                                    </div>
                                    <!-- /.about-two__button__call__icon -->
                                    <div class="about-two__button__author__content">
                                        <h5 class="about-two__button__author__name">Bijayata</h5>
                                        <span class="about-two__button__author__dec">Founder</span>
                                        <!-- /.about-two__button__author__dec -->
                                    </div>
                                    <!-- /.about-two__button__call__content -->
                                </div>
                                <!-- /.about-two__button__call -->
                            </div>
                            <!-- /.about-two__button -->
                        </div>
                        <!-- /.about-two__right -->
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->

            <!-- /.client-carousel -->
            <div class="about-two__element-one">
                <img src="{{ asset('assets/images/shapes/about-1-') }}1.png" alt>
            </div>
            <!-- /.about-two__element-one -->
            <div class="about-two__element-two">
                <img src="{{ asset('assets/images/shapes/corki.png') }}" alt="gotur image">
            </div>
            <!-- /.about-two__element-one -->
        </section>
        <!-- /.about-two -->

        <section class="why-choose-one section-space-bottom">
            <div class="container">
                <div class="row align-items-center gutter-y-40">
                    <div class="col-lg-6">
                        <div class="why-choose-one__thumb wow fadeInLeft" data-wow-duration='1500ms'
                            data-wow-delay='400ms'>
                            <div class="row align-items-center gutter-y-30">
                                <div class="col-lg-6">
                                    <div class="why-choose-one__thumb__item-one  ">
                                        <img src="{{ asset('assets/images/about/about-s-8-2.') }}jpg" alt="image">
                                    </div>
                                    <!-- /.why-choose-one__thumb__item -->
                                    <div class="why-choose-one__thumb__item-one  ">
                                        <img src="{{ asset('assets/images/about/about-s-8-1.') }}jpg" alt="image">
                                    </div>
                                    <!-- /.why-choose-one__thumb__item -->
                                </div>
                                <!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <div class="why-choose-one__thumb__item-two  ">
                                        <img src="{{ asset('assets/images/about/about-8-1.') }}jpg" alt="image">
                                    </div>
                                    <!-- /.why-choose-one__thumb__item -->
                                </div>
                                <!-- /.col-lg-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.why-choose-one__thumb -->
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="why-choose-one__content">
                            <div class="sec-title ">
                                <h6 class="sec-title__tagline bw-split-in-right">Why Choose Us</h6>
                                <!-- /.sec-title__tagline -->
                                <h3 class="sec-title__title bw-split-in-left"> Get The <span>Best Travel</span>
                                    Experience With Gotur</h3>
                                <!-- /.sec-title__title -->
                            </div>
                            <!-- /.sec-title -->
                            <p class="why-choose-one__content__text wow fadeInLeft" data-wow-duration='1500ms'
                                data-wow-delay='400ms'>It is a long established fact that a reader will be distracted
                                the readable content of a page when looking at layout the point.</p>
                            <!-- /.why-choose-one__content__text -->
                            <ul class="why-choose-one__list">
                                <li>
                                    <div class="why-choose-one__list__item wow fadeInLeft" data-wow-duration='1500ms'
                                        data-wow-delay='200ms'>
                                        <div class="why-choose-one__icon">
                                            <i class="icon-flag"></i>
                                        </div>
                                        <!-- /.why-choose-one__icon -->
                                        <h5 class="why-choose-one__title">Trusted travel guide</h5>
                                        <!-- /.why-choose-one__title -->
                                    </div>
                                    <!-- /.why-choose-one__list__item -->
                                </li>
                                <li>
                                    <div class="why-choose-one__list__item wow fadeInLeft" data-wow-duration='1500ms'
                                        data-wow-delay='400ms'>
                                        <div class="why-choose-one__icon">
                                            <i class="icon-calender"></i>
                                        </div>
                                        <!-- /.why-choose-one__icon -->
                                        <h5 class="why-choose-one__title">Instant Booking</h5>
                                        <!-- /.why-choose-one__title -->
                                    </div>
                                    <!-- /.why-choose-one__list__item -->
                                </li>
                                <li>
                                    <div class="why-choose-one__list__item wow fadeInLeft" data-wow-duration='1500ms'
                                        data-wow-delay='600ms'>
                                        <div class="why-choose-one__icon">
                                            <i class="icon-travle1"></i>
                                        </div>
                                        <!-- /.why-choose-one__icon -->
                                        <h5 class="why-choose-one__title">World Class Travel</h5>
                                        <!-- /.why-choose-one__title -->
                                    </div>
                                    <!-- /.why-choose-one__list__item -->
                                </li>
                                <li>
                                    <div class="why-choose-one__list__item wow fadeInLeft" data-wow-duration='1500ms'
                                        data-wow-delay='800ms'>
                                        <div class="why-choose-one__icon">
                                            <i class="icon-perasut"></i>
                                        </div>
                                        <!-- /.why-choose-one__icon -->
                                        <h5 class="why-choose-one__title">Paragliding Tour</h5>
                                        <!-- /.why-choose-one__title -->
                                    </div>
                                    <!-- /.why-choose-one__list__item -->
                                </li>
                            </ul>
                            <!-- /.why-choose-one__list -->
                        </div>
                        <!-- /.why-choose-one__content -->
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
            <div class="why-choose-one__element">
                <img src="{{ asset('assets/images/shapes/perasut-1-') }}1.png" alt>
            </div>
            <!-- /.why-choose-one__element -->
        </section>
        <!-- /.why-choose-one -->

        <section class="destination-filter section-space" id="destination">
            <div class="container">
                <div class="destination-filter__top">
                    <div class="sec-title text-center">
                        <h6 class="sec-title__tagline bw-split-in-right">Popular Destination</h6>
                        <!-- /.sec-title__tagline -->
                        <h3 class="sec-title__title bw-split-in-left">Popular <span> Destinations</span></h3>
                        <!-- /.sec-title__title -->
                    </div>
                    <!-- /.sec-title -->
                    <p class="destination-filter__top__text">The island of Crete offers a rare mix of splendid beaches,
                        amazing mountain landscap, vibrant towns and cosy villages inhabited by warm-hearted locals, all
                        this spiced</p>
                    <!-- /.destination-filter__top__text -->
                </div>
                <!-- /.destination-filter__top -->
                <div class="tabs-box">
                    <div class="destination-filter__btn tab-buttons">
                        <button data-tab="#itemOne" class="tab-btn gotur-btn">Europe</button>
                        <button data-tab="#itemTwo" class="tab-btn gotur-btn active-btn">Asia</button>
                        <button data-tab="#itemThree" class="tab-btn gotur-btn">Africa</button>
                        <button data-tab="#itemFour" class="tab-btn gotur-btn">South America</button>
                        <button data-tab="#itemFive" class="tab-btn gotur-btn">Australia</button>
                    </div>
                    <!-- /.tab-buttons -->
                    <div class="tabs-content">
                        <div class="item tab" id="itemOne">
                            <div class="row gutter-y-20 gutter-x-20">
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="destination-card-one wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="destination-card-one__thumb">
                                            <img src="assets/images/destination/destination-1-1.jpg"
                                                alt="destination">
                                            <a href="" class="destination-card-one__overly"></a>
                                        </div>
                                        <!-- /.destination-card-one__thumb -->
                                        <div class="destination-card-one__content">
                                            <h3 class="destination-card-one__title"><a
                                                    href="destination-details.html">Bangkok</a></h3>
                                            <!-- /.destination-card-one__title -->
                                        </div>
                                        <!-- /.destination-one__content -->
                                    </div>
                                    <!-- /.destination-one -->
                                </div>
                                <!-- /.col-xl-3 col-lg-4 col-md-4 col-sm-6 -->
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="destination-card-one wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='300ms'>
                                        <div class="destination-card-one__thumb">
                                            <img src="assets/images/destination/destination-1-2.jpg"
                                                alt="destination">
                                            <a href="" class="destination-card-one__overly"></a>
                                        </div>
                                        <!-- /.destination-card-one__thumb -->
                                        <div class="destination-card-one__content">
                                            <h3 class="destination-card-one__title"><a
                                                    href="destination-details.html">Tokyo</a></h3>
                                            <!-- /.destination-card-one__title -->
                                        </div>
                                        <!-- /.destination-one__content -->
                                    </div>
                                    <!-- /.destination-one -->
                                </div>
                                <!-- /.col-xl-3 col-lg-4 col-md-4 col-sm-6 -->
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="destination-card-one wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='500ms'>
                                        <div class="destination-card-one__thumb">
                                            <img src="assets/images/destination/destination-1-3.jpg"
                                                alt="destination">
                                            <a href="" class="destination-card-one__overly"></a>
                                        </div>
                                        <!-- /.destination-card-one__thumb -->
                                        <div class="destination-card-one__content">
                                            <h3 class="destination-card-one__title"><a
                                                    href="destination-details.html">Kashmir</a></h3>
                                            <!-- /.destination-card-one__title -->
                                        </div>
                                        <!-- /.destination-one__content -->
                                    </div>
                                    <!-- /.destination-one -->
                                </div>
                                <!-- /.col-xl-3 col-lg-4 col-md-4 col-sm-6 -->
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="destination-card-one wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='600ms'>
                                        <div class="destination-card-one__thumb">
                                            <img src="assets/images/destination/destination-1-4.jpg"
                                                alt="destination">
                                            <a href="" class="destination-card-one__overly"></a>
                                        </div>
                                        <!-- /.destination-card-one__thumb -->
                                        <div class="destination-card-one__content">
                                            <h3 class="destination-card-one__title"><a
                                                    href="destination-details.html">Indonesia</a></h3>
                                            <!-- /.destination-card-one__title -->
                                        </div>
                                        <!-- /.destination-one__content -->
                                    </div>
                                    <!-- /.destination-one -->
                                </div>
                                <!-- /.col-xl-3 col-lg-4 col-md-4 col-sm-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.item -->
                        <div class="item tab active-tab" id="itemTwo">
                            <div class="row gutter-y-20 gutter-x-20">
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="destination-card-one wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="destination-card-one__thumb">
                                            <img src="assets/images/destination/destination-1-1.jpg"
                                                alt="destination">
                                            <a href="" class="destination-card-one__overly"></a>
                                        </div>
                                        <!-- /.destination-card-one__thumb -->
                                        <div class="destination-card-one__content">
                                            <h3 class="destination-card-one__title"><a
                                                    href="destination-details.html">Bangkok</a></h3>
                                            <!-- /.destination-card-one__title -->
                                        </div>
                                        <!-- /.destination-one__content -->
                                    </div>
                                    <!-- /.destination-one -->
                                </div>
                                <!-- /.col-xl-3 col-lg-4 col-md-4 col-sm-6 -->
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="destination-card-one wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='300ms'>
                                        <div class="destination-card-one__thumb">
                                            <img src="assets/images/destination/destination-1-2.jpg"
                                                alt="destination">
                                            <a href="" class="destination-card-one__overly"></a>
                                        </div>
                                        <!-- /.destination-card-one__thumb -->
                                        <div class="destination-card-one__content">
                                            <h3 class="destination-card-one__title"><a
                                                    href="destination-details.html">Tokyo</a></h3>
                                            <!-- /.destination-card-one__title -->
                                        </div>
                                        <!-- /.destination-one__content -->
                                    </div>
                                    <!-- /.destination-one -->
                                </div>
                                <!-- /.col-xl-3 col-lg-4 col-md-4 col-sm-6 -->
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="destination-card-one wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='500ms'>
                                        <div class="destination-card-one__thumb">
                                            <img src="assets/images/destination/destination-1-3.jpg"
                                                alt="destination">
                                            <a href="" class="destination-card-one__overly"></a>
                                        </div>
                                        <!-- /.destination-card-one__thumb -->
                                        <div class="destination-card-one__content">
                                            <h3 class="destination-card-one__title"><a
                                                    href="destination-details.html">Kashmir</a></h3>
                                            <!-- /.destination-card-one__title -->
                                        </div>
                                        <!-- /.destination-one__content -->
                                    </div>
                                    <!-- /.destination-one -->
                                </div>
                                <!-- /.col-xl-3 col-lg-4 col-md-4 col-sm-6 -->
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="destination-card-one wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='600ms'>
                                        <div class="destination-card-one__thumb">
                                            <img src="assets/images/destination/destination-1-4.jpg"
                                                alt="destination">
                                            <a href="" class="destination-card-one__overly"></a>
                                        </div>
                                        <!-- /.destination-card-one__thumb -->
                                        <div class="destination-card-one__content">
                                            <h3 class="destination-card-one__title"><a
                                                    href="destination-details.html">Indonesia</a></h3>
                                            <!-- /.destination-card-one__title -->
                                        </div>
                                        <!-- /.destination-one__content -->
                                    </div>
                                    <!-- /.destination-one -->
                                </div>
                                <!-- /.col-xl-3 col-lg-4 col-md-4 col-sm-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.item -->
                        <div class="item tab" id="itemThree">
                            <div class="row gutter-y-20 gutter-x-20">
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="destination-card-one wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="destination-card-one__thumb">
                                            <img src="assets/images/destination/destination-1-1.jpg"
                                                alt="destination">
                                            <a href="" class="destination-card-one__overly"></a>
                                        </div>
                                        <!-- /.destination-card-one__thumb -->
                                        <div class="destination-card-one__content">
                                            <h3 class="destination-card-one__title"><a
                                                    href="destination-details.html">Bangkok</a></h3>
                                            <!-- /.destination-card-one__title -->
                                        </div>
                                        <!-- /.destination-one__content -->
                                    </div>
                                    <!-- /.destination-one -->
                                </div>
                                <!-- /.col-xl-3 col-lg-4 col-md-4 col-sm-6 -->
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="destination-card-one wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='300ms'>
                                        <div class="destination-card-one__thumb">
                                            <img src="assets/images/destination/destination-1-2.jpg"
                                                alt="destination">
                                            <a href="" class="destination-card-one__overly"></a>
                                        </div>
                                        <!-- /.destination-card-one__thumb -->
                                        <div class="destination-card-one__content">
                                            <h3 class="destination-card-one__title"><a
                                                    href="destination-details.html">Tokyo</a></h3>
                                            <!-- /.destination-card-one__title -->
                                        </div>
                                        <!-- /.destination-one__content -->
                                    </div>
                                    <!-- /.destination-one -->
                                </div>
                                <!-- /.col-xl-3 col-lg-4 col-md-4 col-sm-6 -->
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="destination-card-one wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='500ms'>
                                        <div class="destination-card-one__thumb">
                                            <img src="assets/images/destination/destination-1-3.jpg"
                                                alt="destination">
                                            <a href="" class="destination-card-one__overly"></a>
                                        </div>
                                        <!-- /.destination-card-one__thumb -->
                                        <div class="destination-card-one__content">
                                            <h3 class="destination-card-one__title"><a
                                                    href="destination-details.html">Kashmir</a></h3>
                                            <!-- /.destination-card-one__title -->
                                        </div>
                                        <!-- /.destination-one__content -->
                                    </div>
                                    <!-- /.destination-one -->
                                </div>
                                <!-- /.col-xl-3 col-lg-4 col-md-4 col-sm-6 -->
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="destination-card-one wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='600ms'>
                                        <div class="destination-card-one__thumb">
                                            <img src="assets/images/destination/destination-1-4.jpg"
                                                alt="destination">
                                            <a href="" class="destination-card-one__overly"></a>
                                        </div>
                                        <!-- /.destination-card-one__thumb -->
                                        <div class="destination-card-one__content">
                                            <h3 class="destination-card-one__title"><a
                                                    href="destination-details.html">Indonesia</a></h3>
                                            <!-- /.destination-card-one__title -->
                                        </div>
                                        <!-- /.destination-one__content -->
                                    </div>
                                    <!-- /.destination-one -->
                                </div>
                                <!-- /.col-xl-3 col-lg-4 col-md-4 col-sm-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.item -->
                        <div class="item tab" id="itemFour">
                            <div class="row gutter-y-20 gutter-x-20">
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="destination-card-one wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="destination-card-one__thumb">
                                            <img src="assets/images/destination/destination-1-1.jpg"
                                                alt="destination">
                                            <a href="" class="destination-card-one__overly"></a>
                                        </div>
                                        <!-- /.destination-card-one__thumb -->
                                        <div class="destination-card-one__content">
                                            <h3 class="destination-card-one__title"><a
                                                    href="destination-details.html">Bangkok</a></h3>
                                            <!-- /.destination-card-one__title -->
                                        </div>
                                        <!-- /.destination-one__content -->
                                    </div>
                                    <!-- /.destination-one -->
                                </div>
                                <!-- /.col-xl-3 col-lg-4 col-md-4 col-sm-6 -->
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="destination-card-one wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='300ms'>
                                        <div class="destination-card-one__thumb">
                                            <img src="assets/images/destination/destination-1-2.jpg"
                                                alt="destination">
                                            <a href="" class="destination-card-one__overly"></a>
                                        </div>
                                        <!-- /.destination-card-one__thumb -->
                                        <div class="destination-card-one__content">
                                            <h3 class="destination-card-one__title"><a
                                                    href="destination-details.html">Tokyo</a></h3>
                                            <!-- /.destination-card-one__title -->
                                        </div>
                                        <!-- /.destination-one__content -->
                                    </div>
                                    <!-- /.destination-one -->
                                </div>
                                <!-- /.col-xl-3 col-lg-4 col-md-4 col-sm-6 -->
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="destination-card-one wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='500ms'>
                                        <div class="destination-card-one__thumb">
                                            <img src="assets/images/destination/destination-1-3.jpg"
                                                alt="destination">
                                            <a href="" class="destination-card-one__overly"></a>
                                        </div>
                                        <!-- /.destination-card-one__thumb -->
                                        <div class="destination-card-one__content">
                                            <h3 class="destination-card-one__title"><a
                                                    href="destination-details.html">Kashmir</a></h3>
                                            <!-- /.destination-card-one__title -->
                                        </div>
                                        <!-- /.destination-one__content -->
                                    </div>
                                    <!-- /.destination-one -->
                                </div>
                                <!-- /.col-xl-3 col-lg-4 col-md-4 col-sm-6 -->
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="destination-card-one wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='600ms'>
                                        <div class="destination-card-one__thumb">
                                            <img src="assets/images/destination/destination-1-4.jpg"
                                                alt="destination">
                                            <a href="" class="destination-card-one__overly"></a>
                                        </div>
                                        <!-- /.destination-card-one__thumb -->
                                        <div class="destination-card-one__content">
                                            <h3 class="destination-card-one__title"><a
                                                    href="destination-details.html">Indonesia</a></h3>
                                            <!-- /.destination-card-one__title -->
                                        </div>
                                        <!-- /.destination-one__content -->
                                    </div>
                                    <!-- /.destination-one -->
                                </div>
                                <!-- /.col-xl-3 col-lg-4 col-md-4 col-sm-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.item -->
                        <div class="item tab" id="itemFive">
                            <div class="row gutter-y-20 gutter-x-20">
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="destination-card-one wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="destination-card-one__thumb">
                                            <img src="assets/images/destination/destination-1-1.jpg"
                                                alt="destination">
                                            <a href="" class="destination-card-one__overly"></a>
                                        </div>
                                        <!-- /.destination-card-one__thumb -->
                                        <div class="destination-card-one__content">
                                            <h3 class="destination-card-one__title"><a
                                                    href="destination-details.html">Bangkok</a></h3>
                                            <!-- /.destination-card-one__title -->
                                        </div>
                                        <!-- /.destination-one__content -->
                                    </div>
                                    <!-- /.destination-one -->
                                </div>
                                <!-- /.col-xl-3 col-lg-4 col-md-4 col-sm-6 -->
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="destination-card-one wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='300ms'>
                                        <div class="destination-card-one__thumb">
                                            <img src="assets/images/destination/destination-1-2.jpg"
                                                alt="destination">
                                            <a href="" class="destination-card-one__overly"></a>
                                        </div>
                                        <!-- /.destination-card-one__thumb -->
                                        <div class="destination-card-one__content">
                                            <h3 class="destination-card-one__title"><a
                                                    href="destination-details.html">Tokyo</a></h3>
                                            <!-- /.destination-card-one__title -->
                                        </div>
                                        <!-- /.destination-one__content -->
                                    </div>
                                    <!-- /.destination-one -->
                                </div>
                                <!-- /.col-xl-3 col-lg-4 col-md-4 col-sm-6 -->
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="destination-card-one wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='500ms'>
                                        <div class="destination-card-one__thumb">
                                            <img src="assets/images/destination/destination-1-3.jpg"
                                                alt="destination">
                                            <a href="" class="destination-card-one__overly"></a>
                                        </div>
                                        <!-- /.destination-card-one__thumb -->
                                        <div class="destination-card-one__content">
                                            <h3 class="destination-card-one__title"><a
                                                    href="destination-details.html">Kashmir</a></h3>
                                            <!-- /.destination-card-one__title -->
                                        </div>
                                        <!-- /.destination-one__content -->
                                    </div>
                                    <!-- /.destination-one -->
                                </div>
                                <!-- /.col-xl-3 col-lg-4 col-md-4 col-sm-6 -->
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="destination-card-one wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='600ms'>
                                        <div class="destination-card-one__thumb">
                                            <img src="assets/images/destination/destination-1-4.jpg"
                                                alt="destination">
                                            <a href="" class="destination-card-one__overly"></a>
                                        </div>
                                        <!-- /.destination-card-one__thumb -->
                                        <div class="destination-card-one__content">
                                            <h3 class="destination-card-one__title"><a
                                                    href="destination-details.html">Indonesia</a></h3>
                                            <!-- /.destination-card-one__title -->
                                        </div>
                                        <!-- /.destination-one__content -->
                                    </div>
                                    <!-- /.destination-one -->
                                </div>
                                <!-- /.col-xl-3 col-lg-4 col-md-4 col-sm-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.item -->
                    </div>
                    <!-- /.tabs-content -->
                </div>
                <!-- /.tabs-box -->
            </div>
            <!-- /.container -->
            <div class="destination-filter__element">
                <img src="{{ asset('assets/images/shapes/plan.png') }}" alt>
            </div>
            <!-- /.destination-filter__element -->
            <div class="destination-filter__element-two">
                <img src="{{ asset('assets/images/shapes/monjil.png') }}" alt>
            </div>
            <!-- /.destination-filter__element -->
        </section>
        <!-- /.destination-filter -->

        <section class="cta-five section-space">
            <div class="cta-five__inner">
                <div class="cta-five__bg wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms"
                    style="background-image: url(assets/images/backgrounds/cta-1-1.jpg);"></div>
                <!-- /.cta-five__bg -->
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6">
                            <div class="cta-five__funfact wow fadeInLeft" data-wow-duration="1500ms"
                                data-wow-delay="400ms">
                                <ul class="cta-five__funfact__list list-unstyled">
                                    <li class="cta-five__funfact__item">
                                        <div class="cta-five__funfact__icon">
                                            <i class="icon-travel-and-tourism"></i>
                                        </div>
                                        <!-- /.cta-five__funfact__icon -->
                                        <div class="cta-five__funfact__content count-box">
                                            <h3 class="cta-five__funfact__count">
                                                <span class="count-text" data-stop="30" data-speed="1500"></span>
                                                <span>k+</span>
                                            </h3>
                                            <!-- /.cta-five__funfact__count -->
                                            <p class="cta-five__funfact__text">Tours success</p>
                                            <!-- /.cta-five__funfact__text -->
                                        </div>
                                        <!-- /.cta-five__funfact__content -->
                                    </li>
                                    <!-- /.cta-five__funfact__item -->
                                    <li class="cta-five__funfact__item">
                                        <div class="cta-five__funfact__icon">
                                            <i class="icon-tourist"></i>
                                        </div>
                                        <!-- /.cta-five__funfact__icon -->
                                        <div class="cta-five__funfact__content count-box">
                                            <h3 class="cta-five__funfact__count">
                                                <span class="count-text" data-stop="6500" data-speed="1500"></span>
                                                <span>+</span>
                                            </h3>
                                            <!-- /.cta-five__funfact__count -->
                                            <p class="cta-five__funfact__text">Happy Traveler</p>
                                            <!-- /.cta-five__funfact__text -->
                                        </div>
                                        <!-- /.cta-five__funfact__content -->
                                    </li>
                                    <!-- /.cta-five__funfact__item -->
                                    <li class="cta-five__funfact__item">
                                        <div class="cta-five__funfact__icon">
                                            <i class="icon-trophy"></i>
                                        </div>
                                        <!-- /.cta-five__funfact__icon -->
                                        <div class="cta-five__funfact__content count-box">
                                            <h3 class="cta-five__funfact__count">
                                                <span class="count-text" data-stop="6561" data-speed="1500"></span>
                                                <span>+</span>
                                            </h3>
                                            <!-- /.cta-five__funfact__count -->
                                            <p class="cta-five__funfact__text">Awards Winning</p>
                                            <!-- /.cta-five__funfact__text -->
                                        </div>
                                        <!-- /.cta-five__funfact__content -->
                                    </li>
                                    <!-- /.cta-five__funfact__item -->
                                    <li class="cta-five__funfact__item">
                                        <div class="cta-five__funfact__icon">
                                            <i class="icon-quality"></i>
                                        </div>
                                        <!-- /.cta-five__funfact__icon -->
                                        <div class="cta-five__funfact__content count-box">
                                            <h3 class="cta-five__funfact__count">
                                                <span class="count-text" data-stop="25" data-speed="1500"></span>
                                                <span>+</span>
                                            </h3>
                                            <!-- /.cta-five__funfact__count -->
                                            <p class="cta-five__funfact__text">Our Experience</p>
                                            <!-- /.cta-five__funfact__text -->
                                        </div>
                                        <!-- /.cta-five__funfact__content -->
                                    </li>
                                    <!-- /.cta-five__funfact__item -->
                                </ul>
                                <!-- /.cta-five__funfact__list -->
                            </div>
                            <!-- /.cta-five__thumb -->
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="cta-five__shape wow fadeInRight" data-wow-duration="1500ms"
                                data-wow-delay="400ms">
                                <img src="{{ asset('assets/images/shapes/cta-1-1.png') }}" alt>
                            </div>
                            <!-- /.cta-five__content -->
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.cta-five__inner -->
        </section>
        <!-- /.cta-five -->

        <section class="feature-package feature-package--two" id="guide">
            <div class="container">
                <div class="feature-package__top">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="sec-title ">
                                <h6 class="sec-title__tagline bw-split-in-right">popular tours</h6>
                                <!-- /.sec-title__tagline -->
                                <h3 class="sec-title__title bw-split-in-left">Most Popular <span>Tours</span></h3>
                                <!-- /.sec-title__title -->
                            </div>
                            <!-- /.sec-title -->
                        </div>
                        <!-- /.col-lg-8 -->
                        <div class="col-lg-4">
                            <div class="feature-package__bottom__nav">
                                <button class="feature-package__carousel__nav--left"><span
                                        class="icon-arrow-left"></span></button>
                                <button class="feature-package__carousel__nav--right"><span
                                        class="icon-arrow-right"></span></button>
                            </div>
                        </div>
                        <!-- /.col-lg-4 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.feature-package__top -->
            </div>
            <!-- /.container -->
            <div class="container-fluid">
                <div class="feature-package__inner">
                    <div class="feature-package__carousel gotur-owl__carousel gotur-owl__carousel--custom-nav gotur-owl__carousel--with-shadow owl-carousel owl-theme"
                        data-owl-nav-prev=".feature-package__carousel__nav--left"
                        data-owl-nav-next=".feature-package__carousel__nav--right"
                        data-owl-options='{
                    "items": 1,
                    "margin": 30,
                    "loop": false,
                    "smartSpeed": 700,
                    "nav": false,
                    "dots": false,
                    "autoplay": false,
                    "responsive": {
                        "0": {
                            "items": 1
                        },
                        "576": {
                            "items": 2
                        },
                        "768": {
                            "items": 2
                        },
                        "992": {
                            "items": 3
                        },
                        "1199": {
                            "items": 3
                        },
                        "1500": {
                            "items": 4
                        }
                    }
                }'>
                        <div class="item">
                            <div class="listing-card-four wow fadeInUp" data-wow-duration='1500ms'
                                data-wow-delay='100ms'>
                                <div class="listing-card-four__image">
                                    <img src="{{ asset('assets/images/blog/listing-list-4-') }}1.jpg"
                                        alt="All Inclusive Ultimate Circle Island Day with Lunch">
                                    <div class="listing-card-four__btn-group">


                                        <div class="listing-card-four__featured">Featured</div>
                                        <!-- /.listing-card-four__featured -->

                                    </div>
                                    <!-- /.listing-card-four__btn-group -->
                                    <div class="listing-card-four__btns">
                                        <a href="#"><i class="far fa-heart"></i></a>
                                        <div class="listing-card-four__btns__hover">
                                            <a href="#" class="listing-card-four__popup card__popup"
                                                data-gallery-options='{
                    "items": [
                        {
                            "src": "assets/images/blog/listing-1-1.jpg"
                        },
                        {
                            "src": "assets/images/blog/listing-1-2.jpg"
                        },
                        {
                            "src": "assets/images/blog/listing-1-3.jpg"
                        }
                    ],
                    "gallery": {
                        "enabled": true
                    },
                    "type": "image"
                }'>
                                                <span class="icon-image"></span>
                                            </a>
                                            <a class="video-popup"
                                                href="https://www.youtube.com/watch?v=0MuL8fd3pb8"><span
                                                    class="icon-video"></span></a>
                                        </div>
                                        <!-- /.listing-card-four__btns__hover -->
                                    </div>
                                    <ul class="listing-card-four__meta list-unstyled">
                                        <li>
                                            <a href="tour-listing-details-2.html"> <span
                                                    class="listing-card-four__meta__icon"> <i class="icon-pin1"></i>
                                                </span>Slingerland</a>
                                        </li>
                                        <li>
                                            <a href="tour-listing-details-2.html"> <span
                                                    class="listing-card-four__meta__icon"> <i
                                                        class="icon-calendar"></i>
                                                </span>6 Days, 3 Night</a>
                                        </li>
                                    </ul>
                                    <!-- /.listing-card-four__meta -->
                                    <a href="tour-listing-details-2.html"
                                        class="listing-card-four__image__overly"></a>
                                </div>
                                <!-- /.listing-card-four__image -->
                                <div class="listing-card-four__content">
                                    <div class="listing-card-four__rating">
                                        <span>(10 Review)</span>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <!-- /.listing-card-four__rating -->
                                    <h3 class="listing-card-four__title"><a href="tour-listing-details-2.html">All
                                            Inclusive Ultimate Circle Island Day with Lunch</a></h3>
                                    <!-- /.listing-card-four__title -->

                                    <div class="listing-card-four__content__btn">
                                        <div class="listing-card-four__price">
                                            <span class="listing-card-four__price__sub">Per Day</span>
                                            <span class="listing-card-four__price__number">$59.00</span>
                                        </div>
                                        <!-- /.listing-card-four__price -->
                                        <a href="tour-listing-details-2.html"
                                            class="listing-card-four__btn gotur-btn">
                                            Book Now <span class="icon"><i class="icon-right"></i> </span></a>
                                    </div>
                                    <!-- /.listing-card-four__content__btn -->
                                </div>
                                <!-- /.listing-card-four__content -->
                            </div>
                            <!-- /.listing-card-four -->
                        </div>
                        <!-- /.item -->
                        <div class="item">
                            <div class="listing-card-four wow fadeInUp" data-wow-duration='1500ms'
                                data-wow-delay='100ms'>
                                <div class="listing-card-four__image">
                                    <img src="assets/images/blog/listing-list-4-2.jpg"
                                        alt="Molokini and Turtle Town Snorkeling Adventure Aboard">
                                    <div class="listing-card-four__btn-group">

                                        <div class="listing-card-four__discount">-40% Off</div>
                                        <!-- /.listing-card-four__discount -->


                                        <div class="listing-card-four__featured">Featured</div>
                                        <!-- /.listing-card-four__featured -->

                                    </div>
                                    <!-- /.listing-card-four__btn-group -->
                                    <div class="listing-card-four__btns">
                                        <a href="#"><i class="far fa-heart"></i></a>
                                        <div class="listing-card-four__btns__hover">
                                            <a href="#" class="listing-card-four__popup card__popup"
                                                data-gallery-options='{
                    "items": [
                        {
                            "src": "assets/images/blog/listing-1-1.jpg"
                        },
                        {
                            "src": "assets/images/blog/listing-1-2.jpg"
                        },
                        {
                            "src": "assets/images/blog/listing-1-3.jpg"
                        }
                    ],
                    "gallery": {
                        "enabled": true
                    },
                    "type": "image"
                }'>
                                                <span class="icon-image"></span>
                                            </a>
                                            <a class="video-popup"
                                                href="https://www.youtube.com/watch?v=0MuL8fd3pb8"><span
                                                    class="icon-video"></span></a>
                                        </div>
                                        <!-- /.listing-card-four__btns__hover -->
                                    </div>
                                    <ul class="listing-card-four__meta list-unstyled">
                                        <li>
                                            <a href="tour-listing-details-2.html"> <span
                                                    class="listing-card-four__meta__icon"> <i class="icon-pin1"></i>
                                                </span>Slingerland</a>
                                        </li>
                                        <li>
                                            <a href="tour-listing-details-2.html"> <span
                                                    class="listing-card-four__meta__icon"> <i
                                                        class="icon-calendar"></i>
                                                </span>6 Days, 3 Night</a>
                                        </li>
                                    </ul>
                                    <!-- /.listing-card-four__meta -->
                                    <a href="tour-listing-details-2.html"
                                        class="listing-card-four__image__overly"></a>
                                </div>
                                <!-- /.listing-card-four__image -->
                                <div class="listing-card-four__content">
                                    <div class="listing-card-four__rating">
                                        <span>(10 Review)</span>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <!-- /.listing-card-four__rating -->
                                    <h3 class="listing-card-four__title"><a
                                            href="tour-listing-details-2.html">Molokini
                                            and Turtle Town Snorkeling Adventure Aboard</a></h3>
                                    <!-- /.listing-card-four__title -->

                                    <div class="listing-card-four__content__btn">
                                        <div class="listing-card-four__price">
                                            <span class="listing-card-four__price__sub">Per Day</span>
                                            <span class="listing-card-four__price__number">$59.00</span>
                                        </div>
                                        <!-- /.listing-card-four__price -->
                                        <a href="tour-listing-details-2.html"
                                            class="listing-card-four__btn gotur-btn">
                                            Book Now <span class="icon"><i class="icon-right"></i> </span></a>
                                    </div>
                                    <!-- /.listing-card-four__content__btn -->
                                </div>
                                <!-- /.listing-card-four__content -->
                            </div>
                            <!-- /.listing-card-four -->
                        </div>
                        <!-- /.item -->
                        <div class="item">
                            <div class="listing-card-four wow fadeInUp" data-wow-duration='1500ms'
                                data-wow-delay='100ms'>
                                <div class="listing-card-four__image">
                                    <img src="assets/images/blog/listing-list-4-3.jpg"
                                        alt="All Inclusive Ultimate Circle Island Day with Lunch">
                                    <div class="listing-card-four__btn-group">


                                        <div class="listing-card-four__featured">Featured</div>
                                        <!-- /.listing-card-four__featured -->

                                    </div>
                                    <!-- /.listing-card-four__btn-group -->
                                    <div class="listing-card-four__btns">
                                        <a href="#"><i class="far fa-heart"></i></a>
                                        <div class="listing-card-four__btns__hover">
                                            <a href="#" class="listing-card-four__popup card__popup"
                                                data-gallery-options='{
                    "items": [
                        {
                            "src": "assets/images/blog/listing-1-1.jpg"
                        },
                        {
                            "src": "assets/images/blog/listing-1-2.jpg"
                        },
                        {
                            "src": "assets/images/blog/listing-1-3.jpg"
                        }
                    ],
                    "gallery": {
                        "enabled": true
                    },
                    "type": "image"
                }'>
                                                <span class="icon-image"></span>
                                            </a>
                                            <a class="video-popup"
                                                href="https://www.youtube.com/watch?v=0MuL8fd3pb8"><span
                                                    class="icon-video"></span></a>
                                        </div>
                                        <!-- /.listing-card-four__btns__hover -->
                                    </div>
                                    <ul class="listing-card-four__meta list-unstyled">
                                        <li>
                                            <a href="tour-listing-details-2.html"> <span
                                                    class="listing-card-four__meta__icon"> <i class="icon-pin1"></i>
                                                </span>Slingerland</a>
                                        </li>
                                        <li>
                                            <a href="tour-listing-details-2.html"> <span
                                                    class="listing-card-four__meta__icon"> <i
                                                        class="icon-calendar"></i>
                                                </span>6 Days, 3 Night</a>
                                        </li>
                                    </ul>
                                    <!-- /.listing-card-four__meta -->
                                    <a href="tour-listing-details-2.html"
                                        class="listing-card-four__image__overly"></a>
                                </div>
                                <!-- /.listing-card-four__image -->
                                <div class="listing-card-four__content">
                                    <div class="listing-card-four__rating">
                                        <span>(10 Review)</span>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <!-- /.listing-card-four__rating -->
                                    <h3 class="listing-card-four__title"><a href="tour-listing-details-2.html">All
                                            Inclusive Ultimate Circle Island Day with Lunch</a></h3>
                                    <!-- /.listing-card-four__title -->

                                    <div class="listing-card-four__content__btn">
                                        <div class="listing-card-four__price">
                                            <span class="listing-card-four__price__sub">Per Day</span>
                                            <span class="listing-card-four__price__number">$59.00</span>
                                        </div>
                                        <!-- /.listing-card-four__price -->
                                        <a href="tour-listing-details-2.html"
                                            class="listing-card-four__btn gotur-btn">
                                            Book Now <span class="icon"><i class="icon-right"></i> </span></a>
                                    </div>
                                    <!-- /.listing-card-four__content__btn -->
                                </div>
                                <!-- /.listing-card-four__content -->
                            </div>
                            <!-- /.listing-card-four -->
                        </div>
                        <!-- /.item -->
                        <div class="item">
                            <div class="listing-card-four wow fadeInUp" data-wow-duration='1500ms'
                                data-wow-delay='100ms'>
                                <div class="listing-card-four__image">
                                    <img src="assets/images/blog/listing-list-4-4.jpg"
                                        alt="Molokini and Turtle Town Snorkeling Adventure Aboard">
                                    <div class="listing-card-four__btn-group">


                                        <div class="listing-card-four__featured">Featured</div>
                                        <!-- /.listing-card-four__featured -->

                                    </div>
                                    <!-- /.listing-card-four__btn-group -->
                                    <div class="listing-card-four__btns">
                                        <a href="#"><i class="far fa-heart"></i></a>
                                        <div class="listing-card-four__btns__hover">
                                            <a href="#" class="listing-card-four__popup card__popup"
                                                data-gallery-options='{
                    "items": [
                        {
                            "src": "assets/images/blog/listing-1-1.jpg"
                        },
                        {
                            "src": "assets/images/blog/listing-1-2.jpg"
                        },
                        {
                            "src": "assets/images/blog/listing-1-3.jpg"
                        }
                    ],
                    "gallery": {
                        "enabled": true
                    },
                    "type": "image"
                }'>
                                                <span class="icon-image"></span>
                                            </a>
                                            <a class="video-popup"
                                                href="https://www.youtube.com/watch?v=0MuL8fd3pb8"><span
                                                    class="icon-video"></span></a>
                                        </div>
                                        <!-- /.listing-card-four__btns__hover -->
                                    </div>
                                    <ul class="listing-card-four__meta list-unstyled">
                                        <li>
                                            <a href="tour-listing-details-2.html"> <span
                                                    class="listing-card-four__meta__icon"> <i class="icon-pin1"></i>
                                                </span>Slingerland</a>
                                        </li>
                                        <li>
                                            <a href="tour-listing-details-2.html"> <span
                                                    class="listing-card-four__meta__icon"> <i
                                                        class="icon-calendar"></i>
                                                </span>6 Days, 3 Night</a>
                                        </li>
                                    </ul>
                                    <!-- /.listing-card-four__meta -->
                                    <a href="tour-listing-details-2.html"
                                        class="listing-card-four__image__overly"></a>
                                </div>
                                <!-- /.listing-card-four__image -->
                                <div class="listing-card-four__content">
                                    <div class="listing-card-four__rating">
                                        <span>(10 Review)</span>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <!-- /.listing-card-four__rating -->
                                    <h3 class="listing-card-four__title"><a
                                            href="tour-listing-details-2.html">Molokini
                                            and Turtle Town Snorkeling Adventure Aboard</a></h3>
                                    <!-- /.listing-card-four__title -->

                                    <div class="listing-card-four__content__btn">
                                        <div class="listing-card-four__price">
                                            <span class="listing-card-four__price__sub">Per Day</span>
                                            <span class="listing-card-four__price__number">$59.00</span>
                                        </div>
                                        <!-- /.listing-card-four__price -->
                                        <a href="tour-listing-details-2.html"
                                            class="listing-card-four__btn gotur-btn">
                                            Book Now <span class="icon"><i class="icon-right"></i> </span></a>
                                    </div>
                                    <!-- /.listing-card-four__content__btn -->
                                </div>
                                <!-- /.listing-card-four__content -->
                            </div>
                            <!-- /.listing-card-four -->
                        </div>
                        <!-- /.item -->
                        <div class="item">
                            <div class="listing-card-four wow fadeInUp" data-wow-duration='1500ms'
                                data-wow-delay='100ms'>
                                <div class="listing-card-four__image">
                                    <img src="assets/images/blog/listing-list-4-1.jpg"
                                        alt="All Inclusive Ultimate Circle Island Day with Lunch">
                                    <div class="listing-card-four__btn-group">


                                        <div class="listing-card-four__featured">Featured</div>
                                        <!-- /.listing-card-four__featured -->

                                    </div>
                                    <!-- /.listing-card-four__btn-group -->
                                    <div class="listing-card-four__btns">
                                        <a href="#"><i class="far fa-heart"></i></a>
                                        <div class="listing-card-four__btns__hover">
                                            <a href="#" class="listing-card-four__popup card__popup"
                                                data-gallery-options='{
                    "items": [
                        {
                            "src": "assets/images/blog/listing-1-1.jpg"
                        },
                        {
                            "src": "assets/images/blog/listing-1-2.jpg"
                        },
                        {
                            "src": "assets/images/blog/listing-1-3.jpg"
                        }
                    ],
                    "gallery": {
                        "enabled": true
                    },
                    "type": "image"
                }'>
                                                <span class="icon-image"></span>
                                            </a>
                                            <a class="video-popup"
                                                href="https://www.youtube.com/watch?v=0MuL8fd3pb8"><span
                                                    class="icon-video"></span></a>
                                        </div>
                                        <!-- /.listing-card-four__btns__hover -->
                                    </div>
                                    <ul class="listing-card-four__meta list-unstyled">
                                        <li>
                                            <a href="tour-listing-details-2.html"> <span
                                                    class="listing-card-four__meta__icon"> <i class="icon-pin1"></i>
                                                </span>Slingerland</a>
                                        </li>
                                        <li>
                                            <a href="tour-listing-details-2.html"> <span
                                                    class="listing-card-four__meta__icon"> <i
                                                        class="icon-calendar"></i>
                                                </span>6 Days, 3 Night</a>
                                        </li>
                                    </ul>
                                    <!-- /.listing-card-four__meta -->
                                    <a href="tour-listing-details-2.html"
                                        class="listing-card-four__image__overly"></a>
                                </div>
                                <!-- /.listing-card-four__image -->
                                <div class="listing-card-four__content">
                                    <div class="listing-card-four__rating">
                                        <span>(10 Review)</span>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <!-- /.listing-card-four__rating -->
                                    <h3 class="listing-card-four__title"><a href="tour-listing-details-2.html">All
                                            Inclusive Ultimate Circle Island Day with Lunch</a></h3>
                                    <!-- /.listing-card-four__title -->

                                    <div class="listing-card-four__content__btn">
                                        <div class="listing-card-four__price">
                                            <span class="listing-card-four__price__sub">Per Day</span>
                                            <span class="listing-card-four__price__number">$59.00</span>
                                        </div>
                                        <!-- /.listing-card-four__price -->
                                        <a href="tour-listing-details-2.html"
                                            class="listing-card-four__btn gotur-btn">
                                            Book Now <span class="icon"><i class="icon-right"></i> </span></a>
                                    </div>
                                    <!-- /.listing-card-four__content__btn -->
                                </div>
                                <!-- /.listing-card-four__content -->
                            </div>
                            <!-- /.listing-card-four -->
                        </div>
                        <!-- /.item -->
                        <div class="item">
                            <div class="listing-card-four wow fadeInUp" data-wow-duration='1500ms'
                                data-wow-delay='100ms'>
                                <div class="listing-card-four__image">
                                    <img src="assets/images/blog/listing-list-4-2.jpg"
                                        alt="Molokini and Turtle Town Snorkeling Adventure Aboard">
                                    <div class="listing-card-four__btn-group">

                                        <div class="listing-card-four__discount">-40% Off</div>
                                        <!-- /.listing-card-four__discount -->


                                        <div class="listing-card-four__featured">Featured</div>
                                        <!-- /.listing-card-four__featured -->

                                    </div>
                                    <!-- /.listing-card-four__btn-group -->
                                    <div class="listing-card-four__btns">
                                        <a href="#"><i class="far fa-heart"></i></a>
                                        <div class="listing-card-four__btns__hover">
                                            <a href="#" class="listing-card-four__popup card__popup"
                                                data-gallery-options='{
                    "items": [
                        {
                            "src": "assets/images/blog/listing-1-1.jpg"
                        },
                        {
                            "src": "assets/images/blog/listing-1-2.jpg"
                        },
                        {
                            "src": "assets/images/blog/listing-1-3.jpg"
                        }
                    ],
                    "gallery": {
                        "enabled": true
                    },
                    "type": "image"
                }'>
                                                <span class="icon-image"></span>
                                            </a>
                                            <a class="video-popup"
                                                href="https://www.youtube.com/watch?v=0MuL8fd3pb8"><span
                                                    class="icon-video"></span></a>
                                        </div>
                                        <!-- /.listing-card-four__btns__hover -->
                                    </div>
                                    <ul class="listing-card-four__meta list-unstyled">
                                        <li>
                                            <a href="tour-listing-details-2.html"> <span
                                                    class="listing-card-four__meta__icon"> <i class="icon-pin1"></i>
                                                </span>Slingerland</a>
                                        </li>
                                        <li>
                                            <a href="tour-listing-details-2.html"> <span
                                                    class="listing-card-four__meta__icon"> <i
                                                        class="icon-calendar"></i>
                                                </span>6 Days, 3 Night</a>
                                        </li>
                                    </ul>
                                    <!-- /.listing-card-four__meta -->
                                    <a href="tour-listing-details-2.html"
                                        class="listing-card-four__image__overly"></a>
                                </div>
                                <!-- /.listing-card-four__image -->
                                <div class="listing-card-four__content">
                                    <div class="listing-card-four__rating">
                                        <span>(10 Review)</span>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <!-- /.listing-card-four__rating -->
                                    <h3 class="listing-card-four__title"><a
                                            href="tour-listing-details-2.html">Molokini
                                            and Turtle Town Snorkeling Adventure Aboard</a></h3>
                                    <!-- /.listing-card-four__title -->

                                    <div class="listing-card-four__content__btn">
                                        <div class="listing-card-four__price">
                                            <span class="listing-card-four__price__sub">Per Day</span>
                                            <span class="listing-card-four__price__number">$59.00</span>
                                        </div>
                                        <!-- /.listing-card-four__price -->
                                        <a href="tour-listing-details-2.html"
                                            class="listing-card-four__btn gotur-btn">
                                            Book Now <span class="icon"><i class="icon-right"></i> </span></a>
                                    </div>
                                    <!-- /.listing-card-four__content__btn -->
                                </div>
                                <!-- /.listing-card-four__content -->
                            </div>
                            <!-- /.listing-card-four -->
                        </div>
                        <!-- /.item -->
                        <div class="item">
                            <div class="listing-card-four wow fadeInUp" data-wow-duration='1500ms'
                                data-wow-delay='100ms'>
                                <div class="listing-card-four__image">
                                    <img src="assets/images/blog/listing-list-4-3.jpg"
                                        alt="All Inclusive Ultimate Circle Island Day with Lunch">
                                    <div class="listing-card-four__btn-group">


                                        <div class="listing-card-four__featured">Featured</div>
                                        <!-- /.listing-card-four__featured -->

                                    </div>
                                    <!-- /.listing-card-four__btn-group -->
                                    <div class="listing-card-four__btns">
                                        <a href="#"><i class="far fa-heart"></i></a>
                                        <div class="listing-card-four__btns__hover">
                                            <a href="#" class="listing-card-four__popup card__popup"
                                                data-gallery-options='{
                    "items": [
                        {
                            "src": "assets/images/blog/listing-1-1.jpg"
                        },
                        {
                            "src": "assets/images/blog/listing-1-2.jpg"
                        },
                        {
                            "src": "assets/images/blog/listing-1-3.jpg"
                        }
                    ],
                    "gallery": {
                        "enabled": true
                    },
                    "type": "image"
                }'>
                                                <span class="icon-image"></span>
                                            </a>
                                            <a class="video-popup"
                                                href="https://www.youtube.com/watch?v=0MuL8fd3pb8"><span
                                                    class="icon-video"></span></a>
                                        </div>
                                        <!-- /.listing-card-four__btns__hover -->
                                    </div>
                                    <ul class="listing-card-four__meta list-unstyled">
                                        <li>
                                            <a href="tour-listing-details-2.html"> <span
                                                    class="listing-card-four__meta__icon"> <i class="icon-pin1"></i>
                                                </span>Slingerland</a>
                                        </li>
                                        <li>
                                            <a href="tour-listing-details-2.html"> <span
                                                    class="listing-card-four__meta__icon"> <i
                                                        class="icon-calendar"></i>
                                                </span>6 Days, 3 Night</a>
                                        </li>
                                    </ul>
                                    <!-- /.listing-card-four__meta -->
                                    <a href="tour-listing-details-2.html"
                                        class="listing-card-four__image__overly"></a>
                                </div>
                                <!-- /.listing-card-four__image -->
                                <div class="listing-card-four__content">
                                    <div class="listing-card-four__rating">
                                        <span>(10 Review)</span>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <!-- /.listing-card-four__rating -->
                                    <h3 class="listing-card-four__title"><a href="tour-listing-details-2.html">All
                                            Inclusive Ultimate Circle Island Day with Lunch</a></h3>
                                    <!-- /.listing-card-four__title -->

                                    <div class="listing-card-four__content__btn">
                                        <div class="listing-card-four__price">
                                            <span class="listing-card-four__price__sub">Per Day</span>
                                            <span class="listing-card-four__price__number">$59.00</span>
                                        </div>
                                        <!-- /.listing-card-four__price -->
                                        <a href="tour-listing-details-2.html"
                                            class="listing-card-four__btn gotur-btn">
                                            Book Now <span class="icon"><i class="icon-right"></i> </span></a>
                                    </div>
                                    <!-- /.listing-card-four__content__btn -->
                                </div>
                                <!-- /.listing-card-four__content -->
                            </div>
                            <!-- /.listing-card-four -->
                        </div>
                        <!-- /.item -->
                        <div class="item">
                            <div class="listing-card-four wow fadeInUp" data-wow-duration='1500ms'
                                data-wow-delay='100ms'>
                                <div class="listing-card-four__image">
                                    <img src="assets/images/blog/listing-list-4-4.jpg"
                                        alt="Molokini and Turtle Town Snorkeling Adventure Aboard">
                                    <div class="listing-card-four__btn-group">


                                        <div class="listing-card-four__featured">Featured</div>
                                        <!-- /.listing-card-four__featured -->

                                    </div>
                                    <!-- /.listing-card-four__btn-group -->
                                    <div class="listing-card-four__btns">
                                        <a href="#"><i class="far fa-heart"></i></a>
                                        <div class="listing-card-four__btns__hover">
                                            <a href="#" class="listing-card-four__popup card__popup"
                                                data-gallery-options='{
                    "items": [
                        {
                            "src": "assets/images/blog/listing-1-1.jpg"
                        },
                        {
                            "src": "assets/images/blog/listing-1-2.jpg"
                        },
                        {
                            "src": "assets/images/blog/listing-1-3.jpg"
                        }
                    ],
                    "gallery": {
                        "enabled": true
                    },
                    "type": "image"
                }'>
                                                <span class="icon-image"></span>
                                            </a>
                                            <a class="video-popup"
                                                href="https://www.youtube.com/watch?v=0MuL8fd3pb8"><span
                                                    class="icon-video"></span></a>
                                        </div>
                                        <!-- /.listing-card-four__btns__hover -->
                                    </div>
                                    <ul class="listing-card-four__meta list-unstyled">
                                        <li>
                                            <a href="tour-listing-details-2.html"> <span
                                                    class="listing-card-four__meta__icon"> <i class="icon-pin1"></i>
                                                </span>Slingerland</a>
                                        </li>
                                        <li>
                                            <a href="tour-listing-details-2.html"> <span
                                                    class="listing-card-four__meta__icon"> <i
                                                        class="icon-calendar"></i>
                                                </span>6 Days, 3 Night</a>
                                        </li>
                                    </ul>
                                    <!-- /.listing-card-four__meta -->
                                    <a href="tour-listing-details-2.html"
                                        class="listing-card-four__image__overly"></a>
                                </div>
                                <!-- /.listing-card-four__image -->
                                <div class="listing-card-four__content">
                                    <div class="listing-card-four__rating">
                                        <span>(10 Review)</span>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <!-- /.listing-card-four__rating -->
                                    <h3 class="listing-card-four__title"><a
                                            href="tour-listing-details-2.html">Molokini
                                            and Turtle Town Snorkeling Adventure Aboard</a></h3>
                                    <!-- /.listing-card-four__title -->

                                    <div class="listing-card-four__content__btn">
                                        <div class="listing-card-four__price">
                                            <span class="listing-card-four__price__sub">Per Day</span>
                                            <span class="listing-card-four__price__number">$59.00</span>
                                        </div>
                                        <!-- /.listing-card-four__price -->
                                        <a href="tour-listing-details-2.html"
                                            class="listing-card-four__btn gotur-btn">
                                            Book Now <span class="icon"><i class="icon-right"></i> </span></a>
                                    </div>
                                    <!-- /.listing-card-four__content__btn -->
                                </div>
                                <!-- /.listing-card-four__content -->
                            </div>
                            <!-- /.listing-card-four -->
                        </div>
                        <!-- /.item -->
                    </div>
                    <!-- /.feature-package__carousel -->
                </div>

                <!-- see all button  -->
                <div class="destination-filter__btn mt-3">
                    <button data-tab="#itemFive" class="tab-btn gotur-btn"><a
                            href="https://tripqode.in/tour-listing-1-right.html"
                            class="text-white text-decoration-none">See All</a></button>
                </div>
                <!-- here show https://tripqode.in/tour-listing-1-right.html -->
                <!-- see all button  -->

                <!-- /.feature-package__inner -->

            </div>
            <!-- /.container -->

            <div class="feature-package__element">
                <img src="assets/images/shapes/love-1-2.png" alt>
            </div>
            <!-- /.feature-package__element -->
        </section>
        <!-- /.feature-package -->

        <section class="offer-one section-space">
            <div class="container">
                <div class="sec-title text-center">
                    <h6 class="sec-title__tagline bw-split-in-right">Special Offers</h6>
                    <!-- /.sec-title__tagline -->
                    <!-- <h3 class="sec-title__title bw-split-in-left">Offers To <span> Inspire You</span></h3> -->
                    <h3 class="sec-title__title bw-split-in-left">Where Every <span> Journey Becomes a Story</span>
                    </h3>
                    <!-- /.sec-title__title -->
                </div>
                <!-- /.sec-title -->
                <div class="row gutter-y-30 gutter-x-30">
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                        <div class="offer-one__card">
                            <div class="offer-one__card__content">
                                <div class="sec-title ">
                                    <h6 class="sec-title__tagline bw-split-in-right">Special Offer</h6>
                                    <!-- /.sec-title__tagline -->
                                    <h3 class="sec-title__title bw-split-in-left">Explore All Tour Of The <br> World
                                        With Us</h3>
                                    <!-- /.sec-title__title -->
                                </div>
                                <!-- /.sec-title -->
                                <div class="offer-one__card__btn">
                                    <a href="tour-listing-details-1.html" class="gotur-btn">Book Now <span
                                            class="icon"><i class="icon-right"></i></span></a>
                                </div>
                                <!-- /.offer-one__card__btn -->
                            </div>
                            <!-- /.offer-one__card__content -->
                            <div class="offer-one__card__left">
                                <div class="offer-one__card__thumb">
                                    <img src="assets/images/resources/offer-1-1.jpg" alt="shape">
                                </div>
                                <!-- /.offer-one__card__thumb -->
                            </div>
                            <!-- /.offer-one__card__left -->
                        </div>
                        <!-- /.offer-one__card -->
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                        <div class="offer-one__card offer-one__card--two">
                            <div class="offer-one__card__left">
                                <div class="offer-one__card__thumb">
                                    <img src="assets/images/resources/offer-1-2.jpg" alt="shape">
                                </div>
                                <!-- /.offer-one__card__thumb -->
                            </div>
                            <!-- /.offer-one__card__left -->
                            <div class="offer-one__card__content">
                                <div class="sec-title text-end">
                                    <h6 class="sec-title__tagline bw-split-in-right">Get 40% Offer</h6>
                                    <!-- /.sec-title__tagline -->
                                    <h3 class="sec-title__title bw-split-in-left">Tours and Trip <br> Packages,
                                        Globally
                                    </h3>
                                    <!-- /.sec-title__title -->
                                </div>
                                <!-- /.sec-title -->
                                <div class="offer-one__card__btn">
                                    <a href="tour-listing-details-1.html" class="gotur-btn gotur-btn--primary">Book
                                        Now
                                        <span class="icon"><i class="icon-right"></i></span></a>
                                </div>
                                <!-- /.offer-one__card__btn -->
                            </div>
                            <!-- /.offer-one__card__content -->
                        </div>
                        <!-- /.offer-one__card -->
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
            <div class="offer-one__element">
                <img src="assets/images/resources/about-3-1.png" alt>
            </div>
            <!-- /.offer-one__element -->
        </section>
        <!-- /.offer-one -->


        <section class="testimonials-three testimonials-three--two section-space" id="testimonials">
            <div class="testimonials-three__bg"
                style="background-image: url(assets/images/backgrounds/testi-3-1.png);">
            </div>
            <!-- /.testimonials-three__bg -->
            <div class="container-fluid">
                <div class="row align-items-center gutter-y-40">
                    <div class="col-xl-6">
                        <div class="testimonials-three__top">
                            <div class="testimonials-three__thumb wow fadeInLeft" data-wow-duration='1500ms'
                                data-wow-delay='400ms'>
                                <img src="{{ asset('assets/images/resources/testi--3-1.png') }}" alt="gotur image">
                            </div>
                            <!-- /.testimonials-three__thumb -->
                            <div class="testimonials-three__bottom__nav">
                                <button class="testimonials-three__carousel__nav--left"><span
                                        class="icon-arrow-left"></span></button>
                                <button class="testimonials-three__carousel__nav--right"><span
                                        class="icon-arrow-right"></span></button>
                            </div>
                        </div>
                        <!-- /.testimonials-three__top -->
                    </div>
                    <!-- /.col-xl-4 -->
                    <div class="col-xl-6">
                        <div class="testimonials-three__inner">
                            <div class="testimonials-three__carousel gotur-owl__carousel gotur-owl__carousel--custom-nav gotur-owl__carousel--basic-nav owl-carousel owl-theme"
                                data-owl-nav-prev=".testimonials-three__carousel__nav--left"
                                data-owl-nav-next=".testimonials-three__carousel__nav--right"
                                data-owl-options='{
                            "items": 1,
                            "margin": 30,
                            "loop": true,
                            "smartSpeed": 700,
                            "nav": false,
                            "dots": false,
                            "autoplay": false,
                            "responsive": {
                                "0": {
                                    "items": 1
                                },
                                "768": {
                                    "items": 2
                                },
                                "992": {
                                    "items": 2
                                },
                                "1199": {
                                    "items": 2
                                }
                            }
                        }'>
                                <div class="item">
                                    <div class="testimonials-two-card testimonials-two-card--two  wow fadeInUp"
                                        data-wow-duration='1500ms' data-wow-delay='00ms'>
                                        <div class="testimonials-two-card__inner">
                                            <div class="testimonials-two-card__top">
                                                <img {{ asset('assets/images/resources/testimonials-2-1.png"') }}
                                                    alt="testiomonials author">
                                            </div>
                                            <!-- /.testimonials-two-card__top -->
                                            <div
                                                class="testimonials-two-card__content testimonials-two-card__content--two">
                                                <div class="testimonials-two-card__author">
                                                    <h4 class="testimonials-two-card__author__name">Courtney Henry
                                                    </h4>
                                                    <!-- /.testimonials-two-card__author__name -->
                                                    <p class="testimonials-two-card__author__dec">Marketing
                                                        Coordinator
                                                    </p>
                                                    <!-- /.testimonials-two-card__author__dec -->
                                                </div>
                                                <!-- /.testimonials-two-card__author -->
                                                <p class="testimonials-two-card__text">Consectetur adipiscing elit.
                                                    Integer nunc viverra laoreet est the is porta pretium metus aliquam
                                                    eget maecenas porta is nunc viverra Aenean pulvinar maximus leo</p>
                                                <!-- /.testimonials-two-card__text -->
                                            </div>
                                            <!-- /.testimonials-two-card__content -->
                                            <div class="testimonials-two-card__star testimonials-two-card__star--two">
                                                <div class="testimonials-two-card__star__item">
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                </div>
                                                <!-- /.testimonials-two-card__star__item -->
                                            </div>
                                            <!-- /.testimonials-two-card__star -->
                                            <div class="testimonials-two-card__quite">
                                                <i class="icon-straight-quotes"></i>
                                            </div>
                                            <!-- /.testimonials-two-card__quite -->
                                        </div>
                                        <!-- /.testimonials-two-card__inner -->
                                    </div>
                                    <!-- /.testimonials-two-card -->
                                </div>
                                <!-- /.item -->
                                <div class="item">
                                    <div class="testimonials-two-card testimonials-two-card--two  wow fadeInUp"
                                        data-wow-duration='1500ms' data-wow-delay='00ms'>
                                        <div class="testimonials-two-card__inner">
                                            <div class="testimonials-two-card__top">
                                                <img src="assets/images/resources/testimonials-2-2.png"
                                                    alt="testiomonials author">
                                            </div>
                                            <!-- /.testimonials-two-card__top -->
                                            <div
                                                class="testimonials-two-card__content testimonials-two-card__content--two">
                                                <div class="testimonials-two-card__author">
                                                    <h4 class="testimonials-two-card__author__name">Jacob Jones</h4>
                                                    <!-- /.testimonials-two-card__author__name -->
                                                    <p class="testimonials-two-card__author__dec">Web Designer</p>
                                                    <!-- /.testimonials-two-card__author__dec -->
                                                </div>
                                                <!-- /.testimonials-two-card__author -->
                                                <p class="testimonials-two-card__text">Consectetur adipiscing elit.
                                                    Integer nunc viverra laoreet est the is porta pretium metus aliquam
                                                    eget maecenas porta is nunc viverra Aenean pulvinar maximus leo</p>
                                                <!-- /.testimonials-two-card__text -->
                                            </div>
                                            <!-- /.testimonials-two-card__content -->
                                            <div class="testimonials-two-card__star testimonials-two-card__star--two">
                                                <div class="testimonials-two-card__star__item">
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                </div>
                                                <!-- /.testimonials-two-card__star__item -->
                                            </div>
                                            <!-- /.testimonials-two-card__star -->
                                            <div class="testimonials-two-card__quite">
                                                <i class="icon-straight-quotes"></i>
                                            </div>
                                            <!-- /.testimonials-two-card__quite -->
                                        </div>
                                        <!-- /.testimonials-two-card__inner -->
                                    </div>
                                    <!-- /.testimonials-two-card -->
                                </div>
                                <!-- /.item -->
                                <div class="item">
                                    <div class="testimonials-two-card testimonials-two-card--two  wow fadeInUp"
                                        data-wow-duration='1500ms' data-wow-delay='00ms'>
                                        <div class="testimonials-two-card__inner">
                                            <div class="testimonials-two-card__top">
                                                <img src="assets/images/resources/testimonials-2-1.png"
                                                    alt="testiomonials author">
                                            </div>
                                            <!-- /.testimonials-two-card__top -->
                                            <div
                                                class="testimonials-two-card__content testimonials-two-card__content--two">
                                                <div class="testimonials-two-card__author">
                                                    <h4 class="testimonials-two-card__author__name">Courtney Henry
                                                    </h4>
                                                    <!-- /.testimonials-two-card__author__name -->
                                                    <p class="testimonials-two-card__author__dec">Marketing
                                                        Coordinator
                                                    </p>
                                                    <!-- /.testimonials-two-card__author__dec -->
                                                </div>
                                                <!-- /.testimonials-two-card__author -->
                                                <p class="testimonials-two-card__text">Consectetur adipiscing elit.
                                                    Integer nunc viverra laoreet est the is porta pretium metus aliquam
                                                    eget maecenas porta is nunc viverra Aenean pulvinar maximus leo</p>
                                                <!-- /.testimonials-two-card__text -->
                                            </div>
                                            <!-- /.testimonials-two-card__content -->
                                            <div class="testimonials-two-card__star testimonials-two-card__star--two">
                                                <div class="testimonials-two-card__star__item">
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                </div>
                                                <!-- /.testimonials-two-card__star__item -->
                                            </div>
                                            <!-- /.testimonials-two-card__star -->
                                            <div class="testimonials-two-card__quite">
                                                <i class="icon-straight-quotes"></i>
                                            </div>
                                            <!-- /.testimonials-two-card__quite -->
                                        </div>
                                        <!-- /.testimonials-two-card__inner -->
                                    </div>
                                    <!-- /.testimonials-two-card -->
                                </div>
                                <!-- /.item -->
                                <div class="item">
                                    <div class="testimonials-two-card testimonials-two-card--two  wow fadeInUp"
                                        data-wow-duration='1500ms' data-wow-delay='00ms'>
                                        <div class="testimonials-two-card__inner">
                                            <div class="testimonials-two-card__top">
                                                <img src="assets/images/resources/testimonials-2-2.png"
                                                    alt="testiomonials author">
                                            </div>
                                            <!-- /.testimonials-two-card__top -->
                                            <div
                                                class="testimonials-two-card__content testimonials-two-card__content--two">
                                                <div class="testimonials-two-card__author">
                                                    <h4 class="testimonials-two-card__author__name">Jacob Jones</h4>
                                                    <!-- /.testimonials-two-card__author__name -->
                                                    <p class="testimonials-two-card__author__dec">Web Designer</p>
                                                    <!-- /.testimonials-two-card__author__dec -->
                                                </div>
                                                <!-- /.testimonials-two-card__author -->
                                                <p class="testimonials-two-card__text">Consectetur adipiscing elit.
                                                    Integer nunc viverra laoreet est the is porta pretium metus aliquam
                                                    eget maecenas porta is nunc viverra Aenean pulvinar maximus leo</p>
                                                <!-- /.testimonials-two-card__text -->
                                            </div>
                                            <!-- /.testimonials-two-card__content -->
                                            <div class="testimonials-two-card__star testimonials-two-card__star--two">
                                                <div class="testimonials-two-card__star__item">
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                </div>
                                                <!-- /.testimonials-two-card__star__item -->
                                            </div>
                                            <!-- /.testimonials-two-card__star -->
                                            <div class="testimonials-two-card__quite">
                                                <i class="icon-straight-quotes"></i>
                                            </div>
                                            <!-- /.testimonials-two-card__quite -->
                                        </div>
                                        <!-- /.testimonials-two-card__inner -->
                                    </div>
                                    <!-- /.testimonials-two-card -->
                                </div>
                                <!-- /.item -->
                                <div class="item">
                                    <div class="testimonials-two-card testimonials-two-card--two  wow fadeInUp"
                                        data-wow-duration='1500ms' data-wow-delay='00ms'>
                                        <div class="testimonials-two-card__inner">
                                            <div class="testimonials-two-card__top">
                                                <img src="assets/images/resources/testimonials-2-1.png"
                                                    alt="testiomonials author">
                                            </div>
                                            <!-- /.testimonials-two-card__top -->
                                            <div
                                                class="testimonials-two-card__content testimonials-two-card__content--two">
                                                <div class="testimonials-two-card__author">
                                                    <h4 class="testimonials-two-card__author__name">Courtney Henry
                                                    </h4>
                                                    <!-- /.testimonials-two-card__author__name -->
                                                    <p class="testimonials-two-card__author__dec">Marketing
                                                        Coordinator
                                                    </p>
                                                    <!-- /.testimonials-two-card__author__dec -->
                                                </div>
                                                <!-- /.testimonials-two-card__author -->
                                                <p class="testimonials-two-card__text">Consectetur adipiscing elit.
                                                    Integer nunc viverra laoreet est the is porta pretium metus aliquam
                                                    eget maecenas porta is nunc viverra Aenean pulvinar maximus leo</p>
                                                <!-- /.testimonials-two-card__text -->
                                            </div>
                                            <!-- /.testimonials-two-card__content -->
                                            <div class="testimonials-two-card__star testimonials-two-card__star--two">
                                                <div class="testimonials-two-card__star__item">
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                </div>
                                                <!-- /.testimonials-two-card__star__item -->
                                            </div>
                                            <!-- /.testimonials-two-card__star -->
                                            <div class="testimonials-two-card__quite">
                                                <i class="icon-straight-quotes"></i>
                                            </div>
                                            <!-- /.testimonials-two-card__quite -->
                                        </div>
                                        <!-- /.testimonials-two-card__inner -->
                                    </div>
                                    <!-- /.testimonials-two-card -->
                                </div>
                                <!-- /.item -->
                                <div class="item">
                                    <div class="testimonials-two-card testimonials-two-card--two  wow fadeInUp"
                                        data-wow-duration='1500ms' data-wow-delay='00ms'>
                                        <div class="testimonials-two-card__inner">
                                            <div class="testimonials-two-card__top">
                                                <img src="assets/images/resources/testimonials-2-2.png"
                                                    alt="testiomonials author">
                                            </div>
                                            <!-- /.testimonials-two-card__top -->
                                            <div
                                                class="testimonials-two-card__content testimonials-two-card__content--two">
                                                <div class="testimonials-two-card__author">
                                                    <h4 class="testimonials-two-card__author__name">Jacob Jones</h4>
                                                    <!-- /.testimonials-two-card__author__name -->
                                                    <p class="testimonials-two-card__author__dec">Web Designer</p>
                                                    <!-- /.testimonials-two-card__author__dec -->
                                                </div>
                                                <!-- /.testimonials-two-card__author -->
                                                <p class="testimonials-two-card__text">Consectetur adipiscing elit.
                                                    Integer nunc viverra laoreet est the is porta pretium metus aliquam
                                                    eget maecenas porta is nunc viverra Aenean pulvinar maximus leo</p>
                                                <!-- /.testimonials-two-card__text -->
                                            </div>
                                            <!-- /.testimonials-two-card__content -->
                                            <div class="testimonials-two-card__star testimonials-two-card__star--two">
                                                <div class="testimonials-two-card__star__item">
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                </div>
                                                <!-- /.testimonials-two-card__star__item -->
                                            </div>
                                            <!-- /.testimonials-two-card__star -->
                                            <div class="testimonials-two-card__quite">
                                                <i class="icon-straight-quotes"></i>
                                            </div>
                                            <!-- /.testimonials-two-card__quite -->
                                        </div>
                                        <!-- /.testimonials-two-card__inner -->
                                    </div>
                                    <!-- /.testimonials-two-card -->
                                </div>
                                <!-- /.item -->
                            </div>
                            <!-- /.testimonials-three__carousel -->
                        </div>
                        <!-- /.testimonials-three__inner -->
                    </div>
                    <!-- /.col-xl-8 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.testimonials-three -->

        <section class="blog-five section-space-top" id="blog">
            <div class="container">
                <div class="sec-title text-center">
                    <h6 class="sec-title__tagline bw-split-in-right">Blog & News</h6>
                    <!-- /.sec-title__tagline -->
                    <h3 class="sec-title__title bw-split-in-left">Explore Blogs <span>And News</span></h3>
                    <!-- /.sec-title__title -->
                </div>
                <!-- /.sec-title -->
                <div class="row gutter-y-30">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="blog-card-two blog-card-two--two wow fadeInUp" data-wow-duration='1500ms'
                            data-wow-delay='100ms'>
                            <div class="blog-card-two__image">
                                <img src="{{ asset('assets/images/blog/blog-2-7.jpg') }}"
                                    alt="The Surfing Man Will Blow Your Mind">
                                <a href="blog-details-right.html" class="blog-card-two__image__link"><span
                                        class="sr-only">The Surfing Man Will Blow Your Mind</span></a>
                            </div>
                            <!-- /.blog-card-two__image -->
                            <div class="blog-card-two__content">
                                <div class="blog-card-two__top">
                                    <div class="blog-card-two__date">
                                        <span class="blog-card-two__date__day">17</span>
                                        <span class="blog-card-two__date__month">Mar</span>
                                    </div>
                                    <!-- /.blog-card-two__date -->
                                    <ul class="list-unstyled blog-card-two__meta">
                                        <li>
                                            <a href="blog-details-right.html"> <span
                                                    class="blog-card-two__meta__icon">
                                                    <i class="icon-user"></i> </span> By Admin</a>
                                        </li>
                                        <li>
                                            <a href="blog-details-right.html"> <span
                                                    class="blog-card-two__meta__icon">
                                                    <i class="icon-price-tag"></i> </span>Travel</a>
                                        </li>
                                    </ul>
                                    <!-- /.list-unstyled blog-card-two__meta -->
                                </div>
                                <!-- /.blog-card-two__top -->
                                <h3 class="blog-card-two__title"><a href="blog-details-right.html">The Surfing Man
                                        Will
                                        Blow Your Mind</a></h3>
                                <!-- /.blog-card-two__title -->
                                <a href="blog-details-right.html" class="blog-card-two__content__btn"> Read More <i
                                        class="icon-arrow-right"></i></a>
                            </div>
                            <!-- /.blog-card-two__content -->
                        </div>
                        <!-- /.blog-card-two -->
                    </div>
                    <!-- /.col-xl-3 col-lg-4 col-md-6 col-sm-6 -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="blog-card-two blog-card-two--two wow fadeInUp" data-wow-duration='1500ms'
                            data-wow-delay='300ms'>
                            <div class="blog-card-two__image">
                                <img src="{{ asset('assets/images/blog/blog-2-8.jpg') }}"
                                    alt="The Surfing Man Will Blow Your Mind">
                                <a href="blog-details-right.html" class="blog-card-two__image__link"><span
                                        class="sr-only">The Surfing Man Will Blow Your Mind</span></a>
                            </div>
                            <!-- /.blog-card-two__image -->
                            <div class="blog-card-two__content">
                                <div class="blog-card-two__top">
                                    <div class="blog-card-two__date">
                                        <span class="blog-card-two__date__day">15</span>
                                        <span class="blog-card-two__date__month">Dec</span>
                                    </div>
                                    <!-- /.blog-card-two__date -->
                                    <ul class="list-unstyled blog-card-two__meta">
                                        <li>
                                            <a href="blog-details-right.html"> <span
                                                    class="blog-card-two__meta__icon">
                                                    <i class="icon-user"></i> </span> By Admin</a>
                                        </li>
                                        <li>
                                            <a href="blog-details-right.html"> <span
                                                    class="blog-card-two__meta__icon">
                                                    <i class="icon-price-tag"></i> </span>Travel</a>
                                        </li>
                                    </ul>
                                    <!-- /.list-unstyled blog-card-two__meta -->
                                </div>
                                <!-- /.blog-card-two__top -->
                                <h3 class="blog-card-two__title"><a href="blog-details-right.html">The Surfing Man
                                        Will
                                        Blow Your Mind</a></h3>
                                <!-- /.blog-card-two__title -->
                                <a href="blog-details-right.html" class="blog-card-two__content__btn"> Read More <i
                                        class="icon-arrow-right"></i></a>
                            </div>
                            <!-- /.blog-card-two__content -->
                        </div>
                        <!-- /.blog-card-two -->
                    </div>
                    <!-- /.col-xl-3 col-lg-4 col-md-6 col-sm-6 -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="blog-card-two blog-card-two--two wow fadeInUp" data-wow-duration='1500ms'
                            data-wow-delay='500ms'>
                            <div class="blog-card-two__image">
                                <img src="{{ asset('assets/images/blog/blog-2-9.jpg') }}"
                                    alt="The Surfing Man Will Blow Your Mind">
                                <a href="blog-details-right.html" class="blog-card-two__image__link"><span
                                        class="sr-only">The Surfing Man Will Blow Your Mind</span></a>
                            </div>
                            <!-- /.blog-card-two__image -->
                            <div class="blog-card-two__content">
                                <div class="blog-card-two__top">
                                    <div class="blog-card-two__date">
                                        <span class="blog-card-two__date__day">20</span>
                                        <span class="blog-card-two__date__month">Feb</span>
                                    </div>
                                    <!-- /.blog-card-two__date -->
                                    <ul class="list-unstyled blog-card-two__meta">
                                        <li>
                                            <a href="blog-details-right.html"> <span
                                                    class="blog-card-two__meta__icon">
                                                    <i class="icon-user"></i> </span> By Admin</a>
                                        </li>
                                        <li>
                                            <a href="blog-details-right.html"> <span
                                                    class="blog-card-two__meta__icon">
                                                    <i class="icon-price-tag"></i> </span>Travel</a>
                                        </li>
                                    </ul>
                                    <!-- /.list-unstyled blog-card-two__meta -->
                                </div>
                                <!-- /.blog-card-two__top -->
                                <h3 class="blog-card-two__title"><a href="blog-details-right.html">The Surfing Man
                                        Will
                                        Blow Your Mind</a></h3>
                                <!-- /.blog-card-two__title -->
                                <a href="blog-details-right.html" class="blog-card-two__content__btn"> Read More <i
                                        class="icon-arrow-right"></i></a>
                            </div>
                            <!-- /.blog-card-two__content -->
                        </div>
                        <!-- /.blog-card-two -->
                    </div>
                    <!-- /.col-xl-3 col-lg-4 col-md-6 col-sm-6 -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="blog-card-two blog-card-two--two wow fadeInUp" data-wow-duration='1500ms'
                            data-wow-delay='700ms'>
                            <div class="blog-card-two__image">
                                <img src="{{ asset('assets/images/blog/blog-2-10.jpg') }}"
                                    alt="The Surfing Man Will Blow Your Mind">
                                <a href="blog-details-right.html" class="blog-card-two__image__link"><span
                                        class="sr-only">The Surfing Man Will Blow Your Mind</span></a>
                            </div>
                            <!-- /.blog-card-two__image -->
                            <div class="blog-card-two__content">
                                <div class="blog-card-two__top">
                                    <div class="blog-card-two__date">
                                        <span class="blog-card-two__date__day">27</span>
                                        <span class="blog-card-two__date__month">Fab</span>
                                    </div>
                                    <!-- /.blog-card-two__date -->
                                    <ul class="list-unstyled blog-card-two__meta">
                                        <li>
                                            <a href="blog-details-right.html"> <span
                                                    class="blog-card-two__meta__icon">
                                                    <i class="icon-user"></i> </span> By Admin</a>
                                        </li>
                                        <li>
                                            <a href="blog-details-right.html"> <span
                                                    class="blog-card-two__meta__icon">
                                                    <i class="icon-price-tag"></i> </span>Travel</a>
                                        </li>
                                    </ul>
                                    <!-- /.list-unstyled blog-card-two__meta -->
                                </div>
                                <!-- /.blog-card-two__top -->
                                <h3 class="blog-card-two__title"><a href="blog-details-right.html">The Surfing Man
                                        Will
                                        Blow Your Mind</a></h3>
                                <!-- /.blog-card-two__title -->
                                <a href="blog-details-right.html" class="blog-card-two__content__btn"> Read More <i
                                        class="icon-arrow-right"></i></a>
                            </div>
                            <!-- /.blog-card-two__content -->
                        </div>
                        <!-- /.blog-card-two -->
                    </div>
                    <!-- /.col-xl-3 col-lg-4 col-md-6 col-sm-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.blog-five -->

        <div class="instagram-one section-space instagram-one--two wow fadeInUp" data-wow-duration="1500ms"
            data-wow-delay="300ms">
            <div class="instagram-one__top">
                <div class="container">
                    <h5 class="instagram-one__title">Follow Instagram</h5>
                    <!-- /.instagram-one__title -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.instagram-one__top -->
            <div class="container-fluid">
                <div class="instagram-one__carousel gotur-owl__carousel owl-carousel owl-theme"
                    data-owl-options='{
                "items": 6,
                "margin": 30,
                "loop": false,
                "smartSpeed": 700,
                "nav": false,
                "dots": false,
                "autoplay": true,
                "responsive": {
                    "0": {
                        "items": 1
                    },
                    "500": {
                        "items": 2
                    },
                    "768": {
                        "items": 3
                    },
                    "992": {
                        "items": 3
                    },
                    "1080": {
                        "items": 4
                    },
                    "1200": {
                        "items": 5
                    },
                    "1400": {
                        "items": 6
                    }
                }
            }'>
                    <div class="item">
                        <div class="instagram-one__item">
                            <img src="{{ asset('assets/images/instragarm/insta-1-1.jpg') }}" alt="instagram">
                            <a href="https://www.instagram.com/" class="instagram-one__item__overly">
                                <div class="instagram-one__item__overly__icon"><i class="fab fa-instagram"></i>
                                </div>
                                <!-- /.instagram-one__item__overly__icon -->
                            </a>
                        </div>
                        <!-- /.instagram-one__item -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="instagram-one__item">
                            <img src="{{ asset('assets/images/instragarm/insta-1-2.jpg') }}" alt="instagram">
                            <a href="https://www.instagram.com/" class="instagram-one__item__overly">
                                <div class="instagram-one__item__overly__icon"><i class="fab fa-instagram"></i>
                                </div>
                                <!-- /.instagram-one__item__overly__icon -->
                            </a>
                        </div>
                        <!-- /.instagram-one__item -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="instagram-one__item">
                            <img src="{{ asset('assets/images/instragarm/insta-1-3.jpg') }}" alt="instagram">
                            <a href="https://www.instagram.com/" class="instagram-one__item__overly">
                                <div class="instagram-one__item__overly__icon"><i class="fab fa-instagram"></i>
                                </div>
                                <!-- /.instagram-one__item__overly__icon -->
                            </a>
                        </div>
                        <!-- /.instagram-one__item -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="instagram-one__item">
                            <img src="{{ asset('assets/images/instragarm/insta-1-4.jpg') }}" alt="instagram">
                            <a href="https://www.instagram.com/" class="instagram-one__item__overly">
                                <div class="instagram-one__item__overly__icon"><i class="fab fa-instagram"></i>
                                </div>
                                <!-- /.instagram-one__item__overly__icon -->
                            </a>
                        </div>
                        <!-- /.instagram-one__item -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="instagram-one__item">
                            <img src="{{ asset('assets/images/instragarm/insta-1-5.jpg') }}" alt="instagram">
                            <a href="https://www.instagram.com/" class="instagram-one__item__overly">
                                <div class="instagram-one__item__overly__icon"><i class="fab fa-instagram"></i>
                                </div>
                                <!-- /.instagram-one__item__overly__icon -->
                            </a>
                        </div>
                        <!-- /.instagram-one__item -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="instagram-one__item">
                            <img src="{{ asset('assets/images/instragarm/insta-1-6.jpg') }}" alt="instagram">
                            <a href="https://www.instagram.com/" class="instagram-one__item__overly">
                                <div class="instagram-one__item__overly__icon"><i class="fab fa-instagram"></i>
                                </div>
                                <!-- /.instagram-one__item__overly__icon -->
                            </a>
                        </div>
                        <!-- /.instagram-one__item -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="instagram-one__item">
                            <img src="{{ asset('assets/images/instragarm/insta-1-1.jpg') }}" alt="instagram">
                            <a href="https://www.instagram.com/" class="instagram-one__item__overly">
                                <div class="instagram-one__item__overly__icon"><i class="fab fa-instagram"></i>
                                </div>
                                <!-- /.instagram-one__item__overly__icon -->
                            </a>
                        </div>
                        <!-- /.instagram-one__item -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="instagram-one__item">
                            <img src="{{ asset('assets/images/instragarm/insta-1-2.jpg') }}" alt="instagram">
                            <a href="https://www.instagram.com/" class="instagram-one__item__overly">
                                <div class="instagram-one__item__overly__icon"><i class="fab fa-instagram"></i>
                                </div>
                                <!-- /.instagram-one__item__overly__icon -->
                            </a>
                        </div>
                        <!-- /.instagram-one__item -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="instagram-one__item">
                            <img src="{{ asset('assets/images/instragarm/insta-1-3.jpg') }}" alt="instagram">
                            <a href="https://www.instagram.com/" class="instagram-one__item__overly">
                                <div class="instagram-one__item__overly__icon"><i class="fab fa-instagram"></i>
                                </div>
                                <!-- /.instagram-one__item__overly__icon -->
                            </a>
                        </div>
                        <!-- /.instagram-one__item -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="instagram-one__item">
                            <img src="{{ asset('assets/images/instragarm/insta-1-4.jpg') }}" alt="instagram">
                            <a href="https://www.instagram.com/" class="instagram-one__item__overly">
                                <div class="instagram-one__item__overly__icon"><i class="fab fa-instagram"></i>
                                </div>
                                <!-- /.instagram-one__item__overly__icon -->
                            </a>
                        </div>
                        <!-- /.instagram-one__item -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="instagram-one__item">
                            <img src="{{ asset('assets/images/instragarm/insta-1-5.jpg') }}" alt="instagram">
                            <a href="https://www.instagram.com/" class="instagram-one__item__overly">
                                <div class="instagram-one__item__overly__icon"><i class="fab fa-instagram"></i>
                                </div>
                                <!-- /.instagram-one__item__overly__icon -->
                            </a>
                        </div>
                        <!-- /.instagram-one__item -->
                    </div>
                    <!-- /.item -->
                    <div class="item">
                        <div class="instagram-one__item">
                            <img src="{{ asset('assets/images/instragarm/insta-1-6.jpg') }}" alt="instagram">
                            <a href="https://www.instagram.com/" class="instagram-one__item__overly">
                                <div class="instagram-one__item__overly__icon"><i class="fab fa-instagram"></i>
                                </div>
                                <!-- /.instagram-one__item__overly__icon -->
                            </a>
                        </div>
                        <!-- /.instagram-one__item -->
                    </div>
                    <!-- /.item -->
                </div>
                <!-- /.instagram-one__carousel -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.instagram-one -->

        @include('landing_page.footer')

    </div>
    <!-- /.page-wrapper -->

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
