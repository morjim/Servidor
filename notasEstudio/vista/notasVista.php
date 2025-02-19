<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Notas:</h1>
    <?php foreach ($notas as $nota): ?>
        <li>
            <?php echo htmlspecialchars($nota['nota']); ?>
            <a href="?action=delete&id=<?php echo $nota['id']; ?>"><button>Eliminar </button></a>
        </li>
        <?php endforeach ?>

    <h2>Añadir Notas</h2>
    <form action="?action=add" method="POST">
        <label for=>Nueva Nota</label>
        <input type="text" name="nota" id="nota">
        <button type='submit'>Enviar</button>
    </form>
</body>
</html>