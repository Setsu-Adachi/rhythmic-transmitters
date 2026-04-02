/* ============================================================
   RHYTHMIC TRANSMITTERS — main.js
   Bubble animation + side nav + scroll effects
   ============================================================ */

document.addEventListener('DOMContentLoaded', () => {

    // -------------------------------------------------------
    // 1. FLOATING BUBBLE ANIMATION (Hero)
    // -------------------------------------------------------
    const canvas = document.getElementById('bubblesCanvas');
    if (canvas) {
        const ctx = canvas.getContext('2d');

        const bubbles = [
            { x: 0.14, y: 0.42, r: 180, color: 'rgba(169,185,200,0.85)', vx: 0.12, vy: -0.08 },
            { x: 0.91, y: 0.22, r: 200, color: 'rgba(235,175,130,0.80)', vx: -0.10, vy: 0.09 },
            { x: 0.26, y: 0.78, r: 160, color: 'rgba(205,145,135,0.78)', vx: 0.09, vy: -0.06 },
            { x: 0.65, y: 0.45, r: 110, color: 'rgba(170,130,160,0.65)', vx: -0.08, vy: 0.10 },
            { x: 0.88, y: 0.82, r: 155, color: 'rgba(140,185,180,0.72)', vx: -0.07, vy: -0.09 },
            { x: 0.50, y: 0.12, r: 80, color: 'rgba(200,180,210,0.50)', vx: 0.06, vy: 0.08 },
        ];

        function resizeCanvas() {
            canvas.width = canvas.offsetWidth;
            canvas.height = canvas.offsetHeight;
        }
        resizeCanvas();
        window.addEventListener('resize', resizeCanvas);

        let time = 0;

        function drawBubble(b) {
            const w = canvas.width, h = canvas.height;
            const px = b.x * w + Math.sin(time * 0.0008 + b.vx * 10) * 18;
            const py = b.y * h + Math.cos(time * 0.0006 + b.vy * 10) * 14;

            // Soft gradient sphere
            const grad = ctx.createRadialGradient(
                px - b.r * 0.28, py - b.r * 0.28, b.r * 0.08,
                px, py, b.r
            );
            const base = b.color.replace('rgba(', '').replace(')', '').split(',');
            const r = parseInt(base[0]), g = parseInt(base[1]), bl = parseInt(base[2]);
            const alpha = parseFloat(base[3]);
            grad.addColorStop(0, `rgba(${r+30},${g+30},${bl+30},${alpha})`);
            grad.addColorStop(0.5, `rgba(${r},${g},${bl},${alpha * 0.9})`);
            grad.addColorStop(1, `rgba(${r-20},${g-20},${bl-20},0)`);

            ctx.beginPath();
            ctx.arc(px, py, b.r, 0, Math.PI * 2);
            ctx.fillStyle = grad;
            ctx.fill();
        }

        function animate(ts) {
            time = ts;
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            bubbles.forEach(drawBubble);
            requestAnimationFrame(animate);
        }
        requestAnimationFrame(animate);
    }

    // -------------------------------------------------------
    // 2. SIDE NAV — active dot based on scroll section
    // -------------------------------------------------------
    const sections = document.querySelectorAll('[data-section]');
    const dots = document.querySelectorAll('.sidenav__dot');

    // Dark section indices (for dot colour flip)
    const darkSections = [1, 3]; // cosmos, process

    function updateSidenav() {
        let current = 0;
        const scrollY = window.scrollY + window.innerHeight * 0.4;
        sections.forEach(sec => {
            if (sec.offsetTop <= scrollY) {
                current = parseInt(sec.dataset.section);
            }
        });
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === current);
            dot.classList.toggle('sidenav__dot--dark', darkSections.includes(current));
        });
    }
    window.addEventListener('scroll', updateSidenav, { passive: true });
    updateSidenav();

    // Smooth scroll on dot click
    dots.forEach((dot, i) => {
        dot.addEventListener('click', e => {
            e.preventDefault();
            const target = document.querySelector(dot.getAttribute('href'));
            if (target) target.scrollIntoView({ behavior: 'smooth' });
        });
    });

    // -------------------------------------------------------
    // 3. FADE-IN SCROLL ANIMATIONS
    // -------------------------------------------------------
    const fadeEls = document.querySelectorAll(
        '.cosmos__card, .process__card, .gallery__item, .collaborators__card, .about__title, .about__text, .about__quote, .cosmos__header, .process__title, .gallery__title, .collaborators__title'
    );
    fadeEls.forEach(el => el.classList.add('fade-in'));

    const observer = new IntersectionObserver(entries => {
        entries.forEach((entry, i) => {
            if (entry.isIntersecting) {
                setTimeout(() => entry.target.classList.add('visible'), i * 60);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    fadeEls.forEach(el => observer.observe(el));

    // -------------------------------------------------------
    // 4. COSMOS CARD — subtle hover parallax symbol
    // -------------------------------------------------------
    document.querySelectorAll('.cosmos__card').forEach(card => {
        card.addEventListener('mousemove', e => {
            const rect = card.getBoundingClientRect();
            const cx = (e.clientX - rect.left) / rect.width - 0.5;
            const cy = (e.clientY - rect.top) / rect.height - 0.5;
            const sym = card.querySelector('.cosmos__card-symbol');
            if (sym) {
                sym.style.transform = `translate(calc(-50% + ${cx * 14}px), calc(-50% + ${cy * 14}px))`;
            }
        });
        card.addEventListener('mouseleave', () => {
            const sym = card.querySelector('.cosmos__card-symbol');
            if (sym) sym.style.transform = 'translate(-50%,-50%)';
        });
    });

});
