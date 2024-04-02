<div class="modal fade" id="createUser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <div class="modal-content">
            <form x-submit action="{{ route('api.settings.store') }}">
                <input name="type" type="hidden" value="admin">
                <div class="modal-header pt-7 pb-3 px-lg-5">
                    <h4 class="fw-bold">Add Department</h4>
                </div>
                <div class="modal-body py-10 px-lg-8">
                    <div class="row">
                       
                        <div class="col-md-9 ps-0">
                            <div class="row">
                                <!-- <div class="col-md-6 mb-2 px-2"> -->
                                    <label class="form-label fw-bold">Name</label>
                                    <input name="name" placeholder="Reception" class="form-control" aria-label="name" required>
                                <!-- </div> -->
                           
                            </div>
                           
                           
                            <div class="row">
                            <div class="col-md-3 mb-4 px-2">
                                <label class="form-label fw-bold">Department</label>
                                <div class="position-relative" data-kt-password-meter="true">
                                    <input id="number1" name="food" type="string" class="form-control" placeholder="Food" />
                                </div>
                            </div>

                            <div class="col-md-3 mb-4 px-2">
                                <label class="form-label fw-bold">Service Category</label>
                                <div class="position-relative" data-kt-password-meter="true">
                                    <input id="number2" name="children" type="number" class="form-control" placeholder="Menu" />
                                </div>
                            </div>

                            <div class="col-md-3 mb-4 px-2">
                                <label class="form-label fw-bold">Wait Minute</label>
                                <div class="position-relative" data-kt-password-meter="true">
                                    <input id="number3" name="children" type="number" class="form-control" placeholder="10" />
                                </div>
                            </div>

                            <div class="col-md-3 mb-4 px-2">
                                <label class="form-label fw-bold">Duration Time</label>
                                <div class="position-relative" data-kt-password-meter="true">
                                    <input id="number4" name="children" type="number" class="form-control" placeholder="10" />
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
