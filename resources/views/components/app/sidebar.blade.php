<!--begin::Sidebar--><!--begin::Mobile Logo-->
<div id="kt_app_sidebar" class="app-sidebar  flex-column " data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
     data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
     data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Logo-->
    <div class="bg-white app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <!--begin::Logo image-->
        <a href="{{ route('home') }}">
            <span class="text-gray-800 h-30px fw-semibold app-sidebar-logo-default" style="font-size: 32px; font-family: Playfair Display SC,serif; ">
                Filly <span style="color: #BB0404">Hotels</span>
            </span>
            {{--<img alt="Logo" src="{{ asset('media/logos/landing.svg') }}" class="logo-default app-sidebar-logo-default h-30px"/>--}}
        </a>
        <!-- Main Sidebar Button with Styled Submenu and Gray Text -->


        <!--end::Logo image-->
    </div>
    <!--end::Logo-->
    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true"
             data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">
            <!--begin::Menu-->
            <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                <!--begin:Menu item-->
                <div class="menu-item">
                    <div class="menu-content"><span class="menu-heading fw-bold text-uppercase fs-6 mx-auto">{{ today()->format('d F, Y') }}</span></div>
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item px-1">
                    <a class="menu-link pe-0 ps-2 activ" href="{{ route('dashboard') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-category fs-1">
                                <i class="path1"></i><i class="path2"></i><i class="path3"></i><i class="path4"></i>
                            </i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                        <i class="ki-duotone ki-arrow-left fs-5 {{ request()->routeIs('dashboard') ? 'd-none' : '' }}">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                </div>
                <div class="menu-item px-1">
                    <a class="menu-link pe-0 ps-2" href="{{ route('front-desk') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-screen fs-1">
                                <i class="path1"></i><i class="path2"></i><i class="path3"></i><i class="path4"></i>
                            </i>
                        </span>
                        <span class="menu-title">Front Desk</span>
                        <i class="ki-duotone ki-arrow-left fs-5 {{ request()->routeIs('front-desk') ? 'd-none' : '' }}">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                </div>
                <div class="menu-item px-1">
                    <a class="menu-link pe-0 ps-2" href="{{ route('reservations.index') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-calendar-tick fs-1">
                                <i class="path1"></i><i class="path2"></i><i class="path3"></i>
                                <i class="path4"></i><i class="path5"></i><i class="path6"></i>
                            </i>
                        </span>
                        <span class="menu-title">Reservations</span>
                        <i class="ki-duotone ki-arrow-left fs-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                </div>
                <div class="menu-item px-1">
                    <a class="menu-link pe-0 ps-2" href="{{ route('dashboard') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-profile-user fs-1">
                                <i class="path1"></i><i class="path2"></i><i class="path3"></i><i class="path4"></i>
                            </i>
                        </span>
                        <span class="menu-title">Guests</span>
                        <i class="ki-duotone ki-arrow-left fs-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                </div>
                <div class="menu-item px-1">
                    <a class="menu-link pe-0 ps-2" href="{{ route('dashboard') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-two-credit-cart fs-1">
                                <i class="path1"></i><i class="path2"></i><i class="path3"></i>
                                <i class="path4"></i><i class="path5"></i>
                            </i>
                        </span>
                        <span class="menu-title">Payments</span>
                        <i class="ki-duotone ki-arrow-left fs-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                </div>
                <div class="menu-item px-1">
                    <a class="menu-link pe-0 ps-2" href="{{ route('reports') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-graph-up fs-1">
                                <i class="path1"></i><i class="path2"></i><i class="path3"></i>
                                <i class="path4"></i><i class="path5"></i><i class="path6"></i>
                            </i>
                        </span>
                        <span class="menu-title">Reports</span>
                        <i class="ki-duotone ki-arrow-left fs-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                </div>
                <div class="menu-item px-1">
                    <a class="menu-link pe-0 ps-2" href="{{ route('staff.index') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-people fs-1">
                                <i class="path1"></i><i class="path2"></i><i class="path3"></i>
                                <i class="path4"></i><i class="path5"></i>
                            </i>
                        </span>
                        <span class="menu-title">Staff</span>
                        <i class="ki-duotone ki-arrow-left fs-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                </div>
                <div class="menu-item px-1">
                    <a class="menu-link pe-0 ps-2" href="{{ route('housekeeping') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-home-3 fs-1">
                                <i class="path1"></i><i class="path2"></i>
                            </i>
                        </span>
                        <span class="menu-title">Housekeeping</span>
                        <i class="ki-duotone ki-arrow-left fs-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                </div>
                <div class="menu-item px-1">
                    <a class="menu-link pe-0 ps-2" href="{{ route('food') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-coffee fs-1">
                                <i class="path1"></i><i class="path2"></i><i class="path3"></i>
                                <i class="path4"></i><i class="path5"></i><i class="path6"></i>
                            </i>
                        </span>
                        <span class="menu-title">Food & Beverage</span>
                        <i class="ki-duotone ki-arrow-left fs-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                </div>
                <div class="menu-item px-1">
                    <a class="menu-link pe-0 ps-2" href="{{ route('channel') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-user-square fs-1">
                                <i class="path1"></i><i class="path2"></i><i class="path3"></i>
                            </i>
                        </span>
                        <span class="menu-title">Channel Manager</span>
                        <i class="ki-duotone ki-arrow-left fs-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                </div>
                <div class="menu-item px-1">
                    <a class="menu-link pe-0 ps-2" href="{{ route('reservation') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-badge fs-1">
                                <i class="path1"></i><i class="path2"></i><i class="path3"></i>
                                <i class="path4"></i><i class="path5"></i>
                            </i>
                        </span>
                        <span class="menu-title">Reservation Mgt</span>
                        <i class="ki-duotone ki-arrow-left fs-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                </div>
                <div class="menu-item px-1">
                    <a class="menu-link pe-0 ps-2" href="{{ route('support') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-faceid fs-1">
                                <i class="path1"></i><i class="path2"></i><i class="path3"></i>
                                <i class="path4"></i><i class="path5"></i><i class="path6"></i>
                            </i>
                        </span>
                        <span class="menu-title">Support & Training</span>
                        <i class="ki-duotone ki-arrow-left fs-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                </div>
                <div class="menu-item px-1">
                    <a class="menu-link pe-0 ps-2" href="{{ route('bookings') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-notepad-bookmark fs-1">
                                <i class="path1"></i><i class="path2"></i><i class="path3"></i>
                                <i class="path4"></i><i class="path5"></i><i class="path6"></i>
                            </i>
                        </span>
                        <span class="menu-title">Bookings</span>
                        <i class="ki-duotone ki-arrow-left fs-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                </div>
                <div class="menu-item px-1">
                    <a class="menu-link pe-0 ps-2" href="{{ route('revenue') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-dollar fs-1">
                                <i class="path1"></i><i class="path2"></i><i class="path3"></i>
                            </i>
                        </span>
                        <span class="menu-title">Cashbook</span>
                        <i class="ki-duotone ki-arrow-left fs-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                </div>
                <div class="menu-item px-1">
                    <a class="menu-link pe-0 ps-2" href="{{ route('inventory') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-cube-2 fs-1">
                                <i class="path1"></i><i class="path2"></i><i class="path3"></i>
                            </i>
                        </span>
                        <span class="menu-title">Inventory</span>
                        <i class="ki-duotone ki-arrow-left fs-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                </div>
               <!-- Sidebar Menu -->
