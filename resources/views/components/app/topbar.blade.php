<!--begin::Header kt_app_header_menu_toggle-->
<div id="kt_app_header" class="app-header ">
    <!--begin::Header container-->
    <div class="app-container  container-fluid d-flex align-items-stretch justify-content-between "
         id="kt_app_header_container">
        <!--begin::sidebar mobile toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show sidebar menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                <span class="svg-icon svg-icon-1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor"/>
                        <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor"/>
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
        </div>
        <!--end::sidebar mobile toggle-->
        <!--begin::Mobile logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="" class="d-lg-none">
                <span class="text-black theme-light-show h-30px" style="font-size: 40px; font-family: sans-serif; font-weight: 800">F</span>
                <span class="text-white theme-dark-show h-30px" style="font-size: 40px; font-family: sans-serif; font-weight: 800">F</span>
            </a>
        </div>
        <!--end::Mobile logo-->
        <!--begin::Header wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
             id="kt_app_header_wrapper">
            <!--begin::Menu wrapper-->
            <div class="app-navbar flex-shrink-0">
                <div class="app-navbar-item ms-1 ms-md-3">
                    <div class="btn btn-icon btn-custom btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px">
                        <i class="ki-duotone text-gray-600 ki-left fs-2 fs-lg-1"></i>
                    </div>
                </div>
                <div class="app-navbar-item ms-1 ms-md-3">
                    <div class="btn btn-icon btn-custom btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px">
                        <i class="ki-duotone text-gray-600 ki-right fs-2 fs-lg-1"></i>
                    </div>
                </div>
                <div class="app-navbar-item ms-1 ms-md-3">
                    <div class="btn btn-icon btn-custom btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px">
                        <i class="ki-duotone text-gray-600 ki-arrows-circle fs-3 fs-lg-2">
                            <i class="path1"></i><i class="path2"></i>
                        </i>
                    </div>
                </div>
                <div class="app-navbar-item ms-1 ms-md-3">
                    <div class="btn btn-icon btn-custom btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px">
                        <i class="fa fa-expand text-gray-700 fs-4 fs-lg-3"></i>
                    </div>
                </div>
            </div>
            <!--end::Menu wrapper-->
            <!--begin::Navbar-->
            <div class="app-navbar flex-shrink-0">
                <!--begin::Search-->
                <div class="app-navbar-item align-items-stretch ms-1 ms-lg-3">
                    <!--begin::Search-->
                    <div id="kt_header_search" class="header-search d-flex align-items-stretch" data-kt-search-keypress="true"
                         data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu"
                         data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true"
                         data-kt-menu-placement="bottom-end"
                    >
                        <!--begin::Search toggle-->
                        {{--<div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
                            <div class="btn btn-icon btn-custom btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px">
                                <i class="ki-duotone text-gray-600 ki-magnifier fs-1">
                                    <i class="path1"></i><i class="path2"></i>
                                </i>
                            </div>
                        </div>--}}
                        <div class="menu-item d-none d-lg-block">
                            <div class="menu-link nav-link d-flex align-items-center position-relative py-3">
                                <i class="ki-duotone text-gray-600 ki-magnifier fs-1 position-absolute ms-4">
                                    <i class="path1"></i><i class="path2"></i>
                                </i>
                                <input type="text" id="search" class="form-control form-control-solid w-200px ps-14" placeholder="Search">
                            </div>
                        </div>
                        <!--end::Search toggle-->
                        <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
                            {{--@admin
                            <livewire:global-search />
                            @endadmin--}}
                        </div>
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Search-->
                <!--begin::Notifications-->
                <div class="app-navbar-item ms-1 ms-md-3">
                    <div class="btn btn-icon btn-custom btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px">
                        <i class="ki-duotone text-gray-600 ki-notification-on fs-2 fs-lg-1">
                            <i class="path1"></i><i class="path2"></i><i class="path3"></i><i class="path4"></i><i class="path5"></i>
                        </i>
                    </div>
                </div>
                <!--end::Notifications-->
                <div class="app-navbar-item ms-1 ms-md-3">
                    <div class="btn btn-icon btn-custom btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px">
                        <i class="ki-duotone text-gray-600 ki-question-2 fs-2 fs-lg-1">
                            <i class="path1"></i><i class="path2"></i><i class="path3"></i>
                        </i>
                    </div>
                </div>
                <!--begin::User menu-->
                <div class="app-navbar-item ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                    <!--begin::Menu wrapper-->
                    <div class="cursor-pointer symbol symbol-35px symbol-md-40px"
                         data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                         data-kt-menu-placement="bottom-end">
                        <img src="{{ user()->photo }}" alt="user photo"/>
                    </div>
                    <!--begin::User account menu-->
                    <div
                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                        data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <img alt="user photo" src="{{ user()->photo }}"/>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">
                                        {{ user()->name }}
                                        <x-users.badge :user="user()" />
                                    </div>
                                    <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{ user()->email }}</a>
                                </div>
                                <!--end::Username-->
                            </div>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="{{ route('users.show', user()) }}" class="menu-link px-5">My Profile</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <form action="{{ route('api.logout') }}" method="POST" x-data x-submit @finish="location.reload()">
                                @method('delete')
                                <button class="menu-link btn px-5 border-0 w-100">
                                    Sign Out &nbsp;<span><i class="fa fa-sign-out-alt"></i></span>
                                </button>
                            </form>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::User account menu-->
                    <!--end::Menu wrapper-->
                </div>
                <!--end::User menu-->
            </div>
            <!--end::Navbar-->
        </div>
        <!--end::Header wrapper-->
    </div>
    <!--end::Header container-->
</div>
<!--end::Header-->
