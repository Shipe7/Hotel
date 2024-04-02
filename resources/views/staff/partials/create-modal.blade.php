<div class="modal fade" id="createUser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <div class="modal-content">
            <form x-submit action="{{ route('api.users.store') }}">
                <input name="type" type="hidden" value="admin">
                <div class="modal-header pt-7 pb-3 px-lg-5">
                    <h4 class="fw-bold">Create New User</h4>
                </div>
                <div class="modal-body py-10 px-lg-8">
                    <div class="row">
                        <div class="col-md-3 mb-7 px-0">
                            <div class="mb-3">
                                <label class="form-label">User Image</label>
                            </div>
                            <div class="image-input image-input-empty image-input-placeholder mb-3" data-kt-image-input="true">
                                <label for="file" class="image-input-wrapper shadow-none w-225px h-200px cursor-pointer"></label>
                                <label class="btn btn-icon btn-circle w-25px h-25px bg-transparent" data-kt-image-input-action="change">
                                    <input id="file" type="file" name="image" accept=".png, .jpg, .jpeg" />
                                </label>
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Remove image">
                                        <i class="bi bi-x fs-2"></i>
                                </span>
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove image">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-9 ps-0">
                            <div class="row">
                                <div class="col-md-6 mb-2 px-2">
                                    <label class="form-label fw-bold">First Name</label>
                                    <input name="first_name" placeholder="Name" class="form-control" aria-label="first name" required>
                                </div>
                                <div class="col-md-6 mb-2 px-2">
                                    <label class="form-label fw-bold">Last Name</label>
                                    <input name="last_name" placeholder="Name" class="form-control" aria-label="last name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2 px-2">
                                    <label class="form-label fw-bold">Email</label>
                                    <input name="email" type="email" placeholder="Email" class="form-control" aria-label="email">
                                </div>
                                <div class="col-md-6 mb-2 px-2">
                                    <label class="form-label fw-bold">Phone</label>
                                    <input name="phone" type="tel" placeholder="Phone" class="form-control" aria-label="phone" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2 px-2">
                                    <label class="form-label fw-bold">User Permission</label>
                                    <select name="department" class="form-select" data-control="select2" data-hide-search="true" data-placeholder="Department" required>
                                        <option></option>
                                        <option value="R"></option>
                                        <option value="H"></option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-2 px-2">
                                    <label class="form-label fw-bold">New Password</label>
                                    <div class="position-relative" data-kt-password-meter="true">
                                        <input id="password" name="password" type="password" class="form-control" placeholder="Password"/>
                                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                            <i class="bi bi-eye-slash fs-2"></i>
                                            <i class="bi bi-eye fs-2 d-none"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2 px-2">
                                    <label class="form-label fw-bold">Hotel Section</label>
                                    <select name="department" class="form-select" data-control="select2" data-hide-search="true" data-placeholder="Select Section" required>
                                        <option></option>
                                        <option value="R"></option>
                                        <option value="H"></option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-2 px-2">
                                    <label class="form-label fw-bold">Department</label>
                                    <select name="department" class="form-select" data-control="select2" data-hide-search="true" data-placeholder="Select Department" required>
                                        <option></option>
                                        <option value="R"></option>
                                        <option value="H"></option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2 px-2">
                                    <label class="form-label fw-bold">Select Language</label>
                                    <select name="department" class="form-select" data-control="select2" data-hide-search="true" data-placeholder="Language" required>
                                        <option></option>
                                        <option value="R"></option>
                                        <option value="H"></option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-2 px-2">
                                    <label class="form-label fw-bold">Timezone</label>
                                    <select name="" class="form-select" data-control="select2" data-hide-search="true" data-placeholder="Timezone" aria-label="gender" required>
                                        <option></option>
                                        <option value="M"></option>
                                        <option value="F"></option>
                                    </select>
                                </div>
                            </div>
                            <div class="fv-row mt-1">
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input form-check-sm" type="checkbox" name="notifiable" value="1" checked/>
                                    <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">
                                        Receive email notifications
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer flex-center mb-7">
                    <button type="button" class="btn btn-sm btn-outline btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-sm btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
