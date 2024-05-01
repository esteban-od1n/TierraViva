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
        <section class="nosotros" id="nosotros">
            
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