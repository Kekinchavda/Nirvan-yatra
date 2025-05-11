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

        <section class="tour-listing-page section-space">
            <div class="container">
                <div class="row gutter-y-40">
                    <div class="col-lg-8">
                        <div class="row gutter-y-30 gutter-x-30">
                            @foreach ($tours as $tour)
                                <div class="col-md-6">
                                    <div class="listing-card-four wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='100ms'>
                                        <div class="listing-card-four__image">
                                            <img src="{{ asset('storage/' . $tour->feature_image) }}"
                                                alt="All Inclusive Ultimate Circle Island Day with Lunch">
                                            <div class="listing-card-four__btn-group">


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
                                                    <a href="{{ route('tour.details', $tour->slug) }}"> <span
                                                            class="listing-card-four__meta__icon"> <i class="icon-pin1"></i>
                                                        </span>{{ ucfirst($tour->location) }}</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('tour.details', $tour->slug) }}"> <span
                                                            class="listing-card-four__meta__icon"> <i
                                                                class="icon-calendar"></i> </span>{{ $tour->days }}
                                                        Days, {{ $tour->nights }} Night</a>
                                                </li>
                                            </ul><!-- /.listing-card-four__meta -->
                                            <a href="{{ route('tour.details', $tour->slug) }}"
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
                                                    href="{{ route('tour.details', $tour->slug) }}">{{ $tour->title }}</a>
                                            </h3>
                                            <!-- /.listing-card-four__title -->

                                            <div class="listing-card-four__content__btn">
                                                <div class="listing-card-four__price">
                                                    <span class="listing-card-four__price__sub">Rate</span>
                                                    <span class="listing-card-four__price__number">₹{{ $tour->rate }}</span>
                                                </div><!-- /.listing-card-four__price -->
                                                <a href="{{ route('tour.details', $tour->slug) }}"
                                                    class="listing-card-four__btn gotur-btn"> Book Now <span class="icon"><i
                                                            class="icon-right"></i> </span></a>
                                            </div><!-- /.listing-card-four__content__btn -->
                                        </div><!-- /.listing-card-four__content -->
                                    </div><!-- /.listing-card-four -->
                                </div><!-- /.col-md-6 -->
                            @endforeach

                            <div class="col-12">
                                @if($tours->count() > 0)
                                    {{-- Only show pagination if more than one page exists --}}
                                    @if($tours->hasPages())
                                        <ul class="post-pagination justify-content-center" data-wow-duration='1500ms'
                                            data-wow-delay='500ms'>
                                            {{-- Previous Page Link --}}
                                            @if($tours->onFirstPage())
                                                <li class="disabled"><span class="previous">Previous</span></li>
                                            @else
                                                <li><a href="{{ $tours->previousPageUrl() }}" class="previous">Previous</a></li>
                                            @endif

                                            {{-- Pagination Numbers --}}
                                            @foreach($tours->links()->elements[0] as $page => $url)
                                                @if($page == $tours->currentPage())
                                                    <li class="active"><span>{{ $page }}</span></li>
                                                @else
                                                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                                                @endif
                                            @endforeach

                                            {{-- Next Page Link --}}
                                            @if($tours->hasMorePages())
                                                <li><a href="{{ $tours->nextPageUrl() }}" class="next">Next</a></li>
                                            @else
                                                <li class="disabled"><span class="next">Next</span></li>
                                            @endif
                                        </ul>
                                    @else
                                        {{-- Optional: Message when single page contains all results --}}
                                        <div class="text-center text-muted py-3">
                                            Showing all available tours
                                        </div>
                                    @endif
                                @else
                                    {{-- No tours found message --}}
                                    <div class="alert alert-info text-center">
                                        No tours found matching your criteria.
                                    </div>
                                @endif
                                <!-- /.post-pagination -->
                            </div><!-- /.col-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <aside class="listing__sidebar">
                            <div class="listing__sidebar__item">
                                <form action="#" class="listing__sidebar__form wow fadeInUp" data-wow-delay="0.4s"
                                    data-wow-duration="1500ms">
                                    <div class="banner-form">
                                        <div class="banner-form__control">
                                            <i class="icon icon-location"></i>
                                            <label for="location">Location</label>
                                            <select name="location" class="selectpicker" id="location"
                                                data-live-search="true" title="Select Location">
                                                @foreach ($locations as $location)
                                                    <option value="{{ $location->id }}"
                                                        @if(request('location') == $location->id) selected @endif
                                                        data-tokens="{{ strtolower($location->name) }}">
                                                        {{ $location->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="banner-form__control">
                                            <i class="icon icon-travle"></i>
                                            <label for="type">Activities Type</label>
                                            <select name="activity" class="selectpicker" id="activity"
                                                data-live-search="true" title="Select Activity">
                                                @foreach ($activitys as $activity)
                                                    <option value="{{ $activity->id }}"
                                                        @if(request('activity') == $activity->id) selected @endif
                                                        data-tokens="{{ strtolower($activity->name) }}">
                                                        {{ $activity->name }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="banner-form__control banner-form__control--date">
                                            <i class="icon icon-clock"></i>
                                            <label for="date">Activity Day</label>
                                            <input class="gotur-datepicker" id="date" type="text" name="date_range">
                                        </div>
                                        <div class="banner-form__control">
                                            <i class="icon icon-group"></i><!-- / -->
                                            <label for="guests">Guests</label>
                                            <button type="button" class="banner-form__qty-minus sub">
                                                <i class="icon-down-arrow"></i>
                                            </button>
                                            <input id="guests" type="number" value="2" name="guests" placeholder="2">
                                            <button type="button" class="banner-form__qty-plus add">
                                                <i class="icon-down-arrow"></i>
                                            </button>
                                        </div>
                                        <div class="banner-form__control banner-form__button">
                                            <button class="gotur-btn" type="submit">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- /.listing__sidebar__item -->

                            <div class="listing__sidebar__item wow fadeInUp" data-wow-delay="0.4s"
                                data-wow-duration="1500ms">
                                <div class="listing__sidebar__filter listing__sidebar__item__inner">
                                    <h3 class="listing__sidebar__title listing__sidebar__rating__title">Filter by
                                        Price
                                    </h3>
                                    <form action="#" class="price-ranger-two">
                                        <div id="slider-range-two"></div>
                                    </form>
                                </div>
                                <!-- /.listing__sidebar__amenitie -->
                            </div><!-- /.listing__colort -->
                        </aside><!-- /.shop-sidebar -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.tour-listing-page -->
    </div><!-- /.page-wrapper -->
    {{-- mobile wrapper --}}
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
                    <a href="mailto:nirvanyatra@gmail.com">nirvanyatra@gmail.com</a>
                </li>
                <li>
                    <span class="mobile-nav__contact__icon">
                        <i class="fa fa-phone-alt"></i>
                    </span>
                    <a href="tel:+919011011366">+91 90110 11366</a>
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
    {{-- mobile wrapper --}}

    @include('landing_page.footer')

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