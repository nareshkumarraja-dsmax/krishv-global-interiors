<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('applyNowModal');
        if (!modal) return;

        const form = document.getElementById('ApplyNowForm');
        const inputs = form.querySelectorAll('.dark-input');
        const formSuccess = document.getElementById('applyNowSuccess');

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

                const select = document.getElementById('applyPosition');
                if (select) select.selectedIndex = 0;
            }, 800);
        });
    });
</script>