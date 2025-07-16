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
        $mail->Subject = 'Paginas / Contacto PixelShift';
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web en Uruguay</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/pgeneral.css">
    <link rel="stylesheet" href="./css/pw.css">
    <link rel="stylesheet" href="./css/in.css">
    <link rel="icon" href="https://pixelshft.com/img/logovent.png">
    <meta name="title" content="Diseño Web en Uruguay">
    <meta name="description" content="Diseño web personalizadas en Uruguay. Soluciones creativas y funcionales adaptadas a tus necesidades."/>
    <meta name="keywords" content="diseño web, diseño UX/UI, desarrollo web, páginas web personalizadas, desarrollo web en Uruguay, optimizacion seo, diseño web en Uruguay, agencia de diseño web en Uruguay, servicios de diseño web en Uruguay, crear tienda online fácil">
    <meta name="geo.region" content="UY" />
    <meta name="geo.placename" content="Uruguay" />
    <meta name="language" content="es" />
    <meta name="robots" content="index,follow" />
    <meta property="og:title" content="Pixelshift - WEB">
    <meta property="og:description" content="Diseño web en Uruguay">
    <meta property="og:image" content="https://i.imgur.com/ebfHMaA.png">
    <meta property="og:url" content="https://pixelshft.com/dise%C3%B1o-web/">
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
                    <li class="lista animhover1" id="selec"><a href="#planes">Diseño Web</a></li>
                    <li class="lista animhover1"><a href="https://pixelshft.com/ecommerce-uruguay/">Tiendas Online</a></li>
                    <li class="lista animhover1"><a href="https://pixelshft.com/gestion-empresarial/">Sistemas de Gestión</a></li>
                </ul>
            </div>
        </div>
        <section class="inicio">
            <div class="continicio">
                <h1><span class="dis">DISEÑO WEB EN URUGUAY</h1>
                <h2>POTENCIAMOS TU PRESENCIA</h2>
                <p>Creamos tu página web <span>personalizada</span>, adaptada a tus <span>necesidades</span> y diseñada para <span>destacar</span> tu negocio profesionalmente.</p>
                <div class="bottones">
                    <div class="button">
                        <button class="button" id="irplanes">
                            <svg class="svgIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="m18.707 12.707-1.414-1.414L13 15.586V6h-2v9.586l-4.293-4.293-1.414 1.414L12 19.414z"></path></svg>
                        </button>
                    </div>
                    <button type="button" id="presupestarBtn" class="comienza --brillo">COMIENZA YA</button>
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
                <h2 class="titulo">Landing</h2>
                <h2 class="precio">U$D69 <span>/único</span></h2>
                </div>
                <p class="desc">Una landing page no solo es una carta de presentacion, convierte visitas en clientes</p>
                <div class="line"></div>
                <ul class="listas">
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Dominio .UY .CL .ES .COM /año</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Diseño One-Page a medida</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Certificado de Seguridad SSL</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>1 Correo Corporativo Gmail</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Registro en Google Search Console</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Optimizacion y Análisis SEO</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Secciones a elección</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Vinculacion a Redes</p>
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
                <button id="elegirBTNweb1" class="elegir" type="button">Elegir</button>
            </div>
            <div class="card" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0">
                <div class="cabezal">
                    <h2 class="titulo2">Corporativa</h2>
                    <h2 class="precio">$139 <span>/unico</span></h2>
                </div>
                <p class="desc">Tu web corporativa es más que información, es la imagen y esencia de tu empresa en línea</p>
                <div class="line"></div>
                <ul class="listas">
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Dominio .UY .CL .ES .COM /año</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Diseño Multi Página a medida</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Certificado de Seguridad SSL</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>3 Correo Corporativo Gmail</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Registro en Google Search Console</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Optimizacion y Análisis SEO</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Secciones a elección por pagina</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Sistema de Blog o Comentarios</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Vinculacion a Redes</p>
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
                <button id="elegirBTNweb2" class="elegir" type="button">Elegir</button>
            </div>
            <div class="card" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
                <div class="cabezal">
                <h2 class="titulo3">Comercial</h2>
                <h2 class="precio">$269 <span>/unico</span></h2>
                </div>
                <p class="desc">Tu web comercial es más que una vitrina, es la mejor forma para vender tus productos. <br> ¡Conviértela en tu mejor vendedor!</p>
                <div class="line"></div>
                <ul class="listas">
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Dominio .UY .CL .ES .COM /año</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Diseño Multi Página a medida</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Certificado de Seguridad SSL</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>5 Correo Corporativo Gmail</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Registro en Google Search Console</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Optimizacion y Análisis SEO</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Secciones a elección por pagina</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <p>Subida de hasta 200 productos</p>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <div class="sistienda">
                            <p>Integración con metodos de pago</p>
                            <p class="descp">MercadoPago - Tarjetas - Efectivo</p>
                        </div>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <div class="sistienda">
                            <p>Sistema de gestion basico</p>
                            <p class="descp">Compras - Productos - Catalogo - Publicacion - Usuarios</p>
                        </div>
                    </li>
                    <li class="esp">
                        <div class="svg-contenedor scroll-carga" data-src="<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24'><mask id='lineMdConfirmCircleFilled0'><g fill='none' stroke='#fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'><path fill='#fff' fill-opacity='0' stroke-dasharray='64' stroke-dashoffset='64' d='M3 12c0 -4.97 4.03 -9 9 -9c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9Z'><animate fill='freeze' attributeName='fill-opacity' begin='0.6s' dur='0.5s' values='0;1'/><animate fill='freeze' attributeName='stroke-dashoffset' dur='0.6s' values='64;0'/></path><path stroke='#000' stroke-dasharray='14' stroke-dashoffset='14' d='M8 12l3 3l5 -5'><animate fill='freeze' attributeName='stroke-dashoffset' begin='1.1s' dur='0.2s' values='14;0'/></path></g></mask><rect width='24' height='24' fill='#002233' mask='url(#lineMdConfirmCircleFilled0)'/></svg>"></div>
                        <div class="sistienda">
                            <p>Sistema de Tienda</p>
                            <p class="descp">Carrito - Buscador Interno - Puntos - Envio - Cuentas</p>
                        </div>
                    </li>
                </ul>
                <div class="masinfo">
                    <p>MAS INFORMACION AQUI</p>
                    <div class="svg-contenedor scroll-carga" data-src='<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="none" stroke="#002233" stroke-dasharray="12" stroke-dashoffset="12" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 16l-7 -7M12 16l7 -7"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s" values="12;0"/></path></svg>'></div>
               </div>
                <button id="elegirBTNweb3" class="elegir" type="button">Elegir</button>
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
                            <svg class="imginfo" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="M17 17q.625 0 1.063-.437T18.5 15.5t-.437-1.062T17 14t-1.062.438T15.5 15.5t.438 1.063T17 17m0 3q.794 0 1.435-.353q.64-.353 1.06-.953q-.57-.344-1.195-.519T17 18t-1.3.175t-1.194.52q.419.6 1.06.952Q16.205 20 17 20m-5 .962q-3.014-.895-5.007-3.651T5 11.1V5.692l7-2.615l7 2.615v5.656q-.225-.084-.494-.151L18 11.075V6.381L12 4.15L6 6.38v4.72q0 1.483.438 2.84q.437 1.358 1.192 2.498t1.785 1.99t2.199 1.299l.057-.02q.121.3.302.584q.18.282.41.53q-.102.039-.192.07zM17 21q-1.671 0-2.835-1.164Q13 18.67 13 17t1.165-2.835T17 13t2.836 1.165T21 17t-1.164 2.836T17 21m-5-9.061"/></svg>
                            <h2>Credibilidad y Confianza</h2>
                        </div>
                        <div class="caracts" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0">
                            <svg class="imginfo" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#fff" d="m19.71 8.04l-2.34 2.33l-3.75-3.75l2.34-2.33c.39-.39 1.04-.39 1.41 0l2.34 2.34c.39.37.39 1.02 0 1.41M3 17.25L13.06 7.18l3.75 3.75L6.75 21H3zM16.62 5.04l-1.54 1.54l2.34 2.34l1.54-1.54zM15.36 11L13 8.64l-9 9.02V20h2.34z"/></svg>
                            <h2>Diseño innovador</h2>
                        </div>
                        <div class="caracts" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0">
                            <svg class="imginfo" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="M11.5 18c4 0 7.46-2.22 9.24-5.5C18.96 9.22 15.5 7 11.5 7s-7.46 2.22-9.24 5.5C4.04 15.78 7.5 18 11.5 18m0-12c4.56 0 8.5 2.65 10.36 6.5C20 16.35 16.06 19 11.5 19S3 16.35 1.14 12.5C3 8.65 6.94 6 11.5 6m0 2C14 8 16 10 16 12.5S14 17 11.5 17S7 15 7 12.5S9 8 11.5 8m0 1A3.5 3.5 0 0 0 8 12.5a3.5 3.5 0 0 0 3.5 3.5a3.5 3.5 0 0 0 3.5-3.5A3.5 3.5 0 0 0 11.5 9"/></svg>
                            <h2>Visibilidad en Línea</h2>
                        </div>
                        <div class="caracts" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
                            <svg class="imginfo" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 18v-1a5 5 0 0 1 5-5v0a5 5 0 0 1 5 5v1M1 18v-1a3 3 0 0 1 3-3v0m19 4v-1a3 3 0 0 0-3-3v0m-8-2a3 3 0 1 0 0-6a3 3 0 0 0 0 6m-8 2a2 2 0 1 0 0-4a2 2 0 0 0 0 4m16 0a2 2 0 1 0 0-4a2 2 0 0 0 0 4"/></svg>
                            <h2>Accesibilidad 24/7</h2>
                        </div>
                        <div class="caracts" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="400" data-aos-offset="0">
                            <svg class="imginfo" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 21H9v-8.4a.6.6 0 0 1 .6-.6h4.8a.6.6 0 0 1 .6.6zm5.4 0H15v-2.9a.6.6 0 0 1 .6-.6h4.8a.6.6 0 0 1 .6.6v2.3a.6.6 0 0 1-.6.6M9 21v-4.9a.6.6 0 0 0-.6-.6H3.6a.6.6 0 0 0-.6.6v4.3a.6.6 0 0 0 .6.6zm1.806-15.887l.909-1.927a.312.312 0 0 1 .57 0l.91 1.927l2.032.311c.261.04.365.376.176.568l-1.47 1.5l.347 2.118c.044.272-.228.48-.462.351l-1.818-1l-1.818 1c-.233.128-.506-.079-.462-.351l.347-2.118l-1.47-1.5c-.19-.192-.085-.528.175-.568z"/></svg>
                            <h2>Posicionamiento SEO</h2>
                        </div>
                        <div class="caracts" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="500" data-aos-offset="0">
                            <svg class="imginfo" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="M3 4h1v14l5.57-9.67l6.01 3.47l3.62-6.26l.86.5l-4.11 7.13L9.94 9.7L4 20h2.3l3.87-6.71l.5-.86l.86.5l5.15 2.97L20 10.14V21H3zm14.04 13.26l-6.01-3.47L7.45 20H19v-6.12z"/></svg>
                            <h2>Rentabilidad</h2>
                        </div>
                        <div class="caracts" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="600" data-aos-offset="0">
                            <svg class="imginfo" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-width="1.5"><path d="M12 9a3 3 0 1 1 0-6a3 3 0 0 1 0 6ZM5.5 21a3 3 0 1 1 0-6a3 3 0 0 1 0 6Zm13 0a3 3 0 1 1 0-6a3 3 0 0 1 0 6Z"/><path stroke-linecap="round" d="M20 13a7.98 7.98 0 0 0-2.708-6M4 13a7.98 7.98 0 0 1 2.708-6M10 20.748A8 8 0 0 0 12 21a8 8 0 0 0 2-.252" opacity="0.5"/></g></svg>
                            <h2>Marketing Online</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subnombre" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                <h2>PASOS A SEGUIR</h2>
                <p class="p2">Pasos para planificar tu proyecto</p>
            </div>
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
                <h2>DATOS IMPORTANTES</h2>
                <p class="p1">Estos son datos importantes que debes conocer</p>
            </div>
            <div class="container">
                <div class="caja1" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="150" data-aos-offset="0">
                    <img src="https://pixelshft.com/img/foco.png" alt="Diseño de páginas web fáciles de usar para todos los públicos">
                    <h3 class="titulo">INTERFAZ INTUITIVA</h3>
                    <br>
                    <p class="desc">
                        Diseñamos sitios web pensados para que cualquiera pueda usarlos sin complicarse. Todo es claro, directo y pensado para que la experiencia sea cómoda desde el primer clic.
                    </p>
                </div>
                <div class="caja1" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
                    <img src="https://pixelshft.com/img/diseno.png" alt="Diseño web en Uruguay enfocado en vender más">
                    <h3 class="titulo">DISEÑO QUE CONVIERTE EN VENTAS</h3>
                    <br>
                    <p class="desc">
                        Cada parte del diseño está pensada para que tu página web no solo se vea bien, sino que también genere resultados: más clics, más consultas y más ventas.
                    </p>
                </div>
                <div class="caja1" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="500" data-aos-offset="0">
                    <img src="https://pixelshft.com/img/busqueda2.png" alt="SEO en Uruguay y accesibilidad web para mejorar visibilidad online">
                    <h3 class="titulo">SEO Y ACCESIBILIDAD</h3>
                    <br>
                    <p class="desc">
                        Trabajamos el SEO para que tu sitio aparezca bien posicionado en Google y otros buscadores. Además, lo hacemos accesible para todos, sin vueltas ni barreras.
                    </p>
                </div>
                <div class="caja1" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="150" data-aos-offset="0">
                    <img src="https://pixelshft.com/img/pantallas.png" alt="Diseño web responsive adaptable a celulares y tablets">
                    <h3 class="titulo">DISEÑO RESPONSIVE</h3>
                    <br>
                    <p class="desc">
                        Tu página va a funcionar perfecto en celulares, tablets y computadoras. Siempre se adapta al tamaño de pantalla, sin que tengas que preocuparte por nada.
                    </p>
                </div>
                <div class="caja1" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
                    <img src="https://pixelshft.com/img/mantenimiento.png" alt="Mantenimiento web opcional con soporte personalizado en Uruguay">
                    <h3 class="titulo">SOPORTE Y MANTENIMIENTO</h3>
                    <br>
                    <p class="desc">
                        ¿Querés que te demos una mano después de publicar la web? El mantenimiento es opcional, sin atarte a nada. Si surge algo, estamos para ayudarte.
                    </p>
                </div>
                <div class="caja1" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="500" data-aos-offset="0">
                    <img src="https://pixelshft.com/img/host.png" alt="Hosting y dominios con soporte en Uruguay">
                    <h3 class="titulo">HOSTING Y DOMINIO</h3>
                    <br>
                    <p class="desc">
                        Si no tenés dominio o hosting, no te preocupes. Lo podemos agregar como extra, y además te damos soporte en todo lo técnico, siempre desde Uruguay.
                    </p>
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
                    <button class="btnwpp" id="contactoBtn">
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
    <script src="https://pixelshft.com/js/pw.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/split-type"></script>
    <script src="https://unpkg.com/lenis@1.1.14/dist/lenis.min.js"></script> 
    <script src="https://pixelshft.com/js/gsap.js"></script>
    <script>AOS.init();</script>
</body>
</html>