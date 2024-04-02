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

       /* Custom CSS to change checkbox color */
       .form-check-input:checked {
        background-color: #001A37 !important;
        border-color: #001A37 !important;
    }

    .form-check-input:checked + .form-check-label {
        color: #001A37 !important;
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
                    <a class="nav-link  text-active-primary ms-0 me-10 py-5 " href="/settings/legal">
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
                    <a class="nav-link active text-active-primary ms-0 me-10 py-5 " href="/settings/facilities">
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
		
	</div>
	<!--end::Heading-->  
	
	<!--begin::Options-->
					<!--begin::Col-->
                    <div class="fv-row mb-10">
    <div class="d-flex align-items-center" style="width: 100%;">
        <!-- Facilities Search Input -->
        <div style="flex: 1;">
            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                <span >Facilities</span>
            </label>
            <input type="search" class="form-control" name="facility_search" placeholder="Search for facilities" value="" style="width: 100%;" />
        </div>
    </div>
</div>

<h6> Sports and Activities</h6>
<br>

<div class="row mb-4">
    <!-- First Column - Checkbox 1 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox1" id="checkbox1">
            <label class="form-check-label" for="checkbox1" style="color: #001A37;">
                Fitness Center
            </label>
        </div>
    </div>

    <!-- Second Column - Checkbox 2 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox2" id="checkbox2">
            <label class="form-check-label" for="checkbox2" style="color: #001A37;">
                Swimming Pool
            </label>
        </div>
    </div>

    <!-- Third Column - Checkbox 3 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox3" id="checkbox3">
            <label class="form-check-label" for="checkbox3" style="color: #001A37;">
            Table Tennis
            </label>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox4" id="checkbox4">
            <label class="form-check-label" for="checkbox4" style="color: #001A37;">
                Hourse Racing
            </label>
        </div>
    </div>
</div>


<div class="row mb-4">
    <!-- First Column - Checkbox 1 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox5" id="checkbox5">
            <label class="form-check-label" for="checkbox5" style="color: #001A37;">
                Hicking 
            </label>
        </div>
    </div>

    <!-- Second Column - Checkbox 2 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox6" id="checkbox6">
            <label class="form-check-label" for="checkbox6" style="color: #001A37;">
                Indoor Pool
            </label>
        </div>
    </div>

    <!-- Third Column - Checkbox 3 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox7" id="checkbox7">
            <label class="form-check-label" for="checkbox7" style="color: #001A37;">
               Long Tennis
            </label>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox8" id="checkbox8">
            <label class="form-check-label" for="checkbox8" style="color: #001A37;">
                Fishing
            </label>
        </div>
    </div>
</div>


<div class="row mb-4">
    <!-- First Column - Checkbox 1 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox9" id="checkbox9">
            <label class="form-check-label" for="checkbox9" style="color: #001A37;">
                Dart
            </label>
        </div>
    </div>

    <!-- Second Column - Checkbox 2 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox10" id="checkbox10">
            <label class="form-check-label" for="checkbox10" style="color: #001A37;">
                Snookers
            </label>
        </div>
    </div>

    <!-- Third Column - Checkbox 3 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox11" id="checkbox11">
            <label class="form-check-label" for="checkbox11" style="color: #001A37;">
                Cycling
            </label>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox12" id="checkbox12">
            <label class="form-check-label" for="checkbox12" style="color: #001A37;">
                Diving
            </label>
        </div>
    </div>
</div>



<div class="row mb-4">
    <!-- First Column - Checkbox 1 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox13" id="checkbox13">
            <label class="form-check-label" for="checkbox13" style="color: #001A37;">
                Karooke
            </label>
        </div>
    </div>

    <!-- Second Column - Checkbox 2 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox14" id="checkbox14">
            <label class="form-check-label" for="checkbox14" style="color: #001A37;">
                Squash
            </label>
        </div>
    </div>

    <!-- Third Column - Checkbox 3 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox15" id="checkbox15">
            <label class="form-check-label" for="checkbox15" style="color: #001A37;">
                Outdoor Pool
            </label>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox16" id="checkbox16">
            <label class="form-check-label" for="checkbox16" style="color: #001A37;">
                Soccer
            </label>
        </div>
    </div>
</div>


<div class="row mb-4">
    <!-- First Column - Checkbox 1 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox17" id="checkbox17">
            <label class="form-check-label" for="checkbox17" style="color: #001A37;">
                Clubs
            </label>
        </div>
    </div>

    <!-- Second Column - Checkbox 2 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox18" id="checkbox18">
            <label class="form-check-label" for="checkbox18" style="color: #001A37;">
                Tracks
            </label>
        </div>
    </div>

    <!-- Third Column - Checkbox 3 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox19" id="checkbox19">
            <label class="form-check-label" for="checkbox19" style="color: #001A37;">
                Football
            </label>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox20" id="checkbox20">
            <label class="form-check-label" for="checkbox20" style="color: #001A37;">
                Casino
            </label>
        </div>
    </div>
</div>
<div class="row mb-4">
    <!-- First Column - Checkbox 1 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox21" id="checkbox21">
            <label class="form-check-label" for="checkbox21" style="color: #001A37;">
            Game House 
            </label>
        </div>
    </div>

    <!-- Second Column - Checkbox 2 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox22" id="checkbox22">
            <label class="form-check-label" for="checkbox22" style="color: #001A37;">
                Nightclub DJ
            </label>
        </div>
    </div>

    <!-- Third Column - Checkbox 3 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox23" id="checkbox23">
            <label class="form-check-label" for="checkbox23" style="color: #001A37;">
                Library
            </label>
        </div>
    </div>

</div>
<br>
<div class="separator separator-dashed my-6"></div>
<h6> Services</h6>
<br>

<div class="row mb-4">
    <!-- First Column - Checkbox 1 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox24" id="checkbox24">
            <label class="form-check-label" for="checkbox24" style="color: #001A37;">
                24hrs front desk
            </label>
        </div>
    </div>

    <!-- Second Column - Checkbox 2 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox25" id="checkbox25">
            <label class="form-check-label" for="checkbox25" style="color: #001A37;">
                Curremcy Exchange
            </label>
        </div>
    </div>

    <!-- Third Column - Checkbox 3 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox26" id="checkbox26">
            <label class="form-check-label" for="checkbox26" style="color: #001A37;">
            Dry Cleaning 
            </label>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox27" id="checkbox27">
            <label class="form-check-label" for="checkbox27" style="color: #001A37;">
                Comcierge
            </label>
        </div>
    </div>
</div>


<div class="row mb-4">
    <!-- First Column - Checkbox 1 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox28" id="checkbox28">
            <label class="form-check-label" for="checkbox28" style="color: #001A37;">
                Laundry
            </label>
        </div>
    </div>

    <!-- Second Column - Checkbox 2 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox29" id="checkbox29">
            <label class="form-check-label" for="checkbox29" style="color: #001A37;">
                Restaurant
            </label>
        </div>
    </div>

    <!-- Third Column - Checkbox 3 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox30" id="checkbox30">
            <label class="form-check-label" for="checkbox30" style="color: #001A37;">
               Room Service
            </label>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox31" id="checkbox31">
            <label class="form-check-label" for="checkbox31" style="color: #001A37;">
                Locker
            </label>
        </div>
    </div>
</div>


<div class="row mb-4">
    <!-- First Column - Checkbox 1 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox32" id="checkbox32">
            <label class="form-check-label" for="checkbox32" style="color: #001A37;">
                Newspaper
            </label>
        </div>
    </div>

    <!-- Second Column - Checkbox 2 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox33" id="checkbox33">
            <label class="form-check-label" for="checkbox33" style="color: #001A37;">
                Shoeshine
            </label>
        </div>
    </div>

    <!-- Third Column - Checkbox 3 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox34" id="checkbox34">
            <label class="form-check-label" for="checkbox34" style="color: #001A37;">
                Saloon
            </label>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox35" id="checkbox35">
            <label class="form-check-label" for="checkbox35" style="color: #001A37;">
                Massage
            </label>
        </div>
    </div>
</div>



<div class="row mb-4">
    <!-- First Column - Checkbox 1 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox36" id="checkbox36">
            <label class="form-check-label" for="checkbox36" style="color: #001A37;">
                suana
            </label>
        </div>
    </div>

    <!-- Second Column - Checkbox 2 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox37" id="checkbox14">
            <label class="form-check-label" for="checkbox37" style="color: #001A37;">
                Hot spring bath
            </label>
        </div>
    </div>


<br>
<div class="separator separator-dashed my-6"></div>
<h6> Parking and transportation</h6>
<br>

<div class="row mb-4">
    <!-- First Column - Checkbox 1 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox38" id="checkbox38">
            <label class="form-check-label" for="checkbox38" style="color: #001A37;">
                Airport shuttle
            </label>
        </div>
    </div>

    <!-- Second Column - Checkbox 2 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox25" id="checkbox25">
            <label class="form-check-label" for="checkbox25" style="color: #001A37;">
                Car Hire
            </label>
        </div>
    </div>

    <!-- Third Column - Checkbox 3 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox26" id="checkbox26">
            <label class="form-check-label" for="checkbox26" style="color: #001A37;">
            Onsite parking
            </label>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox27" id="checkbox27">
            <label class="form-check-label" for="checkbox27" style="color: #001A37;">
                Shuttle service (free)
            </label>
        </div>
    </div>
</div>


<div class="row mb-4">
    <!-- First Column - Checkbox 1 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox28" id="checkbox28">
            <label class="form-check-label" for="checkbox28" style="color: #001A37;">
                Airport shuttle (free)
            </label>
        </div>
    </div>

    <!-- Second Column - Checkbox 2 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox29" id="checkbox29">
            <label class="form-check-label" for="checkbox29" style="color: #001A37;">
                Free Parking
            </label>
        </div>
    </div>

    <!-- Third Column - Checkbox 3 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox30" id="checkbox30">
            <label class="form-check-label" for="checkbox30" style="color: #001A37;">
               Parking 
            </label>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox31" id="checkbox31">
            <label class="form-check-label" for="checkbox31" style="color: #001A37;">
                Lockers
            </label>
        </div>
    </div>
</div>



<br>
<div class="separator separator-dashed my-6"></div>

<h6> Internet</h6>
<br>

<div class="row mb-4">
    <!-- First Column - Checkbox 1 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox38" id="checkbox38">
            <label class="form-check-label" for="checkbox38" style="color: #001A37;">
               Free Wifi
            </label>
        </div>
    </div>

    <!-- Second Column - Checkbox 2 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox25" id="checkbox25">
            <label class="form-check-label" for="checkbox25" style="color: #001A37;">
                Internet service
            </label>
        </div>
    </div>

    <!-- Third Column - Checkbox 3 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox26" id="checkbox26">
            <label class="form-check-label" for="checkbox26" style="color: #001A37;">
            Wifi
            </label>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox27" id="checkbox27">
            <label class="form-check-label" for="checkbox27" style="color: #001A37;">
              Vending machine
            </label>
        </div>
    </div>
</div>


<div class="row mb-4">
    <!-- First Column - Checkbox 1 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox28" id="checkbox28">
            <label class="form-check-label" for="checkbox28" style="color: #001A37;">
               Grocery Deliery
            </label>
        </div>
    </div>

    <!-- Second Column - Checkbox 2 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox29" id="checkbox29">
            <label class="form-check-label" for="checkbox29" style="color: #001A37;">
                Restaurant
            </label>
        </div>
    </div>

    <!-- Third Column - Checkbox 3 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox30" id="checkbox30">
            <label class="form-check-label" for="checkbox30" style="color: #001A37;">
               Snack bar
            </label>
        </div>
    </div>




<br>
<div class="separator separator-dashed my-6"></div>

<h6> Food and drinks</h6>
<br>

<div class="row mb-4">
    <!-- First Column - Checkbox 1 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox38" id="checkbox38">
            <label class="form-check-label" for="checkbox38" style="color: #001A37;">
                Bar
            </label>
        </div>
    </div>

    <!-- Second Column - Checkbox 2 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox25" id="checkbox25">
            <label class="form-check-label" for="checkbox25" style="color: #001A37;">
                BBQ Facilities
            </label>
        </div>
    </div>

    <!-- Third Column - Checkbox 3 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox26" id="checkbox26">
            <label class="form-check-label" for="checkbox26" style="color: #001A37;">
            Restuarant
            </label>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox27" id="checkbox27">
            <label class="form-check-label" for="checkbox27" style="color: #001A37;">
              Vending machine
            </label>
        </div>
    </div>
</div>


<div class="row mb-4">
    <!-- First Column - Checkbox 1 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox28" id="checkbox28">
            <label class="form-check-label" for="checkbox28" style="color: #001A37;">
               Grocery Deliery
            </label>
        </div>
    </div>

    <!-- Second Column - Checkbox 2 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox29" id="checkbox29">
            <label class="form-check-label" for="checkbox29" style="color: #001A37;">
                Restaurant
            </label>
        </div>
    </div>

    <!-- Third Column - Checkbox 3 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox30" id="checkbox30">
            <label class="form-check-label" for="checkbox30" style="color: #001A37;">
               Snack bar
            </label>
        </div>
    </div>

    <br>
<div class="separator separator-dashed my-6"></div>

<h6> In the room</h6>
<br>

<div class="row mb-4">
    <!-- First Column - Checkbox 1 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox38" id="checkbox38">
            <label class="form-check-label" for="checkbox38" style="color: #001A37;">
                Air conditioning
            </label>
        </div>
    </div>

    <!-- Second Column - Checkbox 2 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox25" id="checkbox25">
            <label class="form-check-label" for="checkbox25" style="color: #001A37;">
                Safety deposit box
            </label>
        </div>
    </div>

    <!-- Third Column - Checkbox 3 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox26" id="checkbox26">
            <label class="form-check-label" for="checkbox26" style="color: #001A37;">
            Snack bar 
            </label>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox27" id="checkbox27">
            <label class="form-check-label" for="checkbox27" style="color: #001A37;">
              Hot tub
            </label>
        </div>
    </div>
</div>


<div class="row mb-4">
    <!-- First Column - Checkbox 1 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox28" id="checkbox28">
            <label class="form-check-label" for="checkbox28" style="color: #001A37;">
               Vip Room
            </label>
        </div>
    </div>

    <!-- Second Column - Checkbox 2 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox29" id="checkbox29">
            <label class="form-check-label" for="checkbox29" style="color: #001A37;">
               Shared Kitchen 
            </label>
        </div>
    </div>

    <!-- Third Column - Checkbox 3 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox30" id="checkbox30">
            <label class="form-check-label" for="checkbox30" style="color: #001A37;">
            Heating
            </label>
        </div>
    </div>

    
<div class="separator separator-dashed my-6"></div>

<h6>Room Type</h6>
<br>

<div class="row mb-4">
    <!-- First Column - Checkbox 1 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox38" id="checkbox38">
            <label class="form-check-label" for="checkbox38" style="color: #001A37;">
                Non smoking room
            </label>
        </div>
    </div>

    <!-- Second Column - Checkbox 2 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox25" id="checkbox25">
            <label class="form-check-label" for="checkbox25" style="color: #001A37;">
                Allergy free room
            </label>
        </div>
    </div>

    <!-- Third Column - Checkbox 3 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox26" id="checkbox26">
            <label class="form-check-label" for="checkbox26" style="color: #001A37;">
            Family rooms
            </label>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox27" id="checkbox27">
            <label class="form-check-label" for="checkbox27" style="color: #001A37;">
              Bridal suite
            </label>
        </div>
    </div>
</div>


<div class="row mb-4">
    <!-- First Column - Checkbox 1 -->
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox28" id="checkbox28">
            <label class="form-check-label" for="checkbox28" style="color: #001A37;">
               Sound proof
            </label>
        </div>
    </div>

    <!-- Second Column - Checkbox 2 -->
  


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
