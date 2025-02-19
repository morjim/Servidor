<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <h1>Registro de Usuario</h1>
    <form action="?action=register" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        <br>
        <label for="gmail">Correo Electrónico:</label>
        <input type="email" name="gmail" required>
        <br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" name="contraseña" required>
        <br>
        <label for="rol">Rol:</label>
        <select name="rol">
            <option value="user">Usuario</option>
            <option value="admin">Administrador</option>
        </select>
        <br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>