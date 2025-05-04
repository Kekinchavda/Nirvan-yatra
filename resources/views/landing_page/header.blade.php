<div class="top-one top-one--two">
    <div class="container-fluid">
        <div class="top-one__inner">
            <ul class="list-unstyled top-one__info">
                <li class="top-one__info__item">
                    <i class="icon-telephone"></i>
                    <a href="tel:+919011011366">+91 90110 11366</a>
                </li>
                <!-- /.top-one__info__item -->
                <li class="top-one__info__item">
                    <i class="icon-email"></i>
                    <a href="mailto:nirvanyatra@gmail.com">nirvanyatra@gmail.com</a>
                </li>
                <!-- /.top-one__info__item -->
            </ul>
            <!-- /.list-unstyled top-one__info -->
            <div class="top-one__right">
                <div class="top-one__info__item">
                    <i class="icon-maps-and-flags"></i>
                    <a href="https://www.google.com/maps">Chinchwad, Pune-411019</a>
                </div>
                <!-- /.top-one__info__item -->
                <div class="top-one__social">
                    <a
                        href="https://www.facebook.com/people/Nirvan-Yatra/pfbid0krPrHBpyn1i5nVEg7DLHUP7PtEguayNtvkfv3VjhGBGHSGfRwxRTxeFG7uLy2qRol/">
                        <i class="icon-facebook" aria-hidden="true"></i> <span class="sr-only">Facebook</span></a>
                    <a href="https://x.com/NirvanYatra"> <i class="icon-twitter" aria-hidden="true"></i> <span
                            class="sr-only">Twitter</span></a>
                    <a href="https://www.linkedin.com/company/nirvan-yatra/"> <i class="icon-linkedin"
                            aria-hidden="true"></i> <span class="sr-only">Linked In</span></a>
                    <a href="https://youtube.com/@nirvanyatra?si=anHcLrB5A-HE85cI"> <i class="icon-youtube"
                            aria-hidden="true"></i> <span class="sr-only">Youtube</span></a>
                </div>
                <!-- /.top-one__social -->
            </div>
            <!-- /.top-one__right -->
        </div>
        <!-- /.top-one__inner -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.top-one -->

<header class="main-header main-header--one sticky-header sticky-header--normal">
    <div class="container-fluid">
        <div class="main-header__inner">
            <div class="main-header__logo logo-retina">
                <a href="{{ route('landingaPage') }}"><img src="{{ !empty($logo->header_logo) && file_exists(public_path('storage/' . $logo->header_logo))
    ? asset('storage/' . $logo->header_logo)
    : asset('assets/images/logo/logo.dark.png') }}" width="170" height="70" alt="nirvan_yatra logo"></a>
            </div>
            <!-- /.main-header__logo -->
            <div class="main-header__right">
                <nav class="main-header__nav main-menu">
                    <ul class="main-menu__list">
                        <li class="dropdown megamenu">
                            <a href="{{ route('landingaPage') }}">Home</a>
                        </li>

                        <li>
                            <a href="#">about us</a>
                        </li>

                        <li>
                            <a href="{{ route('tour.list') }}">Tour Listing</a>
                        </li>
                        <li>
                            <a href="{{ route('contactUs') }}">Contact Us</a>
                        </li>
                    </ul>
                </nav>
                <!-- /.main-header__nav -->
                <div class="main-header__btn-popup main-header__element__btn">
                    <i class="icon-menu-bar"></i>
                </div>
                <!-- /.mobile-nav__toggler -->
                <a href="https://wa.me/919011011366?text=I'm%20inquiring%20about%20the%20Tour%20Package" target="_blank"
                    class="gotur-btn main-header__btn">
                    get in touch <i class="icon-paper-plane"></i>
                </a>

                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!-- /.mobile-nav__toggler -->
            </div>
            <!-- /.main-header__right -->
        </div>
        <!-- /.main-header__inner -->
    </div>
    <!-- /.container-fluid -->
</header>
<!-- /.main-header -->