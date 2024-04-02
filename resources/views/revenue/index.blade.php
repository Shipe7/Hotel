<x-layouts.app title="Cashbook">
    <!--begin::Content container-->
     <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="row g-5 g-xl-3">
        <!DOCTYPE html>
<html>
<head>
        <style>/* Style for the horizontal line */
hr.my-4 {
    border-top: 2px solid #ffffff; /* Change the color as needed */
    margin-top: 0;
    margin-bottom: 1rem; /* Adjust the spacing as needed */
}


.full-screen-card {
        position: absolute;
        top: 20;
        buttom: 10;
        left: 40;
        width: 77%;
        height: 75%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: white;
    }

    .full-screen-card .card-px {
        max-width: 100%;
    }

body {
        background-color: white;
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<div class="full-screen-card">
    <div class="card-px text-center">
        <!--begin::Title-->
        <p class="fs-2x mb-5">You have not created a cashbook</p>
        <!--end::Title-->

        <!-- begin::Action-->
        <!-- <a href="{{ route('newcashbook.revenue') }}" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer">Create Cashbook</a> -->
        <!--end::Action -->

        <a href="{{ route('view.revenue') }}" class="btn btn-sm fw-bold btn-primary" >
            New Cashbook </a>
    </div>
</div>

   
<!-- Horizontal line -->
<!-- <hr class="my-4"> -->


</body>
</html>
           
    <!--end::Content container-->

    @push('scripts')
        <script src="{{ asset('js/widgets.bundle.js') }}"></script>
        {{--<script src="{{ asset('js/custom/widgets.js') }}"></script>--}}
        <script>
            var charts = document.querySelectorAll('.mixed-widget-4-chart');

            [].slice.call(charts).map(function(element) {
                var height = parseInt(KTUtil.css(element, 'height'));

                if ( !element ) {
                    return;
                }

                var color = element.getAttribute('data-kt-chart-color');

                var baseColor = KTUtil.getCssVariableValue('--bs-' + color);
                var lightColor = KTUtil.getCssVariableValue('--bs-' + color + '-light' );
                var labelColor = KTUtil.getCssVariableValue('--bs-' + 'gray-700');

                var options = {
                    series: [75],
                    chart: {
                        fontFamily: 'inherit',
                        height: height,
                        type: 'radialBar',
                    },
                    plotOptions: {
                        radialBar: {
                            hollow: {
                                margin: 0,
                                size: "35%"
                            },
                            dataLabels: {
                                showOn: "always",
                                name: {
                                    show: false,
                                    fontWeight: '700'
                                },
                                value: {
                                    color: labelColor,
                                    fontSize: "10px",
                                    fontWeight: '600',
                                    offsetY: 5,
                                    show: true,
                                    formatter: function (val) {
                                        return val + '%';
                                    }
                                }
                            },
                            track: {
                                background: lightColor,
                                strokeWidth: '100%'
                            }
                        }
                    },
                    colors: [baseColor],
                    labels: ["Progress"]
                };

                var chart = new ApexCharts(element, options);
                chart.render();
            });
        </script>
    @endpush
</x-layouts.app>
