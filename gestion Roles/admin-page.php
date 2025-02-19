<?php

if (!isset($_SESSION['user_rol']) || $_SESSION['user_rol'] !== 'admin') {
    header("Location: ?action=login");
    exit;
}
?>
<h1>Bienvenido Administrador <?php echo htmlspecialchars($_SESSION['user_nombre']); ?></h1>
<a href="?action=logout">Cerrar sesión</a>
<link rel="stylesheet" href="./styles.css">
