<x-layouts.app title="Cashbook">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="row g-5 g-xl-3">
            <!-- Page Content -->

            <!DOCTYPE html>
<html>
<head>
<title>Table Example</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.min.js"></script>

</head>
<body>
           


<!--begin::Content-->
<div id="kt_app_content" class="app-content  flex-column-fluid " >
    
           
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container  container-xxl ">
            <!--begin::Products-->
<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span class="path1"></span><span class="path2"></span></i>                <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Report" />
            </div>
            <!--end::Search-->

            <!--begin::Export buttons-->
            <div id="kt_ecommerce_report_sales_export" class="d-none"></div>
            <!--end::Export buttons-->
        </div>


 <!--begin::Daterangepicker-->
 <input class="form-control form-control-solid w-100 mw-250px" placeholder="Pick date range" id="kt_ecommerce_report_sales_daterangepicker" />
<!--end::Daterangepicker-->


<script>
    $(document).ready(function () {
    // Initialize DateRangePicker
    $('#kt_ecommerce_report_sales_daterangepicker').daterangepicker({
        opens: 'left', // Adjust this based on your layout
        startDate: moment().subtract(7, 'days'), // Initial start date (e.g., 7 days ago)
        endDate: moment(), // Initial end date (today)
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')]
        },
        // Add your event handlers here if needed
    });

    // Handle the date range selection event
    $('#kt_ecommerce_report_sales_daterangepicker').on('apply.daterangepicker', function (ev, picker) {
        // You can access the selected date range using picker.startDate and picker.endDate
        var startDate = picker.startDate.format('YYYY-MM-DD');
        var endDate = picker.endDate.format('YYYY-MM-DD');

        // Perform any actions with the selected date range here
        console.log('Selected Date Range:', startDate, 'to', endDate);
    });

    // Trigger the date range picker when the button is clicked
    $('#daterangepicker-button').on('click', function () {
        $('#kt_ecommerce_report_sales_daterangepicker').data('daterangepicker').toggle();
    });
});

    </script>



        <!-- <div class="ms-4">
        <button class="btn btn-primary" style="background-color: grey"; data-kt-ecommerce-order-filter="today">Today</button>
        <button class="btn btn-primary" data-kt-ecommerce-order-filter="yesterday">Yesterday</button>
        <button class="btn btn-primary" data-kt-ecommerce-order-filter="this_month">This Month</button>
</div> -->

        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
            <!--begin::Daterangepicker-->


<!--begin::Export dropdown-->
<button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
    <i class="ki-duotone ki-exit-up fs-2"><span class="path1"></span><span class="path2"></span></i>    Export Report
</button>
<!--begin::Menu-->
<div id="kt_ecommerce_report_sales_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-export="copy">
            Copy to clipboard
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-export="excel">
            Export as Excel
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-export="csv">
            Export as CSV
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-export="pdf">
            Export as PDF
        </a>
    </div>
    <!--end::Menu item-->
 
</div>
<!--end::Menu-->
<!--end::Export dropdown-->        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-0">
        
<!--begin::Table-->
<table class="table align-middle table-row-dashed fs-9 gy-6" id="kt_ecommerce_report_sales_table">
    <thead>
    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
            <th class="min-w-50px">Date</th>
            <!-- <th class="min-w-75px">Date & Time</th> -->
            <th class="min-w-70px">Ledger ID</th>            
            <th class="min-w-50px">SubID</th>
            <th class="min-w-130px">Billing Reason</th>
            <th class="min-w-60px">Cash In</th>
            <th class="min-w-60px">Cash Out</th>
            <th class="min-w-100px">Balance</th>
            <th class="min-w-100px">Account</th>
            <th class="min-w-100px">Account Name</th>
            <th class="min-w-100px">Cash Point</th>
            <th class="min-w-100px">Cash Point Sub </th>
            <th class="min-w-100px">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <!-- Loop through your data and display each row -->

            
            <td>{{ $boxDetails->cashbookid }}</td>            
            <td>{{ $boxDetails->ledgerid }}</td>            
            <td>{{ $boxDetails->subid }}</td>            
            <td>{{ $boxDetails->billing }}</td>            
            <td>{{ $boxDetails->cashin }}</td>            
            <td>{{ $boxDetails->cashout }}</td>            
            <td>{{ $boxDetails->balance }}</td>            
            <td>{{ $boxDetails->account }}</td>            
            <td>{{ $boxDetails->accountname }}</td>            
            <td>{{ $boxDetails->cashpoint }}</td>            
            <td>{{ $boxDetails->cashpointsub }}</td>            
            <!-- <td>{{ $boxDetails->cashbookid }}</td> -->

<!-- 
            $table->string('cashbook');
            $table->string('cashbookid');
            $table->string('cashbook_report');
            $table->dateTime('datetime');
            $table->unsignedBigInteger('ledgerid');
            $table->unsignedBigInteger('subid');
            $table->string('billing');
            $table->decimal('cashin', 10, 2); // Assuming you want to store as decimal with 10 total digits and 2 decimal places
            $table->decimal('cashout', 10, 2); // Same assumption as cashin
            $table->decimal('balance', 10, 2); // Same assumption as cashin
            $table->unsignedBigInteger('account');
            $table->string('accountname');
            $table->string('cashpoint');
            $table->string('cashpointsub');    -->
             </tr>

            <tr>
                <td colspan="9" class="text-end text-success">
                    Cash In
                </td>
                <td class="text-end text-success">
                    $0.00
                </td>
            </tr>
            <tr>
                <td colspan="9" class="text-end text-danger">
                    Cash Out
                </td>
                <td class="text-end text-danger">
                    $0.00
                </td>
            </tr>
            <tr>
                <td colspan="9" class="text-end">
                    Balance of period 
                </td>
                <td class="text-end">
                    $5.00
                </td>
            </tr>
            <tr>
                <td colspan="9" class="text-end">
                    Closing Balance
                </td>
                <!-- text-dark fs-3 fw-bolder  -->
                <td class="text-end">
                    $269.00
                </td>
            </tr>
        </tbody>
</table>
<!--end::Table-->    </div>
    <!--end::Card body-->
</div>
<!--end::Products-->        </div>
        <!--end::Content container-->
    </div>
<!--end::Content-->		


              




</body>
</html>
</x-layouts.app>
