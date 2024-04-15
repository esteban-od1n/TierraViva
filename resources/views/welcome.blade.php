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
    </main>


    <footer>
        @include('footerbar.menuFooterBar')
    </footer>

    <!--script-->
    <script src="js/script.js"></script>
    <!--ionicons-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
</body>
</html>