document.addEventListener('DOMContentLoaded', function () {
  const elegirBTNtienda1 = document.getElementById('elegirBTNtienda1');
  const elegirBTNtienda2 = document.getElementById('elegirBTNtienda2');
  const elegirBTNtienda3 = document.getElementById('elegirBTNtienda3');

  elegirBTNtienda1.addEventListener('click', function () {
    window.open(
      'https://wa.me/59892150899?text=Buenos%20días,%20estoy%20interesado%20en%20una%20landing%20page',
      '_blank'
    );
  });

  elegirBTNtienda2.addEventListener('click', function () {
    window.open(
      'https://wa.me/59892150899?text=Buenos%20días,%20estoy%20interesado%20en%20la%20coperativa',
      '_blank'
    );
  });

  elegirBTNtienda3.addEventListener('click', function () {
    window.open(
      'https://wa.me/59892150899?text=Buenos%20días,%20estoy%20interesado%20en%20el%20plan%20comercial',
      '_blank'
    );
  });

  const botones = document.querySelectorAll('.btnwpp');

  botones.forEach((boton) => {
    boton.addEventListener('click', function () {
      window.open(
        'https://wa.me/59892150899?text=Buenos%20días,%20me%20comunico%20para%20obtener%20información%20sobre%20sus%20servicios.',
        '_blank'
      );
    });
  });
});
