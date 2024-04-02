@props(['buttons' => '', 'title' => ''])
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <title>{{ config('app.name') }}</title>

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('media/logos/default.svg') }}">
    <link rel="shortcut icon" type="image/png" sizes="16x16" href="{{ asset('media/logos/default.svg') }}">
    <link rel="canonical" href="{{ route('home') }}"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <link href="{{ asset('plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>

    @stack('styles')

    <livewire:styles />

    <script src="{{ asset("js/thememode.js") }}"></script>
    <script defer src="https://unpkg.com/alpinejs@3.12.0/dist/cdn.min.js"></script>
</head>
<!--end::Head-->

<!--begin::Body-->
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
      data-kt-app-toolbar-enabled="true" data-kt-app-sidebar-push-header="true"
      data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-enabled="true"
      data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-toolbar="true"
      data-kt-app-sidebar-push-footer="true" class="app-default"
>

<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

        <x-app.topbar />

        <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

            <x-app.sidebar />

            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                    <!--begin::Content-->
                    <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6">
                        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                            <!--begin::Page title-->
                            <div class="page-title me-3 mb-5 mb-lg-0 d-flex align-items-center">
                                <h1 class="page-heading fw-bolder fs-2 my-0 me-">{{ $title }}</h1>
                                <span class="rounded fs-6 fw-semibold p-2 ms-3 text-gray-700 bg-white">
                                    <span class="menu-title">{{ today()->format('d F, Y') }}</span>
                                </span>
                            </div>
                            <!--end::Page title-->
                            <div class="d-flex align-items-center gap-2 gap-lg-3">
                                {{ $buttons }}
                            </div>
                        </div>
                    </div>
                    <div id="kt_app_content" class="app-content  flex-column-fluid ">

                        {{ $slot }}

                    </div>
                </div>
            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::App-->

<div class="scrolltop" data-kt-scrolltop="true"><i class="ki-outline ki-arrow-up"></i></div>

<!--begin::Global Javascript-->
<script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('js/scripts.bundle.js') }}"></script>
<script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script>
    $('[data-table]').each((index, table) => {
        datatable = $(table).DataTable({ 'order': [], 'pageLength': 25 });

        $($(table).data('search-using')).keyup(function (e) {
            datatable.search(e.target.value).draw();
        });
    });
</script>

{{--<script>
    $('.menu-link[href="{{ url()->full() }}"]').addClass('active').closest('.menu-accordion').addClass('here show');
</script>--}}

<livewire:scripts />

@stack('scripts')

<script src="https://unpkg.com/axios@1.4.0/dist/axios.min.js"></script>
<script src="{{ asset("js/request.js") }}"></script>
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
