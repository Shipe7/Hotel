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

<!-- Bootstrap CSS -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->

<!-- Bootstrap JavaScript (jQuery required) -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<style>/* Style for the horizontal line */
hr.my-4 {
    border-top: 2px solid #ffffff; /* Change the color as needed */
    margin-top: 0;
    margin-bottom: 1rem; /* Adjust the spacing as needed */
}

.column {
        background-color: white;
        border: 1px solid #ddd;
        padding: 10px;        
        margin-top: 35px;
        margin-right: -10px;
    
    }
    .no-gap-columns .col-md-3 {
        margin: 15px; /* Apply negative margin */
    }

/* Style for the tab container */
.tab-container {
    background-color: white; /* Change the background color as needed */
    padding: 1rem;
    border-color: #000000;
}

.nav-tabs .nav-item.show .nav-link.active {
    color: #000000; /* Change to your desired text color */
}


.nav-tabs .nav-link {
    color: #000000; /* Change to your desired text color for inactive tabs */
}

    /* Style for the green checkbox */
    .form-check-input[type="checkbox"]:checked {
    background-color: green;
    border-color: green;
}
</style>


</head>
<body>

<div class="d-flex align-items-right justify-content-end gap-2 gap-lg-3">      
    

    <!-- Button to trigger the modal -->
<button id="openRevenueModal" class="btn btn-primary">New Revenue</button>

<!-- Modal -->
<div class="modal fade" id="revenueModal" tabindex="-1"  aria-labelledby="revenueModalLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="revenueModalLabel">New Revenue</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        
      </div>
      <div class="modal-body">
        <!-- Form fields -->
        <form action="{{ route('new.revenue') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="date" class="col-md-2 col-form-label">Date:</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>

                <div class="col-md-6">
                    <label for="time" class="col-md-2 col-form-label">Time:</label>
                    <input type="time" class="form-control" id="time" name="time" required>
                </div>
            </div>

            <div class="form-group">
                <label for="attachment">Receipt Upload:</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="attachment" name="attachment">
                    <label class="custom-file-label" for="attachment">Choose file...</label>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="billing" class="col-md-2 col-form-label">Billing:</label>
                    <select class="form-control" id="billing" name="billing">
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="account" class="col-md-2 col-form-label">Account:</label>
                    <select class="form-control" id="account" name="account">
                        <option value="account1">Account 1</option>
                        <option value="account2">Account 2</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-4">
                    <label for="amount" class="col-md-3 col-form-label">Amount:</label>
                    <input type="number" class="form-control" id="amount" name="amount" required>
                </div>

                <div class="col-md-4">
                    <label for="vat" class="col-md-3 col-form-label">VAT:</label>
                    <input type="number" class="form-control" id="vat" name="vat">
                </div>

                <div class="col-md-4">
                    <label for="total" class="col-md-3 col-form-label">Total:</label>
                    <input type="number" class="form-control" id="total" name="total" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="description" class="col-md-3 col-form-label">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter a description"></textarea>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" form="revenueForm" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>   

<script>
$(document).ready(function () {
    // Open the modal when the "New Revenue" button is clicked
    $('#openRevenueModal').click(function () {
        $('#revenueModal').modal('show');
    });

    // Calculate the Total based on Amount and VAT
    $('#amount, #vat').on('input', function () {
        var amount = parseFloat($('#amount').val()) || 0;
        var vat = parseFloat($('#vat').val()) || 0;
        var total = amount + vat;
        $('#total').val(total.toFixed(2));
    });

    // Clear the file input label when a file is selected
    $('#attachment').on('change', function () {
        var fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').html(fileName);
    });
});
</script>



    <!-- Button to trigger the modal -->
    <button id="openRevenueModal" class="btn btn-primary">New Expense</button>

<!-- Modal -->
<div class="modal fade" id="revenueModal1" tabindex="-1"  aria-labelledby="revenueModalLabel1" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="revenueModalLabel1">New Expense</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        
      </div>
      <div class="modal-body">
        <!-- Form fields -->
        <form action="{{ route('new.revenue') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="date" class="col-md-2 col-form-label">Date:</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>

                <div class="col-md-6">
                    <label for="time" class="col-md-2 col-form-label">Time:</label>
                    <input type="time" class="form-control" id="time" name="time" required>
                </div>
            </div>

            <div class="form-group">
                <label for="attachment">Receipt Upload:</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="attachment" name="attachment">
                    <label class="custom-file-label" for="attachment">Choose file...</label>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="billing" class="col-md-2 col-form-label">Billing:</label>
                    <select class="form-control" id="billing" name="billing">
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="account" class="col-md-2 col-form-label">Account:</label>
                    <select class="form-control" id="account" name="account">
                        <option value="account1">Account 1</option>
                        <option value="account2">Account 2</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-4">
                    <label for="amount" class="col-md-3 col-form-label">Amount:</label>
                    <input type="number" class="form-control" id="amount" name="amount" required>
                </div>

                <div class="col-md-4">
                    <label for="vat" class="col-md-3 col-form-label">VAT:</label>
                    <input type="number" class="form-control" id="vat" name="vat">
                </div>

                <div class="col-md-4">
                    <label for="total" class="col-md-3 col-form-label">Total:</label>
                    <input type="number" class="form-control" id="total" name="total" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="description" class="col-md-3 col-form-label">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter a description"></textarea>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" form="revenueForm" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
