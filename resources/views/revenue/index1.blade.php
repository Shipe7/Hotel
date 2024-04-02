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

.column {
        background-color: white;
        /* border: 1px solid #ddd; */
        padding: 10px;        
        margin-top: 35px;
        margin-right: -10px;
    
    }
    .no-gap-columns .col-md-3 {
        margin: 15px; /* Apply negative margin */
    }

/* Style for the tab container */
.tab-container {
    background-color: #ffffff; /* Change the background color as needed */
    padding: 1rem;
    border-color: #000000;
}

.nav-tabs .nav-item.show .nav-link.active {
    color: #000000; /* Change to your desired text color */
}


.nav-tabs .nav-link {
    color: #000000; /* Change to your desired text color for inactive tabs */
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <div class="d-flex align-items-right justify-content-end gap-2 gap-lg-3">      
   
            <a href="{{ route('new.revenue') }}" class="btn btn-sm fw-bold btn-primary" >
            New Revenue </a>
       
            <a href="" class="btn btn-sm fw-bold btn-primary" >
            New Expense </a>
       
    </div>    
   
<!-- Horizontal line -->
<!-- <hr class="my-4"> -->

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
        <div class="card-px text-center py-20 my-10">
            <!--begin::Title-->
            <h2 class="fs-2x fw-bold mb-10">Welcome to Customers App</h2>
            <!--end::Title-->

            <!--begin::Action-->
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer">Add Customer</a>
            <!--end::Action-->
        </div>
      </div>



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
                <td><i class="fas fa-id-car"></i> General</td>
        <span class="glyphicon glyphicon-pencil" ></span>
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

                        <!-- here -->
                        
                        <!-- end  -->                          
                     	                  
                </tbody>
                <!--end::Tbody-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table wrapper-->
    </div>
    <!--end::Card body-->

    
</div>
<!--end::Login sessions-->
        </div>
    </div>
</div>



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




<!--end::Card-->    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-md-6 col-xl-4">
        
<!--begin::Card-->

<!--end::Card-->    </div>
    <!--end::Col-->


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
