<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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

        .register-form {
            padding: 20px;
        }

        .register-form h2 {
            margin-bottom: 20px;
        }

        .register-form input[type="text"],
        .register-form input[type="email"],
        .register-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .register-form button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .register-form a {
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
        <div class="right-section"></div>
        <div class="left-section">
            <div class="register-form">
                <h2>Registro</h2>
                <form action="procesar_registro.php" method="POST">
                    <input type="text" name="username" placeholder="Nombre de usuario" required>
                    <input type="email" name="email" placeholder="Correo electrónico" required>
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <input type="password" name="confirm_password" placeholder="Confirmar contraseña" required>
                    <button type="submit">Registrarse</button>
                </form>
                <p>¿Ya tienes una cuenta? <a href="/login">Inicia sesión</a></p>
            </div>
        </div>
    </div>
</body>
</html>
