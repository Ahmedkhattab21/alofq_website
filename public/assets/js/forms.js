document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-character-field]').forEach((field) => {
        const counter = field.parentElement.querySelector('[data-character-count]');
        const max = field.maxLength;
        const update = () => {
            counter.textContent = `${field.value.length} / ${max}`;
        };

        field.addEventListener('input', update);
        update();
    });

    document.querySelectorAll('[data-quote-form], .forms-grid-fields').forEach((form) => {
        form.addEventListener('submit', () => {
            if (!form.checkValidity()) {
                return;
            }

            const button = form.querySelector('button[type="submit"]');
            if (!button) {
                return;
            }

            button.disabled = true;
            button.style.opacity = '.72';

            const label = button.querySelector('span:first-child');
            if (label) {
                label.textContent = 'جارٍ إرسال الطلب...';
            }
        });
    });
});
