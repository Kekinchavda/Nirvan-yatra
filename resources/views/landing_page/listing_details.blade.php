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

        <section class="page-header">
            <div class="page-header__bg"
                style="background-image: url('{{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg') }}');">
            </div>
            <!-- /.page-header__bg -->
            <div class="container">
                <div class="page-header__content">
                    <h2 class="page-header__title bw-split-in-right">{{ $slugData->title }}</h2>
                    <ul class="gotur-breadcrumb list-unstyled">
                        <li><a href="{{ route('landingaPage') }}">Home</a></li>
                        <li><span>Tour Listing Details of {{ $slugData->title }}</span></li>
                    </ul><!-- /.thm-breadcrumb list-unstyled -->
                </div><!-- /.page-header__content -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <div class="tour-one section-space-top wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
            <div class="tour-one__carousel gotur-owl__carousel owl-carousel owl-theme"
                data-owl-options='{
            "items": 1,
            "center":true,
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
                "575": {
                    "items": 2
                },
                "768": {
                    "items": 2
                },
                "992": {
                    "items": 3
                },
                "1199": {
                    "items": 4
                }
            }
        }'>
                <div class="item">
                    <div class="tour-one__item">
                        <img src="{{ asset('assets/images/gallery/listing-list-g-1-1.jpg') }}" alt="tour image">
                    </div><!-- /.tour-one__item -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="tour-one__item">
                        <img src="{{ asset('assets/images/gallery/listing-list-g-1-2.jpg') }}" alt="tour image">
                    </div><!-- /.tour-one__item -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="tour-one__item">
                        <img src="{{ asset('assets/images/gallery/listing-list-g-1-3.jpg') }}" alt="tour image">
                    </div><!-- /.tour-one__item -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="tour-one__item">
                        <img src="{{ asset('assets/images/gallery/listing-list-g-1-4.jpg') }}" alt="tour image">
                    </div><!-- /.tour-one__item -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="tour-one__item">
                        <img src="{{ asset('assets/images/gallery/listing-list-g-1-5.jpg') }}" alt="tour image">
                    </div><!-- /.tour-one__item -->
                </div><!-- /.item -->
            </div><!-- /.tour-one__carousel -->
        </div><!-- /.tour-one -->

        <section class="tour-listing-details section-space-bottom">
            <div class="tour-listing-details__destination wow fadeInUp" data-wow-duration='1500ms'
                data-wow-delay='500ms'>
                <div class="container">
                    <div class="tour-listing-details__destination__inner">
                        <div class="tour-listing-details__destination__left">
                            <h4 class="tour-listing-details__destination__title">{{ ucfirst($slugData->title) }}
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
                                    <p class="tour-listing-details__destination__posted-text">
                                        {{ ucfirst($slugData->location) }}
                                    </p>
                                </div><!-- / -->
                            </div><!-- /.tour-listing-details__destination__revue -->
                        </div><!-- /.tour-listing-details__destination__left -->
                        <div class="tour-listing-details__destination__right">
                            <a href="javascript:void(0)"
                                class="tour-listing-details__destination__btn gotur-btn">Share
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
            <div class="tour-listing-details__info-area wow fadeInUp" data-wow-duration='1500ms'
                data-wow-delay='500ms'>
                <div class="container">
                    <ul class="tour-listing-details__info-area__info list-unstyled">
                        <li>
                            <div class="tour-listing-details__info-area__icon">
                                <i class="icon-location"></i>
                            </div><!-- /.tour-listing-details__info-area__icon -->
                            <div class="tour-listing-details__info-area__content">
                                <h5 class="tour-listing-details__info-area__title">Location</h5>
                                <!-- /.tour-listing-details__info-area__title -->
                                <p class="tour-listing-details__info-area__text">{{ ucfirst($slugData->location) }}
                                </p>
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
                                <p class="tour-listing-details__info-area__text">
                                    {{ ucfirst($slugData->activity_type) }}
                                </p>
                                <!-- /.tour-listing-details__info-area__text -->
                            </div><!-- /.tour-listing-details__info-area__content -->
                        </li>
                        <li>
                            <div class="tour-listing-details__info-area__icon">
                                <i class="icon-clock"></i>
                            </div><!-- /.tour-listing-details__info-area__icon -->
                            <div class="tour-listing-details__info-area__content">
                                <h5 class="tour-listing-details__info-area__title">Tour Day</h5>
                                <!-- /.tour-listing-details__info-area__title -->
                                <p class="tour-listing-details__info-area__text">{{ $slugData->from_to_formatted }}
                                </p>
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
                            <a href="https://wa.me/919011011366?text=I'm%20inquiring%20about%20the%20Tour%20Package"
                                class="gotur-btn">₹{{ $slugData->rate }}/ Per Person</a>
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
                                <p class="tour-listing-details__text">{!! $slugData->overview->overview !!}
                                </p>
                                <!-- /.tour-listing-details__text -->
                            </div>
                            <div class="tour-listing-details__content__item tour-listing-details__content__text wow fadeInUp"
                                data-wow-duration="1500ms" data-wow-delay="500ms">
                                <h4 class="tour-listing-details__title">Pickup & Drop:</h4>
                                <p>{{ $slugData->pickup_drop_location }}
                                </p>
                            </div>

                            <div class="tour-listing-details__content__item tour-listing-details__content__text wow fadeInUp"
                                data-wow-duration="1500ms" data-wow-delay="500ms">
                                <h3 class="tour-listing-details__title">Location Cover In Trip:</h3>
                                <p>
                                    @if (is_array($slugData->locationCover))
                                        {{ implode(', ', $slugData->locationCover) }}
                                    @else
                                        {{ $slugData->locationCover }} <!-- Display it directly if it's a string -->
                                    @endif
                                </p>
                            </div>
                            @if (!empty($slugData->details))
                                <div class="tour-listing-details__content__item tour-listing-details__content__text wow fadeInUp"
                                    data-wow-duration='1500ms' data-wow-delay='500ms'>
                                    <h4 class="tour-listing-details__title">Details</h4>
                                    <!-- /.tour-listing-details__title -->
                                    <p class="tour-listing-details__text">{!! $slugData->details !!}
                                    </p>
                                    <!-- /.tour-listing-details__text -->
                                </div>
                            @endif

                            <!-- /.tour-listing-details__content__item -->
                            <!-- /.tour-listing-details__content__item -->
                            <div class=" tour-listing-details__content__item tour-listing-details__list wow fadeInUp"
                                data-wow-duration='1500ms' data-wow-delay='500ms'>
                                <h4 class="tour-listing-details__title">Highlight List</h4>
                                <!-- /.tour-listing-details__title -->
                                @if (!empty($slugData->overview->highlights) && is_array($slugData->overview->highlights))
                                    <ul class="tour-listing-details__content__list">
                                        @foreach ($slugData->overview->highlights as $highlight)
                                            <li><i class="icon-check-star"></i> {{ ucfirst($highlight) }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>No highlights available.</p>
                                @endif
                            </div>

                            <!-- /.tour-listing-details__content__list -->
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


                            <div class="tour-listing-details__content__item tour-listing-details__ture-plan">
                                <h4 class="tour-listing-details__title">Tour Plan</h4>
                                <!-- /.tour-listing-details__title -->
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
                            {{-- <div class="tour-listing-details__content__item tour-listing-details__ture-plan">
                                <h4 class="tour-listing-details__title text-danger">Note :- </h4>
                            </div> --}}
                            @if ($slugData->other_charges)
                                <div
                                    class="tour-listing-details__content__item tour-listing-details__list wow fadeInUp">
                                    <h4 class="tour-listing-details__title">Other Charges</h4>
                                    <div class="faq-page__accordion faq-accordion gotur-accordion"
                                        data-grp-name="gotur-accordion">
                                        @if (!empty($slugData->other_charges) && is_array($slugData->other_charges))
                                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms"
                                                data-wow-delay="500ms">
                                                <div class="accordion-title">
                                                    <h4 class="">
                                                        View All Charges
                                                        <span class="accordion-title__icon"></span>
                                                    </h4>
                                                </div>
                                                <div class="accordion-content">
                                                    <div class="inner">
                                                        <ul class="inner__text">
                                                            @foreach ($slugData->other_charges as $charge)
                                                                <li><strong>{{ $charge }}</strong></li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <p>No other charges available.</p>
                                        @endif
                                    </div>
                                </div>
                            @endif
                            @if ($slugData->things_to_carry)

                                <div class="tour-listing-details__content__item tour-listing-details__list wow fadeInUp"
                                    data-wow-duration='1500ms' data-wow-delay='500ms'>
                                    <h4 class="tour-listing-details__title">Things to Carry</h4>
                                    <!-- /.tour-listing-details__title -->

                                    <!-- Accordion Container -->
                                    <div class="faq-page__accordion faq-accordion gotur-accordion"
                                        data-grp-name="gotur-accordion">
                                        <div class="accordion wow fadeInUp" data-wow-duration="1500ms"
                                            data-wow-delay="500ms">
                                            <div class="accordion-title">
                                                <h4 class="accordion-title__text">
                                                    View Items to Carry
                                                    <span class="accordion-title__icon"></span>
                                                </h4>
                                            </div>
                                            <div class="accordion-content">
                                                <div class="inner">
                                                    @if (!empty($slugData->things_to_carry))
                                                        {!! $slugData->things_to_carry !!}
                                                    @else
                                                        <p>No items to carry available.</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($slugData->terms_conditions)
                                <div class="tour-listing-details__content__item tour-listing-details__list wow fadeInUp"
                                    data-wow-duration='1500ms' data-wow-delay='500ms'>
                                    <h4 class="tour-listing-details__title">Terms & Condition</h4>

                                    <!-- Accordion Container -->
                                    <div class="faq-page__accordion faq-accordion gotur-accordion"
                                        data-grp-name="gotur-accordion">
                                        <div class="accordion wow fadeInUp" data-wow-duration="1500ms"
                                            data-wow-delay="500ms">
                                            <div class="accordion-title">
                                                <h4 class="accordion-title__text">
                                                    View Terms & Conditions
                                                    <span class="accordion-title__icon"></span>
                                                </h4>
                                            </div>
                                            <div class="accordion-content">
                                                <div class="inner">
                                                    @if (!empty($slugData->terms_conditions))
                                                        {!! $slugData->terms_conditions !!}
                                                    @else
                                                        <p>No terms and conditions available.</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if ($slugData->note)
                                <div class="tour-listing-details__content__item tour-listing-details__list wow fadeInUp"
                                    data-wow-duration='1500ms' data-wow-delay='500ms'>
                                    <h4 class="tour-listing-details__title">Note</h4>

                                    <!-- Accordion Container -->
                                    <div class="faq-page__accordion faq-accordion gotur-accordion"
                                        data-grp-name="gotur-accordion">
                                        <div class="accordion wow fadeInUp" data-wow-duration="1500ms"
                                            data-wow-delay="500ms">
                                            <div class="accordion-title">
                                                <h4 class="accordion-title__text">
                                                    View note
                                                    <span class="accordion-title__icon"></span>
                                                </h4>
                                            </div>
                                            <div class="accordion-content">
                                                <div class="inner">
                                                    @if (!empty($slugData->note))
                                                        <!-- Display terms & conditions while keeping <p>, <strong>, <em>, <ol>, and <li> tags -->
                                                        {!! $slugData->note !!}
                                                    @else
                                                        <p>No note available.</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <!-- /.tour-listing-details__content__item -->
                            <div class="tour-listing-details__content__item tour-listing-details__ture-list">
                                <h4 class="tour-listing-details__title">Related Tour List</h4>
                                <!-- /.tour-listing-details__title -->
                                <div class="row">
                                    @foreach ($relatedTours as $index => $tour)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="listing-card-four wow fadeInUp" data-wow-duration="1500ms"
                                                data-wow-delay="{{ $index == 0 ? '100ms' : '300ms' }}">

                                                <div class="listing-card-four__image">
                                                    <img src="{{ asset('storage/' . $tour->feature_image) }}"
                                                        alt="{{ $tour->title }}">
                                                    <div class="listing-card-four__btns__hover"></div>
                                                    <ul class="listing-card-four__meta list-unstyled">
                                                        <li>
                                                            <a href="{{ route('tour.details', $tour->slug) }}">
                                                                <span class="listing-card-four__meta__icon"><i
                                                                        class="icon-pin1"></i></span>
                                                                {{ $tour->location ?? 'N/A' }}
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('tour.details', $tour->slug) }}">
                                                                <span class="listing-card-four__meta__icon"><i
                                                                        class="icon-calendar"></i></span>
                                                                {{ $tour['days'] }} Days, {{ $tour['nights'] }} Night
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <a href="{{ route('tour.details', $tour->slug) }}"
                                                        class="listing-card-four__image__overly"></a>
                                                </div>

                                                <div class="listing-card-four__content">
                                                    <h3 class="listing-card-four__title">
                                                        <a
                                                            href="{{ route('tour.details', $tour->slug) }}">{{ $tour->title }}</a>
                                                    </h3>

                                                    <div class="listing-card-four__content__btn">
                                                        <div class="listing-card-four__price">
                                                            <span class="listing-card-four__price__sub">Per Day</span>
                                                            <span
                                                                class="listing-card-four__price__number">₹{{ number_format($tour->rate, 2) }}</span>
                                                        </div>
                                                        <a href="{{ route('tour.details', $tour->slug) }}"
                                                            class="listing-card-four__btn gotur-btn">
                                                            Book Now <span class="icon"><i
                                                                    class="icon-right"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div><!-- / -->
                            <!-- /.row -->
                            <!-- / -->
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
                                            <input type="text" name="name" id="name"
                                                placeholder="Your Name">
                                        </div>
                                        <div class="form-one__control">
                                            <label for="email">Your Email*</label>
                                            <input type="email" name="email" id="email"
                                                placeholder="Your Email">
                                        </div>
                                        <div class="form-one__control form-one__control--full">
                                            <label for="message">Message*</label>
                                            <textarea name="message" id="message" placeholder="Write Message . . "></textarea>
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
                    </div>
                    <!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="tour-listing-details__sidebar">
                            <div class="tour-listing-details__sidebar__item tour-listing-details__sidebar__item-form wow fadeInUp"
                                data-wow-delay="0.4s" data-wow-duration="1500ms">
                                <h4 class="tour-listing-details__sidebar__title">Book This Tour</h4>
                                <!-- /.tour-listing-details__sidebar__title -->
                                <div class="sidebar-two__form">
                                    <form class="sidebar-two__form__inner contact-form-validated"
                                        action="inc/sendemail.php" novalidate="novalidate">
                                        <div class="sidebar-two__form__control">
                                            <label for="checkin">From:</label>
                                            <input class="gotur-datepicker" id="checkin" type="text"
                                                name="checkin">
                                            <i class="icon-calendar"></i>
                                        </div>
                                        <div class="sidebar-two__form__control">
                                            <label for="checkout">Time:</label>
                                            <input class="gotur-datepicker" id="checkout" type="text"
                                                name="checkout">
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
                                                <div class="sidebar-two__form__add">Adult:<span>₹20.00</span></div>
                                            </li>
                                            <li>
                                                <div class="sidebar-two__form__add">Youth: <span>₹16.00</span></div>
                                            </li>
                                        </ul>
                                        <div class="sidebar-two__form__total">Total:<span>₹36.00</span></div>
                                        <button type="submit" class="gotur-btn gotur-btn--base">Book Now <i
                                                class="icon-right"></i></button>
                                    </form>
                                </div>
                            </div><!-- /.tour-listing-details__sidebar__item -->
                        </div><!-- /.tour-listing-details-details__sidebar -->
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row justify-content-center -->
            </div>
            <!-- /.container -->
        </section><!-- /.tour-listing-details -->

    </div><!-- /.page-wrapper -->

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div><!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box logo-retina">
                <a href="index.html" aria-label="logo image"><img src="{{ asset('storage/logos/logo-light.png') }}"
                        width="158" alt="logo"></a>
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
                <a href="index.html" aria-label="logo image"> <img src="assets/images/logo-landing.png"
                        width="158" alt="gotur"> </a>
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
                        <li class="header-right-sidebar__container__list__item wow fadeInUp"
                            data-wow-duration='1500ms' data-wow-delay='300ms'>
                            <div class="header-right-sidebar__container__icon">
                                <i class="icon-email"></i>
                            </div>
                            <div class="header-right-sidebar__container__list__content">
                                <span class="header-right-sidebar__container__list__title">send email</span>
                                <a href="">info@company.com</a>
                            </div>
                        </li>
                        <li class="header-right-sidebar__container__list__item wow fadeInUp"
                            data-wow-duration='1500ms' data-wow-delay='500ms'>
                            <div class="header-right-sidebar__container__icon">
                                <i class="icon-telephone"></i>
                            </div>
                            <div class="header-right-sidebar__container__list__content">
                                <span class="header-right-sidebar__container__list__title">call agent</span>
                                <a href="tel:+91-123-654-900">+91 123 654 900</a>
                            </div>
                        </li>
                        <li class="header-right-sidebar__container__list__item wow fadeInUp"
                            data-wow-duration='1500ms' data-wow-delay='700ms'>
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
    <!-- Modal -->
    <!-- Modal -->
    <!-- Modal -->
    <div class="modal fade" id="delayedModal" tabindex="-1" aria-labelledby="travelModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg"> <!-- Large modal for better spacing -->
            <form class="modal-content" method="POST" action="/send-query">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="travelModalLabel">
                        Get me a quote
                        <br>
                        <small
                            class="text-muted fw-bold">{{ $slugData->title . ' | ' . $slugData->location ?? '' }}</small>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" name="full_name" id="fullName" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" name="phone" id="phone" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label for="people" class="form-label">Number of People</label>
                                <input type="number" name="number_of_people" id="people" class="form-control"
                                    required min="1">
                            </div>

                            <div class="col-md-6">
                                <label for="travelDate" class="form-label">Preferred Travel Date</label>
                                <input type="date" name="travel_date" id="travelDate" class="form-control"
                                    required>
                            </div>

                            <div class="col-12">
                                <label for="message" class="form-label">Additional Comment / Message</label>
                                <textarea name="message" id="message" class="form-control" rows="3" placeholder="Write your message..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send Query</button>
                </div>
            </form>
        </div>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                $('#delayedModal').modal('show'); // Bootstrap jQuery modal trigger
            }, 30000); // 30000 ms = 30 seconds
        });
    </script>

</body>

</html>
