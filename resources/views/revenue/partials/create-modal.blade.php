<div class="modal fade" id="createUser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <div class="modal-content">
            <form x-submit action="{{ route('api.settings.store') }}">
                <input name="type" type="hidden" value="admin">
                <div class="modal-header pt-7 pb-3 px-lg-5">
                    <h4 class="fw-bold">Add Room Type</h4>
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
                                    <label class="form-label fw-bold">Name</label>
                                    <input name="name" placeholder="Single Room" class="form-control" aria-label="name" required>
                                </div>
                           
                            </div>
                           
                            <div class="row">
                                <div class="col-md-6 mb-2 px-2">
                                    <label class="form-label fw-bold">Select Type</label>
                                    <select name="type" class="form-select" data-control="select2" data-hide-search="true" data-placeholder="Suite" required>
                                        <option>Suite</option>
                                        <option value="R"></option>
                                        <option value="H"></option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-2 px-2">
                                    <label class="form-label fw-bold">Area</label>
                                    <div class="position-relative" data-kt-password-meter="true">
                                        <input id="number" name="area" type="number" class="form-control" placeholder="32"/>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2 px-2">
                                <label class="form-label fw-bold">Max Occupancy </label>
                                    <div class="position-relative" data-kt-password-meter="true">
                                        <input id="number" name="ocupancy" type="number" class="form-control" placeholder="4"/>
                                      
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2 px-2">
                                <label class="form-label fw-bold">Default Occupancy</label>
                                    <div class="position-relative" data-kt-password-meter="true">
                                        <input id="number" name="maxocupancy" type="number" class="form-control" placeholder="4"/>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6 mb-2 px-2">
                                <label class="form-label fw-bold">Max Adult </label>
                                    <div class="position-relative" data-kt-password-meter="true">
                                        <input id="number" name="adult" type="number" class="form-control" placeholder="4"/>
                                      
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2 px-2">
                                <label class="form-label fw-bold">Default Children</label>
                                    <div class="position-relative" data-kt-password-meter="true">
                                        <input id="number" name="chilren" type="number" class="form-control" placeholder=""/>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-12 mb-2 px-2">
                            <label class="form-label fw-bold">Description</label>
                            <textarea class="form-control" rows="3" placeholder="Enter your description here" required></textarea>
                        </div>

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
