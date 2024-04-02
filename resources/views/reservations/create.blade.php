<x-layouts.app title="Booking">
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content  flex-column-fluid ">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container">
                    <div class="d-flex flex-column gap-7 gap-lg-10">
                        <div class="d-flex gap-5 gap-lg-10">
                            <ul class="nav w-100 nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-gray-300 fs-6 fw-semibold me-auto">
                                <li class="nav-item">
                                    <a class="nav-link text-active-blue-900 active" data-bs-toggle="tab"
                                       href="#book-a-room" id="bookARoomButton">Book A Room</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-active-blue-900" data-bs-toggle="tab"
                                       href="#add-info" id="addInfoButton">Add Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-active-blue-900" data-bs-toggle="tab"
                                       href="#confirm" id="confirmButton">Confirm</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="book-a-room">
                                <div class="text-end mb-15 mt-n4">
                                    <x-reservation.svg/>
                                </div>
                                <div class="card bg-transparent">
                                    <div class="card-body p-0">
                                        <div class="p-0 mt-n5 mb-20 d-flex">
                                            <div class="d-flex m-0 align-items-center">
                                                <div class="me-10">
                                                    <label class="fw-bold mb-2">Booking Type</label>
                                                    <div class="row">
                                                        <div class="col-6 pe-0">
                                                            <input type="radio" class="btn-check" name="type" checked="checked" value="single" id="single"/>
                                                            <label class="btn btn-outline-blue-800 bg-white btn-sm py-1 px-2 btn-active-blue-800" for="single">
                                                                Single
                                                            </label>
                                                        </div>
                                                        <div class="col-6 pe-0">
                                                            <input type="radio" class="btn-check" name="type" value="group" id="group"/>
                                                            <label class="btn btn-outline-blue-800 bg-white btn-sm py-1 px-2 btn-active-blue-800" for="group">
                                                                Group
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <label class="fw-bold mb-2">Guest Type</label>
                                                    <div class="w-70 d-none d-lg-block">
                                                        <select class="form-select bg-white form-select-sm form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Guest Type" id="guest-type">
                                                            <option></option>
                                                            <option value="Due In">Type 1</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row-fluid justify-content-end gap-7">
                                                <div>
                                                    <label class="fw-bold mb-2">Date Of Stay</label>
                                                    <div class="">
                                                        <input name="checkin_at" class="form-control bg-white form-control-sm form-control-solid w-125px" type="date">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label class="fw-bold mb-2">&nbsp;</label>
                                                    <div class="ms-n5">
                                                        <input name="checkout_at" class="form-control bg-white form-control-sm form-control-solid w-125px" type="date">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label class="fw-bold mb-2">Adults</label>
                                                    <div class="">
                                                        <input type="number" class="form-control bg-white form-control-sm form-control-solid w-55px" value="1">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label class="fw-bold mb-2">Children</label>
                                                    <div class="">
                                                        <input type="number" class="form-control bg-white form-control-sm form-control-solid w-55px" value="2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row-fluid justify-content-between gap-3">
                                            <div>
                                                <label class="fw-bold mb-2">Room Type</label>
                                                <select class="form-select bg-white form-select-sm w-70" data-control="select2" data-hide-search="true" data-placeholder="Please Select">
                                                    <option></option>
                                                    <option value="Due In"> </option>
                                                </select>
                                            </div>
                                            <div>
                                                <label class="fw-bold mb-2">Room Rates</label>
                                                <select class="form-select bg-white form-select-sm w-70" data-control="select2" data-hide-search="true" data-placeholder="Please Select">
                                                    <option></option>
                                                    <option value="Due In"> </option>
                                                </select>
                                            </div>
                                            <div>
                                                <label class="fw-bold mb-2">Meals</label>
                                                <select class="form-select bg-white form-select-sm w-70" data-control="select2" data-hide-search="true" data-placeholder="Please Select">
                                                    <option></option>
                                                    <option value="Due In"> </option>
                                                </select>
                                            </div>
                                            <div class="w-150px">
                                                <label class="fw-bold mb-2">Cancellation Policy</label>
                                                <select class="form-select bg-white form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Please Select">
                                                    <option></option>
                                                    <option value="Due In"> </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    10 room(s) available
                                </div>
                                <div class="text-center mt-20">
                                    <a class="btn btn-sm bg-blue-800 text-white" x-data @click="addInfoButton.click()">Save Changes</a>
                                </div>
                                <div class="card bg-transparent mt-10">
                                    <div class="card-header border-0 p-0 mt-n5 mb-3">
                                        <div class="card-title m-0 fs-5">Accommodations</div>
                                    </div>
                                    <div class="card-body p-0 mt-n7">
                                        <table class="table align-middle table-row-dashed fs-6 gy-5">
                                            <thead>
                                            <tr class="text-start text-gray-600 fw-semibold fs-6 gs-0">
                                                <th class="ps-4 text-dark">Date</th>
                                                <th>Adult</th>
                                                <th>Children</th>
                                                <th>Room Type</th>
                                                <th>Room</th>
                                                <th>Board</th>
                                                <th>Room Rate</th>
                                                <th>Cancellation Policy</th>
                                                <th>Price</th>
                                                <th>Tax</th>
                                            </tr>
                                            </thead>
                                            <tbody class="text-gray-600">
                                            {{--@foreach($reservation->user->reservations as $reservation)--}}
                                            <tr class="bg-white h-40px" style="border-bottom: 8px solid #F5F6FF;">
                                                <td class="min-w-50px py-1 ps-4 text-dark">
                                                    <div class="d-flex h-100 fw-semibold flex-column fs-7 justify-content-between">
                                                        <div>
                                                            10-08-23
                                                            {{--{{ $reservation->checkin_at->format('d M Y') }}--}}
                                                        </div>
                                                        <div>
                                                            14-08-23
                                                            {{--{{ $reservation->checkout_at->format('d M Y') }}--}}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>2</td>
                                                <td>1</td>
                                                <td>Double room</td>
                                                <td>301</td>
                                                <td>No meals</td>
                                                <td>Filly Hotel</td>
                                                <td>Filly Hotel</td>
                                                <td>
                                                    $240
                                                    <button class="btn btn-sm p-0">
                                                        <i class="ki-outline ki-pencil fs-8 mb-1"></i>
                                                    </button>
                                                </td>
                                                <td>
                                                    $40
                                                    <button class="btn btn-sm p-0">
                                                        <i class="ki-outline ki-pencil fs-8 mb-1"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr class="bg-white h-40px" style="border-bottom: 8px solid #F5F6FF;">
                                                <td class="min-w-50px py-1 ps-4 text-dark">
                                                    <div class="d-flex h-100 fw-semibold flex-column fs-7 justify-content-between">
                                                        <div>
                                                            10-08-23
                                                            {{--{{ $reservation->checkin_at->format('d M Y') }}--}}
                                                        </div>
                                                        <div>
                                                            14-08-23
                                                            {{--{{ $reservation->checkout_at->format('d M Y') }}--}}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>2</td>
                                                <td>1</td>
                                                <td>Double room</td>
                                                <td>301</td>
                                                <td>No meals</td>
                                                <td>Filly Hotel</td>
                                                <td>Filly Hotel</td>
                                                <td>
                                                    $240
                                                    <button class="btn btn-sm p-0">
                                                        <i class="ki-outline ki-pencil fs-8 mb-1"></i>
                                                    </button>
                                                </td>
                                                <td>
                                                    $40
                                                    <button class="btn btn-sm p-0">
                                                        <i class="ki-outline ki-pencil fs-8 mb-1"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            {{--@endforeach--}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="add-info">
                                <div class="text-end mb-8 mt-n4">
                                    <x-reservation.svg/>
                                </div>
                                <div class="row mt-n3">
                                    <div class="col-8 p-2">
                                        <div class="card h-100">
                                            <div class="w-100">
                                                <div class="px-6 pt-5 pb-0 d-flex justify-content-between">
                                                    <div class="fw-semibold fs-5 text-gray-600">Origin</div>
                                                    <div class="mt-1">
                                                        <label class="form-check form-check-inline">
                                                            <input class="form-check-input form-check-sm" type="checkbox" name="notifiable" value="1" checked/>
                                                            <span class="form-check-label fw-semibold text-gray-700 fs-base ms-3">
                                                            Payer living in a room
                                                        </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body px-6 py-10">
                                                <div class="ps-0">
                                                    <div class="mb-2">
                                                        <label class="form-label fw-bold">Search User</label>
                                                        <select name="department" class="form-select" data-control="select2" data-placeholder="Search User" required>
                                                            <option></option>
                                                            <option value="R"></option>
                                                            <option value="H"></option>
                                                        </select>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-2 px-2">
                                                            <label class="form-label fw-bold">Gender</label>
                                                            <select name="" class="form-select" data-control="select2" data-hide-search="true" data-placeholder="Gender" aria-label="gender" required>
                                                                <option></option>
                                                                <option value="M">Male</option>
                                                                <option value="F">Female</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-2 px-2">
                                                            <label class="form-label fw-bold">Title</label>
                                                            <select name="" class="form-select" data-control="select2" data-hide-search="true" data-placeholder="Title" aria-label="gender" required>
                                                                <option></option>
                                                                <option value="M"></option>
                                                                <option value="F"></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-2 px-2">
                                                            <label class="form-label fw-bold">First Name</label>
                                                            <input name="first_name" placeholder="First Name" class="form-control" aria-label="first name" required>
                                                        </div>
                                                        <div class="col-md-6 mb-2 px-2">
                                                            <label class="form-label fw-bold">Last Name</label>
                                                            <input name="last_name" placeholder="Last Name" class="form-control" aria-label="last name">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-2 px-2">
                                                            <label class="form-label fw-bold">Date Of Birth</label>
                                                            <div class="position-relative" data-kt-password-meter="true">
                                                                <input name="dob" type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-2 px-2">
                                                            <label class="form-label fw-bold">Country</label>
                                                            <select name="country_id" class="form-select" data-control="select2" data-hide-search="true" data-placeholder="Country" required>
                                                                <option></option>
                                                                <option value="R"></option>
                                                                <option value="H"></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-2 px-2">
                                                            <label class="form-label fw-bold">Phone Number</label>
                                                            <input name="phone" type="tel" placeholder="Phone Number" class="form-control" aria-label="phone" required>
                                                        </div>
                                                        <div class="col-md-6 mb-2 px-2">
                                                            <label class="form-label fw-bold">City</label>
                                                            <input name="City" placeholder="City" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-2 px-2">
                                                            <label class="form-label fw-bold">Email</label>
                                                            <input name="email" type="email" placeholder="Email" class="form-control" aria-label="email">
                                                        </div>
                                                        <div class="col-md-6 mb-2 px-2">
                                                            <label class="form-label fw-bold">Reigion</label>
                                                            <input name="reigion" placeholder="Reigion" class="form-control" aria-label="phone" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-2 px-2">
                                                            <label class="form-label fw-bold">Passport ID</label>
                                                            <input name="passport_id" placeholder="Passport ID" class="form-control">
                                                        </div>
                                                        <div class="col-md-6 mb-2 px-2">
                                                            <label class="form-label fw-bold">Address</label>
                                                            <input name="Address" placeholder="Address" class="form-control" aria-label="phone" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-2 px-2">
                                                            <label class="form-label fw-bold">Passport From</label>
                                                            <div class="position-relative" data-kt-password-meter="true">
                                                                <input name="dob" type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-2 px-2">
                                                            <label class="form-label fw-bold">Zip Code</label>
                                                            <input name="zip_code" placeholder="Zip Code" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-2 px-2">
                                                            <label class="form-label fw-bold">Passport Expiry</label>
                                                            <div class="position-relative" data-kt-password-meter="true">
                                                                <input name="dob" type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-2 px-2">
                                                            <label class="form-label fw-bold">Language</label>
                                                            <select name="country_id" class="form-select" data-control="select2" data-hide-search="true" data-placeholder="Select Language" required>
                                                                <option></option>
                                                                <option value="R"></option>
                                                                <option value="H"></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 p-2">
                                        <div class="card h-100">
                                            <div class="px-6 pt-5 pb-0">
                                                <div class="fw-semibold fs-5 text-gray-600">Booking option</div>
                                            </div>
                                            <div class="card-body px-6 py-10">
                                                <div class="ps-0 mt-1">
                                                    <div class="row">
                                                        <div class="mb-2 px-2">
                                                            <label class="form-label fw-bold">Source</label>
                                                            <select name="" class="form-select" data-control="select2" data-hide-search="true" data-placeholder="Source" aria-label="gender" required>
                                                                <option></option>
                                                                <option value="M">Reception</option>
                                                                <option value="F"></option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-2 px-2">
                                                            <label class="form-label fw-bold">Status</label>
                                                            <select name="" class="form-select" data-control="select2" data-hide-search="true" data-placeholder="Status" aria-label="gender" required>
                                                                <option></option>
                                                                <option value="M">Confirmed</option>
                                                                <option value="F">Checked In</option>
                                                                <option value="F">Checked Out</option>
                                                                <option value="F">Due In</option>
                                                                <option value="F">Due Out</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-2 px-2">
                                                            <label class="form-label fw-bold">Purpose of visit</label>
                                                            <select name="" class="form-select" data-control="select2" data-hide-search="true" data-placeholder="Choose Purpose" aria-label="gender" required>
                                                                <option></option>
                                                                <option value="M"></option>
                                                                <option value="F"></option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-2 px-2">
                                                            <label class="form-label fw-bold">How did you find out</label>
                                                            <select name="" class="form-select" data-control="select2" data-hide-search="true" data-placeholder="Choose Response" aria-label="gender" required>
                                                                <option></option>
                                                                <option value="M"></option>
                                                                <option value="F"></option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-2 px-2">
                                                            <label class="form-label fw-bold">Special Conditions</label>
                                                            <label class="form-check form-check-inline mt-3 mb-4 d-block">
                                                                <input class="form-check-input form-check-sm" type="checkbox" name="notifiable" value="1" checked/>
                                                                <span class="form-check-label fw-semibold text-gray-700 fs-base ms-2">
                                                                    Notify Guest
                                                                </span>
                                                            </label>
                                                        </div>
                                                        <div class="mb-2 px-2">
                                                            <label class="form-label fw-bold">Add Note</label>
                                                            <input name="phone" placeholder="Add Note" class="form-control" required>
                                                        </div>
                                                        <div class="mb-2 px-2">
                                                            <label class="form-label fw-bold">Note to Meals</label>
                                                            <input name="" placeholder="Add Note" class="form-control">
                                                        </div>
                                                        <div class="mb-2 px-2">
                                                            <label class="form-label fw-bold">Guest Comments</label>
                                                            <input name="phone" placeholder="Add Note" class="form-control" required>
                                                        </div>
                                                        <div class="mb-2 px-2">
                                                            <label class="form-label fw-bold">Booking Comment</label>
                                                            <textarea class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-8">
                                        <a class="btn btn-sm bg-blue-800 text-white mx-2" x-data @click="bookARoomButton.click()">Previous</a>
                                        <a class="btn btn-sm bg-blue-800 text-white mx-2" x-data @click="confirmButton.click()">Next</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="confirm">
                                <div class="text-end mb-12 mt-n4">
                                    <x-reservation.svg/>
                                    <a class="btn btn-sm bg-blue-800 text-white ms-3">Create Collective Order</a>
                                </div>
                                <div class="card bg-transparent mt-10">
                                    <div class="card-body p-0 mt-n7">
                                        <table class="table align-middle table-row-dashed fs-6 gy-5">
                                            <thead>
                                            <tr class="text-start text-gray-600 fw-semibold fs-6 gs-0">
                                                <th class="ps-2 text-dark">Room type</th>
                                                <th class="text-dark">Date</th>
                                                <th>Nights</th>
                                                <th>Room Rate</th>
                                                <th>Meals</th>
                                                <th>Cancellation Policy</th>
                                                <th>Price for Orders</th>
                                                <th>Price for Rooms</th>
                                                <th>Room No</th>
                                                <th>Orders</th>
                                                <th>Guests</th>
                                            </tr>
                                            </thead>
                                            <tbody class="text-gray-600">
                                            {{--@foreach($reservation->user->reservations as $reservation)--}}
                                            <tr class="bg-white h-40px" style="border-bottom: 8px solid #F5F6FF;">
                                                <td class="ps-2 text-dark">
                                                    <a href="">Double</a>
                                                    <div>7 room(s)</div>
                                                    <i class="ki-solid ki-user fs-2"></i>
                                                    <i class="ki-solid ki-user fs-2"></i>
                                                </td>
                                                <td class="min-w-50px py-1 ps-4 text-dark">
                                                    <div class="d-flex h-100 fw-semibold flex-column fs-7 justify-content-between">
                                                        <div>10-08-23</div>
                                                        <div>14-08-23</div>
                                                    </div>
                                                </td>
                                                <td>1</td>
                                                <td>BAR</td>
                                                <td>No meals</td>
                                                <td>Filly Hotel</td>
                                                <td>
                                                    $0
                                                    <div>0 services</div>
                                                </td>
                                                <td>
                                                    $180
                                                    <div class="fs-8">+$10</div>
                                                    <div>Tourism tax</div>
                                                </td>
                                                <td>22</td>
                                                <td>
                                                    <a class="btn btn-sm bg-blue-800 text-white ms-3">Add Order</a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-sm bg-blue-800 text-white ms-3">Add Guest</a>
                                                </td>
                                                <td>
                                                    <span data-bs-toggle="tooltip" title="Delete">
                                                        <button class="btn btn-icon btn-active-light-danger w-30px h-30px me-3">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </span>
                                                </td>
                                            </tr>
                                            {{--@endforeach--}}
                                            </tbody>
                                        </table>
                                        <div class="w-25 bg-gray-300 text-gray-700 p-1 mt-20 ms-auto d-flex justify-content-between">
                                            <span>Total</span><span>$190.00</span>
                                        </div>
                                        <div class="text-center mt-20">
                                            <a class="btn btn-outline-blue-800 bg-white btn-sm btn-active-blue-800 mx-2" x-data @click="addInfoButton.click()">Cancel</a>
                                            <button class="btn btn-sm bg-blue-800 text-white mx-2">Confirm</button>
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


</x-layouts.app>
