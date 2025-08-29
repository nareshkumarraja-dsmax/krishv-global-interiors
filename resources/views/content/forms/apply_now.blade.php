    {{-- Apply Now Form --}}
    <div class="modal fade" id="applyNowModal" tabindex="-1" aria-labelledby="applyNowModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered custom-modal-size">
            <div class="modal-content form-modal position-relative">
                <div class="modal-header justify-content-center border-0 position-relative">
                    <h5 class="modal-title text-center w-100" id="applyNowModalLabel">Apply Now</h5>
                    <button type="button" class="custom-close-x" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="ApplyNowForm">
                        <div class="mb-3">
                            <input type="text" id="applyFullName" class="form-control dark-input" placeholder="Full name *" required>
                            <div class="text-danger small mt-1" id="errorApplyFullName"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                            <input type="tel" id="applyPhone" class="form-control dark-input" placeholder="Phone number *" required>
                            <div class="text-danger small mt-1" id="errorApplyPhone"></div>
                            </div>
                            <div class="col-md-6 mb-3">
                            <input type="email" id="applyEmail"  class="form-control dark-input" placeholder="Your mail *" required>
                            <div class="text-danger small mt-1" id="errorApplyEmail"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <select id="applyPosition" class="form-select dark-input" required>
                                <option value="">Select Job Position</option>
                                <option>Interior Head</option>
                                <option>Senior Interior Designer</option>
                                <option>Production-Cutting List</option>
                                <option>Manager Sales-Interior Fitout</option>
                                <option>Interior Sales Executive</option>
                                <option>Junior Interior Designer</option>
                            </select>
                            <div class="text-danger small mt-1" id="errorApplyPosition"></div>
                        </div>
                        <button type="submit" class="btn w-100 apply-submit">Apply Now</button>
                        <div id="applyNowSuccess" style="margin-top: 10px; font-weight: bold;"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>