<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f2f2f2;
        }

        .container {
            display: flex;
            max-width: 90%;
            width: 100%;
            max-height: 90%;
            height: 100%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .left-section {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center; /* Centrar verticalmente */
        }

        .right-section {
            flex: 1;
            background-image: url('/img/imagenes_extras/login.jpg');
            background-size: cover;
            background-position: center;
            padding: 30px;
        }

        .login-form {
            padding: 20px;
        }

        .login-form h2 {
            margin-bottom: 20px;
        }

        .login-form input[type="email"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-form a {
            display: block;
            text-align: right;
            margin-bottom: 10px;
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-section">
            <div class="login-form">
                <h2>Bienvenido a Tierra Viva</h2>
                <form action="procesar_login.php" method="POST">
                    <input type="email" name="email" placeholder="Correo electrónico" required>
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <button type="submit">Iniciar sesión</button>
                </form>

                <a href=/recuperarContraseña>¿Olvidaste tu contraseña?</a>
                <p>¿Aún no tienes cuenta? <a href="/register">Regístrate</a></p>
            </div>
        </div>
        <div class="right-section"></div>
    </div>
</body>
</html>
