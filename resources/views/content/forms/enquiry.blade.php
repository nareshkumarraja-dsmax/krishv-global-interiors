<!-- Enquiry Form -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow">
            <div class="modal-header  text-white border-0">
                <h5 class="modal-title" id="contactModalLabel">Get In Touch With Us</h5>
                <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="contactForm" >
                    <div class="mb-3">
                        <input type="text" id="fullName" name="fullName" class="form-control dark-input no-radius" placeholder="Full Name *" required>
                        <div class="text-danger small mt-1" id="errorFullName"></div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <input type="tel" id="phone" name="phone" class="form-control dark-input no-radius" placeholder="Phone Number *" required>
                            <div class="text-danger small mt-1" id="errorPhone"></div>
                        </div>
                        <div class="col-md-6">
                            <input type="email" id="email" name="email" class="form-control dark-input no-radius" placeholder="Your Email *" required>
                            <div class="text-danger small mt-1" id="errorEmail"></div>
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <select id="propertyType" name="propertyType" class="form-control dark-input no-radius" required>
                                <option value="" disabled selected hidden>Property Type</option>
                                <option>1 RK</option>
                                <option>1 BHK</option>
                                <option>2 BHK</option>
                                <option>3 BHK</option>
                                <option>4 BHK & More</option>
                                <option>Commercial</option>
                            </select>
                            <div class="text-danger small mt-1" id="errorPropertyType"></div>
                        </div>
                        <div class="col-md-6">
                            <input type="text" id="location" name="location" class="form-control dark-input no-radius" placeholder="Location" required>
                            <div class="text-danger small mt-1" id="errorLocation"></div>
                        </div>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="consentCheck" name="consentCheck" checked>
                        <label class="form-check-label small" for="consentCheck">
                        I authorize Krish-V Global & its representatives to contact me via Email/SMS/Call/WhatsApp.
                        </label>
                        <div class="text-danger small mt-1" id="errorConsent"></div>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary text-dark fw-bold">SUBMIT</button>
                    </div>

                    <div id="formSuccess" class="mt-2 small"></div>

                    <div class="form-footer text-center mt-3 small">
                        <a href="Terms-conditions.html" class=" text-decoration-none">Terms & Conditions</a> |
                        <a href="Privacy-policy.html" class=" text-decoration-none">Privacy Policy</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
