<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Notas:</h1>
    <ul>
        <?php foreach ($notas as $nota): ?>
            <li>
                <?php echo $nota['nota']; ?>
                <a href="?action=delete&id=<?php echo $nota['id']; ?>"><button>Eliminar</button></a>
            </li>
        <?php endforeach; ?>
    </ul>
    <h1> Añadir Notas</h1>
    <form action="?action=add" method="post">
        <label for="nota">Nota:</label>
        <input type="text" id="nota" name="nota" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>