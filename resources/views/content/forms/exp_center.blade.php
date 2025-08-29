<!-- Experience Center Form-->
<div class="modal fade" id="siteVisitModal" tabindex="-1" aria-labelledby="siteVisitModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content custom-dark-modal p-2">
            <div class="form-header border-0 pb-0 mb-2 ">
                <h5 class="form-title fw-bold" id="siteVisitModalLabel">
                    Experience Center Visit Form
                </h5>
                <button type="button" class="custom-close-btn" data-bs-dismiss="modal" aria-label="Close">×</button>
            </div>
            <div class="modal-body pt-0">
                <form id="siteVisitForm">
                    <div class="mb-3">
                        <label class="form-label" for="svFullName">Full Name *</label>
                        <input type="text" class="form-control dark-input" id="svFullName" required />
                        <div class="text-danger small mt-1" id="errorSVFullName"></div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label" for="svPhone">Phone Number *</label>
                            <input type="tel" class="form-control dark-input" id="svPhone" required />
                            <div class="text-danger small mt-1" id="errorSVPhone"></div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="svEmail">Your Email *</label>
                            <input type="email" class="form-control dark-input" id="svEmail" required />
                            <div class="text-danger small mt-1" id="errorSVEmail"></div>
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label" for="svPropertyType">Property Type</label>
                            <select class="form-control dark-input" id="svPropertyType" required>
                                <option value="">Select Property Type</option>
                                <option>Residential</option>
                                <option>Commercial</option>
                            </select>
                            <div class="text-danger small mt-1" id="errorSVPropertyType"></div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="svLocation">Location</label>
                            <input type="text" class="form-control dark-input" id="svLocation" required />
                            <div class="text-danger small mt-1" id="errorSVLocation"></div>
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label" for="visitDate">Date</label>
                            <input type="date" class="form-control dark-input white-icon" id="visitDate" required />
                            <div class="text-danger small mt-1" id="errorSVDate"></div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="visitTime">Time</label>
                            <input type="time" class="form-control dark-input white-icon" id="visitTime" required />
                            <div class="text-danger small mt-1" id="errorSVTime"></div>
                        </div>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="consentCheckbox" checked required>
                        <label class="form-check-label" for="consentCheckbox">
                            I authorize Krish-V Global & its representatives to contact me via Email/SMS/Call/WhatsApp.
                        </label>
                        <div class="text-danger small mt-1" id="errorSVConsent"></div>
                    </div>

                    <button type="submit" class="btn custom-yellow-btn w-100">Book A Visit</button>
                    <div id="siteVisitSuccess" class="mt-2 small"></div>

                    <p class="form-terms mt-3">
                        <a href="Terms-conditions.html">Terms & Conditions</a> | <a href="Privacy-policy.html">Privacy Policy</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>