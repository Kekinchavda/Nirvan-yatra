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
                  href="https://larathemes.pixelstrap.com/edmin/admin/default-dashboard"><img class="for-light"
                      src="{{ asset('assets/images/logo/logo-dark.png') }}" width="130px" alt="logo"><img
                      class="for-dark" src="https://larathemes.pixelstrap.com/edmin/assets/images/logo/dark-logo.png"
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
                      <li class="custom-dropdown"><a href="javascript:void(0)">
                              <svg class="svg-color circle-color">
                                  <use
                                      href="{{ asset('assets/admin_pannel/edmin/assets/svg/iconly-sprite.svg#Bell') }}">
                                  </use>
                              </svg></a><span class="badge rounded-pill badge-secondary">3</span>
                          <div class="custom-menu notification-dropdown py-0 overflow-hidden">
                              <h5 class="title bg-primary-light">Notifications <a
                                      href="https://larathemes.pixelstrap.com/edmin/admin/chat-private"><span
                                          class="font-primary">View</span></a></h5>
                              <ul class="activity-update">
                                  <li class="d-flex align-items-center b-l-primary">
                                      <div class="flex-grow-1"> <span>Just Now</span><a
                                              href="https://larathemes.pixelstrap.com/edmin/admin/chat-private">
                                              <h5>What`s the project report update?</h5>
                                          </a>
                                          <h6>Rick Novak</h6>
                                      </div>
                                      <div class="flex-shrink-0"> <img class="b-r-15 img-40"
                                              src="https://larathemes.pixelstrap.com/edmin/assets/images/avatar/10.jpg"
                                              alt=""></div>
                                  </li>
                                  <li class="d-flex align-items-center b-l-secondary">
                                      <div class="flex-grow-1"> <span>12:47 am</span><a
                                              href="https://larathemes.pixelstrap.com/edmin/admin/chat-private">
                                              <h5>James created changelog page</h5>
                                          </a>
                                          <h6>Susan Connor</h6>
                                      </div>
                                      <div class="flex-shrink-0"> <img class="b-r-15 img-40"
                                              src="https://larathemes.pixelstrap.com/edmin/assets/images/avatar/4.jpg"
                                              alt=""></div>
                                  </li>
                                  <li class="d-flex align-items-center b-l-tertiary">
                                      <div class="flex-grow-1"> <span>06:10 pm</span><a
                                              href="https://larathemes.pixelstrap.com/edmin/admin/chat-private">
                                              <h5>Polly edited Contact page</h5>
                                          </a>
                                          <h6>Roger Lum</h6>
                                      </div>
                                      <div class="flex-shrink-0"> <img class="b-r-15 img-40"
                                              src="https://larathemes.pixelstrap.com/edmin/assets/images/avatar/1.jpg"
                                              alt=""></div>
                                  </li>
                                  <li class="mt-3 d-flex justify-content-center">
                                      <div class="button-group"><a class="btn btn-secondary"
                                              href="https://larathemes.pixelstrap.com/edmin/admin/chat-private">All
                                              Notification</a></div>
                                  </li>
                              </ul>
                          </div>
                      </li>
                      <!-- Bookmark menu-->
                      {{-- profile --}}
                      <li class="profile-dropdown custom-dropdown">
                          <div class="d-flex align-items-center"><img
                                  src="{{ asset('assets/admin_pannel/edmin/assets/images/profile.png') }}"
                                  alt="">
                              <div class="flex-grow-1">
                                  <h5>John</h5>
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
                                          href="https://larathemes.pixelstrap.com/edmin/admin/edit-profile">My
                                          Profile</a>
                                  </li>
                                  <li class="d-flex">
                                      <svg class="svg-color">
                                          <use
                                              href="{{ asset('assets/admin_pannel/edmin/assets/svg/iconly-sprite.svg#Message') }}">
                                          </use>
                                      </svg><a class="ms-2"
                                          href="https://larathemes.pixelstrap.com/edmin/admin/letter-box">Inbox</a>
                                  </li>
                                  <li class="d-flex">
                                      <svg class="svg-color">
                                          <use
                                              href="{{ asset('assets/admin_pannel/edmin/assets/svg/iconly-sprite.svg#Document') }}">
                                          </use>
                                      </svg><a class="ms-2"
                                          href="https://larathemes.pixelstrap.com/edmin/admin/to-do">Task</a>
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
