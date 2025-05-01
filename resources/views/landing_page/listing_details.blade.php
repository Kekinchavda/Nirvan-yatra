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
        <div class="preloader__image"
            style="background-image: url('{{ asset('assets/images/logos/logo-dark.png') }}');"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">


        @include('landing_page.header')

        <section class="page-header">
            <div class="page-header__bg"
                style="background-image: url('{{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg') }}');">
            </div>
            <!-- /.page-header__bg -->
            <div class="container">
                <div class="page-header__content">
                    <h2 class="page-header__title bw-split-in-right">{{ $slugData->title }}</h2>
                    <ul class="gotur-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Tour Listing Details 02</span></li>
                    </ul><!-- /.thm-breadcrumb list-unstyled -->
                </div><!-- /.page-header__content -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="tour-listing-details section-space-bottom">
            <div class="tour-listing-details__destination wow fadeInUp" data-wow-duration='1500ms'
                data-wow-delay='500ms'>
                <div class="container">
                    <div class="tour-listing-details__destination__inner">
                        <div class="tour-listing-details__destination__left">
                            <h4 class="tour-listing-details__destination__title">{{ $slugData->title }}
                            </h4><!-- /.tour-listing-details__destination__title -->
                            <div class="tour-listing-details__destination__revue">
                                <div class="tour-listing-details__destination__ratings-box">
                                    <span>(17 Review)</span>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </div>
                                <div class="tour-listing-details__destination__posted">
                                    <i class="icon-pin1"></i>
                                    <p class="tour-listing-details__destination__posted-text">{{ $slugData->location }}
                                    </p>
                                </div><!-- / -->
                            </div><!-- /.tour-listing-details__destination__revue -->
                        </div><!-- /.tour-listing-details__destination__left -->
                        <div class="tour-listing-details__destination__right">
                            <a href="javascript:void(0)" class="tour-listing-details__destination__btn gotur-btn">Share
                                <i class="icon-share"></i></a>
                            <div class="tour-listing-details__destination__social__list">
                                <a href="https://twitter.com">
                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                    <span class="sr-only">Twitter</span>
                                </a>
                                <a href="https://facebook.com">
                                    <i class="fab fa-facebook" aria-hidden="true"></i>
                                    <span class="sr-only">Facebook</span>
                                </a>
                                <a href="https://pinterest.com">
                                    <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                    <span class="sr-only">Pinterest</span>
                                </a>
                                <a href="https://instagram.com">
                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                    <span class="sr-only">Instagram</span>
                                </a>
                            </div>
                        </div><!-- /.tour-listing-details__destination__right -->
                    </div><!-- /.tour-listing-details__destination__inner -->
                </div><!-- /.container -->
            </div><!-- /.tour-listing-details__destination -->
            <div class="tour-listing-details__info-area wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                <div class="container">
                    <ul class="tour-listing-details__info-area__info list-unstyled">
                        <li>
                            <div class="tour-listing-details__info-area__icon">
                                <i class="icon-location"></i>
                            </div><!-- /.tour-listing-details__info-area__icon -->
                            <div class="tour-listing-details__info-area__content">
                                <h5 class="tour-listing-details__info-area__title">Location</h5>
                                <!-- /.tour-listing-details__info-area__title -->
                                <p class="tour-listing-details__info-area__text">{{ $slugData->location }}</p>
                                <!-- /.tour-listing-details__info-area__text -->
                            </div><!-- /.tour-listing-details__info-area__content -->
                        </li>
                        <li>
                            <div class="tour-listing-details__info-area__icon">
                                <i class="icon-travel-and-tourism"></i>
                            </div><!-- /.tour-listing-details__info-area__icon -->
                            <div class="tour-listing-details__info-area__content">
                                <h5 class="tour-listing-details__info-area__title">Activities Type</h5>
                                <!-- /.tour-listing-details__info-area__title -->
                                <p class="tour-listing-details__info-area__text">{{ $slugData->activity_type }}</p>
                                <!-- /.tour-listing-details__info-area__text -->
                            </div><!-- /.tour-listing-details__info-area__content -->
                        </li>
                        <li>
                            <div class="tour-listing-details__info-area__icon">
                                <i class="icon-clock"></i>
                            </div><!-- /.tour-listing-details__info-area__icon -->
                            <div class="tour-listing-details__info-area__content">
                                <h5 class="tour-listing-details__info-area__title">Activate Day</h5>
                                <!-- /.tour-listing-details__info-area__title -->
                                <p class="tour-listing-details__info-area__text">Fev 5 - 5</p>
                                <!-- /.tour-listing-details__info-area__text -->
                            </div><!-- /.tour-listing-details__info-area__content -->
                        </li>
                        <li>
                            <div class="tour-listing-details__info-area__icon">
                                <i class="icon-group"></i>
                            </div><!-- /.tour-listing-details__info-area__icon -->
                            <div class="tour-listing-details__info-area__content">
                                <h5 class="tour-listing-details__info-area__title">Traveler</h5>
                                <!-- /.tour-listing-details__info-area__title -->
                                <p class="tour-listing-details__info-area__text">1</p>
                                <!-- /.tour-listing-details__info-area__text -->
                            </div><!-- /.tour-listing-details__info-area__content -->
                        </li>
                        <li>
                            <a href="checkout.html" class="gotur-btn">₹{{ $slugData->rate }}/ Per Person</a>
                        </li>
                    </ul><!-- /.tour-listing-details__info-area__info -->
                </div><!-- /.container -->
            </div><!-- /.tour-listing-details__info-area -->
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-lg-8">
                        <div class="tour-listing-details__content">
                            <div class="tour-listing-details__content__item tour-listing-details__content__text wow fadeInUp"
                                data-wow-duration='1500ms' data-wow-delay='500ms'>
                                <h4 class="tour-listing-details__title">Overview</h4>
                                <!-- /.tour-listing-details__title -->
                                <p class="tour-listing-details__text">{{ $slugData->overview->overview }}</p>
                                <!-- /.tour-listing-details__text -->
                            </div><!-- /.tour-listing-details__content__item -->
                            <div class="tour-listing-details__content__item tour-listing-details__list wow fadeInUp"
                                data-wow-duration='1500ms' data-wow-delay='500ms'>
                                <h4 class="tour-listing-details__title">Highlight List</h4>
                                <!-- /.tour-listing-details__title -->
                                {{-- @dd(is_array($slugData->overview->highlights)) --}}
                                @if (!empty($slugData->overview->highlights) && is_array($slugData->overview->highlights))
                                    <ul class="tour-listing-details__content__list">
                                        @foreach ($slugData->overview->highlights as $highlight)
                                            <li><i class="icon-check-star"></i> {{ $highlight }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>No highlights available.</p>
                                @endif

                                <!-- /.tour-listing-details__content__list -->
                            </div><!-- /.tour-listing-details__content__item -->
                            <div class="tour-listing-details__content__item tour-listing-details__amenities wow fadeInUp"
                                data-wow-duration='1500ms' data-wow-delay='500ms'>
                                <h4 class="tour-listing-details__title">Tour Amenities</h4>
                                <!-- /.tour-listing-details__title -->
                                <div class="tour-listing-details__amenities__inner">
                                    {{-- Included Amenities --}}
                                    @if (!empty($slugData->amenities->included_amenities) && is_array($slugData->amenities->included_amenities))
                                        <ul class="tour-listing-details__amenities__list">
                                            @foreach ($slugData->amenities->included_amenities as $item)
                                                <li><i class="icon-check-star"></i> {{ $item }}</li>
                                            @endforeach
                                        </ul>
                                    @endif

                                    {{-- Not Included Amenities --}}
                                    @if (!empty($slugData->amenities->not_included_amenities) && is_array($slugData->amenities->not_included_amenities))
                                        <ul
                                            class="tour-listing-details__amenities__list tour-listing-details__amenities__list--two">
                                            @foreach ($slugData->amenities->not_included_amenities as $item)
                                                <li><i class="fas fa-times"></i> {{ $item }}</li>
                                            @endforeach
                                        </ul>
                                    @endif

                                    {{-- Fallback if both are empty --}}
                                    @if (empty($slugData->amenities->included_amenities) && empty($slugData->amenities->not_included_amenities))
                                        <p>No Amenities available.</p>
                                    @endif
                                </div>
                                <!-- /.tour-listing-details__amenities__inner -->
                            </div>

                            <!-- image -->
                            <div class="tour-listing-details__content__item tour-listing-details__thumb wow fadeInUp"
                                data-wow-duration='1500ms' data-wow-delay='500ms'>
                                <div class="row gutter-y-20">
                                    <div class="col-md-6">
                                        <div class="tour-listing-details__thumb__item">
                                            <img src="{{ asset('assets/images/resources/tour-listing-details-1-3.jpg') }}"
                                                alt="tour-listing-details">
                                        </div><!-- /.tour-listing-details__thumb__item -->
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="tour-listing-details__thumb__item">
                                            <img src="{{ asset('assets/images/resources/tour-listing-details-1-4.jpg') }}"
                                                alt="tour-listing-details">
                                        </div><!-- /.tour-listing-details__thumb__item -->
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->
                            </div>
                            <!-- image -->

                            <div class="tour-listing-details__content__item tour-listing-details__ture-plan">
                                <h4 class="tour-listing-details__title">Tour Plan</h4>
                                <!-- /.tour-listing-details__title -->
                                {{-- <div class="faq-page__accordion faq-accordion gotur-accordion"
                                    data-grp-name="gotur-accordion">
                                    <div class="accordion wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='500ms'>
                                        <div class="accordion-title">
                                            <h4 class="accordion-title__text"> How long should a business plan be
                                                <span class="accordion-title__icon"></span>
                                            </h4>
                                        </div>
                                        <!-- /.accordian-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p class="inner__text">Nulla facilisi. Vestibulum tristique sem in eros
                                                    eleifend imperdiet. Donec quis convallis neque. In id lacus pulvinar
                                                    lacus, eget vulputate lectus. Ut viverra bibendum lorem, at tempus
                                                    nibh mattis in. Sed a massa eget lacus consequat auctor.</p>
                                            </div><!-- /.accordian-content -->
                                        </div>
                                    </div>
                                    <!-- /.accordian-item -->
                                    <div class="accordion active wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='500ms'>
                                        <div class="accordion-title">
                                            <h4 class="accordion-title__text">What is included in your services<span
                                                    class="accordion-title__icon"></span></h4>
                                        </div><!-- /.accordian-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p class="inner__text">Nulla facilisi. Vestibulum tristique sem in eros
                                                    eleifend imperdiet. Donec quis convallis neque. In id lacus pulvinar
                                                    lacus, eget vulputate lectus. Ut viverra bibendum lorem, at tempus
                                                    nibh mattis in. Sed a massa eget lacus consequat auctor.</p>
                                            </div><!-- /.accordian-content -->
                                        </div>
                                    </div><!-- /.accordian-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='500ms'>
                                        <div class="accordion-title">
                                            <h4 class="accordion-title__text"> What type of company is measured<span
                                                    class="accordion-title__icon"></span></h4>
                                        </div><!-- /.accordian-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p class="inner__text">Nulla facilisi. Vestibulum tristique sem in eros
                                                    eleifend imperdiet. Donec quis convallis neque. In id lacus pulvinar
                                                    lacus, eget vulputate lectus. Ut viverra bibendum lorem, at tempus
                                                    nibh mattis in. Sed a massa eget lacus consequat auctor.</p>
                                            </div><!-- /.accordian-content -->
                                        </div>
                                    </div><!-- /.accordian-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='500ms'>
                                        <div class="accordion-title">
                                            <h4 class="accordion-title__text">What type of company is measured<span
                                                    class="accordion-title__icon"></span></h4>
                                        </div><!-- /.accordian-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p class="inner__text">Nulla facilisi. Vestibulum tristique sem in eros
                                                    eleifend imperdiet. Donec quis convallis neque. In id lacus pulvinar
                                                    lacus, eget vulputate lectus. Ut viverra bibendum lorem, at tempus
                                                    nibh mattis in. Sed a massa eget lacus consequat auctor.</p>
                                            </div><!-- /.accordian-content -->
                                        </div>
                                    </div><!-- /.accordian-item -->
                                </div> --}}
                                <div class="faq-page__accordion faq-accordion gotur-accordion"
                                    data-grp-name="gotur-accordion">
                                    @if (!empty($slugData->plan->itinerary) && is_array($slugData->plan->itinerary))
                                        @foreach ($slugData->plan->itinerary as $index => $item)
                                            <div class="accordion {{ $index === 0 ? 'active' : '' }} wow fadeInUp"
                                                data-wow-duration="1500ms" data-wow-delay="500ms">
                                                <div class="accordion-title">
                                                    <h4 class="accordion-title__text">
                                                        {{ $item['title'] ?? 'Untitled' }}
                                                        <span class="accordion-title__icon"></span>
                                                    </h4>
                                                </div>
                                                <div class="accordion-content">
                                                    <div class="inner">
                                                        <p class="inner__text">
                                                            {!! $item['details'] ?? 'No description provided.' !!}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <p>No tour plan available.</p>
                                    @endif
                                </div>
                            </div>
                            <!-- /.tour-listing-details__content__item -->
                            <div class="tour-listing-details__content__item tour-listing-details__ture-list">
                                <h4 class="tour-listing-details__title">Related Tour List</h4>
                                <!-- /.tour-listing-details__title -->
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="listing-card-four wow fadeInUp" data-wow-duration='1500ms'
                                            data-wow-delay='100ms'>
                                            <div class="listing-card-four__image">
                                                <img src="{{ asset('assets/images/blog/listing-list-4-1.jpg') }}"
                                                    alt="All Inclusive Ultimate Circle Island Day with Lunch">
                                                <div class="listing-card-four__btn-group">


                                                    <div class="listing-card-four__featured">Featured</div>
                                                    <!-- /.listing-card-four__featured -->

                                                </div><!-- /.listing-card-four__btn-group -->
                                                <!-- /.listing-card-four__btns__hover -->
                                            </div>
                                            <ul class="listing-card-four__meta list-unstyled">
                                                <li>
                                                    <a href="tour-listing-details-2.html"> <span
                                                            class="listing-card-four__meta__icon"> <i
                                                                class="icon-pin1"></i> </span>Slingerland</a>
                                                </li>
                                                <li>
                                                    <a href="tour-listing-details-2.html"> <span
                                                            class="listing-card-four__meta__icon"> <i
                                                                class="icon-calendar"></i> </span>6 Days, 3
                                                        Night</a>
                                                </li>
                                            </ul><!-- /.listing-card-four__meta -->
                                            <a href="tour-listing-details-2.html"
                                                class="listing-card-four__image__overly"></a>
                                        </div><!-- /.listing-card-four__image -->
                                        <div class="listing-card-four__content">
                                            <div class="listing-card-four__rating">
                                                <span>(10 Review)</span>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div><!-- /.listing-card-four__rating -->
                                            <h3 class="listing-card-four__title"><a
                                                    href="tour-listing-details-2.html">All Inclusive Ultimate
                                                    Circle Island Day with Lunch</a></h3>
                                            <!-- /.listing-card-four__title -->

                                            <div class="listing-card-four__content__btn">
                                                <div class="listing-card-four__price">
                                                    <span class="listing-card-four__price__sub">Per Day</span>
                                                    <span class="listing-card-four__price__number">$59.00</span>
                                                </div><!-- /.listing-card-four__price -->
                                                <a href="tour-listing-details-2.html"
                                                    class="listing-card-four__btn gotur-btn"> Book Now <span
                                                        class="icon"><i class="icon-right"></i> </span></a>
                                            </div><!-- /.listing-card-four__content__btn -->
                                        </div><!-- /.listing-card-four__content -->
                                    </div><!-- /.listing-card-four -->
                                </div><!-- /.col-lg-6 col-md-6 -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="listing-card-four wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='300ms'>
                                        <div class="listing-card-four__image">
                                            <img src="{{ asset('assets/images/blog/listing-list-4-2.jpg') }}"
                                                alt="Molokini and Turtle Town Snorkeling Adventure Aboard">
                                            <div class="listing-card-four__btn-group">

                                                <div class="listing-card-four__discount">-30% Off</div>
                                                <!-- /.listing-card-four__discount -->

                                                <div class="listing-card-four__featured">Featured</div>
                                                <!-- /.listing-card-four__featured -->

                                            </div><!-- /.listing-card-four__btn-group -->
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
                                                </div><!-- /.listing-card-four__btns__hover -->
                                            </div>
                                            <ul class="listing-card-four__meta list-unstyled">
                                                <li>
                                                    <a href="tour-listing-details-2.html"> <span
                                                            class="listing-card-four__meta__icon"> <i
                                                                class="icon-pin1"></i> </span>Slingerland</a>
                                                </li>
                                                <li>
                                                    <a href="tour-listing-details-2.html"> <span
                                                            class="listing-card-four__meta__icon"> <i
                                                                class="icon-calendar"></i> </span>6 Days, 3
                                                        Night</a>
                                                </li>
                                            </ul><!-- /.listing-card-four__meta -->
                                            <a href="tour-listing-details-2.html"
                                                class="listing-card-four__image__overly"></a>
                                        </div><!-- /.listing-card-four__image -->
                                        <div class="listing-card-four__content">
                                            <div class="listing-card-four__rating">
                                                <span>(10 Review)</span>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div><!-- /.listing-card-four__rating -->
                                            <h3 class="listing-card-four__title"><a
                                                    href="tour-listing-details-2.html">Molokini and Turtle Town
                                                    Snorkeling Adventure Aboard</a></h3>
                                            <!-- /.listing-card-four__title -->

                                            <div class="listing-card-four__content__btn">
                                                <div class="listing-card-four__price">
                                                    <span class="listing-card-four__price__sub">Per Day</span>
                                                    <span class="listing-card-four__price__number">$59.00</span>
                                                </div><!-- /.listing-card-four__price -->
                                                <a href="tour-listing-details-2.html"
                                                    class="listing-card-four__btn gotur-btn"> Book Now <span
                                                        class="icon"><i class="icon-right"></i> </span></a>
                                            </div><!-- /.listing-card-four__content__btn -->
                                        </div><!-- /.listing-card-four__content -->
                                    </div><!-- /.listing-card-four -->
                                </div><!-- /.col-lg-6 col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- / -->
                        {{-- <div class="tour-listing-details__content__item tour-listing-details__reviews">
                            <h4 class="tour-listing-details__title wow fadeInUp" data-wow-duration='1500ms'
                                data-wow-delay='500ms'>1 Reviews</h4><!-- /.tour-listing-details__title -->
                            <ul class="list-unstyled product-details__comment__list">
                                <li class="product-details__comment__card wow fadeInUp" data-wow-duration='1500ms'
                                    data-wow-delay='500ms'>
                                    <div class="product-details__comment__card__image">
                                        <img src="assets/images/blog/blog-comment-1-1.png" alt="gotur">
                                    </div>
                                    <div class="product-details__comment__card__content">
                                        <div class="product-details__comment__card__top">
                                            <div class="product-details__comment__card__info">
                                                <h3 class="product-details__comment__card__title">Leslie Alexander
                                                </h3>
                                                <p class="product-details__comment__card__date">February 10, 2024
                                                    at 2:37 pm</p>
                                            </div>
                                            <div class="product-details__comment__card__star">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                        </div>
                                        <p class="product-details__comment__card__text">Neque porro est qui dolorem
                                            ipsum quia quaed inventor veritatis et quasi architecto var sed
                                            efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply
                                            dummy</p>
                                    </div>
                                </li>
                            </ul><!-- /.list-unstyled comments-one__list -->
                        </div> --}}
                        <!-- /.tour-listing-details__content__item -->
                        <div class="tour-listing-details__content__item tour-listing-details__add-reviews">
                            <h4 class="tour-listing-details__title wow fadeInUp" data-wow-duration='1500ms'
                                data-wow-delay='500ms'>Add a Review</h4><!-- /.tour-listing-details__title -->
                            <div class="product-details__form-ratings wow fadeInUp" data-wow-duration='1500ms'
                                data-wow-delay='500ms'>
                                <p class="product-details__form-ratings__label">Your Rating*</p>
                                <span class="far fa-star"></span>
                                <span class="far fa-star"></span>
                                <span class="far fa-star"></span>
                                <span class="far fa-star"></span>
                                <span class="far fa-star"></span>
                            </div><!-- review-ratings -->
                            <form
                                class="comments-form__form contact-form-validated product-details__form__form form-one wow fadeInUp"
                                data-wow-duration='1500ms' data-wow-delay='500ms'>
                                <div class="form-one__group">
                                    <div class="form-one__control">
                                        <label for="name">Your Name*</label>
                                        <input type="text" name="name" id="name" placeholder="Your Name">
                                    </div>
                                    <div class="form-one__control">
                                        <label for="email">Your Email*</label>
                                        <input type="email" name="email" id="email" placeholder="Your Email">
                                    </div>
                                    <div class="form-one__control form-one__control--full">
                                        <label for="message">Message*</label>
                                        <textarea name="message" id="message"
                                            placeholder="Write Message . . "></textarea>
                                    </div>

                                    <div class="form-one__control form-one__control--full">
                                        <button type="submit" class="gotur-btn gotur-btn--base">Submit Now <i
                                                class="icon-right"></i></button>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div><!-- / -->
                    </div><!-- /.tour-listing-details__content -->

                </div><!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="tour-listing-details__sidebar">
                        <div class="tour-listing-details__sidebar__item tour-listing-details__sidebar__item-form wow fadeInUp"
                            data-wow-delay="0.4s" data-wow-duration="1500ms">
                            <h4 class="tour-listing-details__sidebar__title">Book This Tour</h4>
                            <!-- /.tour-listing-details__sidebar__title -->
                            <div class="sidebar-two__form">
                                <form class="sidebar-two__form__inner contact-form-validated" action="inc/sendemail.php"
                                    novalidate="novalidate">
                                    <div class="sidebar-two__form__control">
                                        <label for="checkin">From:</label>
                                        <input class="gotur-datepicker" id="checkin" type="text" name="checkin">
                                        <i class="icon-calendar"></i>
                                    </div>
                                    <div class="sidebar-two__form__control">
                                        <label for="checkout">Time:</label>
                                        <input class="gotur-datepicker" id="checkout" type="text" name="checkout">
                                    </div>
                                    <div class="sidebar-two__form__control">
                                        <label for="checkout">Tickets:</label>
                                        <input id="checkout" type="text" name="checkout"
                                            placeholder="Please, Select Date Fist">
                                    </div>
                                    <div class="sidebar-two__form__control sidebar-two__form__control--two">
                                        <label class="sidebar-two__form__control--title" for="guests">Add
                                            Extra:</label>
                                        <ul class="list-unstyled sidebar-two__form__checkbox">
                                            <li>
                                                <input type="checkbox" name="check8" id="check8">
                                                <label for="check8"> <span> Services per booking</span></label>

                                            </li>
                                            <li>
                                                <input type="checkbox" name="check9" id="check9">
                                                <label for="check9"><span>Services per person</span></label>

                                            </li>
                                        </ul><!-- /.list-unstyled -->
                                    </div>
                                    <ul class="list-unstyled sidebar-two__form__add-list">
                                        <li>
                                            <div class="sidebar-two__form__add">Adult:<span>$20.00</span></div>
                                        </li>
                                        <li>
                                            <div class="sidebar-two__form__add">Youth: <span>$16.00</span></div>
                                        </li>
                                    </ul>
                                    <div class="sidebar-two__form__total">Total:<span>$36.00</span></div>
                                    <button type="submit" class="gotur-btn gotur-btn--base">Book Now <i
                                            class="icon-right"></i></button>
                                </form>
                            </div>
                        </div><!-- /.tour-listing-details__sidebar__item -->
                    </div><!-- /.tour-listing-details-details__sidebar -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row justify-content-center -->
    </div><!-- /.container -->
    </section><!-- /.tour-listing-details -->

    </div><!-- /.page-wrapper -->

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div><!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box logo-retina">
                <a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="158"
                        alt="logo"></a>
            </div><!-- /.logo-box -->
            <div class="mobile-nav__container"></div><!-- /.mobile-nav__container -->
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <span class="mobile-nav__contact__icon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <a href="mailto:needhelp@gotur.com">needhelp@gotur.com</a>
                </li>
                <li>
                    <span class="mobile-nav__contact__icon">
                        <i class="fa fa-phone-alt"></i>
                    </span>
                    <a href="tel:+9156980036420">+91 5698 0036 420</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">
                <a href="https://facebook.com"> <i class="icon-facebook" aria-hidden="true"></i> <span
                        class="sr-only">Facebook</span></a>
                <a href="https://twitter.com"> <i class="icon-twitter" aria-hidden="true"></i> <span
                        class="sr-only">Twitter</span></a>
                <a href="https://instagram.com"> <i class="icon-linkedin" aria-hidden="true"></i> <span
                        class="sr-only">Linked In</span></a>
                <a href="https://youtube.com"> <i class="icon-youtube" aria-hidden="true"></i> <span
                        class="sr-only">Youtube</span></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__content -->
    </div><!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div><!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here...">
                <button type="submit" aria-label="search submit" class="gotur-btn"> <i class="icon-search"></i>
                </button>
            </form>
        </div><!-- /.search-popup__content -->
    </div><!-- /.search-popup -->
    <div class="header-right-sidebar">
        <div class="header-right-sidebar__overlay header-right-sidebar__toggler"></div>
        <div class="header-right-sidebar__content">
            <span class="header-right-sidebar__close header-right-sidebar__toggler"><i class="fa fa-times"></i></span>
            <div class="header-right-sidebar__logo-box">
                <a href="index.html" aria-label="logo image"> <img src="assets/images/logo-landing.png" width="158"
                        alt="gotur"> </a>
            </div>
            <div class="header-right-sidebar__container">
                <div class="header-right-sidebar__container__about wow fadeInUp" data-wow-duration='1500ms'
                    data-wow-delay='300ms'>
                    <h3 class="header-right-sidebar__container__title">We’re Number One Travel Adventure Company</h3>
                    <p class="header-right-sidebar__container__text">It is a long established fact that a reader will
                        be distracted the readable content of a page when looking at layout the point of using lorem the
                        is Ipsum less normal distribution of letters.</p>
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
                                <a href="">info@company.com</a>
                            </div>
                        </li>
                        <li class="header-right-sidebar__container__list__item wow fadeInUp" data-wow-duration='1500ms'
                            data-wow-delay='500ms'>
                            <div class="header-right-sidebar__container__icon">
                                <i class="icon-telephone"></i>
                            </div>
                            <div class="header-right-sidebar__container__list__content">
                                <span class="header-right-sidebar__container__list__title">call agent</span>
                                <a href="tel:+91-123-654-900">+91 123 654 900</a>
                            </div>
                        </li>
                        <li class="header-right-sidebar__container__list__item wow fadeInUp" data-wow-duration='1500ms'
                            data-wow-delay='700ms'>
                            <div class="header-right-sidebar__container__icon">
                                <i class="icon-clock"></i>
                            </div>
                            <div class="header-right-sidebar__container__list__content">
                                <span class="header-right-sidebar__container__list__title">opening time</span>
                                <p>Hours: Mon-Fri: 8am – 7pm</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="header-right-sidebar__container__newsletter-box wow fadeInUp" data-wow-duration='1500ms'
                    data-wow-delay='900ms'>
                    <h3 class="header-right-sidebar__container__title">get notification</h3>
                    <form action="#" data-url="MAILCHIMP_FORM_URL" class="newsletter-box mc-form">
                        <input type="email" name="EMAIL" placeholder="Email">
                        <button type="submit" class="gotur-btn gotur-btn--base">subscribe now</button>
                    </form>
                    <div class="mc-form__response"></div>
                </div>
            </div>
        </div><!-- /.header-right-sidebar__content -->
    </div>
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