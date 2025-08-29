document.addEventListener("DOMContentLoaded", function () {

    // ---------------- CONTACT FORM ----------------
    const contactForm = document.getElementById("contactForm");
    if (contactForm) {
        contactForm.addEventListener("submit", function (e) {
            e.preventDefault();
            clearErrors(contactForm);
            let formSuccess = document.getElementById("formSuccess");
            formSuccess.textContent = "";

            let fullName = document.getElementById("fullName").value.trim();
            let phone = document.getElementById("phone").value.trim();
            let email = document.getElementById("email").value.trim();
            let propertyType = document.getElementById("propertyType").value;
            let location = document.getElementById("location").value.trim();
            let consentChecked = document.getElementById("consentCheck").checked;

            let isValid = true;

            if (fullName.length < 3) {
                showError("errorFullName", "Please enter at least 3 characters.");
                isValid = false;
            }
            if (!/^[0-9]{10}$/.test(phone)) {
                showError("errorPhone", "Enter a valid 10-digit phone number.");
                isValid = false;
            }
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                showError("errorEmail", "Enter a valid email address.");
                isValid = false;
            }
            if (!propertyType) {
                showError("errorPropertyType", "Please select a property type.");
                isValid = false;
            }
            if (location.length < 2) {
                showError("errorLocation", "Enter a valid location.");
                isValid = false;
            }
            if (!consentChecked) {
                showError("errorConsent", "You must authorize us to contact you.");
                isValid = false;
            }

            if (!isValid) return;

            let data = {
                formType: "contact",
                fullName,
                phone,
                email,
                propertyType,
                location,
                consent: consentChecked ? "Yes" : "No"
            };

            sendFormData(data, formSuccess, contactForm);
        });
    }

    // ---------------- SITE VISIT FORM ----------------
    const siteVisitForm = document.getElementById("siteVisitForm");
    if (siteVisitForm) {
        siteVisitForm.addEventListener("submit", function (e) {
            e.preventDefault();
            clearErrors(siteVisitForm);
            let formSuccess = document.getElementById("siteVisitSuccess");
            formSuccess.textContent = "";

            let fullName = document.getElementById("svFullName").value.trim();
            let phone = document.getElementById("svPhone").value.trim();
            let email = document.getElementById("svEmail").value.trim();
            let propertyType = document.getElementById("svPropertyType").value;
            let location = document.getElementById("svLocation").value.trim();
            let visitDate = document.getElementById("visitDate").value;
            let visitTime = document.getElementById("visitTime").value;
            let consentChecked = document.getElementById("consentCheckbox").checked;

            let isValid = true;

            if (fullName.length < 3) {
                showError("svFullName", "Please enter at least 3 characters.");
                isValid = false;
            }
            if (!/^[0-9]{10}$/.test(phone)) {
                showError("svPhone", "Enter a valid 10-digit phone number.");
                isValid = false;
            }
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                showError("svEmail", "Enter a valid email address.");
                isValid = false;
            }
            if (!propertyType) {
                showError("svPropertyType", "Please select a property type.");
                isValid = false;
            }
            if (location.length < 2) {
                showError("svLocation", "Enter a valid location.");
                isValid = false;
            }
            if (!visitDate) {
                showError("visitDate", "Please select a date.");
                isValid = false;
            }
            if (!visitTime) {
                showError("visitTime", "Please select a time.");
                isValid = false;
            }
            if (!consentChecked) {
                showError("consentCheckbox", "You must authorize us to contact you.");
                isValid = false;
            }

            if (!isValid) return;

            let data = {
                formType: "siteVisit",
                fullName,
                phone,
                email,
                propertyType,
                location,
                visitDate,
                visitTime,
                consent: consentChecked ? "Yes" : "No"
            };

            sendFormData(data, formSuccess, siteVisitForm);
        });
    }

    // ---------------- HELPER FUNCTIONS ----------------
    function sendFormData(data, successElement, form) {
        fetch("https://script.google.com/macros/s/AKfycbzQ55wCsGmGufqVm27CMB6rrV15AWOS38lxmYvNADMDo48cuoIAq18NsEP-HC1LETREvw/exec", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(data)
        })
        .then(res => res.json())
        .then(response => {
            if (response.status === "success") {
                successElement.style.color = "green";
                successElement.textContent = "Your form has been submitted successfully!";
                form.reset();
            } else {
                successElement.style.color = "red";
                successElement.textContent = "Something went wrong. Please try again.";
            }
        })
        .catch(() => {
            successElement.style.color = "red";
            successElement.textContent = "Error submitting the form.";
        });
    }

    function clearErrors(form) {
        form.querySelectorAll(".text-danger").forEach(el => el.textContent = "");
    }

    function showError(inputId, message) {
        let input = document.getElementById(inputId);
        if (input) {
            let errorEl = input.closest("div").querySelector(".text-danger");
            if (!errorEl) {
                errorEl = document.createElement("div");
                errorEl.classList.add("text-danger", "small", "mt-1");
                input.closest("div").appendChild(errorEl);
            }
            errorEl.textContent = message;
        }
    }
});