</div>   


</div> 

<script>
$(document).ready(function () {
    // Open the modal when the "New Revenue" button is clicked
    $('#openRevenueModal1').click(function () {
        $('#revenueModal1').modal('show');
    });

    // Calculate the Total based on Amount and VAT
    $('#amount, #vat').on('input', function () {
        var amount = parseFloat($('#amount').val()) || 0;
        var vat = parseFloat($('#vat').val()) || 0;
        var total = amount + vat;
        $('#total').val(total.toFixed(2));
    });

    // Clear the file input label when a file is selected
    $('#attachment').on('change', function () {
        var fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').html(fileName);
    });
});
</script>

</div>

<div class="tab-container">
    <ul class="nav nav-tabs" id="myTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="page1-tab" data-bs-toggle="tab" data-bs-target="#page1" type="button" role="tab" aria-controls="page1" aria-selected="true">Periods</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="page2-tab" data-bs-toggle="tab" data-bs-target="#page2" type="button" role="tab" aria-controls="page2" aria-selected="false">Settings</button>
        </li>
    </ul>
        <!-- <hr> -->

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active " id="page1" role="tabpanel" aria-labelledby="page1-tab">
        <!-- <div class="card-px text-center py-20 my-10">             -->
        
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
        
        
                      
        </div>
      </div>
    <!-- </div> -->


        <!-- settings tab -->
    <div class="tab-pane fade" id="page2" role="tabpanel" aria-labelledby="page2-tab">
                  
    <!--begin::Card body-->
    <div class="card-body p-0">
        <!--begin::Table wrapper-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                <!--begin::Thead-->
                <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                <div class="form-group">
                <td><i class="fas fa-id-card"></i> General</td>
        <tr>
            <td><i class="fab fa-arrow"></i>CASH BOOK NAME</td>
            <td><i class="fab fa-arrow"></i>CASH BOOK ID</td>
            <td><i class="fab fa-arrow"></i>CASH BOOK NAME FOR REPORT</td>
        </tr>
         </thead>
                <!--end::Thead-->

                <!--begin::Tbody-->
                <tbody class="fw-6 fw-semibold text-gray-600">
                                            <tr>
                            <td>
                                <a href="#" class="text-hover-primary text-gray-600">New Monthly</a>
                            </td>
                            
                            <td>2022
                                <!-- <span class="badge badge-light-success fs-7 fw-bold">2022</span> -->
                            </td>

                            <td>New Monthly</td>
                        </tr>                     
                     	                  
                </tbody>
                <!--end::Tbody-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table wrapper-->
    </div>
    <!--end::Card body-->
    

    <div class="container" id="page2">
    <div class="row">
        <div class="col-md-3">
            <div class="column">
                <!-- Content for the first column -->
                <h6>Time frame template of cashbook</h6>                
                <p>
                    <i class="fas fa-check-circle" style="color: green;"></i> Monthly
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="column">
                <!-- Content for the second column -->
                <h6>Use VAT</h6>
                <p>
                    <i class="fas fa-check-circle" style="color: green;"></i> Active
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="column">
                <!-- Content for the third column -->
                <h6>Enable action  perform cash count</h6>
                <p>
                    <i class="fas fa-check-circle" style="color: green;"></i> Active
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="column">
                <!-- Content for the third column -->
                <h6>Receipt Generation</h6>
                <p>
                    <i class="fas fa-check-circle" style="color: green;"></i> Active
                </p>
            </div>
        </div>
    </div>
</div>



