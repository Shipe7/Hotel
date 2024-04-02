<x-layouts.app title="Cashbook">
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

    <style>
        /* Style for the entire table */
table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
}

/* Style for the table header */
thead {
    background-color: #f2f2f2;
}

th {
    padding: 10px;
    text-align: left;
    font-weight: bold;
    border-bottom: 2px solid #ddd;
}

/* Style for alternating table rows */
tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Style for table data cells */
td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

.white-box {
    background-color: white !important; /* Add !important to override other styles */
    /* cursor: pointer; */
    
    height: 100px; /* Set the desired height here */
}

.modal-body {
    /* max-height: 400px; Set the desired height here */
    overflow-y: auto; /* Add vertical scroll if the content exceeds the height */
    
    height: 60p0x; /* Set the desired height here */
}


/* Hover effect on table rows */
tbody tr:hover {
    background-color: #e0e0e0;
    transition: background-color 0.3s ease;
}

    </style>
</head>
<body>
    
<!-- Modal Body (Outside the Table) -->
<div class="modal-body">
    <!-- Table -->
    <table id="datatable">
        <thead>
            <tr>
                <th>Cashbook ID</th>
                <th>Cashbook Name</th>
                <th>Cashbook Name for Report</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through your data and display each row -->
            @foreach($tableData as $row)      
            
            <tr class="white-box" data-id="{{ $row->id }}">
            <td><a href="{{ route('details.cashbook', ['id' => $row->id]) }}">{{ $row->cashbookid }}</a></td>
            <td><a href="{{ route('details.cashbook', ['id' => $row->id]) }}">{{ $row->cashbook }}</a></td>
            <td><a href="{{ route('details.cashbook', ['id' => $row->id]) }}">{{ $row->cashbook_report }}</a></td>
        </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- End of Modal Body -->


<script>
    // Attach a click event listener to each row with class 'white-box'
    document.querySelectorAll('.white-box').forEach(function(row) {
        row.addEventListener('click', function() {
            // Retrieve the URL from the 'data-href' attribute
            var href = row.getAttribute('data-href');

            // Redirect to the specified URL
            window.location.href = href;
        });
    });
</script>


</body>
</html>



    <!--end::Content container-->
    <script>
    $(document).ready(function() {
        $('#datatable').DataTable(); 
            "searching": true,
            "ordering": true,
            "paging": true
        });

   // Attach a click event listener to each row with class 'white-box'
// document.querySelectorAll('.white-box').forEach(function(row) {
//     row.addEventListener('click', function() {
//         // Retrieve the data associated with the clicked row
//         var rowData = JSON.parse(row.getAttribute('data-record'));

//         // Redirect to the details view with the ID parameter
//         var detailsViewUrl = '{{ route('details.cashbook', ['id' => ':id']) }}'; // Define your details view route
//         detailsViewUrl = detailsViewUrl.replace(':id', rowData.id); // Replace :id with the actual ID

//         window.location.href = detailsViewUrl; // Navigate to the details view
//     });
// });


</script>



<script>
    $(document).ready(function() {
        // Initialize DataTable
        var table = $('#datatable').DataTable({
            // "searching": true,
            // "ordering": true,
            // "paging": true
        });

        // Add an event listener to the status dropdowns
        $('#datatable tbody').on('change', '.status-dropdown', function() {
            var selectedOption = $(this).find('option:selected');
            var selectedColor = selectedOption.data('color');
            var cell = table.cell($(this).closest('td'));

            // Apply background color to the cell based on the selected status
            cell.node().style.backgroundColor = selectedColor;
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
</x-layouts.app>
