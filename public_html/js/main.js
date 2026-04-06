document.addEventListener('DOMContentLoaded', () => {
    const nav = document.getElementById('nav');
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('navLinks');
    const form = document.getElementById('contactForm');
    const formStatus = document.getElementById('formStatus');

    // Sticky nav on scroll
    window.addEventListener('scroll', () => {
        nav.classList.toggle('nav--scrolled', window.scrollY > 50);
    }, { passive: true });

    // Mobile menu toggle
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navLinks.classList.toggle('open');
        document.body.style.overflow = navLinks.classList.contains('open') ? 'hidden' : '';
    });

    // Close mobile menu on link click
    navLinks.querySelectorAll('.nav__link').forEach(link => {
        link.addEventListener('click', () => {
            hamburger.classList.remove('active');
            navLinks.classList.remove('open');
            document.body.style.overflow = '';
        });
    });

    // Close menu when clicking the backdrop area
    navLinks.addEventListener('click', (e) => {
        if (e.target === navLinks) {
            hamburger.classList.remove('active');
            navLinks.classList.remove('open');
            document.body.style.overflow = '';
        }
    });

    // Scroll reveal
    const revealElements = document.querySelectorAll('.feature-card, .service-card, .review-card, .services__full, .about__grid, .contact__form, .contact__info');
    revealElements.forEach(el => el.classList.add('reveal'));

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

    revealElements.forEach(el => observer.observe(el));

    // Contact form
    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        formStatus.className = 'form-status';
        formStatus.textContent = '';

        // Clear previous errors
        form.querySelectorAll('.error').forEach(el => el.classList.remove('error'));

        const name = form.name.value.trim();
        const email = form.email.value.trim();
        const phone = form.phone.value.trim();
        const message = form.message.value.trim();
        let valid = true;

        if (!name) { form.name.classList.add('error'); valid = false; }
        if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) { form.email.classList.add('error'); valid = false; }
        if (!phone) { form.phone.classList.add('error'); valid = false; }
        if (!message) { form.message.classList.add('error'); valid = false; }

        if (!valid) {
            formStatus.className = 'form-status error-msg';
            formStatus.textContent = 'Please fill in all required fields correctly.';
            return;
        }

        const submitBtn = form.querySelector('button[type="submit"]');
        submitBtn.disabled = true;
        submitBtn.textContent = 'Sending...';

        try {
            const res = await fetch('send-mail.php', {
                method: 'POST',
                body: new FormData(form)
            });
            const data = await res.json();

            if (data.success) {
                formStatus.className = 'form-status success';
                formStatus.textContent = data.message;
                form.reset();
            } else {
                formStatus.className = 'form-status error-msg';
                formStatus.textContent = data.message;
            }
        } catch {
            formStatus.className = 'form-status error-msg';
            formStatus.textContent = 'Something went wrong. Please call us instead.';
        }

        submitBtn.disabled = false;
        submitBtn.textContent = 'Send Message';
    });
});
