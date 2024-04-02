<x-layouts.app title="Settings">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="row g-5 g-xl-3">
</div>
    <!--end::Content container-->
    <x-slot:buttons>
        <button class="btn btn-primary me-3 btn-sm" data-bs-toggle="modal" data-bs-target="#createUser">
            Preview
        </button>
    </x-slot:buttons>
            


    <!DOCTYPE html>

<html lang="en" >
    <!--begin::Head-->
    
<!-- Mirrored from preview.keenthemes.com/metronic8/demo1/layout-builder.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jun 2023 00:37:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>


        <title>Metronic - The World's #1 Selling Bootstrap Admin Template by Keenthemes</title>
        <meta charset="utf-8"/>
        <meta name="description" content="
            The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, 
            Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. 
            Grab your copy now and get life-time updates for free.
        "/>
        <meta name="keywords" content="
            metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, 
            Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, 
            free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, 
            bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon
        "/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>      
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="
            Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, 
            Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template
        " />
        <meta property="og:url" content="https://keenthemes.com/metronic"/>
        <meta property="og:site_name" content="Keenthemes | Metronic" />
        <link rel="canonical" href="https://preview.keenthemes.com/metronic8"/>
        <link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>

        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>        <!--end::Fonts-->

                    <!--begin::Vendor Stylesheets(used for this page only)-->
                            <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
                        <!--end::Vendor Stylesheets-->
        
        
                    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
                            <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
                            <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
                        <!--end::Global Stylesheets Bundle-->
        
                    <!--Begin::Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5FS8GGP');</script>
<!--End::Google Tag Manager -->
        
        
<style>
    /* CSS for star rating */
    .star-rating {
        display: inline-block;
    }

    .star-rating input[type="radio"] {
        display: none;
    }

    .star-rating label {
        font-size: 30px;
        cursor: pointer;
    }

    .star-rating label:before {
        content: '\2605'; /* Unicode star character */
    }

    .star-rating input[type="radio"]:checked ~ label:before {
        color: gold; /* Color of the selected stars */
        order: -1; /* Reverse the order to start from the left */
   
    }

    .custom-dropdown-input {
            width: 300px;
            padding: 8px 30px 8px 8px; /* Add right padding for the indicator */
            border: 1px solid #ccc;
            background-image: url('dropdown-arrow.png'); /* Add your dropdown arrow image URL */
            background-repeat: no-repeat;
            background-position: right center; /* Position the arrow on the right */
            background-size: 20px; /* Adjust the size of the arrow */
        }

         /* Style for the unchecked (red) state */
    .form-check-input:not(:checked) + label::before {
        border: 2px solid red;
        background-color: red;
    }

    /* Style for the checked (green) state (optional) */
    .form-check-input:checked + label::before {
        border: 2px solid green;
        background-color: green;
    }
</style>

<script>
    // JavaScript for star rating
    function rateStar(starValue) {
        // Set the value of the hidden input field
        document.getElementById('star-rating-input').value = starValue;
    }
</script>

<!--begin::Page title-->        



    <!--begin::Form-->
    
    <!--begin::Secondary button-->
        <!--end::Secondary button-->
    


<!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
<!--end::Toolbar-->                                        
                    
<!--begin::Content-->
<div id="kt_app_content" class="app-content  flex-column-fluid " >
    
           
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container  container-xxl ">
            <!--begin::Layout Builder Notice-->

<!--end::Layout Builder Notice-->


<!--begin::Card-->
<div class="card">
	<!--begin::Header-->
	<div class="card-header card-header-stretch overflow-auto">
		<!--begin::Tabs-->
		<ul class="nav nav-stretch nav-line-tabs fw-semibold fs-6 border-transparent flex-nowrap" role="tablist" id="kt_layout_builder_tabs">
										
				
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/settings">
                        Hotel Info                    </a>
                </li>
			
                
                <li class="nav-item mt-2">
                    <a class="nav-link active text-active-primary ms-0 me-10 py-5 " href="/settings/legal">
                        Legal Info                    </a>
                </li>

							
				
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/settings/language">
                        Languages                    </a>
                </li>
							
				
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/settings/meals">
                        Meals                   </a>
                </li>
							
			
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/settings/child">
                       Children                   </a>
                </li>
							
				
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/settings/facilities">
                        Facilities                  </a>
                </li>

                				
				
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/settings/contract">
                        Contracts                   </a>
                </li>
		
					</ul>
		<!--end::Tabs-->
	</div>
	<!--end::Header-->

	<!--begin::Form-->
	<form class="form" method="POST" id="kt_layout_builder_form" action="https://preview.keenthemes.com/metronic8/demo1/index.php">
		<!--begin::Body-->
		<div class="card-body">
			<div class="tab-content pt-3">
            <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="row g-5 g-xl-3">
            <!-- Content for Hotel Info Tab -->
            <div id="hotel_info_tab" class="tab-content">
													
					<!--begin::Tab pane-->
					<div class="tab-pane active" id="kt_layout_builder_main"> 
						
