document.addEventListener("DOMContentLoaded", function () {
    const WEB_APP_URL = "https://script.google.com/macros/s/AKfycbzKuwj18Vgqj_MgTl63LIXOZntGEUpCLk8BxgmzNx7GGc3dBIght-qWZumCnzX37aMfWA/exec";

    function showMessage(id, msg, color = "red") {
        const el = document.getElementById(id);
        if (el) {
            el.innerText = msg;
            el.style.color = color;
        }
    }

    function clearMessages(ids) {
        ids.forEach(id => showMessage(id, ""));
    }

    function validatePageContactForm() {
        let valid = true;
        clearMessages(["errorPCName", "errorPCEmail", "errorPCPhone", "errorPCMessage"]);

        const name = document.getElementById("pageName").value.trim();
        const email = document.getElementById("pageEmail").value.trim();
        const phone = document.getElementById("pagePhone").value.trim();
        const message = document.getElementById("pageMessage").value.trim();

        if (name.length < 3) { showMessage("errorPCName", "Please enter at least 3 characters."); valid = false; }
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) { showMessage("errorPCEmail", "Enter a valid email address."); valid = false; }
        if (!/^\d{10,15}$/.test(phone)) { showMessage("errorPCPhone", "Enter a valid phone number."); valid = false; }
        if (message.length < 1) { showMessage("errorPCMessage", "Please enter your message."); valid = false; }

        return valid;
    }

    document.getElementById("pageContactForm").addEventListener("submit", function (e) {
        e.preventDefault();
        if (!validatePageContactForm()) return;

        const form = e.target;
        const formData = new FormData(form); // ✅ matches your other forms

        const successBox = document.getElementById("pageContactSuccess");
        successBox.innerText = "⏳ Submitting...";
        successBox.style.color = "#ff9800";

        fetch(WEB_APP_URL, {
            method: "POST",
            body: formData // ✅ No Content-Type header here
        })
        .then(res => res.json())
        .then(res => {
            if (res.status === "success") {
                successBox.innerText = "✅ " + res.message;
                successBox.style.color = "green";
                form.reset();
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
    });
});
