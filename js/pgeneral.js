document.addEventListener('DOMContentLoaded', function () {
  const asesorateBtn = document.getElementById('presupestarBtn');
  const iniciobtn = document.getElementById('iniciobtn');

  asesorateBtn.addEventListener('click', function () {
    window.open(
      'https://wa.me/59892150899?text=Buenos%20días,%20me%20comunico%20para%20obtener%20información%20sobre%20sus%20servicios.',
      '_blank'
    );
  });

  iniciobtn.addEventListener('click', function () {
    window.location.href = 'https://pixelshft.com/inicio/';
  });

  document.getElementById('irplanes').addEventListener('click', function () {
    const planesSection = document.querySelector('#planes');
    if (planesSection) {
      planesSection.scrollIntoView({ behavior: 'smooth' });
    }
  });

  document.getElementById('ircontacto').addEventListener('click', function () {
    const contactoSection = document.querySelector('#contacto');
    if (contactoSection) {
      contactoSection.scrollIntoView({ behavior: 'smooth' });
    }
  });

  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth',
      });
    });
  });

  const scrollSVGContenedor = document.querySelectorAll('.svg-contenedor.scroll-carga');

  const svgObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const container = entry.target;
        container.innerHTML = container.getAttribute('data-src');
        container.classList.remove('scroll-carga');
        observer.unobserve(container);
      }
    });
  });

  scrollSVGContenedor.forEach((container) => {
    svgObserver.observe(container);
  });

  document.getElementById('enviar').addEventListener('click', function () {
    var nombre = document.querySelector('[name="nombre"]').value;
    var email = document.querySelector('[name="email"]').value;
    var telefono = document.querySelector('[name="telefono"]').value;
    var mensaje = document.querySelector('[name="mensaje"]').value;

    if (nombre && email && telefono && mensaje) {
      var notification = document.getElementById('notification');
      notification.style.display = 'block';

      var progressFill = document.getElementById('progress-fill');
      progressFill.style.width = '0%';

      progressFill.offsetWidth;

      setTimeout(function () {
        progressFill.style.width = '100%';
      }, 10);

      setTimeout(function () {
        notification.style.display = 'none';
      }, 3000);

      document.getElementById('submitBtn').click();
    }
  });

  window.onload = function () {
    if (window.location.search.indexOf('status=success') !== -1) {
      var notification = document.getElementById('notification');
      notification.style.display = 'block';

      var progressFill = document.getElementById('progress-fill');
      progressFill.style.width = '0%';

      progressFill.offsetWidth;

      setTimeout(function () {
        progressFill.style.width = '100%';
      }, 10);

      setTimeout(function () {
        notification.style.display = 'none';
      }, 3000);
    }
  };

  const elegirBTNind1 = document.getElementById('elegirBTNind1');
  const elegirBTNind2 = document.getElementById('elegirBTNind2');
  const elegirBTNsis3 = document.getElementById('elegirBTNind3');

  elegirBTNind1.addEventListener('click', function () {
    window.open('https://github.com/AugustoFerrari1', '_blank');
  });

  elegirBTNind2.addEventListener('click', function () {
    window.open('https://www.instagram.com/pixelshtf/', '_blank');
  });

  elegirBTNsis3.addEventListener('click', function () {
    window.open('https://www.linkedin.com/in/augusto-ferrari-825995321/ ', '_blank');
  });
});
