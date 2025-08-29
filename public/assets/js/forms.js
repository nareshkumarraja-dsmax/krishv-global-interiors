document.addEventListener("DOMContentLoaded", function () {
    const WEB_APP_URL = "https://script.google.com/macros/s/AKfycbz3xk7slpIxxj-sZz5HxCc8kWf1Ksv-xh499COQ4-I_pDPKVgjVWeT3RIGFLECGz3-92w/exec";

    // Contact Form
    document.getElementById("contactForm").addEventListener("submit", function (e) {
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

        submitForm(WEB_APP_URL, formData, "formSuccess");
    });

    // Site Visit Form
    document.getElementById("siteVisitForm").addEventListener("submit", function (e) {
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

        submitForm(WEB_APP_URL, formData, "siteVisitSuccess");
    });
});

function submitForm(url, data, successElementId) {
    fetch(url, {
        method: "POST",
        body: JSON.stringify(data)
    })
    .then(res => res.json())
    .then(res => {
        document.getElementById(successElementId).innerText = res.message;
    })
    .catch(err => console.error(err));
}

function validateContactForm() {
    let isValid = true;
    if (document.getElementById("fullName").value.trim() === "") isValid = false;
    if (document.getElementById("phone").value.trim() === "") isValid = false;
    if (document.getElementById("email").value.trim() === "") isValid = false;
    return isValid;
}

function validateSiteVisitForm() {
    let isValid = true;
    if (document.getElementById("svFullName").value.trim() === "") isValid = false;
    if (document.getElementById("svPhone").value.trim() === "") isValid = false;
    if (document.getElementById("svEmail").value.trim() === "") isValid = false;
    if (document.getElementById("visitDate").value === "") isValid = false;
    if (document.getElementById("visitTime").value === "") isValid = false;
    return isValid;
}
