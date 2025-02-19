<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form method="post" action="?action=login">
        <label>Gmail:</label>
        <input type="email" name="gmail" required>
        <br>
        <label>Contraseña:</label>
        <input type="password" name="contraseña" required>
        <br>
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>
