/* global cambiarTextoConSplit, cambiarLenguaje */

gsap.registerPlugin(ScrollTrigger);

const splitTypes = document.querySelectorAll('.revelartext');

splitTypes.forEach((char) => {
  const bg = char.dataset.bgColor;
  const fg = char.dataset.fgColor;

  const text = new SplitType(char, { types: 'chars' });

  gsap.fromTo(
    text.chars,
    {
      color: bg,
    },
    {
      color: fg,
      duration: 0.3,
      stagger: 0.02,
      scrollTrigger: {
        trigger: char,
        start: 'top 80%',
        end: 'top 20%',
        scrub: true,
        markers: false,
        toggleActions: 'play play reverse reverse',
      },
    }
  );
});

const lenis = new Lenis();
lenis.on('scroll', (e) => {
  console.log(e);
});

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}

requestAnimationFrame(raf);

function cambiarLenguaje() {
  const lenguajebtn = document.getElementById('lenguajebtn');
  const ingles = lenguajebtn.textContent === 'EN';

  if (ingles) {
    lenguajebtn.textContent = 'ES';

    document.getElementById('sobremibtn').textContent = 'ABOUT ME';
    document.getElementById('trabajosbtn').textContent = 'WORKS';
    document.getElementById('contactobtn').textContent = 'CONTACT';
    document.querySelector('.inicio h2').innerHTML =
      'Efficiency and creativity <br> <span>in every line</span><br> of code';
    cambiarTextoConSplit('.sobremi .nombre', 'ABOUT ME');
    document.querySelector('.revelartext.desc').innerHTML =
      'Student of <span>Systems Engineering</span> at <span>ORT Uruguay</span>, with training in <span>web development</span> and <span>databases</span>.<br> I have created over <span>5 personal projects</span> on various platforms, applying <span>good coding practices</span> and <span>backend logic</span>.';
    document.querySelector('.id1').textContent = 'VIEW CV';
    document.querySelector('.id2').textContent = 'CERTIFICATE';
    cambiarTextoConSplit('espacio', 'EXPERIENCE');
    document.querySelector('.izdadcha1').innerHTML = '<span>✮</span>  WEB <span>DEVELOPMENT</span>';
    document.querySelector('.izdadcha2').innerHTML =
      '<span>✮</span>  APPLICATION <span>DEVELOPMENT</span>';
    document.querySelector('.izdadcha3').innerHTML =
      '<span>✮</span>  Automation and logistics with <span>TAILORED</span> <span>SYSTEMS</span>';
    document.querySelector('.izdadcha4').innerHTML =
      '<span>✮</span>  Design of <span>MANAGEMENT</span> interfaces';
    document.querySelector('.izdadcha5').innerHTML =
      '<span>✮</span>  Administration and management of <span>DATABASES</span>';
    document.querySelector('.izdadcha6').innerHTML =
      '<span>✮</span>  Automation of <span>UNIT TESTING</span> and <span>CODE COVERAGE</span>';
    document.querySelector('.izdadcha7').innerHTML =
      '<span>✮</span>  Execution of <span>EXPLORATORY TESTING</span> in <span>CONTINUOUS VALIDATION</span> environments';
    cambiarTextoConSplit('.atributos .nombre', 'ATTRIBUTES');
    document.querySelector('.atributos .tipo').textContent = 'GRAPHIC INTERFACE';
    document.querySelector('.atributos .tipo2').textContent = 'LANGUAGES';
    cambiarTextoConSplit('.trabajos .nombre', 'WORKS');
    document.querySelector('.card1 .card-header').textContent = 'Second Work';
    document.querySelector('.card1 .card-title').textContent = 'PIXELSHIFT WEB';
    document.querySelector('.card1 .card-text:nth-of-type(1)').innerHTML =
      'We developed a <span>website</span> specialized in <span>selling digital services</span>, designed to offer digital solutions to companies, entrepreneurs, or individuals.<br>';
    document.querySelector('.card1 .card-text:nth-of-type(2)').innerHTML =
      '<span>Web Pages:</span> Creation and development of <span>intuitive</span> and <span>optimized</span> websites to meet the specific needs of each client.<br>';
    document.querySelector('.card1 .card-text:nth-of-type(3)').innerHTML =
      '<span>Online Stores:</span> Implementation of <span>complete</span> e-commerce, with all the <span>necessary functionalities</span> to sell products and services online in a <span>efficient and secure</span> manner.<br>';
    document.querySelector('.card1 .card-text:nth-of-type(4)').innerHTML =
      '<span>Management Systems:</span> Development of management systems tailored to the <span>needs</span> of each business, whether in <span>web format</span> or as <span>desktop applications</span>, allowing for <span>efficient and accessible</span> management from any device.<br>';
    document.querySelector('.card1 .card-text:last-of-type').innerHTML =
      'This website not only <span>facilitates</span> the acquisition of these services but also offers an <span>intuitive</span> user experience, with an <span>attractive design</span> and a <span>simplified purchase process</span>';
    document.querySelector('.card1 .btn').textContent = 'VISIT';
    document.querySelector('.card1 .card-footer').textContent = '6 months ago';
    document.querySelector('.card2 .card-header').textContent = 'First Work';
    document.querySelector('.card2 .card-title').textContent = 'AUTOMOTORA';
    document.querySelector('.card2 .card-text:nth-of-type(1)').innerHTML =
      'We developed a <span>comprehensive website</span> for a car dealership, designed to offer a <span>complete</span> and <span>personalized</span> user experience. The platform includes a <span>complete system of accounts and profiles</span>, allowing users to <span>edit</span> all fields of their personal information easily and securely.<br>';
    document.querySelector('.card2 .card-text:nth-of-type(2)').innerHTML =
      'Additionally, we have implemented a versatile <span>shopping cart</span> that allows customers to make <span>reservations</span>, <span>rent</span>, and <span>purchase</span> vehicles online, with an intuitive and secure payment process.<br>';
    document.querySelector('.card2 .card-text:nth-of-type(3)').innerHTML =
      'For <span>internal management</span>, we have developed an advanced <span>backend</span> that centralizes all operations. This system includes <span>user and permission control</span>, allowing the administration to <span>add employees</span> with different <span>access levels</span> according to their <span>roles</span>. Available management options include <span>user management</span>, <span>vehicle inventory</span>, <span>detailed specifications of each car</span>, <span>purchases</span>, <span>reservations</span>, and other critical functions for the business.';
    document.querySelector('.card2 .btn').textContent = 'VISIT';
    document.querySelector('.card2 #alertaAutomotora').innerHTML =
      '<strong>Attention!</strong> This project has been removed and is not available for online viewing.';
    document.querySelector('.card2 .card-footer').textContent = '2 years ago';
    cambiarTextoConSplit('.contacto .nombre', 'CONTACT');
  } else {
    lenguajebtn.textContent = 'EN';

    document.getElementById('sobremibtn').textContent = 'SOBRE MI';
    document.getElementById('trabajosbtn').textContent = 'TRABAJOS';
    document.getElementById('contactobtn').textContent = 'CONTACTO';
    document.querySelector('.inicio h2').innerHTML =
      'Eficiencia y creatividad <br> <span>en cada línea </span><br> de código';
    document.querySelector('.sobremi p').textContent = 'SOBRE MI';
    cambiarTextoConSplit('.sobremi p', 'SOBRE MI');
    document.querySelector('.revelartext.desc').innerHTML =
      'Estudiante de <span>Ingeniería en Sistemas</span> en la <span>ORT Uruguay</span>, con formación en <span>desarrollo web</span> y <span>bases de datos</span>.<br> He creado más de <span>5 proyectos personales</span> en varias plataformas, aplicando <span>buenas prácticas de código</span> y <span>lógica backend</span>.';
    document.querySelector('.id1').textContent = 'VER CV';
    document.querySelector('.id2').textContent = 'CERTIFICADO';
    cambiarTextoConSplit('espacio', 'EXPERIENCIA');
    document.querySelector('.izdadcha1').innerHTML = '<span>✮</span>  Desarrollo <span>WEB</span>';
    document.querySelector('.izdadcha2').innerHTML =
      '<span>✮</span>  Desarrollo de <span>APLICACIONES</span>';
    document.querySelector('.izdadcha3').innerHTML =
      '<span>✮</span>  Automatizacion y logistica con <span>SISTEMAS</span> a <span>MEDIDA</span>';
    document.querySelector('.izdadcha4').innerHTML =
      '<span>✮</span>  Diseño de interfaces de <span>GESTION</span>';
    document.querySelector('.izdadcha5').innerHTML =
      '<span>✮</span>  Administracion y manejo de <span>BASE</span> de <span>DATOS</span>';
    document.querySelector('.izdadcha6').innerHTML =
      '<span>✮</span>  Automatización de <span>PRUEBAS UNITARIAS</span> y <span>COBERTURA DE CÓDIGO</span>';
    document.querySelector('.izdadcha7').innerHTML =
      '<span>✮</span>  Ejecución de <span>PRUEBAS EXPLORATORIAS</span> en entornos de <span>VALIDACIÓN CONTINUA</span>';
    cambiarTextoConSplit('.atributos .nombre', 'ATRIBUTOS');
    document.querySelector('.atributos .tipo').textContent = 'INTERFAZ GRAFICA';
    document.querySelector('.atributos .tipo2').textContent = 'LENGUAJES';
    cambiarTextoConSplit('.trabajos p', 'TRABAJOS');
    document.querySelector('.card1 .card-header').textContent = 'Segundo Trabajo';
    document.querySelector('.card1 .card-title').textContent = 'PIXELSHIFT WEB';
    document.querySelector('.card1 .card-text:nth-of-type(1)').innerHTML =
      'Desarrollamos una <span>página web</span> especializada en la <span>venta de servicios digitales</span>, diseñada para ofrecer soluciones digitales a empresas, emprendedores o particulares.<br>';
    document.querySelector('.card1 .card-text:nth-of-type(2)').innerHTML =
      '<span>Páginas Web:</span> Creación y desarrollo de sitios web <span>intuitivos</span> y <span>optimizados</span> para satisfacer las necesidades específicas de cada cliente.<br>';
    document.querySelector('.card1 .card-text:nth-of-type(3)').innerHTML =
      '<span>Tiendas Online:</span> Implementación de comercios electrónicos <span>completos</span>, con todas las <span>funcionalidades necesarias</span> para vender productos y servicios en línea de manera <span>eficiente y segura</span>.<br>';
    document.querySelector('.card1 .card-text:nth-of-type(4)').innerHTML =
      '<span>Sistemas de Gestión:</span> Desarrollo de sistemas de gestión adaptados a las <span>necesidades</span> de cada negocio, ya sea en <span>formato web</span> o como <span>aplicaciones de escritorio</span>, permitiendo una administración <span>eficiente y accesible</span> desde cualquier dispositivo.<br>';
    document.querySelector('.card1 .card-text:last-of-type').innerHTML =
      'Esta página web no solo <span>facilita</span> la adquisición de estos servicios, sino que también ofrece una <span>experiencia</span> de usuario <span>intuitiva</span>, con un <span>diseño atractivo</span> y un <span>proceso de compra simplificado</span>';
    document.querySelector('.card1 .btn').textContent = 'VISITAR';
    document.querySelector('.card1 .card-footer').textContent = 'hace 6 meses';
    document.querySelector('.card2 .card-header').textContent = 'Primer Trabajo';
    document.querySelector('.card2 .card-title').textContent = 'AUTOMOTORA';
    document.querySelector('.card2 .card-text:nth-of-type(1)').innerHTML =
      'Desarrollamos una <span>página web</span> integral para una automotora, diseñada para ofrecer una <span>experiencia de usuario completa</span> y <span>personalizada</span>. La plataforma incluye un <span>sistema completo de cuentas y perfiles</span>, permitiendo a los usuarios puedan <span>editar</span> todos los campos de su información personal de manera <span>sencilla y segura.</span><br>';
    document.querySelector('.card2 .card-text:nth-of-type(2)').innerHTML =
      'Además, hemos implementado un <span>carrito</span> de compras versátil que permite a los clientes realizar <span>reservas</span>, <span>alquilar</span> y <span>comprar</span> vehículos en línea, con un proceso de pago intuitivo y seguro.<br>';
    document.querySelector('.card2 .card-text:nth-of-type(3)').innerHTML =
      'Para la <span>gestión interna</span>, hemos desarrollado un <span>backend</span> avanzado que centraliza todas las operaciones. Este sistema incluye un <span>control de usuarios y permisos</span>, lo que permite a la administración <span>agregar empleados</span> con distintos <span>niveles de acceso</span> según sus <span>roles</span>. Las opciones de administración disponibles incluyen la <span>gestión de usuarios</span>, <span>inventario de vehículos</span>, <span>especificaciones detalladas de cada automóvil</span>, <span>compras</span>, <span>reservas</span>, y otras funciones críticas para el negocio.';
    document.querySelector('.card2 .btn').textContent = 'VISITAR';
    document.querySelector('.card2 #alertaAutomotora').innerHTML =
      '<strong>¡Atención!</strong> Este proyecto ha sido retirado y no está disponible para su visualización en línea.';
    document.querySelector('.card2 .card-footer').textContent = 'hace 2 años';
    cambiarTextoConSplit('.contacto p', 'CONTACTO');
  }
}
