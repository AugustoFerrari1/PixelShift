document.addEventListener('DOMContentLoaded', function () {
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach((item) => {
    const question = item.querySelector('.faq-pregunta');
    const answer = item.querySelector('.faq-respuesta');
    const flecha = item.querySelector('.flecha');

    question.addEventListener('click', () => {
      const isOpen = answer.classList.contains('open');

      document.querySelectorAll('.faq-respuesta').forEach((a) => a.classList.remove('open'));
      document.querySelectorAll('.flecha').forEach((a) => a.classList.remove('open'));

      if (!isOpen) {
        answer.classList.add('open');
        flecha.classList.add('open');
      }
    });
  });

  document.getElementById('verMasTienda').addEventListener('click', function () {
    const serviciosSection = document.querySelector('#servicios');
    if (serviciosSection) {
      serviciosSection.scrollIntoView({ behavior: 'smooth' });
    }
  });

  document.getElementById('verMasSitios').addEventListener('click', function () {
    const serviciosSection = document.querySelector('#servicios');
    if (serviciosSection) {
      serviciosSection.scrollIntoView({ behavior: 'smooth' });
    }
  });

  document.getElementById('verMasGestion').addEventListener('click', function () {
    const serviciosSection = document.querySelector('#servicios');
    if (serviciosSection) {
      serviciosSection.scrollIntoView({ behavior: 'smooth' });
    }
  });

  const buttonlink = document.querySelectorAll('.ver-planes');

  buttonlink.forEach((button) => {
    button.addEventListener('click', function () {
      if (button.classList.contains('gestionlink')) {
        window.location.href = 'https://pixelshft.com/gestion-empresarial/';
      } else if (button.classList.contains('tiendalink')) {
        window.location.href = 'https://pixelshft.com/ecommerce-uruguay/';
      } else if (button.classList.contains('weblink')) {
        window.location.href = 'https://pixelshft.com/dise%C3%B1o-web/';
      }
    });
  });

  const TAIL_LENGTH = 20;
  const cursor = document.getElementById('cursor');
  const normalColor = '#0ea5e9';
  const hoverColor = '#007bff';

  let mouseX = 0;
  let mouseY = 0;

  let cursorCircles;
  let cursorHistory = Array(TAIL_LENGTH).fill({ x: 0, y: 0 });

  function onMouseMove(event) {
    mouseX = event.clientX;
    mouseY = event.clientY;
  }

  function initCursor() {
    for (let i = 0; i < TAIL_LENGTH; i++) {
      let div = document.createElement('div');
      div.classList.add('cursor-circulo');
      cursor.append(div);
    }
    cursorCircles = Array.from(document.querySelectorAll('.cursor-circulo'));
  }

  document.querySelectorAll('a, button, .hover-target').forEach((el) => {
    el.addEventListener('mouseover', () => {
      cursorCircles.forEach((circle) => (circle.style.background = hoverColor));
    });
    el.addEventListener('mouseout', () => {
      cursorCircles.forEach((circle) => (circle.style.background = normalColor));
    });
  });

  function updateCursor() {
    cursorHistory.shift();
    cursorHistory.push({ x: mouseX, y: mouseY });

    for (let i = 0; i < TAIL_LENGTH; i++) {
      let current = cursorHistory[i];
      let next = cursorHistory[i + 1] || cursorHistory[TAIL_LENGTH - 1];

      let xDiff = next.x - current.x;
      let yDiff = next.y - current.y;

      current.x += xDiff * 0.35;
      current.y += yDiff * 0.35;
      cursorCircles[i].style.transform =
        `translate(${current.x}px, ${current.y}px) scale(${i / TAIL_LENGTH})`;
    }
    requestAnimationFrame(updateCursor);
  }

  document.addEventListener('mousemove', onMouseMove, false);

  initCursor();
  updateCursor();

  let carousel = document.querySelector('.carousel');
  let listHTML = document.querySelector('.carousel .list');

  const showSlider = (type) => {
    carousel.classList.remove('next', 'prev');
    let items = document.querySelectorAll('.carousel .list .item');
    if (type === 'next') {
      listHTML.appendChild(items[0]);
      carousel.classList.add('next');
    }
  };

  setInterval(() => {
    showSlider('next');
  }, 5000);

  const numEstrellas = 200;
  const bodyHeight = document.body.scrollHeight;

  for (let i = 0; i < numEstrellas; i++) {
    crearEstrella(i, bodyHeight);
  }

  function crearEstrella(index, height) {
    const estrella = document.createElement('div');
    estrella.classList.add('estrellas');
    estrella.style.top = Math.random() * height + 'px';
    estrella.style.left = Math.random() * 100 + '%';
    estrella.style.animationDelay = Math.random() * 3 + 's';
    document.body.appendChild(estrella);
  }

  const headers = document.querySelectorAll('.stipos, .stipos2');
  const descriptions = document.querySelectorAll('.desctienda, .descgestion, .descweb');
  const buttons = [
    document.getElementById('esconderbtntienda'),
    document.getElementById('esconderbtngestion'),
    document.getElementById('esconderbtnweb'),
  ];
  const spans = document.querySelectorAll('.mas');

  const botones = document.querySelectorAll('.btnwpp');

  botones.forEach((boton) => {
    boton.addEventListener('click', function () {
      window.open(
        'https://wa.me/59892150899?text=Buenos%20días,%20me%20comunico%20para%20obtener%20información%20sobre%20sus%20servicios.',
        '_blank'
      );
    });
  });

  headers.forEach((header, index) => {
    header.addEventListener('click', function () {
      descriptions.forEach((desc, descIndex) => {
        if (index !== descIndex) {
          desc.classList.remove('visible');
          buttons[descIndex].style.visibility = 'hidden';
          buttons[descIndex].style.opacity = '0';
          spans[descIndex].style.display = 'inline';
          headers[descIndex].classList.remove('mostrar');
        }
      });

      const description = descriptions[index];
      const button = buttons[index];
      const span = spans[index];

      description.classList.toggle('visible');
      if (description.classList.contains('visible')) {
        button.style.visibility = 'visible';
        button.style.opacity = '1';
        span.style.display = 'none';
        header.classList.add('mostrar');
      } else {
        button.style.visibility = 'hidden';
        button.style.opacity = '0';
        span.style.display = 'inline';
        header.classList.remove('mostrar');
      }
    });
  });

  document.getElementById('verMasSitios').addEventListener('click', function () {
    mostrarServicio('web');
  });

  document.getElementById('verMasGestion').addEventListener('click', function () {
    mostrarServicio('gestion');
  });

  document.getElementById('verMasTienda').addEventListener('click', function () {
    mostrarServicio('tienda');
  });

  function mostrarServicio(servicio) {
    descriptions.forEach((desc) => desc.classList.remove('visible'));
    buttons.forEach((button) => {
      button.style.visibility = 'hidden';
      button.style.opacity = '0';
    });
    spans.forEach((span) => {
      span.style.display = 'inline';
    });
    headers.forEach((header) => {
      header.classList.remove('mostrar');
    });

    const description = document.querySelector(`.desc${servicio}`);
    const button = document.getElementById(`esconderbtn${servicio}`);
    const header = document.getElementById(`${servicio}`);
    const span = header.querySelector('.mas');

    description.classList.add('visible');
    button.style.visibility = 'visible';
    button.style.opacity = '1';
    header.classList.add('mostrar');
    span.style.display = 'none';
  }

  document.getElementById('enviar').addEventListener('click', function () {
    document.getElementById('submitBtn').click();
  });

  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth',
      });
    });
  });

  document.getElementById('enviar').addEventListener('click', function () {
    var nombre = document.querySelector('[name="nombre"]').value;
    var email = document.querySelector('[name="email"]').value;
    var telefono = document.querySelector('[name="telefono"]').value;
    var mensaje = document.querySelector('[name="mensaje"]').value;

    if (nombre && email && telefono && mensaje) {
      if (email.includes('@')) {
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
      } else {
        alert('Por favor, ingresa un correo electrónico válido');
      }
    } else {
      alert('Por favor, completa todos los campos antes de enviar.');
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

  window.addEventListener('resize', function () {
    var notification = document.getElementById('notification');
    var progressBar = document.getElementById('progress-bar');
    if (notification.style.display === 'block') {
      notification.style.width = window.innerWidth < 768 ? '90%' : '300px';
      progressBar.style.width = '100%';
    }
  });

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
