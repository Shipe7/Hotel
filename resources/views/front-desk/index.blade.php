<x-layouts.app title="Front Desk">
    <!--begin::Content container-->
    <x-slot:buttons>
        <span class="bg-primary text-white rounded py-2 px-3">Confirmed</span>
        <span class="bg-success text-white rounded py-2 px-3">Checked In</span>
        <span class="bg-warning text-white rounded py-2 px-3">Checked Out</span>
        <span class="bg-secondary text-white rounded py-2 px-3">Due In</span>
        <span class="bg-danger text-white rounded py-2 px-3">Due Out</span>
    </x-slot:buttons>
    <div id="kt_app_content_container" class="app-container container-fluid">
        <!--begin::Card-->
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h2 class="card-title text-gray-700 fs-4 me-4">From</h2>
                    <div class="input-group input-group-">
                        <span class="input-group-text">
                            <i class="ki-duotone ki-calendar fs-2">
                                <i class="path1"></i><i class="path2"></i>
                            </i>
                        </span>
                        <input class="form-control w-125px" placeholder="{{ now()->format('d/m/Y') }}" id="from-date" readonly/>
                    </div>
                    <div class="ms-6 position-relative my-1">
                        <select id="rooms" class="form-select form-select-solid w-175px" aria-label="Category">
                            <option value="{{ route('api.calendar-rooms.index') }}">All Reservations</option>
                            @foreach($roomTypes as $type)
                                <option value="{{ route('api.calendar-rooms.index', ['type' => $type]) }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-toolbar">
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                            <i class="path1"></i><i class="path2"></i>
                        </i>
                        <input data-kt-ecommerce-product-filter="search" class="form-control form-control- form-control-solid w-275px ps-12" placeholder="Search" id="search">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id='calendar'></div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('plugins/custom/fullcalendar/fullcalendar-scheduler.js') }}"></script>
        @include('front-desk.partials.calendar-styles')
        @include('front-desk.partials.calendar-scripts')
        <script>
            $("#from-date").flatpickr({dateFormat: "d/m/Y"});
        </script>
    @endpush

</x-layouts.app>
