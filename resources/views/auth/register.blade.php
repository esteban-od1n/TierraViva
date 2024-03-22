<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <style>
        /* Estilos CSS aquí */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .register-container {
            width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .register-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .register-form input[type="text"],
        .register-form input[type="email"],
        .register-form input[type="password"],
        .register-form button {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        .register-form button {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Registro</h2>
        <form class="register-form" action="" method="POST">
            @csrf
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellidos" placeholder="Apellidos">
            <input type="text" name="username" placeholder="Nombre de usuario">
            <input type="email" name="email" placeholder="Correo electrónico">
            <input type="password" name="password" placeholder="Contraseña">
            <input type="password" name="password_confirmation" placeholder="Confirmar contraseña">
            <button type="submit">Registrarse</button>
        </form>
    </div>
</body>
</html>