<!-- <div class="sidebar"> -->
    <!-- Other menu items here... -->

    <!-- Dropdown Menu -->
<!-- Main Sidebar Button with Centered Submenu and Icons -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <!-- Main Sidebar Button -->
        <div class="menu-item dropdown">
            <a class="menu-link pe-0 ps-2 dropdown-toggle" href="#" role="button" id="settingsDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="menu-icon">
                    <i class="ki-duotone ki-wrench fs-1">
                        <i class="path1"></i><i class="path2"></i>
                    </i>
                </span>
                <span class="menu-title">Settings</span>
                <i class="ki-duotone ki-arrow-left fs-5"></i>
            </a>

            <!-- Dropdown Menu Content -->
            <div class="dropdown-menu text-center" aria-labelledby="settingsDropdown" style="background-color: #063970;">
            <!-- class="text-gray-800 h-30px fw-semibold app-sidebar-logo-default" style="font-size: 32px; font-family: Playfair Display SC,serif; " -->
                <!-- Submenu Links with Icons -->
                <a class="dropdown-item" href="{{ route('settings') }}"><i class="fas fa-cog me-2"></i> Hotel </a>
                <a class="dropdown-item" href="{{ route('roomsettings') }}"><i class="fas fa-box me-2"></i> Room </a>
                <a class="dropdown-item" href="{{ route('services') }}"><i class="fas fa-home me-2"></i> Services</a>
                <a class="dropdown-item" href="{{ route('deals') }}"><i class="fas fa-dollar-sign me-2"></i> Deals</a>
                <a class="dropdown-item" href="{{ route('department') }}"><i class="fas fa-book me-2"></i> Department</a>
            </div>
        </div>
    </div>
</nav>



<!-- JavaScript to Initialize Dropdown -->
<script>
$(document).ready(function() {
    // Initialize the dropdown menu
    $(".dropdown-toggle").dropdown();
});
</script>

            </div>
            <!--end::Menu-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::sidebar menu-->
    <div class="app-sidebar-footer d-flex align-items-center ps-20 pb-3" id="kt_app_sidebar_footer">
        <form action="{{ route('api.logout') }}" method="POST" x-data x-submit @finish="location.reload()">
            @method('delete')
            <button class="btn app-sidebar-username btn-link text-gray-300 text-hover-primary fs-6 fw-semibold lh-0">
                <i class="ki-duotone ki-exit-right fs-2">
                    <i class="path1"></i><i class="path2"></i>
                </i>
                Logout
            </button>
        </form>
    </div>
</div>
<!--end::Sidebar-->

