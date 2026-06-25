document.addEventListener('DOMContentLoaded', () => {
    initServiceCardTilt();
    initServiceParallax();
});

function initServiceCardTilt() {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches || window.matchMedia('(pointer: coarse)').matches) {
        return;
    }

    document.querySelectorAll('[data-tilt-card]').forEach((card) => {
        card.addEventListener('pointermove', (event) => {
            const rect = card.getBoundingClientRect();
            const x = event.clientX - rect.left;
            const y = event.clientY - rect.top;
            const rotateY = ((x / rect.width) - 0.5) * 8;
            const rotateX = (((y / rect.height) - 0.5) * -8);

            card.style.setProperty('--tilt-x', `${rotateX}deg`);
            card.style.setProperty('--tilt-y', `${rotateY}deg`);
            card.style.setProperty('--glow-x', `${(x / rect.width) * 100}%`);
            card.style.setProperty('--glow-y', `${(y / rect.height) * 100}%`);
        });

        card.addEventListener('pointerleave', () => {
            card.style.setProperty('--tilt-x', '0deg');
            card.style.setProperty('--tilt-y', '0deg');
            card.style.setProperty('--glow-x', '50%');
            card.style.setProperty('--glow-y', '50%');
        });
    });
}

function initServiceParallax() {
    const hero = document.querySelector('.services-hero');
    const shapes = document.querySelectorAll('.services-hero .services-shape');

    if (!hero || !shapes.length || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }

    hero.addEventListener('pointermove', (event) => {
        const x = (event.clientX / window.innerWidth) - 0.5;
        const y = (event.clientY / window.innerHeight) - 0.5;

        shapes.forEach((shape, index) => {
            const strength = (index + 1) * 10;
            shape.style.translate = `${x * strength}px ${y * strength}px`;
        });
    });

    hero.addEventListener('pointerleave', () => {
        shapes.forEach((shape) => {
            shape.style.translate = '0 0';
        });
    });
}
