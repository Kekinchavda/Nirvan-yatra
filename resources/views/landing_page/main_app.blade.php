@extends('landing_page.main')

@section('content')
    <!-- /.Kedarnath yatra -->
    <section class="feature-package feature-package--two section-space" id="guide">
        @foreach ($tourData as $sectionTitle => $tours)
            @if (count($tours) > 0)
                <div class="container">
                    <div class="feature-package__top">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="sec-title ">
                                    <h6 class="sec-title__tagline bw-split-in-right">popular tours</h6>
                                    <!-- /.sec-title__tagline -->
                                    @php
                                        $title = ucfirst($sectionTitle);
                                        $words = explode(' ', $title);
                                        $lastWord = array_pop($words);
                                        $firstWords = implode(' ', $words);
                                    @endphp
                                    <h3 class="sec-title__title bw-split-in-left">
                                        {{ ucfirst($firstWords) }} <span>{{ ucfirst($lastWord) }}</span>
                                    </h3>
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
                            @foreach ($tours as $tour)
                                <div class="item">
                                    <div class="listing-card-four wow fadeInUp" data-wow-duration="1500ms"
                                        data-wow-delay="100ms">
                                        <div class="listing-card-four__image">
                                            <img src="{{ asset('storage/' . $tour['feature_image']) }}"
                                                alt="{{ $tour['title'] }}">
                                            <div class="listing-card-four__btn-group"></div>
                                            <div class="listing-card-four__btns">
                                                <div class="listing-card-four__btns__hover"></div>
                                            </div>
                                            <ul class="listing-card-four__meta list-unstyled">
                                                <li>
                                                    <a href="{{ route('tour.details', $tour['slug']) }}">
                                                        <span class="listing-card-four__meta__icon"><i
                                                                class="icon-pin1"></i></span>
                                                        {{ ucfirst($tour['location']) }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('tour.details', $tour['slug']) }}">
                                                        <span class="listing-card-four__meta__icon"><i
                                                                class="icon-calendar"></i></span>
                                                        {{ $tour['days'] }} Days, {{ $tour['nights'] }} Night
                                                    </a>
                                                </li>
                                            </ul>
                                            <a href="{{ route('tour.details', $tour['slug']) }}"
                                                class="listing-card-four__image__overly"></a>
                                        </div>
                                        <div class="listing-card-four__content">
                                            <div class="listing-card-four__rating">
                                                <span>(10 Review)</span>
                                                <i class="icon-star"></i><i class="icon-star"></i><i
                                                    class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i>
                                            </div>
                                            <h3 class="listing-card-four__title">
                                                <a
                                                    href="{{ route('tour.details', $tour['slug']) }}">{{ ucfirst($tour['title']) }}</a>
                                            </h3>
                                            <div class="listing-card-four__content__btn">
                                                <div class="listing-card-four__price">
                                                    <span class="listing-card-four__price__sub">Rate</span>
                                                    <span
                                                        class="listing-card-four__price__number">₹{{ $tour['rate'] }}</span>
                                                </div>
                                                <a href="{{ route('tour.details', $tour['slug']) }}"
                                                    class="listing-card-four__btn gotur-btn">
                                                    Book Now <span class="icon"><i class="icon-right"></i> </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.item -->
                            @endforeach
                        </div>
                        <!-- /.feature-package__carousel -->
                    </div>

                    <!-- see all button  -->
                    <div class="destination-filter__btn mt-3">
                        <button data-tab="#itemFive" class="tab-btn gotur-btn"><a href="{{ route('tour.list') }}"
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
            @endif
        @endforeach
        <!-- /.feature-package__element -->
    </section>
    <!-- /.Kedarnath yatra -->


    <section class="destination-filter section-space" id="destination">
        <div class="container">
            <div class="destination-filter__top">
                <div class="sec-title text-center">
                    <h6 class="sec-title__tagline bw-split-in-right">Upcoming Destination</h6>
                    <!-- /.sec-title__tagline -->
                    <h3 class="sec-title__title bw-split-in-left">Upcoming <span> Destinations</span></h3>
                    <!-- /.sec-title__title -->
                </div>
                <!-- /.sec-title -->
                <p class="destination-filter__top__text">Embark on a soulful journey of mountain adventures, cultural
                    discoveries, and spiritual retreats. Experience nature, heritage, and inner peace in one
                    unforgettable trip.</p>
                <!-- /.destination-filter__top__text -->
            </div>
            <!-- /.destination-filter__top -->
            <div class="tabs-box">
                <div class="destination-filter__btn tab-buttons">
                    {{-- <button data-tab="#itemOne" class="tab-btn gotur-btn">Europe</button>
                    <button data-tab="#itemTwo" class="tab-btn gotur-btn active-btn">Asia</button>
                    <button data-tab="#itemThree" class="tab-btn gotur-btn">Africa</button>
                    <button data-tab="#itemFour" class="tab-btn gotur-btn">South America</button> --}}
                    <button data-tab="#itemFive" class="tab-btn gotur-btn active-btn">India</button>
                </div>
                <!-- /.tab-buttons -->
                <div class="tabs-content">

                    <div class="item tab active-tab" id="itemTwo">
                        <div class="row gutter-y-20 gutter-x-20">
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                <div class="destination-card-one wow fadeInUp" data-wow-duration='1500ms'
                                    data-wow-delay='100ms'>
                                    <div class="destination-card-one__thumb">
                                        <img src="assets/images/destination/destination-1-1.jpg" alt="destination">
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
                                        <img src="assets/images/destination/destination-1-2.jpg" alt="destination">
                                        <a href="" class="destination-card-one__overly"></a>
                                    </div>
                                    <!-- /.destination-card-one__thumb -->
                                    <div class="destination-card-one__content">
                                        <h3 class="destination-card-one__title"><a
                                                href="destination-details.html">Tokyo</a>
                                        </h3>
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
                                        <img src="assets/images/destination/destination-1-3.jpg" alt="destination">
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
                                        <img src="assets/images/destination/destination-1-4.jpg" alt="destination">
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
                        <p class="about-two__top__text wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                            Nirvan Yatra isn’t just about travel—it’s about experiences that
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
                                    <div class="about-two__feature-vestion wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='400ms'>
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
                @if (isset($instaPosts))
                    @foreach ($instaPosts as $instaPost)
                        <div class="item">
                            <div class="instagram-one__item">
                                <img src="{{ asset('storage/' . $instaPost->image) }}" alt="instagram">
                                <a href="https://www.instagram.com/nirvan.yatra" class="instagram-one__item__overly">
                                    <div class="instagram-one__item__overly__icon"><i class="fab fa-instagram"></i>
                                    </div>
                                    <!-- /.instagram-one__item__overly__icon -->
                                </a>
                            </div>
                            <!-- /.instagram-one__item -->
                        </div>
                    @endforeach
                @endif
                {{-- <!-- /.item -->
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
                </div> --}}
                <!-- /.item -->
            </div>
            <!-- /.instagram-one__carousel -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.instagram-one -->
@endsection
