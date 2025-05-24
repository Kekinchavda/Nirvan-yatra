  <!-- tap to top starts-->
  <div class="tap-top">
      <svg class="feather">
          <use href="{{ asset('assets/admin_pannel/edmin/assets/svg/feather-icons/dist/feather-sprite.svg#arrow-up') }}">
          </use>
      </svg>
  </div>
  <!-- tap to tap ends-->

  <!-- loader starts-->
  <div class="loader-wrapper">
      <div class="loader"></div>
  </div>
  <!-- loader end-->

  <!-- page-wrapper Start-->
  <main class="page-wrapper compact-wrapper" id="pageWrapper">

      <!-- Page header start -->
      <header class="page-header row">
          <div class="logo-wrapper d-flex align-items-center col-auto"><a
                  href="#"><img class="for-light"
                      src="{{ asset('assets/images/logo/logo-dark.png') }}" width="130px" alt="logo"><img
                      class="for-dark" src="{{ asset('storage/logos/logo-dark.png') }}"
                      alt="logo"></a><a class="close-btn" href="javascript:void(0)">
                  <div class="toggle-sidebar">
                      <div class="line"></div>
                      <div class="line"></div>
                      <div class="line"></div>
                  </div>
              </a></div>
          <div class="page-main-header col">
              <div class="header-left d-lg-block d-none">
              </div>
              <div class="nav-right">
                  <ul class="header-right">
                      <li class="modes d-flex">
                          <a class="dark-mode">
                              <svg class="svg-color">
                                  <use
                                      href="{{ asset('assets/admin_pannel/edmin/assets/svg/iconly-sprite.svg#Moon') }}">
                                  </use>
                              </svg>
                          </a>
                      </li>
                      <!-- Notification menu-->
                      <!-- Bookmark menu-->
                      {{-- profile --}}
                      <li class="profile-dropdown custom-dropdown">
                          <div class="d-flex align-items-center"><img
                                  src="{{ asset('assets/admin_pannel/edmin/assets/images/profile.png') }}"
                                  alt="">
                              <div class="flex-grow-1">
                                  {{-- <h5>John</h5> --}}
                                  <span>admin</span>
                              </div>
                          </div>
                          <div class="custom-menu overflow-hidden">
                              <ul>
                                  <li class="d-flex">
                                      <svg class="svg-color">
                                          <use
                                              href="{{ asset('assets/admin_pannel/edmin/assets/svg/iconly-sprite.svg#Profile') }}">
                                          </use>
                                      </svg><a class="ms-2"
                                          href="#">My
                                          Profile</a>
                                  </li>
                                  <li class="d-flex">
                                      <svg class="svg-color">
                                          <use
                                              href="{{ asset('assets/admin_pannel/edmin/assets/svg/iconly-sprite.svg#Login') }}">
                                          </use>
                                      </svg><a class="ms-2" href="{{ route('logout') }}"
                                          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                                          Out</a>
                                      <form action="{{ route('logout') }}" method="POST" class="d-none"
                                          id="logout-form">
                                          @csrf
                                      </form>
                                  </li>
                              </ul>
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
      </header>
      <!-- Page header end-->
