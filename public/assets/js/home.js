document.addEventListener('DOMContentLoaded', () => {
    initHeaderMenu();
    initMobileMenu();
    initThreeBackground();
    initRevealAnimations();
    initCounters();
});

function initHeaderMenu() {
    const menu = document.querySelector('[data-header-menu]');

    if (!menu) {
        return;
    }

    const trigger = menu.querySelector('[data-header-menu-trigger]');
    const dialog = menu.querySelector('[data-header-menu-dialog]');

    const closeMenu = () => {
        dialog.hidden = true;
        trigger.setAttribute('aria-expanded', 'false');
    };

    const openMenu = () => {
        dialog.hidden = false;
        trigger.setAttribute('aria-expanded', 'true');
    };

    trigger.addEventListener('click', () => {
        if (dialog.hidden) {
            openMenu();
        } else {
            closeMenu();
        }
    });

    document.addEventListener('click', (event) => {
        if (!menu.contains(event.target)) {
            closeMenu();
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !dialog.hidden) {
            closeMenu();
            trigger.focus();
        }
    });
}

function initMobileMenu() {
    const trigger = document.querySelector('[data-mobile-menu-trigger]');
    const menu = document.querySelector('[data-mobile-menu]');
    const backdrop = document.querySelector('[data-mobile-menu-backdrop]');
    const closeButton = document.querySelector('[data-mobile-menu-close]');

    if (!trigger || !menu || !backdrop || !closeButton) {
        return;
    }

    const closeMenu = (restoreFocus = false) => {
        menu.classList.remove('is-open');
        backdrop.classList.remove('is-open');
        trigger.classList.remove('is-open');
        trigger.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('mobile-menu-open');

        window.setTimeout(() => {
            if (!menu.classList.contains('is-open')) {
                menu.hidden = true;
                backdrop.hidden = true;
            }
        }, 280);

        if (restoreFocus) {
            trigger.focus();
        }
    };

    const openMenu = () => {
        menu.hidden = false;
        backdrop.hidden = false;

        window.requestAnimationFrame(() => {
            menu.classList.add('is-open');
            backdrop.classList.add('is-open');
            trigger.classList.add('is-open');
        });

        trigger.setAttribute('aria-expanded', 'true');
        document.body.classList.add('mobile-menu-open');
        closeButton.focus();
    };

    trigger.addEventListener('click', () => {
        if (trigger.getAttribute('aria-expanded') === 'true') {
            closeMenu();
        } else {
            openMenu();
        }
    });

    closeButton.addEventListener('click', () => closeMenu(true));
    backdrop.addEventListener('click', () => closeMenu());
    menu.querySelectorAll('a').forEach((link) => link.addEventListener('click', () => closeMenu()));

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && trigger.getAttribute('aria-expanded') === 'true') {
            closeMenu(true);
        }
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768 && trigger.getAttribute('aria-expanded') === 'true') {
            closeMenu();
        }
    });
}

function initThreeBackground() {
    const container = document.getElementById('threejs-canvas-container');

    if (!container || typeof THREE === 'undefined' || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }

    const width = container.clientWidth || window.innerWidth;
    const height = container.clientHeight || window.innerHeight;
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, width / height, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });

    renderer.setSize(width, height);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio || 1, 2));
    container.appendChild(renderer.domElement);

    scene.add(new THREE.AmbientLight(0xffffff, 0.8));

    const pointLight = new THREE.PointLight(0xffffff, 1);
    pointLight.position.set(10, 10, 10);
    scene.add(pointLight);

    const colors = [0xbc0007, 0x4d4d4d, 0x514c4b, 0xbc0007, 0x656565, 0x313030];
    const shapes = [];

    for (let index = 0; index < 15; index += 1) {
        const type = Math.floor(Math.random() * 3);
        let geometry;

        if (type === 0) {
            geometry = new THREE.BoxGeometry(0.5, 1.5, 0.2);
        } else if (type === 1) {
            geometry = new THREE.CylinderGeometry(0.3, 0.3, 1, 4);
        } else {
            geometry = new THREE.BoxGeometry(0.8, 0.8, 0.8);
        }

        const material = new THREE.MeshPhongMaterial({
            color: colors[Math.floor(Math.random() * colors.length)],
            transparent: true,
            opacity: 0.15,
            shininess: 80
        });
        const mesh = new THREE.Mesh(geometry, material);

        mesh.position.set(
            (Math.random() - 0.5) * 20,
            (Math.random() - 0.5) * 12,
            (Math.random() - 0.5) * 5
        );
        mesh.rotation.set(Math.random() * Math.PI, Math.random() * Math.PI, 0);
        mesh.userData = {
            rotationSpeed: (Math.random() - 0.5) * 0.005,
            offset: Math.random() * Math.PI * 2
        };

        scene.add(mesh);
        shapes.push(mesh);
    }

    camera.position.z = 10;

    const animate = () => {
        requestAnimationFrame(animate);
        const time = Date.now() * 0.0005;

        shapes.forEach((mesh) => {
            mesh.rotation.x += mesh.userData.rotationSpeed;
            mesh.rotation.y += mesh.userData.rotationSpeed;
            mesh.position.y += Math.sin(time + mesh.userData.offset) * 0.005;
        });

        renderer.render(scene, camera);
    };

    animate();

    window.addEventListener('resize', () => {
        const nextWidth = container.clientWidth || window.innerWidth;
        const nextHeight = container.clientHeight || window.innerHeight;

        camera.aspect = nextWidth / nextHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(nextWidth, nextHeight);
    });
}

function initRevealAnimations() {
    const elements = document.querySelectorAll('.reveal');

    if (!('IntersectionObserver' in window)) {
        elements.forEach((element) => element.classList.add('active'));
        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    elements.forEach((element) => observer.observe(element));
}

function initCounters() {
    const counters = document.querySelectorAll('.counter');

    if (!('IntersectionObserver' in window)) {
        counters.forEach((counter) => {
            counter.textContent = counter.dataset.target;
        });
        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting || entry.target.classList.contains('counted')) {
                return;
            }

            animateCounter(entry.target);
            entry.target.classList.add('counted');
            observer.unobserve(entry.target);
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    counters.forEach((counter) => observer.observe(counter));
}

function animateCounter(element) {
    const target = Number.parseInt(element.dataset.target, 10);
    const duration = 2000;
    const startTime = performance.now();

    const update = (currentTime) => {
        const progress = Math.min((currentTime - startTime) / duration, 1);
        const easedProgress = progress * (2 - progress);

        element.textContent = Math.floor(easedProgress * target);

        if (progress < 1) {
            requestAnimationFrame(update);
        } else {
            element.textContent = target;
        }
    };

    requestAnimationFrame(update);
}