<div class="row gx-5 gx-xl-10">
    <!--begin::Col-->
    <div class="col-xxl-6 mb-5 mb-xl-10">
        <!--begin::Chart widget 8-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->
    <div class="card-header pt-5">
        <!--begin::Title-->
      
    <!--end::Header-->
    <hr>
    <!--begin::Body-->
    <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9">
                <!--begin::Thead-->
                <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                <div class="form-group">
                <td><i class="fas fa-id-card"></i> Manage Account</td>

                <a href="#" class="btn btn-sm fw-bold btn-primary" id="openModal">+ Add Account</a>

        
        <tr>
            <td><i class="fab fa-arrow"></i>Account</td>
            <td><i class="fab fa-arrow"></i>Account ID</td>
            <!-- <td><i class="fab fa-arrow"></i>CASH BOOK NAME FOR REPORT</td> -->
        </tr>
         </thead>
                <!--end::Thead-->

                <!--begin::Tbody-->
                <tbody class="fw-6 fw-semibold text-gray-600">
                                            <tr>
                            <td>
                                <a href="#" class="text-hover-primary text-gray-600">Bank</a>
                            </td>
                            
                            <td>2022
                                <!-- <span class="badge badge-light-success fs-7 fw-bold">2022</span> -->
                            </td>

                            <td>
                          
                        
                        <div class="form-check form-switch form-check-custom form-check-solid me-10">
                        <div class="row align-items-center" style="margin-left: 280px;">
        <div class="col-auto">
            <a href="{{ route('view.revenue') }}">+Add Billing Reason</a>
        </div>
        <!-- <div class="col-auto" >
            <input class="form-check-input h-20px w-40px" name="org_write" type="checkbox" value="" id="org_write" checked />
        </div> -->
    </div>
</div>
</div>
</td>
</tr>   


                <!--begin::Tbody-->
                <tbody class="fw-6 fw-semibold text-gray-900">
                                            <tr>
                            <td>
                                <a href="#" class="text-hover-primary text-gray-600">Expense</a>
                            </td>
                            
                            <td>2022
                                <!-- <span class="badge badge-light-success fs-7 fw-bold">2022</span> -->
                            </td>

                            <td>
                          
                        
                            <div class="form-check form-switch form-check-custom form-check-solid me-0">
    <div class="row align-items-center" style="margin-left: 280px;">
        <div class="col-auto">
            <a href="{{ route('view.revenue') }}">Edit Billing Reason</a>
        </div>
        <div class="col-auto" >
            <input class="form-check-input h-20px w-40px" name="org_write" type="checkbox" value="" id="org_write" checked />
        </div>
    </div>
</div>

</td>

<tbody class="fw-6 fw-semibold text-gray-900">
                                            <tr>
                            <td>
                                <a href="#" class="text-hover-primary text-gray-600">Bank Payout</a>
                            </td>
                            
                            <td>2022
                                <!-- <span class="badge badge-light-success fs-7 fw-bold">2022</span> -->
                            </td>

                            <td>
                          
                        
                        <div class="form-check form-switch form-check-custom form-check-solid me-10">
                        <div class="row align-items-center" style="margin-left: 280px;">
        <div class="col-auto">
            <a href="{{ route('view.revenue') }}">Edit Billing Reason</a>
        </div>
        <div class="col-auto" >
            <input class="form-check-input h-20px w-40px" name="org_write" type="checkbox" value="" id="org_write" checked />
        </div>
    </div>
</div>
</div>
</td>
</tr>   



                </tbody>
                <tbody class="fw-6 fw-semibold text-gray-600">
                                            <tr>
                            <td>
                                <a href="#" class="text-hover-primary text-gray-600">Expense</a>
                            </td>
                            
                            <td>2022
                                <!-- <span class="badge badge-light-success fs-7 fw-bold">2022</span> -->
                            </td>

                            <td>
                          
                        
                        <div class="form-check form-switch form-check-custom form-check-solid me-10">
                        <div class="row align-items-center" style="margin-left: 280px;">
        <div class="col-auto">
            <a href="{{ route('view.revenue') }}">+Add Billing Reason</a>
        </div>
        <!-- <div class="col-auto" >
            <input class="form-check-input h-20px w-40px" name="org_write" type="checkbox" value="" id="org_write" checked />
        </div> -->
    </div>
</div>
</div>
</td>
</tr>   


                <!--begin::Tbody-->
                <tbody class="fw-6 fw-semibold text-gray-900">
                                            <tr>
                            <td>
                                <a href="#" class="text-hover-primary text-gray-600">Expense Deposit</a>
                            </td>
                            
                            <td>2022
                                <!-- <span class="badge badge-light-success fs-7 fw-bold">2022</span> -->
                            </td>

                            <td>
                          
                        
                            <div class="form-check form-switch form-check-custom form-check-solid me-0">
    <div class="row align-items-center" style="margin-left: 280px;">
        <div class="col-auto">
            <a href="{{ route('view.revenue') }}">Edit Billing Reason</a>
        </div>
        <div class="col-auto" >
            <input class="form-check-input h-20px w-40px" name="org_write" type="checkbox" value="" id="org_write" checked />
        </div>
    </div>
