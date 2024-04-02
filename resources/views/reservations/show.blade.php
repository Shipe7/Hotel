<x-layouts.app title="Booking #{{ $reservation->id }}">
    <x-slot:buttons>
        <x-reservation.status :$reservation />
        <button class="btn btn-icon" data-bs-toggle="modal" data-bs-target="#createUser">
            <i class="ki-solid ki-dots-horizontal text-blue-800 fs-3hx"></i>
        </button>
    </x-slot:buttons>
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
                                       href="#order_summary">General</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-active-blue-900" {{--data-bs-toggle="tab"
                                       href="#payment"--}}>Chats</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-active-blue-900" {{--data-bs-toggle="tab"
                                       href="#payment"--}}>Activity Log</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-active-blue-900" {{--data-bs-toggle="tab"
                                       href="#payment"--}}>Charges</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="order_summary">
                                <div class="row mt-n3">
                                    <div class="col-sm-6 col-xl-4 p-2">
                                        <div class="card h-100">
                                            <div class="px-6 pt-5 pb-0">
                                                <div class="fw-semibold fs-5 text-gray-600">Origin</div>
                                            </div>
                                            <div class="card-body px-6 py-0">
                                                <div class="table-responsive">
                                                    <table class="table align-middle fs-7 gy-5 mb-0">
                                                        <thead>
                                                        <tr class="fw-semibold fs-7 gs-0">
                                                            <th>Customer</th>
                                                            <th class="text-center">Source</th>
                                                            <th class="text-center">Company</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody class="">
                                                        <tr>
                                                            <td class="pt-0">
                                                                <a class="text-blue-800" href="{{ route('users.show', $reservation->user) }}">
                                                                    {{ $reservation->user->name }}
                                                                </a>
                                                            </td>
                                                            <td class="pt-0 text-center">
                                                                Reception
                                                            </td>
                                                            <td class="text-center pt-0">
                                                                --------
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-4 p-2">
                                        <div class="card h-100">
                                            <div class="px-6 pt-5 pb-0">
                                                <div class="fw-semibold fs-5 text-gray-600">Details</div>
                                            </div>
                                            <div class="card-body px-6 py-0">
                                                <div class="table-responsive">
                                                    <table class="table align-middle fs-7 gy-5 mb-0">
                                                        <thead>
                                                        <tr class="fw-semibold fs-7 gs-0">
                                                            <th>Check-in</th>
                                                            <th class="text-center">Check-out</th>
                                                            <th class="text-center">Nights</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody class="">
                                                        <tr>
                                                            <td class="pt-0">
                                                                {{ $reservation->checkin_at->format('d M Y') }}
                                                            </td>
                                                            <td class="pt-0 text-center">
                                                                {{ $reservation->checkout_at->format('d M Y') }}
                                                            </td>
                                                            <td class="text-center pt-0">
                                                                {{ $reservation->days }}
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-4 p-2">
                                        <div class="card h-100">
                                            <div class="px-6 pt-5 pb-0">
                                                <div class="fw-semibold fs-5 text-gray-600">Balance</div>
                                            </div>
                                            <div class="card-body px-6 py-0">
                                                <div class="table-responsive">
                                                    <table class="table align-middle fs-7 gy-5 mb-0">
                                                        <thead>
                                                        <tr class="fw-semibold fs-7 gs-0">
                                                            <th>Amount</th>
                                                            <th class="text-center">Paid</th>
                                                            <th class="text-center">Balance</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody class="">
                                                        <tr>
                                                            <td class="pt-0">
                                                                $24
                                                            </td>
                                                            <td class="pt-0 text-center">
                                                                $200
                                                            </td>
                                                            <td class="text-center pt-0">
                                                                $40
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-4 p-2">
                                        <div class="card h-100">
                                            <div class="px-6 pt-5 pb-0">
                                                <span class="fw-semibold fs-5 text-gray-600">Guest</span>
                                                <span class="float-end"><i class="ki-solid ki-plus-square fs-1 text-blue-800"></i></span>
                                            </div>
                                            <div class="card-body px-6 py-0">
                                                <div class="table-responsive">
                                                    <table class="table align-middle mt-15 mb-5 fs-7 mb-0">
                                                        <tbody class="">
                                                        <tr>
                                                            <td class="pt-0">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-circle symbol-40px overflow-hidden me-2">
                                                                        <a href="{{ route('users.show', $reservation->user) }}">
                                                                            <div class="symbol-label">
                                                                                <img src="{{ $reservation->user->photo }}" alt="{{ $reservation->user->name }}" class="w-100" />
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="ms-2">
                                                                        <a href="{{ route('users.show', $reservation->user) }}" class="text-blue-800 fs-">{{ $reservation->user->name }}</a>
                                                                        <div>876945316436</div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pt-0 pe-2">
                                                                ------
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-4 p-2">
                                        <div class="card h-100">
                                            <div class="px-6 pt-5 pb-0">
                                                <span class="fw-semibold fs-5 text-gray-600">Payment Info</span>
                                                <span class="float-end"><i class="ki-solid ki-plus-square fs-1 text-blue-800"></i></span>
                                            </div>
                                            <div class="card-body px-6 py-0">
                                                <div class="text-center mt-2 mb-10">
                                                    <i class="ki-outline ki-credit-cart fs-6x text-blue-800"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-4 p-2">
                                        <div class="card h-100">
                                            <div class="px-6 pt-5 pb-0">
                                                <div class="fw-semibold fs-5 text-gray-600">Comments and Notes</div>
                                            </div>
                                            <div class="card-body px-6 pt-3 pb-6">
                                                <textarea class="form-control h-100"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-10">
                                    <button class="btn btn-sm bg-blue-800 text-white">Save Changes</button>
                                </div>
                                <div class="card bg-transparent mt-20">
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
                                                    <td class="min-w-50px py-1 ps-4 text-dark" data-order="{{ $reservation->checkin_at }}">
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
                                                    <td class="min-w-50px py-1 ps-4 text-dark" data-order="{{ $reservation->checkin_at }}">
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

                            <div class="tab-pane fade" id="payment">
                                <div class="d-flex flex-column gap-7 gap-lg-10 mt-10">
                                    <div class="card card-flush py-4 flex-row-fluid">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Payment Information</h2>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="table-responsive">
                                                <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                                    <thead>
                                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                        <th>Reference</th>
                                                        <th>Channel</th>
                                                        <th>Amount</th>
                                                        <th>Status</th>
                                                        <th>Date</th>
                                                        <th>Initiated by</th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="fw-semibold text-gray-600">

                                                    </tbody>
                                                </table>
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
    </div>

</x-layouts.app>
