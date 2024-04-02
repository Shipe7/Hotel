<x-layouts.app title="Support & Trainning">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="row g-5 g-xl-3">
           
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
