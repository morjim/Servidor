<!DOCTYPE html>
<html>

<head>
    <title>Gestión de Usuarios</title>
</head>

<body>
    <h1>Usuarios</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo htmlspecialchars($user['nombre']); ?></td>
                <td><?php echo htmlspecialchars($user['email']); ?></td>
                <td>
                    <a href="?action=delete&id=<?php echo $user['id']; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <h2>Añadir Usuario</h2>
    <form method="post" action="?action=add">
        <input type="text" name="name" placeholder="Nombre" required>
        <input type="email" name="email" placeholder="Correo" required>
        <button type="submit">Añadir</button>
    </form>
</body>

</html>