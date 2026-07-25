document.addEventListener('DOMContentLoaded', function () {

  // ---- Lightbox simples para a galeria de projetos ----
  const galleryImages = document.querySelectorAll('[data-lightbox]');
  const lightboxModalEl = document.getElementById('lightboxModal');

  if (galleryImages.length && lightboxModalEl) {
    const lightboxImg = document.getElementById('lightboxImg');
    const lightboxCaption = document.getElementById('lightboxCaption');
    const lightboxModal = new bootstrap.Modal(lightboxModalEl);

    galleryImages.forEach(function (item) {
      item.addEventListener('click', function () {
        lightboxImg.src = item.getAttribute('data-full') || item.querySelector('img').src;
        lightboxCaption.textContent = item.getAttribute('data-caption') || '';
        lightboxModal.show();
      });
    });
  }

  // ---- Contadores animados (seção de números) ----
  const counters = document.querySelectorAll('[data-counter]');
  if (counters.length) {
    const animateCounter = (el) => {
      const target = parseInt(el.getAttribute('data-counter'), 10) || 0;
      const duration = 1400;
      const start = performance.now();
      function tick(now) {
        const progress = Math.min((now - start) / duration, 1);
        el.textContent = Math.floor(progress * target);
        if (progress < 1) {
          requestAnimationFrame(tick);
        } else {
          el.textContent = target;
        }
      }
      requestAnimationFrame(tick);
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.4 });

    counters.forEach((el) => observer.observe(el));
  }

  // ---- Validação simples do formulário de contato ----
  const contactForm = document.getElementById('formContato');
  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      if (!contactForm.checkValidity()) {
        e.preventDefault();
        e.stopPropagation();
      }
      contactForm.classList.add('was-validated');
    });
  }
});
