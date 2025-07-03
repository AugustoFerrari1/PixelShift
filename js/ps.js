document.addEventListener('DOMContentLoaded', function () {
  const elegirBTNsis1 = document.getElementById('elegirBTNsis1');
  const elegirBTNsis2 = document.getElementById('elegirBTNsis2');
  const elegirBTNsis3 = document.getElementById('elegirBTNsis3');

  elegirBTNsis1.addEventListener('click', function () {
    window.open(
      'https://wa.me/59892150899?text=Buenos%20días,%20estoy%20interesado%20en%20una%20landing%20page',
      '_blank'
    );
  });

  elegirBTNsis2.addEventListener('click', function () {
    window.open(
      'https://wa.me/59892150899?text=Buenos%20días,%20estoy%20interesado%20en%20la%20coperativa',
      '_blank'
    );
  });

  elegirBTNsis3.addEventListener('click', function () {
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
