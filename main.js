// ═══ SCROLL REVEAL ═══
const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.classList.add('vis');
      revealObserver.unobserve(e.target);
    }
  });
}, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

// ═══ PLANET CARD CURSOR TILT ═══
document.querySelectorAll('.planet-card').forEach(card => {
  card.addEventListener('mousemove', (e) => {
    const rect = card.getBoundingClientRect();
    const x = (e.clientX - rect.left) / rect.width - 0.5;
    const y = (e.clientY - rect.top) / rect.height - 0.5;
    card.style.transform = `scale(1.04) rotateY(${x * 8}deg) rotateX(${-y * 8}deg)`;
  });
  card.addEventListener('mouseleave', () => {
    card.style.transform = '';
  });
});

// ═══ ACTIVE NAV HIGHLIGHT ═══
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.planet-nav a');

const navObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      navLinks.forEach(link => {
        link.style.opacity = link.getAttribute('href') === '#' + entry.target.id ? '1' : '0.35';
      });
    }
  });
}, { threshold: 0.5 });

sections.forEach(section => navObserver.observe(section));

// ═══ SMOOTH PARALLAX ON HERO BLOBS ═══
const blobs = document.querySelectorAll('.hero-blob');

window.addEventListener('scroll', () => {
  const scrollY = window.scrollY;
  blobs.forEach((blob, i) => {
    const speed = 0.08 + (i * 0.03);
    blob.style.transform = `translateY(${scrollY * speed}px)`;
  });
}, { passive: true });
