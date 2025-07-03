<?php 

$alert = '';

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
        $mail->Subject = 'Sistema de Gestion / Contacto PixelShift';
        $mail->Body = "<h3>Hola $nombre, tu mensaje de contacto fue enviado con éxito.<br> (Responderemos lo mas rapido posible)</h3><br><h3>Nombre :</h3> <p>$nombre</p> <br><h3>Email:</h3> <p>$email</p> <br><h3>Teléfono:</h3> <p>$telefono</p> <br><h3>Mensaje :</h3> <p>$mensaje</p>";

        $mail->send();
    } catch (Exception $e) {
        $alert = '<div class="alert-error">Error: ' . $e->getMessage() . '</div>';
    }
} 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Sistemas de Gestión en Uruguay</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pixelshft.com/css/pgeneral.css">
    <link rel="stylesheet" href="https://pixelshft.com/css/ps.css">
    <link rel="stylesheet" href="https://pixelshft.com/css/in.css">
    <link rel="icon" href="https://pixelshft.com/img/logovent.png">
    <meta name="title" content="Sistemas de Gestión en Uruguay">
    <meta name="description" content="En PixelShift ofrecemos sistemas de gestión personalizados en Uruguay para optimizar tu negocio. Mejora tus procesos con herramientas innovadoras"/>
    <meta name="keywords" content="sistemas de gestión, gestión de proyectos, sistemas personalizados, herramientas de gestión, software a medida, desarrollo de sistemas de gestion, desarrollo de aplicaciones de gestion"/>
    <meta name="geo.region" content="UY" />
    <meta name="geo.placename" content="Uruguay" />
    <meta name="language" content="es" />
    <meta name="robots" content="index,follow" />
    <meta property="og:title" content="Pixelshift - Sistemas de Gestion">
    <meta property="og:description" content="Sistemas de Gestion en Uruguay">
    <meta property="og:image" content="https://i.imgur.com/ebfHMaA.png">
    <meta property="og:url" content="https://pixelshft.com/gestion-empresarial/">
    <meta property="og:type" content="website">
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
                <div class="nombre" id="iniciobtn">
                    <span>PIXELSHIFT</span>
                    <span>PIXELSHIFT</span>
                </div>
                <ul class="bar">
                    <li class="lista animhover1"><a href="https://pixelshft.com/dise%C3%B1o-web/">Diseño Web</a></li>
                    <li class="lista animhover1"><a href="https://pixelshft.com/ecommerce-uruguay/">Tiendas Online</a></li>
                    <li class="lista animhover1" id="selec"><a href="#planes">Sistemas de Gestión</a></li>
                </ul>
            </div>
        </div>
        <section class="inicio">
            <div class="continicio">
                <h1><span class="dis">APPS</span> & SISTEMAS DE GESTION</h1>
                <h2>MEJORA TU EFICIENCIA</h2>
                <p>Desarrollamos tu sistema de gestión <span>personalizado</span>, alineado a tus <span>necesidades</span> y diseñado para <span>optimizar</span> tus procesos de manera profesional.</p>
                <div class="bottones">
                    <div class="button">
                        <button class="button" id="irplanes">
                            <svg class="svgIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="m18.707 12.707-1.414-1.414L13 15.586V6h-2v9.586l-4.293-4.293-1.414 1.414L12 19.414z"></path></svg>
                        </button>
                    </div>
                    <button type="button"  class="comienza --brillo">COMIENZA YA</button>
                </div>
            </div>
            
            <svg class="onda" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#377ebb" fill-opacity="1" d="M0,256L60,266.7C120,277,240,299,360,266.7C480,235,600,149,720,138.7C840,128,960,192,1080,197.3C1200,203,1320,149,1380,122.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
            </svg>
        </section>
    </header>
    <section class="planes">
        <h2 id="planes" class="revelartext nombre" data-bg-color="#353535" data-fg-color="white">PLANES</h2>
        <div class="contcards">
            <div class="card" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0">
                <div class="cabezal">
                <h2 class="titulo">Starter</h2>
                <h1 class="precio">U$D 149 <span>/unico</span><h2>
                </div>
                <p class="desc">Te ayudamos a enfocarte en mejorar tus procesos y eficiencia sin complicaciones.</p>
                <div class="line"></div>
                <ul class="listas">
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Panel de Control Personalizable</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Gestión de Usuarios</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <div class="sistienda">
                            <p>Gestión de Clientes</p>
                            <p class="descp">Información detallada de clientes - Historial de interacciones</p>
                        </div>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <div class="sistienda">
                            <p>Módulo de Inventario</p>
                            <p class="descp">Control de stock - Registros de entradas y salidas - Alertas de bajo inventario</p>
                        </div>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <div class="sistienda">
                            <p>Gestión de Pedidos y Facturación</p>
                            <p class="descp">Emisión automática de facturas - Procesamiento de pedidos y seguimiento de pagos</p>
                        </div>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <div class="sistienda">
                            <p>Control de Proveedores y Compras</p>
                            <p class="descp"> Base de datos para proveedores - Control de compras y pagos</p>
                        </div>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Notificaciones y Alertas Personalizables</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Soporte Técnico</p>
                    </li>
                </ul>
                <div class="masinfo">
                    <p>MAS INFORMACION AQUI</p>
                    <div class="svg-contenedor scroll-carga" data-src='<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="none" stroke="#002233" stroke-dasharray="12" stroke-dashoffset="12" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 16l-7 -7M12 16l7 -7"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="12;0"/></path></svg>'></div>
               </div>
                <button id="elegirBTNsis1" class="elegir" type="button">Elegir</button>
            </div>
            <div class="card" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0">
                <div class="cabezal">
                    <h2 class="titulo2">Avanzado</h2>
                    <h2 class="precio">U$D 199 <span>/unico</span><h2>
                </div>
                <p class="desc">Optimiza tu negocio con herramientas avanzadas para destacar en un mercado competitivo y maximizar tu productividad.</p>
                <div class="line"></div>
                <ul class="listas">
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Panel de Control Personalizable</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <div class="sistienda">
                            <p>Gestión de Usuarios y Roles</p>
                            <p class="descp">Control de accesos - Permisos específicos - Niveles de usuarios</p>
                        </div>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <div class="sistienda">
                            <p>Gestión de Clientes</p>
                            <p class="descp">Información detallada de clientes - Historial de interacciones</p>
                        </div>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <div class="sistienda">
                            <p>Módulo de Inventario</p>
                            <p class="descp">Control de stock - Registros de entradas y salidas - Alertas de bajo inventario</p>
                        </div>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <div class="sistienda">
                            <p>Gestión de Pedidos y Facturación</p>
                            <p class="descp">Emisión automática de facturas - Procesamiento de pedidos y seguimiento de pagos</p>
                        </div>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <div class="sistienda">
                            <p>Control de Proveedores y Compras</p>
                            <p class="descp"> Base de datos para proveedores - Control de compras y pagos</p>
                        </div>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <div class="sistienda">
                            <p>Análisis y Reportes</p>
                            <p class="descp">Gráficas y reportes de ventas - Rendimiento y productividad</p>
                        </div>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Automatización de Tareas</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Notificaciones y Alertas Personalizables</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Soporte Técnico</p>
                    </li>
                </ul>
                <div class="masinfo">
                    <p>MAS INFORMACION AQUI</p>
                    <div class="svg-contenedor scroll-carga" data-src='<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="none" stroke="#002233" stroke-dasharray="12" stroke-dashoffset="12" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 16l-7 -7M12 16l7 -7"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="12;0"/></path></svg>'></div>
               </div>
                <button id="elegirBTNsis2" class="elegir" type="button">Elegir</button>
            </div>
            <div class="card" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
                <div class="cabezal">
                <h2 class="titulo3">Integral</h2>
                <h2 class="precio">U$D 279 <span>/unico</span><h2>
                </div>
                <p class="desc">Obtén un sistema de gestión de alto rendimiento con funciones exclusivas y herramientas avanzadas para posicionarte como líder en tu industria y optimizar tus operaciones.</p>
                <div class="line"></div>
                <ul class="listas">
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Panel de Control Personalizable</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <div class="sistienda">
                            <p>Gestión de Usuarios y Roles</p>
                            <p class="descp">Control de accesos - Permisos específicos - Niveles de usuarios</p>
                        </div>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <div class="sistienda">
                            <p>Gestión de Clientes</p>
                            <p class="descp">Información detallada de clientes - Historial de interacciones</p>
                        </div>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <div class="sistienda">
                            <p>Módulo de Inventario</p>
                            <p class="descp">Control de stock - Registros de entradas y salidas - Alertas de bajo inventario</p>
                        </div>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <div class="sistienda">
                            <p>Gestión de Pedidos y Facturación</p>
                            <p class="descp">Emisión automática de facturas - Procesamiento de pedidos y seguimiento de pagos</p>
                        </div>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <div class="sistienda">
                            <p>Control de Proveedores y Compras</p>
                            <p class="descp"> Base de datos para proveedores - Control de compras y pagos</p>
                        </div>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <div class="sistienda">
                            <p>Módulo de Finanzas</p>
                            <p class="descp">Registro de ingresos - Registro de egresos - Análisis financiero</p>
                        </div>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <div class="sistienda">
                            <p>Análisis y Reportes</p>
                            <p class="descp">Gráficas y reportes de ventas - Rendimiento y productividad</p>
                        </div>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Automatización de Tareas</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Gestión de Documentación</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Notificaciones y Alertas Personalizables</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Soporte Técnico</p>
                    </li>                  
                </ul>
               <div class="masinfo">
                    <p>MAS INFORMACION AQUI</p>
                    <div class="svg-contenedor scroll-carga" data-src='<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="none" stroke="#002233" stroke-dasharray="12" stroke-dashoffset="12" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 16l-7 -7M12 16l7 -7"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="12;0"/></path></svg>'></div>
               </div>
                <button id="elegirBTNsis3" class="elegir" type="button">Elegir</button>
            </div>
        </div>
        <div class="subnombre" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
            <h2>PLANIFICA TU PROPIO PROYECTO</h2>
            <p class="p1">Si los planes no se ajustan a tus necesidades, diseña uno personalizado</p>
            <div class="bottones">
                <button class="button" id="ircontacto">
                    <svg class="svgIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="m18.707 12.707-1.414-1.414L13 15.586V6h-2v9.586l-4.293-4.293-1.414 1.414L12 19.414z"></path></svg>
                </button>
            </div>
        </div>
    </section>
    <section class="info">
        <svg class="onda" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#8bc6f9" fill-opacity="1" d="M0,256L60,266.7C120,277,240,299,360,266.7C480,235,600,149,720,138.7C840,128,960,192,1080,197.3C1200,203,1320,149,1380,122.7L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
        </svg>
        <div class="partes">
            <h2 class="revelartext nombre" data-bg-color="#353535" data-fg-color="white">FUNCIONAMIENTO</h2>
            <div class="carousel-contenedor">
                <div class="scroll">
                    <div class="contedorcaracts">
                        <div class="caracts" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0">
                            <svg class="imginfo" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-width="1.5"><rect width="7" height="5" rx=".6" transform="matrix(1 0 0 -1 3 22)"/><rect width="7" height="5" rx=".6" transform="matrix(1 0 0 -1 8.5 7)"/><rect width="7" height="5" rx=".6" transform="matrix(1 0 0 -1 14 22)"/><path d="M6.5 17v-3.5a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2V17M12 11.5V7"/></g></svg>
                            <h2>Centralización de la Información</h2>
                        </div>
                        <div class="caracts" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0">
                            <svg class="imginfo" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 36 36"><path fill="white" d="M17.9 17.3c2.7 0 4.8-2.2 4.8-4.9s-2.2-4.8-4.9-4.8S13 9.8 13 12.4c0 2.7 2.2 4.9 4.9 4.9m-.1-7.7q.15 0 0 0c1.6 0 2.9 1.3 2.9 2.9s-1.3 2.8-2.9 2.8S15 14 15 12.5c0-1.6 1.3-2.9 2.8-2.9" class="clr-i-outline clr-i-outline-path-1"/><path fill="white" d="M32.7 16.7c-1.9-1.7-4.4-2.6-7-2.5h-.8q-.3 1.2-.9 2.1c.6-.1 1.1-.1 1.7-.1c1.9-.1 3.8.5 5.3 1.6V25h2v-8z" class="clr-i-outline clr-i-outline-path-2"/><path fill="white" d="M23.4 7.8c.5-1.2 1.9-1.8 3.2-1.3c1.2.5 1.8 1.9 1.3 3.2c-.4.9-1.3 1.5-2.2 1.5c-.2 0-.5 0-.7-.1c.1.5.1 1 .1 1.4v.6c.2 0 .4.1.6.1c2.5 0 4.5-2 4.5-4.4c0-2.5-2-4.5-4.4-4.5c-1.6 0-3 .8-3.8 2.2c.5.3 1 .7 1.4 1.3" class="clr-i-outline clr-i-outline-path-3"/><path fill="white" d="M12 16.4q-.6-.9-.9-2.1h-.8c-2.6-.1-5.1.8-7 2.4L3 17v8h2v-7.2c1.6-1.1 3.4-1.7 5.3-1.6c.6 0 1.2.1 1.7.2" class="clr-i-outline clr-i-outline-path-4"/><path fill="white" d="M10.3 13.1c.2 0 .4 0 .6-.1v-.6c0-.5 0-1 .1-1.4c-.2.1-.5.1-.7.1c-1.3 0-2.4-1.1-2.4-2.4S9 6.3 10.3 6.3c1 0 1.9.6 2.3 1.5c.4-.5 1-1 1.5-1.4c-1.3-2.1-4-2.8-6.1-1.5s-2.8 4-1.5 6.1c.8 1.3 2.2 2.1 3.8 2.1" class="clr-i-outline clr-i-outline-path-5"/><path fill="white" d="m26.1 22.7l-.2-.3c-2-2.2-4.8-3.5-7.8-3.4c-3-.1-5.9 1.2-7.9 3.4l-.2.3v7.6c0 .9.7 1.7 1.7 1.7h12.8c.9 0 1.7-.8 1.7-1.7v-7.6zm-2 7.3H12v-6.6c1.6-1.6 3.8-2.4 6.1-2.4c2.2-.1 4.4.8 6 2.4z" class="clr-i-outline clr-i-outline-path-6"/><path fill="none" d="M0 0h36v36H0z"/></svg>
                            <h2>Mejor Servicio al Cliente</h2>
                        </div>
                        <div class="caracts" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
                            <svg class="imginfo" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" color="white"><path d="M20.943 16.835a15.76 15.76 0 0 0-4.476-8.616c-.517-.503-.775-.754-1.346-.986C14.55 7 14.059 7 13.078 7h-2.156c-.981 0-1.472 0-2.043.233c-.57.232-.83.483-1.346.986a15.76 15.76 0 0 0-4.476 8.616C2.57 19.773 5.28 22 8.308 22h7.384c3.029 0 5.74-2.227 5.25-5.165"/><path d="M7.257 4.443c-.207-.3-.506-.708.112-.8c.635-.096 1.294.338 1.94.33c.583-.009.88-.268 1.2-.638C10.845 2.946 11.365 2 12 2s1.155.946 1.491 1.335c.32.37.617.63 1.2.637c.646.01 1.305-.425 1.94-.33c.618.093.319.5.112.8l-.932 1.359c-.4.58-.599.87-1.017 1.035S13.837 7 12.758 7h-1.516c-1.08 0-1.619 0-2.036-.164S8.589 6.38 8.189 5.8zm6.37 8.476c-.216-.799-1.317-1.519-2.638-.98s-1.53 2.272.467 2.457c.904.083 1.492-.097 2.031.412c.54.508.64 1.923-.739 2.304c-1.377.381-2.742-.214-2.89-1.06m1.984-5.06v.761m0 5.476v.764"/></g></svg>
                            <h2>Mejor Control Financiero</h2>
                        </div>
                        <div class="caracts" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="400" data-aos-offset="0">
                            <svg class="imginfo" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 21H9v-8.4a.6.6 0 0 1 .6-.6h4.8a.6.6 0 0 1 .6.6zm5.4 0H15v-2.9a.6.6 0 0 1 .6-.6h4.8a.6.6 0 0 1 .6.6v2.3a.6.6 0 0 1-.6.6M9 21v-4.9a.6.6 0 0 0-.6-.6H3.6a.6.6 0 0 0-.6.6v4.3a.6.6 0 0 0 .6.6zm1.806-15.887l.909-1.927a.312.312 0 0 1 .57 0l.91 1.927l2.032.311c.261.04.365.376.176.568l-1.47 1.5l.347 2.118c.044.272-.228.48-.462.351l-1.818-1l-1.818 1c-.233.128-.506-.079-.462-.351l.347-2.118l-1.47-1.5c-.19-.192-.085-.528.175-.568z"/></svg>
                            <h2>Competitividad</h2>
                        </div>
                        <div class="caracts" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="500" data-aos-offset="0">
                            <svg class="imginfo" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="M3 4h1v14l5.57-9.67l6.01 3.47l3.62-6.26l.86.5l-4.11 7.13L9.94 9.7L4 20h2.3l3.87-6.71l.5-.86l.86.5l5.15 2.97L20 10.14V21H3zm14.04 13.26l-6.01-3.47L7.45 20H19v-6.12z"/></svg>
                            <h2>Aumento de la Productividad</h2>
                        </div>
                        <div class="caracts" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="800" data-aos-offset="0">
                            <svg class="imginfo" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="M6 5h2.5a3 3 0 0 1 3-3a3 3 0 0 1 3 3H17a3 3 0 0 1 3 3v11a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V8a3 3 0 0 1 3-3m0 1a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-1v3H7V6zm2 2h7V6H8zm3.5-5a2 2 0 0 0-2 2h4a2 2 0 0 0-2-2M6 11h11v1H6zm0 3h11v1H6zm0 3h9v1H6z"/></svg>
                            <h2>Mejora la Gestion</h2>
                        </div>
                        <div class="caracts" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="900" data-aos-offset="0">
                            <svg class="imginfo" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 2048 2048"><path fill="white" d="M1930 630q0 22-2 43t-8 43l123 51l-49 118l-124-51q-46 74-120 120l51 125l-118 49l-52-124q-21 5-42 7t-43 3q-22 0-43-2t-43-8l-23 56l-111-67l16-39q-74-46-120-120l-125 51l-49-118l124-51q-5-21-7-42t-3-44q0-22 2-43t8-42l-124-52l49-118l125 52q23-37 53-67t67-54l-51-124l118-49l51 123q21-5 42-7t44-3q22 0 43 2t42 8l52-123l118 49l-51 124q74 46 120 120l124-51l49 118l-123 52q5 21 7 42t3 43m-384 256q53 0 99-20t82-55t55-81t20-100q0-53-20-99t-55-82t-81-55t-100-20q-53 0-99 20t-82 55t-55 81t-20 100q0 53 20 99t55 82t81 55t100 20m-577 220l139-58l44 106v15l-133 55q7 27 11 54t4 56q0 28-4 55t-11 55l133 55v15l-44 106l-139-58q-29 48-68 87t-87 69l58 139l-119 49l-57-139q-27 7-54 11t-56 4q-28 0-55-4t-55-11l-58 139l-118-49l58-140q-97-58-155-155l-140 58l-48-118l138-58q-7-27-11-54t-4-56q0-28 4-55t11-55l-138-57l48-119l140 58q58-97 155-155l-58-139l118-49l58 138q27-7 54-11t56-4q28 0 55 4t55 11l57-138l119 49l-58 139q97 58 155 155m-383 548q66 0 124-25t101-68t69-102t26-125t-25-124t-69-101t-102-69t-124-26t-124 25t-102 69t-69 102t-25 124t25 124t68 102t102 69t125 25m694 394v-896l747 448zm128-670v444l370-222z"/></svg>
                            <h2>Automatización de Procesos</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subnombre" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                <h2>PASOS A SEGUIR</h2>
                <p class="p2">Pasos para planificar tu proyecto</p>
            </div>
            <div class="container">
                <div class="caja1" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="150" data-aos-offset="0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><g fill="#00000"><path d="M16 20a1 1 0 1 0 0 2h7a1 1 0 1 0 0-2zm-1-4a1 1 0 0 1 1-1h15.5a1 1 0 1 1 0 2H16a1 1 0 0 1-1-1"/><path fill-rule="evenodd" d="M15 28a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm2 3v-2h2v2zm11 0a3 3 0 1 0 0-6a3 3 0 1 0 0 6m0-2a1 1 0 1 0 .002-1.998A1 1 0 0 0 28 29m-6 6.182C22 33.066 25.997 32 28 32s6 1.066 6 3.182V39H22zm2.055.04l-.055.057V37h8v-1.72l-.055-.059c-.164-.16-.48-.372-.976-.583c-1-.425-2.234-.638-2.969-.638s-1.969.213-2.969.638c-.496.21-.812.423-.976.583" clip-rule="evenodd"/><path fill-rule="evenodd" d="M17 7a3 3 0 0 1 3-3h8a3 3 0 0 1 3 3h4a3 3 0 0 1 3 3v31a3 3 0 0 1-3 3H13a3 3 0 0 1-3-3V10a3 3 0 0 1 3-3zm11 5a3 3 0 0 0 3-3h4a1 1 0 0 1 1 1v31a1 1 0 0 1-1 1H13a1 1 0 0 1-1-1V10a1 1 0 0 1 1-1h4a3 3 0 0 0 3 3zm-8-6a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1z" clip-rule="evenodd"/></g></svg>
                    <h3 class="titulo">CONTACTANOS Y ASESORATE</h3>
                    <br>
                    <p class="desc">¡Contáctanos y recibe el asesoramiento que necesitas para llevar tu negocio al siguiente nivel! Estamos aquí para responder todas tus preguntas y ayudarte a encontrar la solución ideal para tu proyecto. Puedes escribirnos a través de nuestro formulario de contacto o directamente por WhatsApp para una comunicación rápida y personalizada. <br> ¡Estamos listos para ayudarte a hacer realidad tus ideas! <br> ‎ </p>
                </div>
                <div class="caja1" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
                    <img src="https://pixelshft.com/img/apoyo.png" alt="">
                    <h3 class="titulo">CHARLAMOS Y PRESUPUESTAMOS</h3>
                    <br>
                    <p class="desc">Idearemos la mejor manera de llevar a cabo tu proyecto, tomando en cuenta tus necesidades y objetivos. Te ofreceremos un presupuesto personalizado y detallado para que tengas claro todo lo relacionado con la inversión y los servicios que te ofrecemos</p>
                    <div class="button-container">
                        <a href="#planes" class="button --brillo">PLANES</a>
                    </div>
                </div>
                <div class="caja1" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="500" data-aos-offset="0">
                    <img src="https://pixelshft.com/img/codigo.png" alt="">
                    <h3 class="titulo">CREAMOS TU CODIGO</h3>
                    <br>
                    <p class="desc">Una vez que tengamos claro el proyecto y el presupuesto, comenzaremos con la creación del código. Durante esta fase, trabajaremos de manera eficiente para cumplir con los plazos establecidos, garantizando que cada línea de código esté bien estructurada y sea funcional. <br>
                        El tiempo estimado de desarrollo depende de la complejidad del proyecto, pero siempre nos comprometemos a entregar resultados en tiempo y forma.</p>
                </div>
            </div>
            <div class="subnombre" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                <h2>DATOS IMPORTANTES</h2>
                <p class="p1">Estos son datos importantes que debes conocer</p>
            </div>
            <div class="container">
                <div  class="caja1" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="150" data-aos-offset="0">
                    <img src="https://pixelshft.com/img/foco.png" alt="">
                    <h3 class="titulo">INTERFAZ INTUITIVA</h3>
                    <br>
                    <p class="desc">
                        Nuestro equipo diseña proyectos de manera intuitiva y accesible, asegurándose de que sean fáciles de usar y comprender para cualquier tipo de público.</p>
                </div>
                <div  class="caja1" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
                    <img src="https://pixelshft.com/img/diseno.png" alt="">
                    <h3 class="titulo">DISEÑO EFICIENTE</h3>
                    <br>
                    <p class="desc">
                        Diseñamos tu proyecto de manera estratégica, enfocándonos en convertir a los visitantes en clientes. Potenciamos tus ventas e impulsamos el crecimiento de tu marca.</p>
                </div>
                <div  class="caja1" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="500" data-aos-offset="0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="black" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14.667 12h.733a.6.6 0 0 1 .6.6v3.8a.6.6 0 0 1-.6.6H8.6a.6.6 0 0 1-.6-.6v-3.8a.6.6 0 0 1 .6-.6h.733m5.334 0V9.5c0-.833-.534-2.5-2.667-2.5S9.333 8.667 9.333 9.5V12m5.334 0H9.333"/><path d="M3 19V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Z"/></g></svg>
                    <h3 class="titulo">SEGURIDAD Y ESCALABILIDAD</h3>
                    <br>
                    <p class="desc">Analizamos tu proyecto y desarrollamos una estrategia SEO personalizada para asegurarnos de que tu sitio se destaque en los motores de búsqueda, aumentando su visibilidad y alcance.</p>
                </div>
                <div  class="caja1" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="150" data-aos-offset="0">
                    <img src="https://pixelshft.com/img/pantallas.png" alt="">
                    <h3 class="titulo">DESDE CELULARES Y TABLETS</h3>
                    <br>
                    <p class="desc">La página será completamente responsive, adaptándose de forma óptima a cualquier dispositivo y resolución.</p>
                </div>
                <div  class="caja1" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
                    <img src="https://pixelshft.com/img/mantenimiento.png" alt="">
                    <h3 class="titulo">MANTENIMIENTO</h3>
                    <br>
                    <p class="desc">El mantenimiento mensual o puntual es opcional y sin compromiso. Nos encargamos solo del desarrollo de la página web y ofrecemos soporte técnico ante cualquier inconveniente.</p>
                </div>
                <div  class="caja1" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="500" data-aos-offset="0">
                    <img src="https://pixelshft.com/img/host.png" alt="">
                    <h3 class="titulo">HOSTING Y DOMINIO</h3>
                    <br>
                    <p class="desc">El hosting y los dominios no están incluidos en los precios de los planes, sin embargo, se pueden añadir como un servicio adicional si aún no cuenta con ellos. También ofrecemos soporte para dominios en Uruguay</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contacto">
        <div id="notification" class="notification" style="display:none;">
            <p>Estamos enviando tu correo</p>
            <div id="progress-bar" class="progress-bar">
                <div id="progress-fill" class="progress-fill"></div>
            </div>
        </div>  
        <div class="partes">
            <h2 id="contacto" class="revelartext nombre" data-bg-color="#353535" data-fg-color="white">CONTACTO</h2>
            <div class="contactoinfo" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                <div class="datos">
                    <h2>¡TRABAJEMOS JUNTOS!<br><span class="contactospan">CONCTACTATE CON <br>NUESTRO EQUIPO</span></h2>
                    <button class="btnwpp" id="presupestarBtn">
                        Whatsapp
                        <span class="icon" >
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
                    <textarea name="mensaje" placeholder="MENSAJE" required></textarea>
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
    <script src="https://pixelshft.com/js/pgeneral.js"></script>
    <script src="https://pixelshft.com/js/in.js"></script>
    <script src="https://pixelshft.com/js/ps.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/split-type"></script>
    <script src="https://unpkg.com/lenis@1.1.14/dist/lenis.min.js"></script> 
    <script src="https://pixelshft.com/js/gsap.js"></script>
    <script>AOS.init();</script>
</body>
</html>