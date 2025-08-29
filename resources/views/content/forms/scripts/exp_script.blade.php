<script>
    document.addEventListener('DOMContentLoaded', function () {
        const inputs = document.querySelectorAll('#siteVisitModal .dark-input');
        const form = document.getElementById('siteVisitForm');
        const formSuccess = document.getElementById('siteVisitSuccess');

        inputs.forEach(input => {
            input.addEventListener('input', () => {
                if (input.value.trim() !== '') {
                    input.classList.add('filled');
                } else {
                    input.classList.remove('filled');
                }
            });

            if (input.value.trim() !== '') {
                input.classList.add('filled');
            }
        });

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            setTimeout(() => {
                formSuccess.textContent = "Thank you! We’ll confirm your visit shortly.";

                inputs.forEach(input => {
                    input.classList.remove('filled');
                    input.value = '';
                });
            }, 1000);
        });
    });
</script>