</div>

</td>

<tbody class="fw-6 fw-semibold text-gray-900">
                                            <tr>
                            <td>
                                <a href="#" class="text-hover-primary text-gray-600">Expense Payout</a>
                            </td>
                            
                            <td>2022
                                <!-- <span class="badge badge-light-success fs-7 fw-bold">2022</span> -->
                            </td>

                            <td>
                          
                        
                        <div class="form-check form-switch form-check-custom form-check-solid me-10">
                        <div class="row align-items-center" style="margin-left: 280px;">
        <div class="col-auto">
            <a href="{{ route('view.revenue') }}">Edit Billing Reason</a>
        </div>
        <div class="col-auto" >
            <input class="form-check-input h-20px w-40px" name="org_write" type="checkbox" value="" id="org_write" checked />
        </div>
    </div>
</div>
</div>
</td>
</tr>   



                </tbody>
                <!--end::Tbody-->
            </table>


    
</div>

<!--end::Login sessions-->
        </div>
    </div>
</div>



<div class="modal fade" id="accountModal" tabindex="-1" aria-labelledby="accountModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="accountModalLabel">Add Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form fields -->
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="accountId" class="form-label">Account ID</label>
                        <input type="text" class="form-control" id="accountId" name="accountId" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="saveAccount">Save</button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="cashbookModal" tabindex="-1" aria-labelledby="cashbookModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
<!-- Modal -->
                <h5 class="modal-title" id="newCashbookModalLabel">New Cashbook</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form >
                    <!-- @csrf -->

                    <div class="form-group row">
                        <div class="col-md-5">
                            <label for="cashbook" class="col-form-label">Cashbook Name:</label>
                            <input type="text" class="form-control" id="cashbook" name="cashbook" required>
                        </div>

                        <div class="col-md-5">
                            <label for="year" class="col-md-1 col-form-label">Year:</label>
                            <select class="form-select" id="year" name="year" required>
                                <option value="" disabled selected>Select a year</option>
                                <?php
                                $currentYear = date("Y");
                                for ($year = $currentYear - 10; $year <= $currentYear + 10; $year++) {
                                    echo "<option value=\"$year\">$year</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-5">
                            <label for="cashbook_report" class="col-form-label">Cashbook Name for Report:</label>
                            <input type="text" class="form-control" id="cashbook_report" name="cashbook_report" required>
                        </div>

                        <div class="col-md-5">
                            <label for="amount" class="col-form-label">Initial Balance:</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" id="amount" name="amount" required>
                            </div>
                        </div>
                    </div>

                    <br>

                    <h5 style="text-align: center; font-family: 'YourFont', sans-serif;">EXTENSIONS</h5>

                    <div class="form-group">
                        <label for="timeframe" class="col-form-label">Timeframe template of cashbook:</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="custom" name="timeframe" value="custom">
                            <label class="form-check-label" for="custom">Custom</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="monthly" name="timeframe" value="monthly">
                            <label class="form-check-label" for="monthly">Monthly</label>
                        </div>
                    </div>

                    <div class="form-check form-switch form-check-custom form-check-solid me-10">
                        <div class="row align-items-center">
                            <div class="col">
                                <label class="form-check-label" for="org_write" style="font-size: 16px; color: black; font-weight: bold;">Create Default Account</label>
                            </div>
                            <div class="col-auto" style="margin-left: 280px;">
                                <input class="form-check-input h-30px w-50px" name="org_write" type="checkbox" value="" id="org_write" checked />
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





<script>
    $(document).ready(function () {
    // Open the modal when the "Add Account" button is clicked
    $('#openModal').click(function () {
        $('#accountModal').modal('show');
    });

    // Close the modal when the "Cancel" button is clicked
    $('#accountModal').on('hidden.bs.modal', function () {
        // Clear the form fields
        $('#name').val('');
        $('#accountId').val('');
    });
});

</script>

<script>


$(document).ready(function () {
        // Open the modal when the "New Cashbook" button is clicked
        $('#openCashbookModal').click(function () {
            $('#cashbookModal').modal('show');
        });

        // Close the modal when the "Cancel" button is clicked
        $('#cashbookModal').on('hidden.bs.modal', function () {
            // Clear the form fields
            $('#cashbookName').val('');
            $('#year').val('');
            $('#cashbookNameReport').val('');
            $('#initialBalance').val('');
            $('input[name="timeframe"]').prop('checked', false);
            $('#org_write').prop('checked', false);
        });
    });

    </script>




</body>
</html>
</x-layouts.app>
