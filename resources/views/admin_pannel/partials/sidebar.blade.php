<!-- Page sidebar start-->
<div class="overlay"></div>
<aside class="page-sidebar" data-sidebar-layout="stroke-svg">
    <div class="left-arrow" id="left-arrow">
        <svg class="feather">
            <use
                href="{{ asset('assets/admin_pannel/edmin/assets/svg/feather-icons/dist/feather-sprite.svg#arrow-left') }}">
            </use>
        </svg>
    </div>
    <div id="sidebar-menu">
        <ul class="sidebar-menu" id="simple-bar">
            {{-- dashboard menu --}}
            <li class="sidebar-list">
                <svg class="pinned-icon">
                    <use href="{{ asset('assets/admin_pannel/edmin/assets/svg/iconly-sprite.svg#Pin') }}">
                    </use>
                </svg>
                <a class="sidebar-link" href="{{ route('dashboard') }}">
                    <svg class="stroke-icon">
                        <use href="{{ asset('assets/admin_pannel/edmin/assets/svg/iconly-sprite.svg#Home') }}">
                        </use>
                    </svg><span>Dashboard</span>
                </a>
            </li>
            {{-- dashboard menu --}}

            {{-- location menu --}}
            <li class="sidebar-list">
                <svg class="pinned-icon">
                    <use href="{{ asset('assets/admin_pannel/edmin/assets/svg/iconly-sprite.svg#Pin') }}">
                    </use>
                </svg>
                <a class="sidebar-link" href="{{ route('location') }}">
                    <svg class="stroke-icon">
                        <use href="{{ asset('assets/admin_pannel/edmin/assets/svg/iconly-sprite.svg#Location') }}">
                        </use>
                    </svg><span>Location</span>
                </a>
            </li>
            {{-- location menu --}}

            {{-- activity menu --}}
            <li class="sidebar-list">
                <svg class="pinned-icon">
                    <use href="{{ asset('assets/admin_pannel/edmin/assets/svg/iconly-sprite.svg#Travel') }}">
                    </use>
                </svg>
                <a class="sidebar-link" href="{{ route('activity') }}">
                    <i class="fa-solid fa-people-line fa-fw stroke-icon"></i>

                    <span>Activity</span>
                </a>
            </li>
            {{-- activity menu --}}

            {{-- Tour Details menu --}}
            <li class="sidebar-list">
                <svg class="pinned-icon">
                    <use href="{{ asset('assets/admin_pannel/edmin/assets/svg/iconly-sprite.svg#Travel') }}">
                    </use>
                </svg>
                <a class="sidebar-link" href="{{ route('tour') }}">
                    <i class="fa-solid fa-solid fa-map stroke-icon"></i>
                    <span>Tour Details</span>
                </a>
            </li>
            {{-- Tour Details menu --}}

            {{-- Destination menu --}}
            <li class="sidebar-list">
                <svg class="pinned-icon">
                    <use href="{{ asset('assets/admin_pannel/edmin/assets/svg/iconly-sprite.svg#Travel') }}">
                    </use>
                </svg>
                <a class="sidebar-link" href="{{ route('destination') }}">
                    <i class="fa-solid fa-solid fa-map stroke-icon"></i>
                    <span>Destination Details</span>
                </a>
            </li>
            {{-- Destination menu --}}

            {{-- trip details menu --}}
            <li class="sidebar-list">
                <a class="sidebar-link" href="javascript:void(0)">
                    <svg class="stroke-icon">
                        <use href="{{ asset('assets/admin_pannel/edmin/assets/svg/iconly-sprite.svg#Profile') }}">
                        </use>
                    </svg><span>Users</span>
                    <svg class="feather">
                        <use
                            href="{{ asset('assets/admin_pannel/edmin/assets/svg/feather-icons/dist/feather-sprite.svg#chevron-right') }}">
                        </use>
                    </svg></a>
                <ul class="sidebar-submenu" style="display: none;">
                    <li><a href="{{ asset('assets/admin_pannel/edmin/admin/profile') }}">
                            <svg class="svg-menu">
                                <use
                                    href="{{ asset('assets/admin_pannel/edmin/assets/svg/iconly-sprite.svg#right-3') }}">
                                </use>
                            </svg>User Profile</a></li>
                    <li><a href="{{ asset('assets/admin_pannel/edmin/admin/cards') }}">
                            <svg class="svg-menu">
                                <use
                                    href="{{ asset('assets/admin_pannel/edmin/assets/svg/iconly-sprite.svg#right-3') }}">
                                </use>
                            </svg>User Cards</a></li>
                </ul>
            </li>
            {{-- trip details menu --}}

        </ul>
    </div>
    <div class="right-arrow" id="right-arrow">
        <svg class="feather">
            <use
                href="{{ asset('assets/admin_pannel/edmin/assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right') }}">
            </use>
        </svg>
    </div>
</aside>
<!-- Page sidebar end-->
