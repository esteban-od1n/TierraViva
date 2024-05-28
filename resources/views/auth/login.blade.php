<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tierra Viva</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
</head>
<body>
    <div class="container" id="main">
        <div class="registro">
            <form action="procesar_registro.php" method="POST">
                <h1>Registro</h1>
                <div class="social-container">
                    <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                </div>
                <p>o usa tu Email para registrarte</p>
                <input type="text" name="username" placeholder="Nombre de usuario" required>
                <input type="email" name="email" placeholder="Correo electrónico" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <input type="password" name="confirm_password" placeholder="Confirmar contraseña" required>
                <button type="submit">Registrarse</button>
                <p>¿Ya tienes una cuenta? <a href="/login">Inicia sesión</a></p>
            </form>
        </div>
        <div class="inicio">
            <form action="procesar_registro.php" method="POST">
                <h1>Inicia Sesión</h1>
                <div class="social-container">
                    <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                </div>
                <p>o usa tu cuenta</p>
                <input type="email" name="email" placeholder="Correo electrónico" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <button type="submit">Registrarse</button>
                <a href=/recuperarContraseña>¿Olvidaste tu contraseña?</a>
                <p>¿Aún no tienes cuenta? <a href="#">Regístrate</a></p>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-left">
                    <h1>Bienvenido de Nuevo</h1>
                    <button id="signIn">Inicia Sesión</button>
                </div>
                <div class="overlay-right">
                    <h1>Bienvenido a Tierra Viva</h1>
                    <button id="singUp">Registrate</button>
                </div>
            </div>
        </div>
    </div>
    
    <!--ionicons-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
</body>
</html>
