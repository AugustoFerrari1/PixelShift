 <?php 
if (isset($_POST['enviarcorreo'])) {
    $nombre   = $_POST['nombre'];
    $email    = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje  = $_POST['mensaje'];

    try{
        require_once("php/configuracionemail.php");

        $mail->setFrom('pixelshiftoficial@gmail.com', 'PixelShift'); 
        $mail->addAddress($email); 
        $mail->addCC('pixelshiftoficial@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'Mensaje de Contacto PixelShift';
        $mail->Body = "<h3>Hola $nombre, tu mensaje de contacto fue enviado con éxito.<br> (Responderemos lo más rápido posible)</h3><br><h3>Nombre :</h3> <p>$nombre</p> <br><h3>Email:</h3> <p>$email</p> <br><h3>Teléfono:</h3> <p>$telefono</p> <br><h3>Mensaje :</h3> <p>$mensaje</p>";

        $mail->send();
    } catch (Exception $e) {
        $alert = '<div class="alert-error">Error: ' . $e->getMessage() . '</div>';
    }
}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Diseño Web, Tiendas Online y Sistemas de Gestión en Uruguay</title>
        <link rel="stylesheet" href="./css/in.css">
        <link rel="stylesheet" href="./css/carousel.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="icon" href="https://pixelshft.com/img/logovent.png">
        <meta name="title" content="PixelShift - Diseño Web, Tiendas Online y Sistemas de Gestión en Uruguay">
        <meta name="description" content="Creamos páginas web, tiendas online y sistemas de gestión personalizados en Uruguay. Diseño optimizado, SEO y accesible.">
        <meta name="keywords" content="diseño web, desarrollo de aplicaciones web, desarrollo web en Uruguay, tienda online, ecommerce, sistema de gestión, implementación de sistemas empresariales">
        <meta name="geo.region" content="UY" />
        <meta name="geo.placename" content="Uruguay" />
        <meta name="language" content="es" />
        <meta name="robots" content="index,follow" />
        <meta property="og:title" content="Pixelshift">
        <meta property="og:description" content="Diseño web, E-commerce y Sistemas de gestión empresarial">
        <meta property="og:image" content="https://i.imgur.com/ebfHMaA.png">
        <meta property="og:url" content="https://pixelshft.com">
        <meta property="og:type" content="website">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
    </head>
<body>
    <svg xmlns="http://www.w3.org/2000/svg" class="goo" version="1.1" width="100%">
        <defs>
            <filter id="goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur"></feGaussianBlur>
                <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 35 -15" result="goo"></feColorMatrix>
                <feComposite in="SourceGraphic" in2="goo" operator="atop"></feComposite>
            </filter>
        </defs>
    </svg>
    <div id="cursor"></div>
    <header>
        <div class="menubar">
            <div>
                <div class="nombre">
                    <span>PIXELSHIFT</span>
                    <span>PIXELSHIFT</span>
                </div>
                <ul class="bar">
                    <li class="lista animhover1"><a href="https://pixelshft.com/dise%C3%B1o-web/">Diseño Web</a></li>
                    <li class="lista animhover1"><a href="https://pixelshft.com/ecommerce-uruguay/">Tiendas Online</a></li>
                    <li class="lista animhover1"><a href="https://pixelshft.com/gestion-empresarial/">Sistemas de Gestión</a></li>
                </ul>
            </div>
            <h1>Diseño Web, Tiendas Online y Sistemas de Gestión en Uruguay</h1>
        </div>
        <section class="inicio">
            <div class="js-slick-carousel">
                <div class="js-slide">
                    <div class="slide-content">
                        <div class="text-section">
                            <h2 class="fadeInUp">
                                SISTEMAS DE GESTIÓN
                            </h2>
                            <p class="fadeInUp fadeInUp-delay-200">
                                Mejorá cómo manejás tu negocio con nuestros <span class="imp">sistemas de gestión a medida</span>. En <span class="imp">PixelShift</span> desarrollamos <span class="imp">software de gestión empresarial</span> pensado para vos, para que puedas llevar el control total: <span class="imp">clientes</span>, <span class="imp">inventarios</span>, <span class="imp">ventas</span> y más. Tomá <span class="imp">decisiones estratégicas</span>, aumentá tu <span class="imp">productividad</span> y hacé que tu negocio sea más <span class="imp">rentable</span> con herramientas que realmente te facilitan el trabajo.    
                            </p>
                            <button type="button" id="verMasGestion" class="verMas">VER MÁS</button>
                        </div>
                        <div class="image-section">
                            <img src="https://pixelshft.com/images/gestion.webp" 
                                alt="Sistema de gestión empresarial a medida desarrollado por PixelShift en Uruguay" class="side-image fadeInRight fadeInRight-delay-400">
                        </div>
                    </div>
                </div>

                <div class="js-slide">
                    <div class="slide-content">
                        <div class="text-section">
                            <h2 class="fadeInUp">
                                TIENDAS ONLINE
                            </h2>
                            <p class="fadeInUp fadeInUp-delay-200">
                                Hacé que tu negocio venda más con una <span class="imp">tienda online personalizada</span>. En <span class="imp">PixelShift</span> armamos plataformas de <span class="imp">e-commerce</span> pensadas para que tus clientes compren fácil, desde la primera visita hasta el <span class="imp">checkout</span>. Todo fluye rápido, seguro y sin vueltas. Aumentá tus <span class="imp">ventas online</span> y llegá a más personas con una tienda optimizada para <span class="imp">convertir</span> y hacer crecer tu negocio.    
                            </p>
                            <button type="button"  id="verMasTienda" class="verMas">VER MÁS</button>
                        </div>
                        <div class="image-section">
                            <img src="https://pixelshft.com/images/tiendaonline.webp" 
                                alt="Tienda online a medida en Uruguay, optimizada para ventas y e-commerce" class="side-image fadeInRight fadeInRight-delay-400">
                        </div>
                    </div>
                </div>

                <div class="js-slide">
                    <div class="slide-content">
                        <div class="text-section">
                            <h2 class="fadeInUp">
                                SITIOS WEB
                            </h2>
                            <p class="fadeInUp fadeInUp-delay-200">
                                Dale un impulso real a tu <span class="imp">presencia digital</span> con nuestros servicios de <span class="imp">diseño web en Uruguay</span>. En <span class="imp">PixelShift</span> creamos <span class="imp">planes a medida</span>, adaptados a tu idea, tu negocio y tu bolsillo. Ya sea una web simple o una plataforma más completa, te ayudamos a crecer en serio. Mejorá la <span class="imp">experiencia de tus usuarios</span>, destacate en los buscadores con buen <span class="imp">SEO</span> y hacé que tu proyecto funcione de verdad.  
                            </p>
                            <button type="button" id="verMasSitios"  class="verMas">VER MÁS</button>
                        </div>
                        <div class="image-section">
                            <img src="https://pixelshft.com/images/img1.webp" 
                                alt="Diseño web profesional en Uruguay para mejorar presencia digital y SEO" class="side-image fadeInRight fadeInRight-delay-400">
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="wave-overlay">
                <svg class="onda" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#8bc6f9" fill-opacity="1" 
                        d="M0,256L60,266.7C120,277,240,299,360,266.7C480,235,600,149,720,138.7C840,128,960,192,1080,197.3C1200,203,1320,149,1380,122.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
                    </path>
                </svg>
            </div>
        </section>
    </header>
    <section class="servicios">
        <div class="partes" id="servicios">
            <h2 class="revelartext nombre" data-bg-color="#353535" data-fg-color="white">SERVICIOS</h2>
            <div class="cajaservicios">
                <div class="stipos-container">
                    <div data-aos="zoom-out-left">
                        <h3 class="stipos" id="tienda" data-aos="fade-down">Tienda Online <span class="mas">[+]</span></h3>
                        <p class="desctienda">Armá tu <span class="imp">tienda online</span> y empezá a vender más. En <span class="imp">PixelShift</span> adaptamos tu negocio al mundo <span class="imp">ecommerce</span> con planes que se ajustan a lo que necesitás. Elegí el que mejor te sirva, y si querés, podés <span class="imp">sumar o quitar funciones</span> según tu idea. Eso sí, mientras más personalizado, más puede variar el precio.</p>
                        <button id="esconderbtntienda" class="ver-planes tiendalink">
                            <span class="circulo" aria-hidden="true">
                                <span class="icon flecha"></span>
                            </span>
                            <span class="button-text">Ver planes</span>
                        </button>
                    </div>
                    <div data-aos="zoom-out-left">
                        <h3 class="stipos" id="gestion" data-aos="fade-up" data-aos-anchor-placement="center-bottom">Sistemas de Gestión <span class="mas">[+]</span></h3>
                        <p class="descgestion">Creamos <span class="imp">sistemas de gestión</span> a medida y también <span class="imp">integración</span> con los que ya usás. En <span class="imp">PixelShift</span> podés elegir el plan que mejor se ajuste a tu negocio, o armar uno a tu medida. <span class="imp">Sumá o quitá funciones</span> sin problema, el precio se adapta a lo que necesitás.
                        <button id="esconderbtngestion" class="ver-planes gestionlink">
                            <span class="circulo" aria-hidden="true">
                                <span class="icon flecha"></span>
                            </span>
                            <span class="button-text">Ver planes</span>
                        </button>
                    </div>
                </div>
                <div class="stipos2-container">
                    <div data-aos="zoom-out-left">
                        <h3 class="stipos2" id="web" data-aos="fade-up" data-aos-anchor-placement="center-bottom">Diseño y Paginas Web <span class="mas">[+]</span></h3>
                        <p class="descweb">Diseñamos tu <span class="imp">página web</span> a medida, pensando en lo que realmente necesita tu negocio. En <span class="imp">PixelShift</span> podés elegir el plan que más te convenga o ajustarlo como quieras. <span class="imp">Agregá o quitá funcionalidades</span> según lo que busques, el precio se adapta a vos.
                        <button id="esconderbtnweb" class="ver-planes weblink">
                            <span class="circulo" aria-hidden="true">
                                <span class="icon flecha"></span>
                            </span>
                            <span class="button-text">Ver planes</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="info">
        <svg class="onda" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#377ebb" fill-opacity="1" d="M0,256L60,266.7C120,277,240,299,360,266.7C480,235,600,149,720,138.7C840,128,960,192,1080,197.3C1200,203,1320,149,1380,122.7L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
        </svg>
        <div class="partes">
            <h2 class="revelartext nombre" data-bg-color="#353535" data-fg-color="white">FUNCIONAMIENTO</h2>
            <div class="steps-container">
                <div class="progress-line"></div>
                <div class="steps-grid">
                    <div class="step">
                        <div class="step-number">1</div>
                        <img src="https://pixelshft.com/img/formulario.png" alt="Formulario de contacto o WhatsApp para asesoramiento personalizado en PixelShift" class="step-icon">
                        <div class="step-content">
                            <h3 class="step-title">Contactanos y Asesorate</h3>
                            <p class="step-description">
                                Escribinos por WhatsApp o llená el formulario y te damos el <span class="highlight">asesoramiento</span> que necesitás para tu negocio. <br>
                                <strong>Rápido</strong>, <strong>personalizado</strong> y <strong>sin vueltas</strong>. ¡Hablemos!
                            </p>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">2</div>
                        <img src="https://pixelshft.com/img/apoyo.png" alt="Reunión para presupuesto claro y a medida en servicios digitales de PixelShift" class="step-icon">
                        <div class="step-content">
                            <h3 class="step-title">Charlamos y Presupuestamos</h3>
                            <p class="step-description">
                                Nos contás tu idea, vemos qué necesitás y armamos la mejor forma de hacerlo realidad. 
                                Te paso un <span class="highlight">presupuesto a medida</span>, claro y sin letra chica. 
                                <br><strong>Así, simple.</strong>
                            </p>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">3</div>
                        <img src="https://pixelshft.com/img/codigo.png" alt="Desarrollo web a medida con código limpio y optimizado por PixelShift" class="step-icon">
                        <div class="step-content">
                            <h3 class="step-title">Creamos tu Código</h3>
                            <p class="step-description">
                                Arrancamos con el desarrollo y nos enfocamos en que todo funcione bien desde el principio. 
                                <span class="highlight">Código limpio, ordenado y hecho a medida</span> para tu proyecto.    
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subnombre" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                <h2>MEJORA TU IMGEN DIGITAL Y AUMENTA TUS VENTAS</h2>
                <p class="p1">ENFOQUE</p>
            </div>
            <div class="container">
                <div class="caja1" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="150" data-aos-offset="0">
                    <img src="https://pixelshft.com/img/foco.png" alt="Diseño web personalizado en Uruguay con enfoque en resultados" loading="lazy">
                    <h3 class="titulo">PORQUE PIXELSHIFT</h3>
                    <br>
                    <p class="desc">En <span class="imp">PixelShift</span> sabemos que cada proyecto es distinto. 
                        Nos especializamos en <span class="imp">diseño web Uruguay</span> y te ofrecemos <span class="imp">precios accesibles</span> con <span class="imp">soluciones personalizadas</span> que realmente se ajustan a tus <span class="imp">necesidades específicas</span>. 
                        Ya sea que necesites una <span class="imp">página web</span>, una <span class="imp">tienda online</span> o un <span class="imp">sistema de gestión</span>, trabajamos con <span class="imp">código optimizado</span> para que tu sitio funcione rápido y bien. 
                        Además, aplicamos <span class="imp">estrategias probadas</span> para mejorar el <span class="imp">alcance</span> y el <span class="imp">impacto</span> de tu proyecto, ayudándote a conectar mejor con tus <span class="imp">clientes</span> o a potenciar el trabajo de tu <span class="imp">personal</span>.
                    </p>
                </div>
                <div class="caja1" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
                    <img src="https://pixelshft.com/img/diseno.png" alt="Digitalización de negocios con páginas web, tiendas online y sistemas de gestión" loading="lazy">
                    <h3 class="titulo">DIGITALIZA TU NEGOCIO</h3>
                    <br>
                    <p class="desc">
                        Hoy en día, <span class="imp">digitalizar tu negocio</span> no es solo una opción, ¡es una <span class="imp">necesidad</span>! 
                        Ya sea con una <span class="imp">página web</span>, una <span class="imp">tienda online</span>, un <span class="imp">sistema de gestión</span> o cualquier servicio de <span class="imp">diseño web en Uruguay</span>, dar el salto al <span class="imp">mundo digital</span> te ayuda a <span class="imp">llegar a más clientes</span>, <span class="imp">mejorar tu eficiencia</span> y <span class="imp">estar siempre disponible</span>.
                        Una buena página web <span class="imp">refuerza tu presencia y credibilidad online</span>. 
                        Una tienda online <span class="imp">abre nuevas oportunidades de venta</span> y te vuelve <span class="imp">accesible 24/7</span>. 
                        Y un sistema de gestión te permite <span class="imp">organizar, optimizar</span> y <span class="imp">controlar tus procesos</span>, aumentando la <span class="imp">productividad</span>. 
                        Digitalizar es <span class="imp">crecer</span>, ser <span class="imp">más competitivo</span> y ofrecer un <span class="imp">mejor servicio</span> a tus clientes.
                    </p>                    
               </div>
                <div class="caja1" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="500" data-aos-offset="0">
                    <img src="https://pixelshft.com/img/busqueda2.png" alt="Optimización SEO y seguridad en desarrollo de software en Uruguay" loading="lazy">
                    <h3 class="titulo">SEGURIDAD Y OPTIMIZACIÓN</h3>
                    <br>
                    <p class="desc">
                        Para nosotros, cada <span class="imp">línea de código</span> importa. 
                        Nuestras <span class="imp">soluciones</span> están pensadas para ser <span class="imp">seguras</span>, <span class="imp">rápidas</span> y <span class="imp">adaptables</span> desde el día uno. 
                        Un <span class="imp">código seguro</span> protege tu negocio y cuida la <span class="imp">integridad de tus datos</span>, mientras que la <span class="imp">optimización</span> nos permite crear <span class="imp">sistemas ligeros y eficientes</span> que mejoran la <span class="imp">experiencia del usuario</span> y el <span class="imp">rendimiento general</span>. 
                        Cuando trabajás con nosotros, sabés que estás invirtiendo en una <span class="imp">solución de calidad</span>, <span class="imp">robusta</span> y <span class="imp">lista para el futuro</span>.
                    </p>
                </div>
            </div>
            <div class="subnombre" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                <h2>PREGUNTAS FRECUENTES</h2>
                <p class="p1">CONTÁCTANOS SI TIENES MAS DUDAS</p>
            </div>
            <div class="faq-general">
                <div class="faq-contenedor">
                    <div class="faq-item">
                        <div class="faq-pregunta">
                            <h2>¿Cuánto cuesta una página web en 2024?</h2>
                            <span class="flecha"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#929292" d="m8.59 18.16l5.66-5.66l-5.66-5.66l-.7.71l4.95 4.95l-4.95 4.95z"/></svg></span>
                        </div>
                        <div class="faq-respuesta">
                            <p>Depende de lo que necesites. Una web básica arranca desde los $50, pero si buscás una <span class="imp">tienda online</span> o un <span class="imp">sistema de gestión</span> más completo, puede superar los $1,500. En PixelShift te armamos un <span class="imp">presupuesto personalizado</span>, sin vueltas.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-pregunta">
                            <h2>Errores comunes al diseñar páginas web</h2>
                            <span class="flecha"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#929292" d="m8.59 18.16l5.66-5.66l-5.66-5.66l-.7.71l4.95 4.95l-4.95 4.95z"/></svg></span>
                        </div>
                        <div class="faq-respuesta">
                            <p>Uno de los más típicos es no hacerla <span class="imp">responsive</span> (que no se vea bien en celulares). También una carga lenta o no pensar en el <span class="imp">SEO</span>. Una <span class="imp">página web bien diseñada</span> mejora tu posicionamiento y hace que la gente quiera quedarse.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-pregunta">
                            <h2>¿Por qué mi página web no aparece en Google?</h2>
                            <span class="flecha"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#929292" d="m8.59 18.16l5.66-5.66l-5.66-5.66l-.7.71l4.95 4.95l-4.95 4.95z"/></svg></span>
                        </div>
                        <div class="faq-respuesta">
                            <p>Puede ser porque no está bien optimizada para <span class="imp">SEO</span>, tiene contenido duplicado o simplemente Google no la indexó bien. Nosotros nos encargamos de que tu <span class="imp">sitio web</span> tenga visibilidad real en buscadores.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-pregunta">
                            <h2>¿Puedo integrar una tienda online a mi página web existente?</h2>
                            <span class="flecha"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#929292" d="m8.59 18.16l5.66-5.66l-5.66-5.66l-.7.71l4.95 4.95l-4.95 4.95z"/></svg></span>
                        </div>
                        <div class="faq-respuesta">
                            <p>Claro que sí. Analizamos tu sitio actual y sumamos una <span class="imp">tienda online</span> funcional, <span class="imp">rápida</span> y pensada para vender desde cualquier dispositivo.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-pregunta">
                            <h2>¿Por qué necesito optimización SEO?</h2>
                            <span class="flecha"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#929292" d="m8.59 18.16l5.66-5.66l-5.66-5.66l-.7.71l4.95 4.95l-4.95 4.95z"/></svg></span>
                        </div>
                        <div class="faq-respuesta">
                            <p>Porque si no estás en Google, es como si no existieras. Con un buen <span class="imp">SEO</span>, tu <span class="imp">página web</span> aparece en los primeros resultados, atraés más visitas y ganás más clientes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contacto" id="contacto">
        <div id="notification" class="notification" style="display:none;">
            <p>Estamos enviando tu correo</p>
            <div id="progress-bar" class="progress-bar">
                <div id="progress-fill" class="progress-fill"></div>
            </div>
        </div>        
        <div class="partes">
            <h2 class="revelartext nombre" data-bg-color="#353535" data-fg-color="white">CONTACTO</h2>
            <div class="contactoinfo" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                <div class="datos">
                    <h3>¡TRABAJEMOS JUNTOS!<br><span class="contactospan">CONCTACTATE CON <br>NUESTRO EQUIPO</span></h3>
                    <button class="btnwpp" id="wppBtn">
                        Whatsapp
                        <span class="icon">
                            <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
                            </svg>
                        </span>
                    </button>
                </div> 
                <form method="POST">
                    <input type="text" name="nombre" class="datos" placeholder="NOMBRE" required>
                    <input type="email" name="email" class="datos" placeholder="EMAIL" required>
                    <input type="text" name="telefono" class="datos" placeholder="TELEFONO" required>
                    <textarea name="mensaje" rows="5" placeholder="MENSAJE" required></textarea>
                    <input type="submit" name="enviarcorreo" id="submitBtn" style="display:none;">
                    <button type="button" id="enviar" class="button --brillo">ENVIAR</button>
                </form>
            </div>
        </div>
        <div class="footer">
            <div class="shine">PIXELSHIFT</div>
            <div class="redes">
                <div class="social-buttons">
                    <a href="#" class="social-button github" id="elegirBTNind1">
                        <svg class="cf-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="-2.5 0 19 19"><path d="M9.464 17.178a4.506 4.506 0 0 1-2.013.317 4.29 4.29 0 0 1-2.007-.317.746.746 0 0 1-.277-.587c0-.22-.008-.798-.012-1.567-2.564.557-3.105-1.236-3.105-1.236a2.44 2.44 0 0 0-1.024-1.348c-.836-.572.063-.56.063-.56a1.937 1.937 0 0 1 1.412.95 1.962 1.962 0 0 0 2.682.765 1.971 1.971 0 0 1 .586-1.233c-2.046-.232-4.198-1.023-4.198-4.554a3.566 3.566 0 0 1 .948-2.474 3.313 3.313 0 0 1 .091-2.438s.773-.248 2.534.945a8.727 8.727 0 0 1 4.615 0c1.76-1.193 2.532-.945 2.532-.945a3.31 3.31 0 0 1 .092 2.438 3.562 3.562 0 0 1 .947 2.474c0 3.54-2.155 4.32-4.208 4.548a2.195 2.195 0 0 1 .625 1.706c0 1.232-.011 2.227-.011 2.529a.694.694 0 0 1-.272.587z"></path></svg>
                    </a>
                    <a href="#" class="social-button linkedin" id="elegirBTNind3">
                        <svg viewBox="0 -2 44 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Icons" stroke="none" stroke-width="1">
                            <g transform="translate(-702.000000, -265.000000)">
                                <path d="M746,305 L736.2754,305 L736.2754,290.9384 C736.2754,287.257796 734.754233,284.74515 731.409219,284.74515 C728.850659,284.74515 727.427799,286.440738 726.765522,288.074854 C726.517168,288.661395 726.555974,289.478453 726.555974,290.295511 L726.555974,305 L716.921919,305 C716.921919,305 717.046096,280.091247 716.921919,277.827047 L726.555974,277.827047 L726.555974,282.091631 C727.125118,280.226996 730.203669,277.565794 735.116416,277.565794 C741.21143,277.565794 746,281.474355 746,289.890824 L746,305 L746,305 Z M707.17921,274.428187 L707.117121,274.428187 C704.0127,274.428187 702,272.350964 702,269.717936 C702,267.033681 704.072201,265 707.238711,265 C710.402634,265 712.348071,267.028559 712.41016,269.710252 C712.41016,272.34328 710.402634,274.428187 707.17921,274.428187 L707.17921,274.428187 L707.17921,274.428187 Z M703.109831,277.827047 L711.685795,277.827047 L711.685795,305 L703.109831,305 L703.109831,277.827047 L703.109831,277.827047 Z" id="LinkedIn">
                                </path>
                            </g>
                        </g>
                        </svg>
                    </a>
                    <a href="#" class="social-button instagram" id="elegirBTNind2">
                        <svg width="800px" height="800px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1">
                            <g id="Dribbble-Light-Preview" transform="translate(-340.000000, -7439.000000)">
                                <g id="icons" transform="translate(56.000000, 160.000000)">
                                    <path d="M289.869652,7279.12273 C288.241769,7279.19618 286.830805,7279.5942 285.691486,7280.72871 C284.548187,7281.86918 284.155147,7283.28558 284.081514,7284.89653 C284.035742,7285.90201 283.768077,7293.49818 284.544207,7295.49028 C285.067597,7296.83422 286.098457,7297.86749 287.454694,7298.39256 C288.087538,7298.63872 288.809936,7298.80547 289.869652,7298.85411 C298.730467,7299.25511 302.015089,7299.03674 303.400182,7295.49028 C303.645956,7294.859 303.815113,7294.1374 303.86188,7293.08031 C304.26686,7284.19677 303.796207,7282.27117 302.251908,7280.72871 C301.027016,7279.50685 299.5862,7278.67508 289.869652,7279.12273 M289.951245,7297.06748 C288.981083,7297.0238 288.454707,7296.86201 288.103459,7296.72603 C287.219865,7296.3826 286.556174,7295.72155 286.214876,7294.84312 C285.623823,7293.32944 285.819846,7286.14023 285.872583,7284.97693 C285.924325,7283.83745 286.155174,7282.79624 286.959165,7281.99226 C287.954203,7280.99968 289.239792,7280.51332 297.993144,7280.90837 C299.135448,7280.95998 300.179243,7281.19026 300.985224,7281.99226 C301.980262,7282.98483 302.473801,7284.28014 302.071806,7292.99991 C302.028024,7293.96767 301.865833,7294.49274 301.729513,7294.84312 C300.829003,7297.15085 298.757333,7297.47145 289.951245,7297.06748 M298.089663,7283.68956 C298.089663,7284.34665 298.623998,7284.88065 299.283709,7284.88065 C299.943419,7284.88065 300.47875,7284.34665 300.47875,7283.68956 C300.47875,7283.03248 299.943419,7282.49847 299.283709,7282.49847 C298.623998,7282.49847 298.089663,7283.03248 298.089663,7283.68956 M288.862673,7288.98792 C288.862673,7291.80286 291.150266,7294.08479 293.972194,7294.08479 C296.794123,7294.08479 299.081716,7291.80286 299.081716,7288.98792 C299.081716,7286.17298 296.794123,7283.89205 293.972194,7283.89205 C291.150266,7283.89205 288.862673,7286.17298 288.862673,7288.98792 M290.655732,7288.98792 C290.655732,7287.16159 292.140329,7285.67967 293.972194,7285.67967 C295.80406,7285.67967 297.288657,7287.16159 297.288657,7288.98792 C297.288657,7290.81525 295.80406,7292.29716 293.972194,7292.29716 C292.140329,7292.29716 290.655732,7290.81525 290.655732,7288.98792">
                                    </path>
                                </g>
                            </g>
                        </g>
                        </svg>
                    </a>
                    </div>
                </div>
            <div>
                <p>Desarrollado por PixelShift</p>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="./js/carousel.js"></script>
    <script src="https://pixelshft.com/js/in.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/split-type"></script>
    <script src="https://unpkg.com/lenis@1.1.14/dist/lenis.min.js"></script> 
    <script src="https://pixelshft.com/js/gsap.js"></script>
    <script> AOS.init(); </script>
</body>
</html>