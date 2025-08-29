<script>
    document.addEventListener('DOMContentLoaded', function () {
        const inputs = document.querySelectorAll('#contactModal .dark-input');
        const form = document.getElementById('contactForm');
        const formSuccess = document.getElementById('formSuccess');

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

        form.addEventListener('submit', function (e) {
        e.preventDefault();

        setTimeout(() => {
            formSuccess.textContent = "Thank you! We’ll get back to you soon.";

            inputs.forEach(input => {
                input.classList.remove('filled');
                input.value = '';
            });
        }, 1000);
    });
});
</script>