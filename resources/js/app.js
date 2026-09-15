import './bootstrap';
document.addEventListener('DOMContentLoaded', () => {

    // =========================================================
    // 1. ANIMASI TRIDATU CANVAS PARTICLES (HERO SECTION)
    // Interaksi: Partikel berkilau Tridatu bereaksi saat kursor digerakkan
    // =========================================================
    const heroSection = document.querySelector('.hero-section');

    if (heroSection) {
        heroSection.style.position = 'relative';
        heroSection.style.overflow = 'hidden';

        const canvas = document.createElement('canvas');
        canvas.style.position = 'absolute';
        canvas.style.top = '0';
        canvas.style.left = '0';
        canvas.style.width = '100%';
        canvas.style.height = '100%';
        canvas.style.pointerEvents = 'none';
        canvas.style.zIndex = '1';
        heroSection.prepend(canvas);

        const ctx = canvas.getContext('2d');
        let width, height;
        let particles = [];
        const mouse = { x: null, y: null, radius: 140 };

        // Warna Khas Tridatu (Merah, Putih, Hitam) + Aksen Gold
        const colors = ['#e63946', '#ffffff', '#2b2b2b', '#ffb703'];

        function resizeCanvas() {
            width = canvas.width = heroSection.offsetWidth;
            height = canvas.height = heroSection.offsetHeight;
        }
        window.addEventListener('resize', resizeCanvas);
        resizeCanvas();

        class Particle {
            constructor() {
                this.reset();
            }
            reset() {
                this.x = Math.random() * width;
                this.y = Math.random() * height;
                this.size = Math.random() * 3.5 + 1;
                this.vx = (Math.random() - 0.5) * 0.8;
                this.vy = (Math.random() - 0.5) * 0.8;
                this.color = colors[Math.floor(Math.random() * colors.length)];
                this.alpha = Math.random() * 0.6 + 0.3;
            }
            update() {
                this.x += this.vx;
                this.y += this.vy;

                if (this.x < 0 || this.x > width) this.vx *= -1;
                if (this.y < 0 || this.y > height) this.vy *= -1;

                // Efek dorongan saat kursor mendekat
                if (mouse.x !== null && mouse.y !== null) {
                    let dx = mouse.x - this.x;
                    let dy = mouse.y - this.y;
                    let distance = Math.sqrt(dx * dx + dy * dy);
                    if (distance < mouse.radius) {
                        let angle = Math.atan2(dy, dx);
                        let force = (mouse.radius - distance) / mouse.radius;
                        this.x -= Math.cos(angle) * force * 4;
                        this.y -= Math.sin(angle) * force * 4;
                    }
                }
            }
            draw() {
                ctx.save();
                ctx.globalAlpha = this.alpha;
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fillStyle = this.color;
                ctx.shadowBlur = 8;
                ctx.shadowColor = this.color;
                ctx.fill();
                ctx.restore();
            }
        }

        // Generate 60 partikel
        for (let i = 0; i < 60; i++) {
            particles.push(new Particle());
        }

        heroSection.addEventListener('mousemove', (e) => {
            const rect = heroSection.getBoundingClientRect();
            mouse.x = e.clientX - rect.left;
            mouse.y = e.clientY - rect.top;
        });

        heroSection.addEventListener('mouseleave', () => {
            mouse.x = null;
            mouse.y = null;
        });

        function animateCanvas() {
            ctx.clearRect(0, 0, width, height);
            particles.forEach(p => {
                p.update();
                p.draw();
            });
            requestAnimationFrame(animateCanvas);
        }
        animateCanvas();
    }


    // =========================================================
    // 2. EFEK INTERAKTIF 3D TILT / PARALLAX PADA KARTU PRODUK
    // Interaksi: Kartu miring mengikuti pergerakan kursor mouse
    // =========================================================
    const tiltElements = document.querySelectorAll('.product-card, .promo-card, .hero-visual');

    tiltElements.forEach(card => {
        card.style.transition = 'transform 0.15s ease-out, box-shadow 0.15s ease-out';
        card.style.transformStyle = 'preserve-3d';

        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            // Hitung derajat kemiringan
            const rotateX = ((y - centerY) / centerY) * -12;
            const rotateY = ((x - centerX) / centerX) * 12;

            card.style.transform = `perspective(1000px) rotateX(\({rotateX}deg) rotateY(\){rotateY}deg) scale3d(1.03, 1.03, 1.03)`;
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
        });
    });


    // =========================================================
    // 3. MIKRO INTERAKSI TOMBOL WISHLIST (HEART BURST)
    // Interaksi: Klik ❤️ memicu ledakan partikel hati melayang
    // =========================================================
    const heartButtons = document.querySelectorAll('.product-card div[style*="cursor: pointer"]');

    heartButtons.forEach(btn => {
        btn.addEventListener('click', function (e) {
            // Efek membesar sejenak pada tombol
            this.style.transition = 'transform 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275)';
            this.style.transform = 'scale(1.5)';
            setTimeout(() => this.style.transform = 'scale(1)', 200);

            // Munculkan 5-8 partikel hati yang meletup
            for (let i = 0; i < 6; i++) {
                createHeartParticle(e.clientX, e.clientY);
            }
        });
    });

    function createHeartParticle(x, y) {
        const heart = document.createElement('div');
        heart.innerHTML = '❤️';
        heart.style.position = 'fixed';
        heart.style.left = `${x}px`;
        heart.style.top = `${y}px`;
        heart.style.fontSize = `${Math.random() * 10 + 12}px`;
        heart.style.pointerEvents = 'none';
        heart.style.zIndex = '9999';
        heart.style.transition = 'all 0.8s ease-out';
        document.body.appendChild(heart);

        const destX = x + (Math.random() - 0.5) * 120;
        const destY = y - Math.random() * 100 - 30;

        requestAnimationFrame(() => {
            heart.style.transform = `translate(\({destX - x}px,\){destY - y}px) scale(0)`;
            heart.style.opacity = '0';
        });

        setTimeout(() => heart.remove(), 800);
    }


    // =========================================================
    // 4. SCROLL REVEAL ANIMATION (INTERSECTION OBSERVER)
    // Interaksi: Elemen muncul dengan animasi halus saat di-scroll
    // =========================================================
    const observerOptions = { threshold: 0.1 };

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                revealObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);

    const revealElements = document.querySelectorAll('.product-card, .promo-card, .trust-item');

    revealElements.forEach((el, index) => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(35px)';
        el.style.transition = `opacity 0.6s ease \({(index % 4) * 0.1}s, transform 0.6s ease\){(index % 4) * 0.1}s`;
        revealObserver.observe(el);
    });

});