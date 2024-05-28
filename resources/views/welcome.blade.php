<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--favicon-->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!--CSS file-->
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/conocenos.css">
    <link rel="stylesheet" href="css/apartados.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Tierra Viva</title>
</head>
<body>
    <div class="preload" data-preaload> 
        <div class="circle"></div>
        <p class="text">Tierra Viva</p>
    </div>
    <!--header-->
    <header class="header" data-header>
        @include('navbar.menuNavBar')
    </header>
    <main>
        <article>
            <!--slider-->
            @include('slider.slider')
        </article>
        <section class="apartados" id="apartados">
            <div class="apartados_container grid">
                <div class="new_apartado">
                    <h2 class="section-subtitle">Conoce las herramientas <br> para hacerlo tu mismo </h2>
                    <p class="title-2">
                        Encuentra una variedad de contenido en nuestro apartado de recursos, desde videos hasta documentos.
                    </p>
                    <div class="btn-container">
                        <a href="#" class="btn btn-primary slider-reveal">
                        <span class="text text-1">Recursos</span>
                        <span class="text text-2" aria-hidden="true">Recursos</span>
                        </a>
                    </div>    
                </div>
                <div class="apartado_content grid">
                    <article class="apartado_card">
                        <img src="img/semillas.png" alt="semillas">
                        <h2 class="apartado-title">Tipos de plantas</h2>
                    </article>
                    <article class="apartado_card">
                        <img src="img/herramientas.png" alt="herramientas">
                        <h2 class="apartado-title">Herramientas</h2>
                    </article>
                    <article class="apartado_card">
                        <img src="img/cuidados.png" alt="cuidados">
                        <h2 class="apartado-title">Cuidados</h2>
                    </article>
                    <article class="apartado_card">
                        <img src="img/ameanzas.png" alt="amenazas">
                        <h2 class="apartado-title">Amenazas</h2>
                    </article>
                    <article class="apartado_card">
                        <img src="img/llave.png" alt="llave">
                        <h2 class="apartado-title">Reutiliza</h2>
                    </article>
                </div>
            </div>
        </section>
        <section class="sobre-nosotros">
            <h1 class="section-subtitle">sobre nosotros</h1>
            <div class="conoce-cards">
                <div class="card imagen-card">
                   <img src="/img/smrithi-rao_Sobrenosotros.jpg" alt=""> 
                </div>
                <div class="card info-card">
                    <p>¡Te damos la bienvenida a Tierra Viva! <br>
                        Somos tu plataforma especializada en agricultura urbana y sostenibilidad. <br><br>
                        Nuestra misión es inspirar y capacitar a las comunidades para que se conecten con la naturaleza y adopten prácticas sostenibles. <br><br>
                        Descubre nuestra amplia gama de recursos, que incluyen desde vídeos educativos hasta documentos detallados. Utiiza nuestro mapa interactivo para encontrar jardines y viveros cercanos, y visita nuestra sección de proveedores para encontrar con especialistas locales que ofrecen productos y asesoramiento de calidad. <br><br>
                        Participa en nuestro foro, donde podrás compartir experiencias, obtener consejos y debatir sobre temas relevantes con otros entusiastas. <br><br>
                        Únete a Tierra Viva y forma partde de un cambio positivo hacia un futuro más verde.
                    </p>
                </div>
            </div>
        </section>
        <section class="apartados">
            <div class="apartados_container grid">
                <div class="apartado_content grid">
                <article class="apartado_card">
                        <h2 class="apartado-title">Mapa Interactivo</h2>
                        <img src="img/mapa-feature.png" alt="mapa interactivo icono">
                    </article>
                    <article class="apartado_card">
                        <h2 class="apartado-title">Proveedores</h2>
                        <img src="img/provee-feature.png" alt="proveedores icono">
                    </article>
                    <article class="apartado_card">
                        <h2 class="apartado-title">Foro Comunitario</h2>
                        <img src="img/world-feature.png" alt="foro icono">
                    </article> 
                </div>     
            </div>
        </section>
    </main>
    <footer>
        @include('footerbar.menuFooterBar')
    </footer>
    <a href="#top" class="back-top-btn" aria-label="backt to top" data-back-top-btn>
        <ion-icon name="chevron-up-outline" aria-hidden="true"></ion-icon>
    </a>
    <!--script-->
    <script src="js/script.js"></script>
    <!--ionicons-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
</body>
</html>