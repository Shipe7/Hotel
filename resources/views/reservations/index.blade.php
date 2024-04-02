<x-layouts.app title="Reservations">
    <x-slot:buttons>
        <a href="{{ route('reservations.create') }}" class="btn btn-primary btn-sm">Add Booking</a>
    </x-slot:buttons>
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid" >
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container">
                    <div class="card bg-transparent">
                        <div class="card-header border-0 p-0 mt-n5 mb-3">
                            <div class="card-title m-0">
                                <div class="d-flex align-items-center position-relative my-1 me-7">
                                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                        <i class="path1"></i><i class="path2"></i>
                                    </i>
                                    <input type="text" id="search" class="form-control bg-white form-control-sm form-control-solid w-200px ps-12" placeholder="Search Booking" aria-label="search">
                                </div>
                            </div>
                            <div class="card-toolbar flex-row-fluid justify-content-end gap-3">
                                <div class="d-flex align-items-center position-relative">
                                    <i class="ki-duotone ki-calendar fs-3 position-absolute ms-3 z-index-3">
                                        <i class="path1"></i><i class="path2"></i>
                                    </i>
                                    <div class="input-group mw-175px">
                                        <input class="form-control bg-white form-control-sm form-control-solid rounded rounded-end-0 ps-11" placeholder="Check-in Date" id="checkin-date"/>
                                        <button class="btn btn-sm btn-icon btn-light" id="clear-checkin">
                                            <i class="ki-duotone ki-cross fs-2">
                                                <i class="path1"></i><i class="path2"></i>
                                            </i>
                                        </button>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center position-relative">
                                    <i class="ki-duotone ki-calendar fs-3 position-absolute ms-3 z-index-3">
                                        <i class="path1"></i><i class="path2"></i>
                                    </i>
                                    <div class="input-group mw-175px">
                                        <input class="form-control bg-white form-control-sm form-control-solid rounded rounded-end-0 ps-11" placeholder="Check-out Date" id="checkout-date"/>
                                        <button class="btn btn-sm btn-icon btn-light" id="clear-checkout">
                                            <i class="ki-duotone ki-cross fs-2">
                                                <i class="path1"></i><i class="path2"></i>
                                            </i>
                                        </button>
                                    </div>
                                </div>
                                <div class="d-lg-block d-none">
                                    <input id="booking-no" class="form-control bg-white form-control-sm form-control-solid w-125px" placeholder="Booking No" type="number">
                                </div>
                                <div class="d-lg-block d-none">
                                    <input id="guest" class="form-control bg-white form-control-sm form-control-solid w-100px" placeholder="Guest">
                                </div>
                                <div class="w-125px">
                                    <select class="form-select bg-white form-select-sm form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" id="status">
                                        <option></option>
                                        <option value=" ">All</option>
                                        <option value="Confirmed">Confirmed</option>
                                        <option value="Checked In">Checked In</option>
                                        <option value="Checked Out">Checked Out</option>
                                        <option value="Due In">Due In</option>
                                        <option value="Due Out">Due Out</option>
                                    </select>
                                </div>
                                <div class="w-70 d-none d-lg-block">
                                    <select class="form-select bg-white form-select-sm form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="More" id="more">
                                        <option></option>
                                        <option value="Due In">More</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0 mt-n7">
                            <table class="table align-middle table-row-dashed fs-6 gy-5" data-table data-search-using="#search">
                                <thead>
                                <tr class="text-start text-blue-900 fw-bold fs-6 gs-0">
                                    <th class="w-10px ps-4">
                                        <div class="form-check form-check-sm me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target=".form-check-input" value="1" />
                                        </div>
                                    </th>
                                    <th>Bookings</th>
                                    <th>Room</th>
                                    <th>Guest</th>
                                    <th>Check-in</th>
                                    <th>Check-out</th>
                                    <th>Orders</th>
                                    <th>Amount</th>
                                    <th>Balance</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody class=" text-blue-900">
                                @foreach($reservations as $reservation)
                                    <tr class="bg-white cursor-pointer h-40px" style="border-bottom: 8px solid #F5F6FF;"
                                        onclick="location.href = @js(route('reservations.show', $reservation))"
                                    >
                                        <td class="ps-4" onclick="event.stopPropagation()">
                                            <div class="form-check form-check-sm">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>#{{ $reservation->id }}</td>
                                        <td>{{ $reservation->room->name }}</td>
                                        <td>
                                            <a href="{{ route('users.show', $reservation->user) }}" class="text-blue-900 text-hover-primary mb-1">{{ $reservation->user->name }}</a>
                                        </td>
                                        <td class="min-w-50px" data-order="{{ $reservation->checkin_at }}">
                                            {{ $reservation->checkin_at->format('d M Y') }}
                                        </td>
                                        <td class="min-w-50px" data-order="{{ $reservation->checkout_at }}">
                                            {{ $reservation->checkout_at->format('d M Y') }}
                                        </td>
                                        <td>2</td>
                                        <td>$800</td>
                                        <td>$200</td>
                                        <td>
                                            <x-reservation.status :$reservation />
                                        </td>
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
    <!--end:::Main-->

    @push('styles')
        <style>
            .image-input-placeholder {
                background-image: url('{{ asset('media/svg/files/default.png') }}');
            }
            [data-bs-theme="dark"] .image-input-placeholder {
                background-image: url('{{ asset('media/svg/files/default.png') }}');
            }
        </style>
    @endpush
    @push('scripts')
        <script src="{{ asset('js/views/reservations/index.js') }}"></script>
    @endpush
</x-layouts.app>
