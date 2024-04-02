<x-layouts.app title="Housekeeping">
<!--  -->
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="row g-5 g-xl-3">
        <!DOCTYPE html>
<html>
<head>
    <title>Table Example</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.min.js"></script>


</head>
<body>


 


<script>
    $(document).ready(function() {
        // Initialize DataTable
        var table = $('#datatable').DataTable({
            // "searching": true,
            // "ordering": true,
            // "paging": true
        });

    });

    $(document).ready(function () {
    // Add an event listener to the status dropdowns
    $('.status-dropdown').change(function () {
        var selectedOption = $(this).find('option:selected');
        var selectedColor = selectedOption.data('color');
        
        // Update the background color of the dropdown
        $(this).css('background-color', selectedColor);
    });
});


</script>


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


    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid" >
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container">
                    <div class="card bg-transparent">
                        <div class="card-header border-0 p-0">
                            <div class="card-title m-0 mt-n5">
                                <div class="d-flex align-items-center position-relative my-1 me-7">                              

                                <div class="w-100 mw-150px me-4">
                                    <select class="form-select bg-white form-select-sm form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Room" id="Room">
                                        <option></option>
                                        <option value=" ">Room</option>
                                        <option value="Super Admin">Room 101</option>
                                        <option value="Manager">Room 102</option>
                                        <option value="Receptionist">Room 103</option>
                                        <option value="House Keeping">Room 104</option>
                                    </select>
                                </div>

                                <div class="w-100 mw-150px me-4">
                                    <select class="form-select bg-white form-select-sm form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Room Type" id="RoomType">
                                        <option></option>
                                        <option value=" ">Room Type</option>
                                        <option value="Super Admin">Standard Double</option>
                                        <option value="Manager">Standard</option>
                                        <option value="Receptionist">Delux</option>
                                        <option value="House Keeping">Presidential Suit</option>
                                    </select>
                                </div>
                                <div class="w-100 mw-150px me-4">
                                    <select class="form-select bg-white form-select-sm form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="HouseKeeping" id="HouseKeeping">
                                        <option></option>
                                        <option value=" ">HouseKeeping</option>
                                        <option value="Super Admin">Clean</option>
                                        <option value="Manager">Dirty</option>
                                        <option value="Receptionist">Cleaning</option>
                                    </select>
                                </div>

                                <div class="d-flex align-items-center position-relative">
                                    <!-- <i class="ki-duotone ki-calendar fs-3 position-absolute ms-3 z-index-3">
                                        <i class="path1"></i><i class="path2"></i>
                                    </i>
                                    <div class="input-group mw-150px me-7">
                                        <input class="form-control bg-white form-control-sm form-control-solid rounded rounded-end-0 ps-11" placeholder="Created" id="flatpickr"/>
                                        <button class="btn btn-sm btn-icon btn-light" id="clear">
                                            <i class="ki-duotone ki-cross fs-2">
                                                <i class="path1"></i><i class="path2"></i>
                                            </i> -->
                                        </button>
                                    </div>
                                </div>

                                <div class="w-100 mw-150px me-7">
                                    <select class="form-select bg-white form-select-sm form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Priority" id="Priority">
                                        <option></option>
                                        <option value=" ">Priority</option>
                                        <option value="Super Admin">Hign</option>
                                        <option value="Manager">Medium</option>
                                        <option value="Receptionist">Low</option>
                                    </select>
                                </div>

                                <div class="w-100 mw-150px me-7">
                                    <select class="form-select bg-white form-select-sm form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Floor" id="Floor">
                                        <option></option>
                                        <option value=" ">Floor</option>
                                        <option value="Super Admin">1</option>
                                        <option value="Manager">2</option>
                                        <option value="Receptionist">3</option>
                                    </select>
                                </div>
                        
                            </div>
                            
                        </div>
                        <div class="card-body p-0 mt-n7">
                            <table class="table align-middle table-row-dashed fs-6 gy-5" data-table data-search-using="#search">
                                <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                <th>Room</th>
                                <th>Room Type</th>
                                <th>Housekeepinng Status</th>
                                <th>Priority</th>
                                <th>Reservation Status</th>
                                <th>Comment</th>
                               
                            </tr>
                        </thead>
                                <tbody class="fw-semibold text-gray-600">
                                @foreach($tableData as $row)
    <tr class="bg-white"> <!-- Add the "bg-white" class to set the white background -->
        <td>{{ $row->name }}</td>
        <td>{{ $row->type }}</td>
        
        <td class="color-cell">
    <select class="status-dropdown">
        <option value="clean" data-color="orange">Cleaning</option>
        <option value="dirty" data-color="green">Clean</option>
        <option value="cleaning" data-color="red">Dirty</option>
        <!-- Add more status options with corresponding colors as needed -->
    </select>
</td>

        <td>
            <!-- Dropdown for Priority -->
            <select>
                <option value="high" {{ $row->priority === 'high' ? 'selected' : '' }}>High</option>
                <option value="medium" {{ $row->priority === 'medium' ? 'selected' : '' }}>Medium</option>
                <option value="low" {{ $row->priority === 'low' ? 'selected' : '' }}>Low</option>
            </select>
        </td>
        <td>{{ $row->reservation_status }}</td>
        <td>{{ $row->comment }}</td>
    </tr>
@endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
    </div>

    
<script>
$(document).ready(function() {
    // Listen for changes in the select element with class "status-dropdown"
    $(".status-dropdown").change(function() {
        // Get the selected option
        var selectedOption = $(this).find("option:selected");
        
        // Get the "data-color" attribute value of the selected option
        var selectedColor = selectedOption.data("color");
        
        // Set the background color of the parent <td> element
        // $(this).closest("td").css("background-color", selectedColor);
    });
    
    // Trigger the change event on page load to set the initial background color
    $(".status-dropdown").change();
});
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.status-dropdown').change(function () {
            var color = $(this).find(':selected').data('color');
            var columnIndex = $(this).closest('td').index();

            $('tr').each(function () {
                $(this).find('td:eq(' + columnIndex + ')').css('background-color', color);
            });
        });
    });
</script>



    </body>
</html>

</x-layouts.app>
