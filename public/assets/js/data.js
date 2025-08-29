document.addEventListener("DOMContentLoaded", function () {
    const WEB_APP_URL = "https://script.google.com/macros/s/AKfycbw6OUAW2nh1ryEHuPurb1e2Wo2482z4SkrtwSPK1hqEamvgPwzOK1G8MHgZXiPZGWA2nQ/exec";

    function showMessage(id, msg) {
        document.getElementById(id).innerText = msg;
    }

    function clearMessages(ids) {
        ids.forEach(id => showMessage(id, ""));
    }

    function validateContactForm() {
        let valid = true;
        clearMessages(["errorFullName", "errorPhone", "errorEmail", "errorPropertyType", "errorLocation", "errorConsent"]);

        const name = document.getElementById("fullName").value.trim();
        const phone = document.getElementById("phone").value.trim();
        const email = document.getElementById("email").value.trim();
        const propertyType = document.getElementById("propertyType").value;
        const location = document.getElementById("location").value.trim();
        const consent = document.getElementById("consentCheck").checked;

        if (name.length < 3) { showMessage("errorFullName", "Please enter at least 3 characters."); valid = false; }
        if (!/^\d{10,15}$/.test(phone)) { showMessage("errorPhone", "Enter a valid phone number."); valid = false; }
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) { showMessage("errorEmail", "Enter a valid email address."); valid = false; }
        if (!propertyType) { showMessage("errorPropertyType", "Please select a property type."); valid = false; }
        if (location.length < 2) { showMessage("errorLocation", "Please enter location."); valid = false; }
        if (!consent) { showMessage("errorConsent", "You must agree before submitting."); valid = false; }

        return valid;
    }

    function validateSiteVisitForm() {
        let valid = true;
        clearMessages(["errorSVFullName", "errorSVPhone", "errorSVEmail", "errorSVPropertyType", "errorSVLocation", "errorSVDate", "errorSVTime", "errorSVConsent"]);

        const name = document.getElementById("svFullName").value.trim();
        const phone = document.getElementById("svPhone").value.trim();
        const email = document.getElementById("svEmail").value.trim();
        const propertyType = document.getElementById("svPropertyType").value;
        const location = document.getElementById("svLocation").value.trim();
        const visitDate = document.getElementById("visitDate").value;
        const visitTime = document.getElementById("visitTime").value;
        const consent = document.getElementById("consentCheckbox").checked;

        if (name.length < 3) { showMessage("errorSVFullName", "Please enter at least 3 characters."); valid = false; }
        if (!/^\d{10,15}$/.test(phone)) { showMessage("errorSVPhone", "Enter a valid phone number."); valid = false; }
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) { showMessage("errorSVEmail", "Enter a valid email address."); valid = false; }
        if (!propertyType) { showMessage("errorSVPropertyType", "Please select a property type."); valid = false; }
        if (location.length < 2) { showMessage("errorSVLocation", "Please enter location."); valid = false; }
        if (!visitDate) { showMessage("errorSVDate", "Please select a date."); valid = false; }
        if (!visitTime) { showMessage("errorSVTime", "Please select a time."); valid = false; }
        if (!consent) { showMessage("errorSVConsent", "You must agree before submitting."); valid = false; }

        return valid;
    }

    function validatePageContactForm() {
        let valid = true;
        clearMessages(["errorPCName", "errorPCEmail", "errorPCPhone", "errorPCMessage"]);

        const name = document.getElementById("pageName").value.trim();
        const email = document.getElementById("pageEmail").value.trim();
        const phone = document.getElementById("pagePhone").value.trim();
        const message = document.getElementById("pageMessage").value.trim();

        if (name.length < 3) { showMessage("errorPCName", "Please enter at least 3 characters."); valid = false; }
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) { showMessage("errorPCEmail", "Enter a valid email."); valid = false; }
        if (!/^\d{10,15}$/.test(phone)) { showMessage("errorPCPhone", "Enter a valid phone number."); valid = false; }
        if (message.length < 5) { showMessage("errorPCMessage", "Please enter your message."); valid = false; }

        return valid;
    }

    function validateReferralForm() {
        let valid = true;
        clearMessages(["errorYourName", "errorYourPhone", "errorYourEmail", "errorFriendName", "errorFriendPhone"]);
    
        const yourName = document.getElementById("yourName").value.trim();
        const yourPhone = document.getElementById("yourPhone").value.trim();
        const yourEmail = document.getElementById("yourEmail").value.trim();
        const friendName = document.getElementById("friendName").value.trim();
        const friendPhone = document.getElementById("friendPhone").value.trim();
    
        if (yourName.length < 3) { showMessage("errorYourName", "Please enter at least 3 characters."); valid = false; }
        if (!/^\d{10}$/.test(yourPhone)) { showMessage("errorYourPhone", "Enter a valid 10-digit number."); valid = false; }
        if (yourEmail && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(yourEmail)) { showMessage("errorYourEmail", "Enter a valid email address."); valid = false; }
        if (friendName.length < 3) { showMessage("errorFriendName", "Please enter at least 3 characters."); valid = false; }
        if (!/^\d{10}$/.test(friendPhone)) { showMessage("errorFriendPhone", "Enter a valid 10-digit number."); valid = false; }
    
        return valid;
    }

    function validateChannelPartnerForm() {
        let valid = true;
        clearMessages(["errorCPName", "errorCPPhone", "errorCPEmail", "errorCPCompany"]);
    
        const name = document.getElementById("cpName").value.trim();
        const phone = document.getElementById("cpPhone").value.trim();
        const email = document.getElementById("cpEmail").value.trim();
        const company = document.getElementById("cpCompany").value.trim();
    
        if (name.length < 3) { showMessage("errorCPName", "Please enter at least 3 characters."); valid = false; }
        if (!/^\d{10,15}$/.test(phone)) { showMessage("errorCPPhone", "Enter a valid phone number."); valid = false; }
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) { showMessage("errorCPEmail", "Enter a valid email address."); valid = false; }
        if (company.length < 2) { showMessage("errorCPCompany", "Please enter company/individual name."); valid = false; }
    
        return valid;
    }

    function validateApplyNowForm() {
        const fullName = document.getElementById("applyFullName").value.trim();
        const phone = document.getElementById("applyPhone").value.trim();
        const email = document.getElementById("applyEmail").value.trim();
        const position = document.getElementById("applyPosition").value;

        let errorMsg = "";
        if (fullName.length < 3) errorMsg = "Please enter at least 3 characters for name.";
        else if (!/^\d{10,15}$/.test(phone)) errorMsg = "Enter a valid phone number.";
        else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) errorMsg = "Enter a valid email address.";
        else if (!position) errorMsg = "Please select a job position.";

        if (errorMsg) {
            document.getElementById("applyNowSuccess").innerText = "❌ " + errorMsg;
            document.getElementById("applyNowSuccess").style.color = "red";
            return false;
        }
        return true;
    }


    function submitForm(url, data, successElementId, formId) {
        const successBox = document.getElementById(successElementId);
    
        // Show loading message   
        successBox.innerText = "⏳ Submitting...";
        successBox.style.color = "#ff9800"; // Orange for "in progress"

    
        fetch(url, {
            method: "POST",
            body: JSON.stringify(data)
        })
        .then(res => res.json())
        .then(res => {
            if (res.status === "success") {
                successBox.innerText = "✅ " + res.message;
                successBox.style.color = "green"; 
                document.getElementById(formId).reset();
                setTimeout(() => { successBox.innerText = ""; }, 3000);
            } else {
                successBox.innerText = "❌ " + res.message;
                successBox.style.color = "red";
            }
        })
        .catch(() => {
            successBox.innerText = "❌ Error connecting to server.";
            successBox.style.color = "red";
        });
    }



    const contactForm = document.getElementById("contactForm");
    if (contactForm) {
        contactForm.addEventListener("submit", function (e) {
            e.preventDefault();
            if (!validateContactForm()) return;

            const formData = {
                formType: "contact",
                fullName: document.getElementById("fullName").value.trim(),
                phone: document.getElementById("phone").value.trim(),
                email: document.getElementById("email").value.trim(),
                propertyType: document.getElementById("propertyType").value,
                location: document.getElementById("location").value.trim(),
                consent: document.getElementById("consentCheck").checked ? "Yes" : "No"
            };
            submitForm(WEB_APP_URL, formData, "formSuccess", "contactForm");
        });
    }


    const siteVisitForm = document.getElementById("siteVisitForm");
    if (siteVisitForm) {
        siteVisitForm.addEventListener("submit", function (e) {
            e.preventDefault();
            if (!validateSiteVisitForm()) return;

            const formData = {
                formType: "siteVisit",
                fullName: document.getElementById("svFullName").value.trim(),
                phone: document.getElementById("svPhone").value.trim(),
                email: document.getElementById("svEmail").value.trim(),
                propertyType: document.getElementById("svPropertyType").value,
                location: document.getElementById("svLocation").value.trim(),
                visitDate: document.getElementById("visitDate").value,
                visitTime: document.getElementById("visitTime").value,
                consent: document.getElementById("consentCheckbox").checked ? "Yes" : "No"
            };

            submitForm(WEB_APP_URL, formData, "siteVisitSuccess", "siteVisitForm");
        });
    }

    const pageContactForm = document.getElementById("pageContactForm");
    if (pageContactForm) {
        pageContactForm.addEventListener("submit", function (e) {
            e.preventDefault();
            if (!validatePageContactForm()) return;

            const formData = {
                formType: "pageContact",
                name: document.getElementById("pageName").value.trim(),
                email: document.getElementById("pageEmail").value.trim(),
                phone: document.getElementById("pagePhone").value.trim(),
                message: document.getElementById("pageMessage").value.trim()
            };

            submitForm(WEB_APP_URL, formData, "pageContactSuccess", "pageContactForm");
        });
    }

    const referralForm = document.getElementById("referralForm");
    if (referralForm) {
        referralForm.addEventListener("submit", function (e) {
            e.preventDefault();
            if (!validateReferralForm()) return;

            const formData = {
                formType: "referral",
                yourName: document.getElementById("yourName").value.trim(),
                yourPhone: document.getElementById("yourPhone").value.trim(),
                yourEmail: document.getElementById("yourEmail").value.trim(),
                friendName: document.getElementById("friendName").value.trim(),
                friendPhone: document.getElementById("friendPhone").value.trim()
            };

            submitForm(WEB_APP_URL, formData, "referralSuccess", "referralForm");
        });
    }

    const channelPartnerForm = document.getElementById("channelPartnerForm");
    if (channelPartnerForm) {
        channelPartnerForm.addEventListener("submit", function (e) {
            e.preventDefault();
            if (!validateChannelPartnerForm()) return;

            const formData = {
                formType: "channelPartner",
                name: document.getElementById("cpName").value.trim(),
                phone: document.getElementById("cpPhone").value.trim(),
                email: document.getElementById("cpEmail").value.trim(),
                company: document.getElementById("cpCompany").value.trim()
            };

            submitForm(WEB_APP_URL, formData, "channelPartnerSuccess", "channelPartnerForm");
        });
    }

    const ApplyNowForm = document.getElementById("ApplyNowForm");
    if (ApplyNowForm) {
        ApplyNowForm.addEventListener("submit", function (e) {
            e.preventDefault();
            if (!validateApplyNowForm()) return;

            const formData = {
                formType: "applyNow",
                fullName: document.getElementById("applyFullName").value.trim(),
                phone: document.getElementById("applyPhone").value.trim(),
                email: document.getElementById("applyEmail").value.trim(),
                position: document.getElementById("applyPosition").value
            };
            submitForm(WEB_APP_URL, formData, "applyNowSuccess", "ApplyNowForm");
        });
    }
});



























