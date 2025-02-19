<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form action="?action=login" method="POST">
        <label for="gmail">Correo Electrónico:</label>
        <input type="email" name="gmail" required>
        <br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" name="contraseña" required>
        <br>
        <button type="submit">Iniciar Sesión</button>
    </form>
    <p>¿No tienes una cuenta? <a href="?action=register">Regístrate aquí</a></p>
</body>
</html>