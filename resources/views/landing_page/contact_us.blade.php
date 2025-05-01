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
        <div class="preloader__image" style="background-image: url('{{ asset('assets/images/logo/logo-dark.png') }}');">
        </div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">

        @include('landing_page.header')

        {{-- @include('landing_page.main_slide') --}}

        <section class="contact-top section-space">
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                        <div class="contact-top__item">
                            <div class="contact-top__item__icon">
                                <i class="icon-pin"></i>
                            </div><!-- /.contact-top__item__icon -->
                            <h4 class="contact-top__item__title">Our Address</h4><!-- /.contact-top__item__title -->
                            <p class="contact-top__item__text"> Chinchwad, Pune-411019.</p>
                            <!-- /.contact-top__item__text -->
                        </div><!-- /.contact-top__item -->
                    </div>
                    <!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                        <div class="contact-top__item">
                            <div class="contact-top__item__icon">
                                <i class="icon-mail-3"></i>
                            </div><!-- /.contact-top__item__icon -->
                            <h4 class="contact-top__item__title"><a
                                    href="mailto:nirvanyatra@gmail.com">nirvanyatra@gmail.com</a></h4>
                            <!-- /.contact-top__item__title -->
                            <p class="contact-top__item__text">Email us anytime for any kind of query.</p>
                            <!-- /.contact-top__item__text -->
                        </div><!-- /.contact-top__item -->
                    </div>
                    <!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='700ms'>
                        <div class="contact-top__item">
                            <div class="contact-top__item__icon">
                                <i class="icon-call-3"></i>
                            </div><!-- /.contact-top__item__icon -->
                            <h4 class="contact-top__item__title"><a href="tel:+919011011366">+91 90110 11366</a>
                            </h4>
                            <!-- /.contact-top__item__title -->
                            <p class="contact-top__item__text">Call us for any kind of support,we will wait for it.</p>
                            <!-- /.contact-top__item__text -->
                        </div><!-- /.contact-top__item -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-top -->

        <section class="contact-page section-space-bottom">
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-duration='1500ms' data-wow-delay='300ms'>
                        <div class="contact-page__map">
                            <div class="google-map google-map__@@extraClassName">
                                <iframe title="Pimpri-Chinchwad Location"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d898.2658!2d73.808523!3d18.659531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTjCsDM5JzM0LjMiTiA3M8KwNDgnMzMuMCJF!5e0!3m2!1sen!2sin!4v1745405768906&zoom=18"
                                    class="map__iframe" allowfullscreen>
                                </iframe>
                            </div>
                            <!-- /.google-map -->
                        </div><!-- /.contact-page__map -->
                    </div>
                    <!-- /.col-lg-5 -->
                    <div class="col-lg-6 wow fadeInRight" data-wow-duration='1500ms' data-wow-delay='300ms'>
                        <div class="contact-page__contact">
                            <h2 class="contact-page__title">Plan Your Next Adventure</h2><!-- /.contact-page__title -->
                            <p class="contact-page__text">Contact Us</p><!-- /.contact-page__text -->
                            <form class="comments-form__form contact-form-validated form-one" method="POST"
                                action="{{ route('contactUsForm') }}">
                                @csrf
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
                                        <button type="submit" class="gotur-btn gotur-btn--base">Send Message<i
                                                class="icon-arrow-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div><!-- /.contact-page__contact -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-page -->
        @include('landing_page.footer')

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


    <div id="scroll-top" class="scroll-top">
        <span id="scroll-top-value" class="scroll-top-value"></span>
    </div>

    <script src="assets/vendors/jquery/jquery-3.7.1.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="assets/vendors/slick-carousel/slick.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/imagesloaded/imagesloaded.min.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/daterangepicker-master/moment.min.js"></script>
    <script src="assets/vendors/daterangepicker-master/daterangepicker.js"></script>
    <script src="assets/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>

    <!-- GSAP -->
    <script src="assets/vendors/gsap/gsap.js"></script>
    <script src="assets/vendors/gsap/scrollTrigger.min.js"></script>
    <script src="assets/vendors/gsap/splittext.min.js"></script>
    <script src="assets/vendors/gsap/gotur-gsap.js"></script>

    <!-- template js -->
    <script src="assets/js/gotur.js"></script>
    <script>
        $(document).ready(function () {
            $('#contactForm').on('submit', function (e) {
                e.preventDefault();

                // Get form data
                let formData = $(this).serialize();
                let submitBtn = $('#submitBtn');
                let formMessage = $('#formMessage');

                // Disable button during submission
                submitBtn.prop('disabled', true).html('Sending... <i class="fa fa-spinner fa-spin"></i>');
                formMessage.removeClass('alert-success alert-danger').html('');

                // AJAX request
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    success: function (response) {
                        if (response.success) {
                            formMessage.addClass('alert alert-success').html(response.message);
                            $('#contactForm')[0].reset(); // Reset form
                        } else {
                            formMessage.addClass('alert alert-danger').html(response.message);
                        }
                    },
                    error: function (xhr) {
                        let errorMessage = xhr.responseJSON?.message || 'An error occurred. Please try again.';
                        formMessage.addClass('alert alert-danger').html(errorMessage);
                    },
                    complete: function () {
                        submitBtn.prop('disabled', false).html('Send Message <i class="icon-arrow-right"></i>');
                    }
                });
            });
        });
    </script>
</body>

</html>