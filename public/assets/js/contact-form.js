document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");
    if (!form) return;

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        document.querySelectorAll(".text-danger").forEach(el => el.textContent = "");
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
            document.getElementById("errorFullName").textContent = "Please enter at least 3 characters.";
            isValid = false;
        }

        let phoneRegex = /^[0-9]{10}$/;
        if (!phoneRegex.test(phone)) {
            document.getElementById("errorPhone").textContent = "Enter a valid 10-digit phone number.";
            isValid = false;
        }

        let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            document.getElementById("errorEmail").textContent = "Enter a valid email address.";
            isValid = false;
        }

        if (!propertyType) {
            document.getElementById("errorPropertyType").textContent = "Please select a property type.";
            isValid = false;
        }

        if (location.length < 2) {
            document.getElementById("errorLocation").textContent = "Enter a valid location.";
            isValid = false;
        }

        if (!consentChecked) {
            document.getElementById("errorConsent").textContent = "You must authorize us to contact you.";
            isValid = false;
        }

        if (!isValid) return;

        let data = {
            fullName: fullName,
            phone: phone,
            email: email,
            propertyType: propertyType,
            location: location,
            consent: consentChecked ? "Yes" : "No"
        };

        fetch("https://script.google.com/macros/s/AKfycbwDoolC1nTVO6pjKYLe4syf4IyRSCBYa0cM8OG_mHwGRS1x4KlPbMvWCjlMJPJt2J_PHg/exec", {
            method: "POST",
            mode: "no-cors",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(data)
        });

        formSuccess.style.color = "green";
        formSuccess.textContent = "Your form has been submitted successfully!";
        form.reset();
    });
});
