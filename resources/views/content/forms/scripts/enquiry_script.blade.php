<script>
    document.addEventListener('DOMContentLoaded', function () {
        const inputs = document.querySelectorAll('#contactModal .dark-input');
        const form = document.getElementById('contactForm');
        const formSuccess  = document.getElementById('enquiryFormSuccess');
        const formError    = document.getElementById('enquiryFormError');
        const csrfToken    = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        function toggleFilledClass(input) {
            if (input.value.trim() !== '') {
                input.classList.add('filled');
            } else {
                input.classList.remove('filled');
            }
        }

        inputs.forEach(input => {
            toggleFilledClass(input);
            input.addEventListener('input', () => toggleFilledClass(input));
        });

        form.addEventListener('submit', async function (e) {
            e.preventDefault();
            formSuccess.textContent = '';
            formError.textContent = '';
            btn.disabled = true;

            try {
            const formData = new FormData(form);
            const payload = Object.fromEntries(formData.entries());

            const resp = await fetch(form.getAttribute('action'), {
                method: 'POST',
                headers: {
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json',
                'Content-Type': 'application/json'
                },
                body: JSON.stringify(payload)
            });

            const data = await resp.json();

            if (resp.ok && data.ok) {
                formSuccess.textContent = data.message || "Thank you! We’ll contact you shortly.";
                inputs.forEach(input => { input.classList.remove('filled'); input.value = ''; });
            } else {
                formError.textContent = (data && data.message) ? data.message : 'Submission failed. Please try again.';
            }
            } catch (err) {
            formError.textContent = 'Network error. Please try again.';
            } finally {
            btn.disabled = false;
            }
        });
    });
</script>
