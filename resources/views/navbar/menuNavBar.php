<!-- resources/views/navbar/menuNavBar.php -->
<div class="container">
    <a href="#" class="logo">
        <img src="img/logos/logo.svg" width="160" height="50" alt="Tierra Viva - Inicio">
    </a>
    <nav class="navbar" data-navbar>
        <button class="close-btn" aria-label="close menu" data-nav-toggler>
            <!--<ion-icon name="close-outline" aria-hidden="true"></ion-icon>-->
        </button>
        <a href="#" class="logo">
            <img src="img/logos/logo.svg" width="160" height="50" alt="Tierra Viva - Inicio">
        </a>
        <ul class="navbar-list">
            <li class="navbar-item">
                <a href="#home" class="navbar-link hover-underline active">
                    <span class="span">Inicio</span>
                </a>
            </li>
            <li class="navbar-item">
                <a href="#recursos" class="navbar-link hover-underline">
                  <span class="span">Recursos</span>
                </a>
            </li>
            <li class="navbar-item">
                <a href="#Mapa interactivo" class="navbar-link hover-underline">
                  <span class="span">Mapa Interactivo</span>
                </a>
            </li>
            <li class="navbar-item">
                <a href="#proveedores" class="navbar-link hover-underline">
                  <span class="span">Proveedores</span>
                </a>
            </li>
            <li class="navbar-item">
                <a href="#foro" class="navbar-link hover-underline">
                   <span class="span">Foro</span>
                </a>
            </li>
        </ul>
        </nav>
        <a href="#" class="btn btn-secondary">
            <span class="text text-1">Registrate</span>
            <span class="text text-2" aria-hidden="true">Registrate</span>
        </a>
        <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
            <span class="line line-1"></span>
            <span class="line line-2"></span>
            <span class="line line-3"></span>
        </button>
        <div class="overlay" data-nav-toggler data-overlay></div>
</div>