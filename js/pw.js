document.addEventListener('DOMContentLoaded', function () {
  const elegirBTNweb1 = document.getElementById('elegirBTNweb1');
  const elegirBTNweb2 = document.getElementById('elegirBTNweb2');
  const elegirBTNweb3 = document.getElementById('elegirBTNweb3');

  elegirBTNweb1.addEventListener('click', function () {
    window.open(
      'https://wa.me/59892150899?text=Buenos%20días,%20estoy%20interesado%20en%20una%20landing%20page',
      '_blank'
    );
  });

  elegirBTNweb2.addEventListener('click', function () {
    window.open(
      'https://wa.me/59892150899?text=Buenos%20días,%20estoy%20interesado%20en%20la%20coperativa',
      '_blank'
    );
  });

  elegirBTNweb3.addEventListener('click', function () {
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
