<x-layouts.app title="Deals">



    <!--end::Content container-->
    <x-slot:buttons>
        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createUser">
            Add Deals
        </button>
    </x-slot:buttons>
            





  
<!--begin::Card-->
<div class="card">
	<!--begin::Header-->
	

    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid" >
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container">
                    <div class="card bg-transparent">
                        <div class="card-header border-0 p-0">
                            <div class="card-title m-0 mt-n5 mb-3">
                                <div class="d-flex align-items-center position-relative my-1 me-7">
                                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                        <i class="path1"></i><i class="path2"></i>
                                    </i>
                                    <input type="text" id="search" class="form-control bg-white form-control-sm form-control-solid w-150px ps-12" placeholder="Search User" aria-label="search">
                                </div>
                                <div class="w-100 mw-150px me-7">
                                    <select class="form-select bg-white form-select-sm form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="All Permissions" id="departments">
                                        <option></option>
                                        <option value=" ">All Status</option>
                                        <option value="Super Admin">Super Admin</option>
                                        <option value="Manager">Manager</option>
                                    </select>
                                </div>
                                <div class="d-flex align-items-center position-relative">
                                    <i class="ki-duotone ki-calendar fs-3 position-absolute ms-3 z-index-3">
                                        <i class="path1"></i><i class="path2"></i>
                                    </i>
                                    <div class="input-group mw-150px me-7">
                                        <input class="form-control bg-white form-control-sm form-control-solid rounded rounded-end-0 ps-11" placeholder="Created" id="flatpickr"/>
                                        <button class="btn btn-sm btn-icon btn-light" id="clear">
                                            <i class="ki-duotone ki-cross fs-2">
                                                <i class="path1"></i><i class="path2"></i>
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                       
                        </div>
                        <div class="card-body p-0 mt-n7">
                            <table class="table align-middle table-row-dashed fs-6 gy-5" data-table data-search-using="#search">
                                <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <!-- <th class="w-40px ps-3">Id</th> -->
                                    <th>Deal Name</th>
                                    <th>Number</th>
                                    <th>Deal Status</th>
                                    <th>Reservation</th>
                                    <th>Price</th>
                                </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                     
                                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



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
    <!--end:::Main-->

    </body>
</html>

    
    @include('settingsdeals.partials.create-modal')


</x-layouts.app>
