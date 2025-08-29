// document.getElementById("siteVisitForm").addEventListener("submit", async function (e) {
//     e.preventDefault();

//     const formData = {
//         formType: "siteVisit",
//         fullName: document.getElementById("svFullName").value,
//         phone: document.getElementById("svPhone").value,
//         email: document.getElementById("svEmail").value,
//         visitDate: document.getElementById("visitDate").value,
//         preferredTime: document.getElementById("preferredTime").value,
//         location: document.getElementById("svLocation").value,
//         consent: document.getElementById("svConsent").checked ? "Yes" : "No"
//     };

//     const response = await fetch("https://script.google.com/macros/s/AKfycbx87aT3GM1P7KWcYMn_JVbNJNYUPpMRt-gaUT4v4LMR-ijxJbV90BQxpl0R3DGYSfUKtQ/exec", {
//         method: "POST",
//         body: JSON.stringify(formData)
//     });

//     const result = await response.json();
//     alert(result.message);
//     e.target.reset();
// });









document.getElementById("siteVisitForm").addEventListener("submit", async function (e) {
    e.preventDefault();

    const formData = {
        formType: "siteVisit",
        fullName: document.getElementById("svFullName").value,
        phone: document.getElementById("svPhone").value,
        email: document.getElementById("svEmail").value,
        visitDate: document.getElementById("visitDate").value,
        preferredTime: document.getElementById("visitTime").value,
        location: document.getElementById("svLocation").value,
        consent: document.getElementById("consentCheckbox").checked ? "Yes" : "No"
    };

    const response = await fetch("https://script.google.com/macros/s/AKfycbx87aT3GM1P7KWcYMn_JVbNJNYUPpMRt-gaUT4v4LMR-ijxJbV90BQxpl0R3DGYSfUKtQ/exec", {
        method: "POST",
        body: JSON.stringify(formData)
    });

    const result = await response.json();
    alert(result.message);
    e.target.reset();
});
