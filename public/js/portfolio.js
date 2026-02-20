// ── Portfolio JavaScript ──────────────────────────────────────

document.addEventListener('DOMContentLoaded', () => {

    // Navbar shrink on scroll
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', () => {
        navbar?.classList.toggle('scrolled', window.scrollY > 50);
        scrollTopBtn?.classList.toggle('visible', window.scrollY > 400);
    });

    // Mobile nav toggle
    const navToggle = document.querySelector('.nav-toggle');
    const navLinks = document.querySelector('.nav-links');
    navToggle?.addEventListener('click', () => navLinks?.classList.toggle('open'));
    document.querySelectorAll('.nav-links a').forEach(a => a.addEventListener('click', () => navLinks?.classList.remove('open')));

    // Smooth active link highlight
    const sections = document.querySelectorAll('section[id]');
    const navAnchors = document.querySelectorAll('.nav-links a');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                navAnchors.forEach(a => {
                    a.classList.toggle('active', a.getAttribute('href') === '#' + entry.target.id);
                });
            }
        });
    }, { threshold: 0.4 });
    sections.forEach(s => observer.observe(s));

    // Skill bar animation on scroll
    const skillFills = document.querySelectorAll('.skill-fill');
    const skillObserver = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                el.style.width = el.dataset.level + '%';
                skillObserver.unobserve(el);
            }
        });
    }, { threshold: 0.3 });
    skillFills.forEach(el => skillObserver.observe(el));

    // Typed text effect in hero
    const typedEl = document.getElementById('typed-text');
    if (typedEl) {
        const texts = ['IT Student', 'Web Developer', 'Problem Solver', 'Laravel Enthusiast'];
        let tIdx = 0, cIdx = 0, deleting = false;
        function type() {
            const current = texts[tIdx];
            typedEl.textContent = deleting ? current.slice(0, cIdx--) : current.slice(0, cIdx++);
            let delay = deleting ? 60 : 120;
            if (!deleting && cIdx > current.length) { delay = 1800; deleting = true; }
            else if (deleting && cIdx < 0) { deleting = false; tIdx = (tIdx + 1) % texts.length; delay = 400; }
            setTimeout(type, delay);
        }
        type();
    }

    // Scroll-to-top button
    const scrollTopBtn = document.querySelector('.scroll-top');
    scrollTopBtn?.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

    // Fade-in on scroll
    const fadeEls = document.querySelectorAll('.project-card, .skill-category, .about-detail');
    const fadeObs = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.style.opacity = '1';
                e.target.style.transform = 'translateY(0)';
                fadeObs.unobserve(e.target);
            }
        });
    }, { threshold: 0.15 });
    fadeEls.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        fadeObs.observe(el);
    });

    // Contact form validation feedback
    const form = document.getElementById('contact-form');
    form?.addEventListener('submit', (e) => {
        const btn = form.querySelector('button[type=submit]');
        if (btn) { btn.disabled = true; btn.textContent = 'Sending...'; }
    });

    // Admin sidebar active
    const currentPath = window.location.pathname;
    document.querySelectorAll('.admin-nav a').forEach(a => {
        if (a.getAttribute('href') === currentPath) a.classList.add('active');
    });

});
