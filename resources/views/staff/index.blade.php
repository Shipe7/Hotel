<x-layouts.app title="Staff">
    <x-slot:buttons>
        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createUser">
            Create User
        </button>
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
                                        <option value=" ">All Permissions</option>
                                        <option value="Super Admin">Super Admin</option>
                                        <option value="Manager">Manager</option>
                                        <option value="Receptionist">Receptionist</option>
                                        <option value="House Keeping">House Keeping</option>
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
                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                {{--<a href="--}}{{--{{ route('roles.index') }}--}}{{--" class="btn btn-sm btn-light-success">
                                    Manage Departments
                                </a>--}}
                            </div>
                        </div>
                        <div class="card-body p-0 mt-n7">
                            <table class="table align-middle table-row-dashed fs-6 gy-5" data-table data-search-using="#search">
                                <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-40px ps-3">Id</th>
                                    <th>Avatar</th>
                                    <th>Email</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>User Permission</th>
                                    <th>Created</th>
                                </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                @foreach($users as $user)
                                    <tr class="bg-white mt-5" style="border-bottom: 8px solid #F5F6FF;">
                                        <td class="w-40px ps-3">{{ $user->id }}</td>
                                        <td>
                                            <div class="symbol symbol-circle symbol-40px overflow-hidden me-3">
                                                <a href="{{ route('users.show', $user) }}">
                                                    <div class="symbol-label">
                                                        <img src="{{ $user->photo }}" alt="Customer" class="w-100">
                                                    </div>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{ route('users.show', $user) }}" class="text-gray-800 text-hover-primary mb-1">{{ $user->email ?? 'None' }}</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('users.show', $user) }}" class="text-gray-800 text-hover-primary mb-1">{{ $user->first_name }}</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('users.show', $user) }}" class="text-gray-800 text-hover-primary mb-1">{{ $user->last_name }}</a>
                                        </td>
                                        <td>Receptionist</td>
                                        <td class="min-w-50px" data-order="{{ $user->created_at }}">
                                            <span class="fw-bold">{{ $user->created_at->format('d M Y, h:i a') }}</span>
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
    @include('staff.partials.create-modal')

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
        <script src="{{ asset('js/views/staff/index.js') }}"></script>
    @endpush
</x-layouts.app>
