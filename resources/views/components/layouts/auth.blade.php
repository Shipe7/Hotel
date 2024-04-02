<!DOCTYPE html>
<html lang="en" >
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" >
    <meta charset="utf-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>Welcome - Branch</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <script defer src="https://unpkg.com/alpinejs@3.12.0/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/axios@1.4.0/dist/axios.min.js"></script>
</head>
<body  id="kt_body"  class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat" >
<!--begin::Theme mode setup on page load-->
<script>
    var defaultThemeMode = "light";
    var themeMode;

    if ( document.documentElement ) {
        if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
            if ( localStorage.getItem("data-bs-theme") !== null ) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }

        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }

        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
</script>
<!--end::Theme mode setup on page load-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Page bg image-->
    <style>
        body {
            background-image: url('{{ asset('media/auth/bg4.jpg') }}');
        }

        [data-bs-theme="dark"] body {
            background-image: url('{{ asset('media/auth/bg4-dark.jpg') }}');
        }
    </style>
    <!--end::Page bg image-->

    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-column-fluid flex-lg-row">
        <!--begin::Aside-->
        <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
            <!--begin::Aside-->
            <div class="d-flex flex-center flex-lg-start flex-column">
                <!--begin::Logo-->
                <a href="{{ route('home') }}">
                    <span class="text-white h-30px fw-semibold app-sidebar-logo-default" style="font-size: 52px; font-family: Playfair Display SC,serif; ">
                        Filly <span style="color: #ff0000">Hotels</span>
                    </span>
                </a>
                {{--<a href="{{ route('home') }}" class="mb-7">
                    <img alt="" src="{{ asset('media/logos/custom-3.svg') }}') }}"/>
                </a>--}}
                <!--end::Logo-->

                <!--begin::Title-->
                <div class="text-gray-300 fs-3 mt-10 fw-normal m-0">
                    Discover Comfort, Luxury, and Warmth at
                    <div>A Home Away from Home</div>
                </div>
                <!--end::Title-->
            </div>
            <!--begin::Aside-->
        </div>
        <!--begin::Aside-->

        <!--begin::Body-->
        <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
            <!--begin::Card-->
            <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">

                {{ $slot }}

            </div>
            <!--end::Card-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Authentication - Sign-in-->
</div>
<!--end::Root-->

<!--begin::Javascript-->
<script src="{{ asset('js/scripts.bundle.js') }}"></script>
<script src="{{ asset("js/request.js") }}"></script>

</body>
</html>
