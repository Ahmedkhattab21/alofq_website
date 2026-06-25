document.addEventListener('DOMContentLoaded', () => {
    initAboutHero();
    initAboutCounters();
});

function initAboutHero() {
    const canvas = document.getElementById('about-hero-canvas');

    if (!canvas || typeof THREE === 'undefined' || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }

    const section = canvas.closest('.about-hero');
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, 1, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({ canvas, alpha: true, antialias: true });
    const particlesCount = 900;
    const positions = new Float32Array(particlesCount * 3);

    for (let index = 0; index < positions.length; index += 1) {
        positions[index] = (Math.random() - 0.5) * 15;
    }

    const particlesGeometry = new THREE.BufferGeometry();
    particlesGeometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));

    const particles = new THREE.Points(
        particlesGeometry,
        new THREE.PointsMaterial({
            size: 0.016,
            color: 0xbc0007,
            transparent: true,
            opacity: 0.45
        })
    );

    scene.add(particles);

    const cubeGeometry = new THREE.BoxGeometry(0.5, 0.5, 0.5);
    const cubeMaterial = new THREE.MeshBasicMaterial({
        color: 0x4d4d4d,
        wireframe: true,
        transparent: true,
        opacity: 0.09
    });

    for (let index = 0; index < 14; index += 1) {
        const cube = new THREE.Mesh(cubeGeometry, cubeMaterial);
        cube.position.set(
            (Math.random() - 0.5) * 10,
            (Math.random() - 0.5) * 8,
            (Math.random() - 0.5) * 10
        );
        cube.rotation.set(Math.random(), Math.random(), Math.random());
        scene.add(cube);
    }

    camera.position.z = 3;

    let pointerX = 0;
    let pointerY = 0;

    const resize = () => {
        const width = section.clientWidth;
        const height = section.clientHeight;

        camera.aspect = width / height;
        camera.updateProjectionMatrix();
        renderer.setSize(width, height, false);
        renderer.setPixelRatio(Math.min(window.devicePixelRatio || 1, 2));
    };

    document.addEventListener('pointermove', (event) => {
        pointerX = (event.clientX / window.innerWidth) - 0.5;
        pointerY = (event.clientY / window.innerHeight) - 0.5;
    });

    const animate = () => {
        requestAnimationFrame(animate);
        particles.rotation.y += 0.001;
        particles.rotation.x += 0.0005;
        scene.rotation.y += ((pointerX * 0.05) - scene.rotation.y) * 0.08;
        scene.rotation.x += ((pointerY * 0.05) - scene.rotation.x) * 0.08;
        renderer.render(scene, camera);
    };

    resize();
    animate();
    window.addEventListener('resize', resize);
}

function initAboutCounters() {
    const counters = document.querySelectorAll('[data-about-count]');

    if (!counters.length) {
        return;
    }

    const animateCounter = (element) => {
        const target = Number.parseInt(element.dataset.aboutCount, 10);
        const start = performance.now();
        const duration = 1800;

        const update = (time) => {
            const progress = Math.min((time - start) / duration, 1);
            element.textContent = `${Math.floor(progress * (2 - progress) * target)}+`;

            if (progress < 1) {
                requestAnimationFrame(update);
            } else {
                element.textContent = `${target}+`;
            }
        };

        requestAnimationFrame(update);
    };

    if (!('IntersectionObserver' in window)) {
        counters.forEach(animateCounter);
        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting && !entry.target.dataset.counted) {
                entry.target.dataset.counted = 'true';
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });

    counters.forEach((counter) => observer.observe(counter));
}