<!--begin::Form group-->
<div class="form-group">
	<!--begin::Heading-->
	<div class="mb-6">
		<h9 class="text-dark">General Info</h9>
		
	</div>
	<!--end::Heading-->  
	
	<!--begin::Options-->
					<!--begin::Col-->
			
            
                    <div class="fv-row mb-10">
        <div class="d-flex align-items-center" style="width: 100%;">
            <!-- Room VAT Input -->
            <div style="flex: 1;">
                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                    <span class="required">Company Name</span>                    
                </label>
                <input type="text" class="form-control " name="room_vat" placeholder="Name" value="" style="width: 100%;" />
            </div>

            <!-- Deal VAT Input -->
            <div style="flex: 1; margin-left: 20px;">
                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                    <span class="required">Company Registration Number</span>
                </label>
                <input type="text" class="form-control" name="deal_vat" placeholder="Reg No" value="" style="width: 100%;" />
            </div>
        </div>
    </div>
 	  

	<!--end::Options-->            
</div>
   <!-- Room VAT and Deal VAT Row -->
   <div class="fv-row mb-10">
        <div class="d-flex align-items-center" style="width: 100%;">
            <!-- Room VAT Input -->
            <div style="flex: 1;">
                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                    <span class="required">Director</span>
                </label>
                <input type="text" class="form-control " name="room_vat" placeholder="Director" value="" style="width: 100%;" />
            </div>

            <!-- Deal VAT Input -->
            <div style="flex: 1; margin-left: 20px;">
                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                    <span class="required">Bank Account</span>
                </label>
                <input type="text" class="form-control" name="deal_vat" placeholder="Bank Account" value="" style="width: 100%;" />
            </div>
        </div>
    </div>

    <div class="fv-row mb-10">
        <div class="d-flex align-items-center" style="width: 100%;">
            <!-- Room VAT Input -->
            <div style="flex: 1;">
                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                    <span class="required">Phone Number</span>
                </label>
                <input type="number" class="form-control " name="room_vat" placeholder="Phone NO" value="" style="width: 100%;" />
            </div>

            <!-- Deal VAT Input -->
            <div style="flex: 1; margin-left: 20px;">
                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                    <span class="required">IDAN</span>
                </label>
                <input type="text" class="form-control" name="deal_vat" placeholder="Dc" value="" style="width: 100%;" />
            </div>
        </div>
    </div>

    <div class="fv-row mb-10">
        <div class="d-flex align-items-center" style="width: 100%;">
            <!-- Room VAT Input -->
            <div style="flex: 1;">
                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                    <span class="required">Email</span>
                </label>
                <input type="text" class="form-control " name="room_vat" placeholder="Email" value="" style="width: 100%;" />
            </div>

            <!-- Deal VAT Input -->
            <div style="flex: 1; margin-left: 20px;">
                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                    <span class="required">Bic</span>
                </label>
                <input type="text" class="form-control" name="deal_vat" placeholder="Bic" value="" style="width: 100%;" />
            </div>
        </div>
    </div>

    <div class="fv-row mb-10">
        <div class="d-flex align-items-center" style="width: 100%;">
            <!-- Room VAT Input -->
            <div style="flex: 1;">
                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                    <span class="required">Tax-ID</span>
                </label>
                <input type="text" class="form-control " name="room_vat" placeholder="Tax-ID" value="" style="width: 100%;" />
            </div>

            <!-- Deal VAT Input -->
            <div style="flex: 1; margin-left: 20px;">
                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                    <span class="required">Account Name</span>
                </label>
                <input type="text" class="form-control" name="deal_vat" placeholder="Account Name" value="" style="width: 100%;" />
            </div>
        </div>
    </div>

    <div class="fv-row mb-10">
        <div class="d-flex align-items-center" style="width: 100%;">
            <!-- Room VAT Input -->
            <div style="flex: 1;">
                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                    <span class="required">Country</span>
                </label>
                <input type="text" class="form-control " name="room_vat" placeholder="Country" value="" style="width: 100%;" />
            </div>

            <!-- Deal VAT Input -->
            <div style="flex: 1; margin-left: 20px;">
                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                    <span class="required">Bank Name</span>
                </label>
                <input type="text" class="form-control" name="deal_vat" placeholder="Bank Name" value="" style="width: 100%;" />
            </div>
        </div>
    </div>

    <div class="fv-row mb-10">
        <div class="d-flex align-items-center" style="width: 100%;">
            <!-- Room VAT Input -->
            <div style="flex: 1;">
                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                    <span class="required">City</span>
                </label>
                <input type="text" class="form-control " name="room_vat" placeholder="City" value="" style="width: 100%;" />
            </div>

            <!-- Deal VAT Input -->
            <div style="flex: 1; margin-left: 20px;">
                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                    <span class="required">Branch Name</span>
                </label>
                <input type="text" class="form-control" name="deal_vat" placeholder="Branch Name" value="" style="width: 100%;" />
            </div>
        </div>
    </div>

    <div class="fv-row mb-10">
        <div class="d-flex align-items-center" style="width: 100%;">
            <!-- Room VAT Input -->
            <div style="flex: 1;">
                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                    <span class="required">Address</span>
                </label>
                <input type="text" class="form-control " name="room_vat" placeholder="Address" value="" style="width: 100%;" />
            </div>

            <!-- Deal VAT Input -->
            <div style="flex: 1; margin-left: 20px;">
                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                    <span class="required">Branch Number</span>
                </label>
                <input type="text" class="form-control" name="deal_vat" placeholder="Branch Number" value="" style="width: 100%;" />
            </div>
        </div>
    </div>

    <div class="fv-row mb-10">
        <div class="d-flex align-items-center" style="width: 100%;">
            <!-- Room VAT Input -->
            <div style="flex: 1;">
                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                    <span class="required">Zip Code</span>
                </label>
                <input type="text" class="form-control " name="room_vat" placeholder="Zip Code" value="" style="width: 100%;" />
            </div>

            <!-- Deal VAT Input -->
            <div style="flex: 1; margin-left: 20px;">
                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                    <span class="required">Account Number</span>
                </label>
                <input type="text" class="form-control" name="deal_vat" placeholder="Account Number" value="" style="width: 100%;" />
            </div>
        </div>
    </div>


    <div class="fv-row mb-10">
        <div class="d-flex align-items-center" style="width: 100%;">
            <!-- Room VAT Input -->
            <div style="flex: 1;">
            <div class="form-check form-check-custom form-check-solid form-check-success form-switch">
    <input type="hidden" value="false" name="layout-builder[layout][app][sidebar][default][minimize][desktop][enabled]" />
    <input class="form-check-input w-45px h-30px" type="checkbox" value="true" name="layout-builder[layout][app][sidebar][default][minimize][desktop][enabled]" id="kt_builder_sidebar_minimize_desktop_enabled" />
    
    <!--begin::Label-->
    <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_sidebar_minimize_desktop_enabled" data-bs-toggle="tooltip" title="Enable Sidebar minimize toggle">
    HRD </label>
    <!--end::Label-->
</div>
           
                 </div>

            <!-- Deal VAT Input -->
            <div style="flex: 1; margin-left: 20px;">
                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                    <span class="required">VAT Number</span>
                </label>
                <input type="text" class="form-control" name="deal_vat" placeholder="VAT Number" value="" style="width: 100%;" />
            </div>
        </div>
    </div>
    
            <!-- Submit button -->
        
        </form>
    </div>

 

    </div>
        	<!--end::Tab pane-->
            </div>
    	
		<!--end::Body-->
   
    </div>
        
</div>



        
            </body>
    <!--end::Body-->

    

<!-- Mirrored from preview.keenthemes.com/metronic8/demo1/layout-builder.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jun 2023 00:37:50 GMT -->
</html>

<div class="modal-footer justify-content-center">
   <button type="button" class="btn btn-secondary me-2 btn-transparent-border " style="border: 1px solid #ccc;  background: transparent;  color: blue;" data-bs-dismiss="modal">Cancel</button>
    <button type="button" class="btn btn-primary">Save</button>
</div>



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
