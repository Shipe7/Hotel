<x-layouts.app title="Dashboard">
    <x-slot:buttons>
        <a href="" class="btn btn-sm btn-primary">
            <i class="ki-duotone ki-arrows-circle fs-2">
                <i class="path1"></i><i class="path2"></i>
            </i>
            Refresh
        </a>
    </x-slot:buttons>
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="row g-5 g-xl-3">
            <div class="col-md-6 col-xxl-3">
                <div class="card bg-body card-xl-stretch mb-xl-8 rounded-top-5 rounded-bottom-5 pb-lg-0 pb-3">
                    <div class="position-relative">
                        <div class="position-absolute start-0 top-0 w-6px mt-5 ms-1 rounded-2" style="height: 86%; background: linear-gradient(180deg, #0062D1 0%, rgba(0, 98, 209, 0.35) 100%)"></div>
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="fw-bold text-gray-800 my-2 ms-2">New Booking</h4>
                                    <div class="fw-bold fs-1 mt-15 ms-2" style="line-height: 20px">
                                        {{ $new_bookings_count }}
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="me-n20 me-xl-n10 mt-n5 mt-xl-n3 mb-n10 mb-lg-n15 mixed-widget-4-chart float-end"
                                         data-percentage="{{ $active_reservations_count > 0 ? round(($new_bookings_count / ($new_bookings_count + $active_reservations_count)) * 100) : 0 }}"
                                         data-kt-chart-color="primary" style="height: 150px"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3">
                <div class="card bg-body card-xl-stretch mb-xl-8 rounded-top-5 rounded-bottom-5 pb-lg-0 pb-3">
                    <div class="position-relative">
                        <div class="position-absolute start-0 top-0 w-6px mt-5 ms-1 rounded-2" style="height: 86%; background: linear-gradient(180deg, #7328D3 0%, rgba(116, 41, 211, 0.28) 100%);"></div>
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="fw-bold text-gray-800 my-2 ms-2">Booked</h4>
                                    <div class="fw-bold fs-1 mt-15 ms-2" style="line-height: 20px">
                                        {{ $booked_count }}
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="me-n20 me-xl-n10 mt-n5 mt-xl-n3 mb-n10 mb-lg-n15 mixed-widget-4-chart float-end"
                                         data-percentage="{{--{{ $booked_count > 0 ? round(($booked_count / $new_bookings_count ) * 100) : 0 }}--}}42"
                                         data-kt-chart-color="info" style="height: 150px"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3">
                <div class="card bg-body card-xl-stretch mb-xl-8 rounded-top-5 rounded-bottom-5 pb-lg-0 pb-3">
                    <div class="position-relative">
                        <div class="position-absolute start-0 top-0 w-6px mt-5 ms-1 rounded-2" style="height: 86%; background: linear-gradient(180deg, #449C11 0%, rgba(68, 156, 17, 0.38) 100%);"></div>
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="fw-bold text-gray-800 my-2 ms-2">Check In</h4>
                                    <div class="fw-bold fs-1 mt-15 ms-2" style="line-height: 20px">{{ $checkin_count }}</div>
                                </div>
                                <div class="col-6">
                                    <div class="text-end me-10 me-lg-2">
                                        <div class="symbol symbol-circle mx-auto symbol-55px mt-6">
                                            <div class="bg-success bg-opacity-50 p-3 rounded-circle">
                                                <span class="symbol-label bg-success">
                                                    <i class="ki-duotone ki-entrance-left text-white fs-3tx">
                                                        <i class="path1"></i><i class="path2"></i>
                                                    </i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3">
                <div class="card bg-body card-xl-stretch mb-xl-8 rounded-top-5 rounded-bottom-5 pb-lg-0 pb-3">
                    <div class="position-relative">
                        <div class="position-absolute start-0 top-0 w-6px mt-5 ms-1 rounded-2" style="height: 86%; background: linear-gradient(180deg, #FF9F32 0%, rgba(255, 159, 50, 0.38) 100%);"></div>
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="fw-bold text-gray-800 my-2 ms-2">Check Out</h4>
                                    <div class="fw-bold fs-1 mt-15 ms-2" style="line-height: 20px">{{ $checkout_count }}</div>
                                </div>
                                <div class="col-6">
                                    <div class="text-end me-10 me-lg-2">
                                         <div class="symbol symbol-circle mx-auto symbol-55px mt-6">
                                             <div class="bg-warning bg-opacity-50 p-3 rounded-circle">
                                                 <span class="symbol-label bg-warning">
                                                     <i class="ki-duotone ki-exit-left text-white fs-3tx">
                                                         <i class="path1"></i><i class="path2"></i>
                                                     </i>
                                                 </span>
                                             </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-10">
            <div class="row col-lg-9">
                <div class="col-6">
                    <div class="card card-flush rounded-4">
                        <div class="card-header pt-0 mt-n2">
                            <div class="card-title m-0">
                                <h4 class="fw-bold text-gray-800">Available Rooms</h4>
                            </div>
                        </div>
                        <div class="card-body d-flex align-items-end pt-0 pb-3 mt-n5">
                            <div class="d-flex align-items-center flex-column mt-0 w-100">
                                <div class="d-flex align-items-center w-100">
                                    <div class="progress h-8px w-100 me-2 bg-gray-300">
                                        <div style="width: {{ $rooms_count > 0 ? round((1 - $active_reservations_count / $rooms_count) * 100) : 0 }}% ; background: linear-gradient(90deg, #1A2EE8 0%, rgba(26, 46, 232, 0.35) 100%);"></div>
                                    </div>
                                    <div class="fw-bold fs-1 ms-5">{{ $rooms_count - $active_reservations_count}}</div>
                                </div>
                                <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                    <span class="fw-semibold fs-7 text-dark">Total: {{ $rooms_count }} Rooms</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card-flush rounded-4">
                        <div class="card-header pt-0 mt-n2">
                            <div class="card-title m-0">
                                <h4 class="fw-bold text-gray-800">Sold Out rooms for today</h4>
                            </div>
                        </div>
                        <div class="card-body d-flex align-items-end pt-0 pb-3 mt-n5">
                            <div class="d-flex align-items-center flex-column mt-0 w-100">
                                <div class="d-flex align-items-center w-100">
                                    <div class="progress h-8px w-100 me-2 bg-gray-300">
                                        <div style="width: {{ $rooms_count > 0 ? round(($active_reservations_count / $rooms_count) * 100) : 0 }}%; background: linear-gradient(90deg, #54CF53 0%, rgba(84, 207, 83, 0.35) 100%);"></div>
                                    </div>
                                    <div class="fw-bold fs-1 ms-5">{{ $active_reservations_count }}</div>
                                </div>
                                <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                    <span class="fw-semibold fs-7 text-dark">Total: {{ $rooms_count }} Rooms</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-9">
                    <div class="card card-flush h-xl-100">
                        <div class="card-header pt-7">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Occupancy Statistics</span>
                            </h3>
                            <div class="card-toolbar">
                                <div class="btn btn-sm btn-light d-flex align-items-center px-4">
                                    <i class="ki-duotone ki-calendar-8 fs-1 me-2">
                                        <i class="path1"></i><i class="path2"></i><i class="path3"></i>
                                        <i class="path4"></i><i class="path5"></i><i class="path6"></i>
                                    </i>
                                    Monthly
                                </div>
                                {{--<div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
                                    <div class="text-gray-600 fw-bold">
                                        Loading date range...
                                    </div>
                                    <i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0">
                                        <i class="path1"></i><i class="path2"></i><i class="path3"></i>
                                        <i class="path4"></i><i class="path5"></i><i class="path6"></i>
                                    </i>
                                </div>--}}
                            </div>
                        </div>
                        <div class="card-body d-flex align-items-end px-0 pt-3 pb-5">
                            <div id="kt_charts_widget_18_chart" class="h-325px w-100 min-h-auto ps-4 pe-6"
                                 data-values="{{ $occupancyStatistics->values() }}" data-keys="{{ $occupancyStatistics->keys() }}"
                            ></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-5 pe-0 mb-xl-0">
                {{--@include('dashboard.partials.calendar')--}}
                <div class="card card-xl-stretch mb-xl-0 mx-2 ms-n3 me-n3 pb-9">
                    <div class="card-body p-5">
                        <h6>Client Reviews</h6>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center my-2">
                                    <div class="symbol symbol-circle symbol-25px overflow-hidden me-2">
                                        <div class="symbol-label">
                                            <img src="{{ user('photo') }}" alt="" class="w-100">
                                        </div>
                                    </div>
                                    <span class="text-gray-800 fw-bold fs-7">{{ user('name') }}</span>
                                </div>
                                <div class="mb-xxl-2">
                                    <x-app.review-rating :rating="4.6"/>
                                </div>
                            </div>
                            <div class="text-gray-600 fw-semibold fs-8 ms-10 me-3 my-0">
                                Filly Hotels is the best hotel dealer I have ever met they are reliable and quite affordable...
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center my-2">
                                    <div class="symbol symbol-circle symbol-25px overflow-hidden me-2">
                                        <div class="symbol-label">
                                            <img src="{{ user('photo') }}" alt="" class="w-100">
                                        </div>
                                    </div>
                                    <span class="text-gray-800 fw-bold fs-7">{{ user('name') }}</span>
                                </div>
                                <div class="mb-xxl-2">
                                    <x-app.review-rating :rating="4.6"/>
                                </div>
                            </div>
                            <div class="text-gray-600 fw-semibold fs-8 ms-10 me-3 my-0">
                                Filly Hotels is the best hotel dealer I have ever met they are reliable and quite affordable...
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center my-2">
                                    <div class="symbol symbol-circle symbol-25px overflow-hidden me-2">
                                        <div class="symbol-label">
                                            <img src="{{ user('photo') }}" alt="" class="w-100">
                                        </div>
                                    </div>
                                    <span class="text-gray-800 fw-bold fs-7">{{ user('name') }}</span>
                                </div>
                                <div class="mb-xxl-2">
                                    <x-app.review-rating :rating="4.6"/>
                                </div>
                            </div>
                            <div class="text-gray-600 fw-semibold fs-8 ms-10 me-3 my-0">
                                Filly Hotels is the best hotel dealer I have ever met they are reliable and quite affordable...
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center my-2">
                                    <div class="symbol symbol-circle symbol-25px overflow-hidden me-2">
                                        <div class="symbol-label">
                                            <img src="{{ user('photo') }}" alt="" class="w-100">
                                        </div>
                                    </div>
                                    <span class="text-gray-800 fw-bold fs-7">{{ user('name') }}</span>
                                </div>
                                <div class="mb-xxl-2">
                                    <x-app.review-rating :rating="4.6"/>
                                </div>
                            </div>
                            <div class="text-gray-600 fw-semibold fs-8 ms-10 me-3 my-0">
                                Filly Hotels is the best hotel dealer I have ever met they are reliable and quite affordable...
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center my-2">
                                    <div class="symbol symbol-circle symbol-25px overflow-hidden me-2">
                                        <div class="symbol-label">
                                            <img src="{{ user('photo') }}" alt="" class="w-100">
                                        </div>
                                    </div>
                                    <span class="text-gray-800 fw-bold fs-7">{{ user('name') }}</span>
                                </div>
                                <div class="mb-xxl-2">
                                    <x-app.review-rating :rating="4.6"/>
                                </div>
                            </div>
                            <div class="text-gray-600 fw-semibold fs-8 ms-10 me-3 my-0">
                                Filly Hotels is the best hotel dealer I have ever met they are reliable and quite affordable...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="card h-lg-225px card-flush flex-row-fluid">
                    <div class="card-header px-5">
                        <div class="card-title">
                            <h3>Room Status</h3>
                        </div>
                    </div>
                    <div class="card-body pt-0 pb-5 px-5 row">
                        <div class="table-responsive col-6 pe-lg-8">
                            <table class="table align-middle able-row-bordered mb-0 fs-6 gy-5">
                                <tbody class="fw-semibold text-gray-600">
                                <tr>
                                    <td class="p-2 text-muted">Occupied Rooms</td>
                                    <td class="p-2 fw-bold text-end">590</td>
                                </tr>
                                <tr>
                                    <td class="p-2 text-muted">Clean</td>
                                    <td class="p-2 fw-bold text-end">219</td>
                                </tr>
                                <tr>
                                    <td class="p-2 text-muted">Dirty</td>
                                    <td class="p-2 fw-bold text-end">371</td>
                                </tr>
                                <tr>
                                    <td class="p-2 text-muted">Inspected</td>
                                    <td class="p-2 fw-bold text-end">60</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive col-6 ps-lg-8">
                            <table class="table align-middle able-row-bordered mb-0 fs-6 gy-5">
                                <tbody class="fw-semibold text-gray-600">
                                <tr>
                                    <td class="p-2 text-muted">Available Rooms</td>
                                    <td class="p-2 fw-bold text-end">30</td>
                                </tr>
                                <tr>
                                    <td class="p-2 text-muted">Clean</td>
                                    <td class="p-2 fw-bold text-end">20</td>
                                </tr>
                                <tr>
                                    <td class="p-2 text-muted">Dirty</td>
                                    <td class="p-2 fw-bold text-end">10</td>
                                </tr>
                                <tr>
                                    <td class="p-2 text-muted">Inspected</td>
                                    <td class="p-2 fw-bold text-end">30</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-lg-225px card-flush">
                    <div class="card-header px-5">
                        <div class="card-title">
                            <h3>Room Status</h3>
                        </div>
                    </div>
                    <div class="card-body pt-0 pb-0 mt-n5">
                        <div class="row">
                            <div class="col-9 mixed-widget-17-chart" data-percentage="{{ $active_reservations_count > 0 ? round(($new_bookings_count / ($new_bookings_count + $active_reservations_count)) * 100) : 0 }}" data-kt-chart-color="primary"></div>
                            <div class="col-3 ms-n10 mt-10">
                                <div class="d-flex align-items-center flex-shrink-0 me-7 me-lg-12 mb-3">
                                    <span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
                                    <span class="fw-semibold text-gray-400 fs-6">Cleaned</span>
                                </div>
                                <div class="d-flex align-items-center flex-shrink-0">
                                    <span class="bullet bullet-dot bg-gray-300 me-2 h-10px w-10px"></span>
                                    <span class="fw-semibold text-gray-400 fs-6">Pending</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Content container-->

    @push('scripts')
        {{--<script src="{{ asset('js/widgets.bundle.js') }}"></script>--}}
        {{--<script src="{{ asset('js/custom/widgets.js') }}"></script>--}}

        @include('dashboard.partials.statistics-scripts')

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
                    series: [$(element).data('percentage')],
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
        <script>
                var charts = document.querySelectorAll('.mixed-widget-17-chart');

                [].slice.call(charts).map(function(element) {
                    var height = '300px';

                    if (!element) {
                        return;
                    }

                    var color = element.getAttribute('data-kt-chart-color');

                    var options = {
                        labels: [" "],
                        series: [$(element).data('percentage')],
                        chart: {
                            fontFamily: 'inherit',
                            height: height,
                            type: 'radialBar',
                            offsetY: 0
                        },
                        plotOptions: {
                            radialBar: {
                                startAngle: -90,
                                endAngle: 90,
                                hollow: {
                                    margin: 0,
                                    size: "65%"
                                },
                                dataLabels: {
                                    showOn: "always",
                                    name: {
                                        show: true,
                                        fontSize: "12px",
                                        fontWeight: "700",
                                        offsetY: -5,
                                        color: KTUtil.getCssVariableValue('--bs-gray-500')
                                    },
                                    value: {
                                        color: KTUtil.getCssVariableValue('--bs-gray-900'),
                                        fontSize: "24px",
                                        fontWeight: "600",
                                        offsetY: -40,
                                        show: true,
                                        formatter: function (val) {
                                            return val + '%';
                                        }
                                    }
                                },
                                track: {
                                    background: KTUtil.getCssVariableValue('--bs-gray-300'),
                                    strokeWidth: '100%'
                                }
                            }
                        },
                        colors: [KTUtil.getCssVariableValue('--bs-' + color)],
                        stroke: {
                            lineCap: "round",
                        }
                    };

                    var chart = new ApexCharts(element, options);
                    chart.render();
                });
        </script>
    @endpush
</x-layouts.app>
