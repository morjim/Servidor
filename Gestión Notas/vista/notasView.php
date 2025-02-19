<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Notas</h1>
    <ul>
        <?php foreach ($notas as $nota): ?>
            <li>
                <?php echo $nota['content']; ?>
                <a href= "?action=delete&id= <?php echo $nota['id'];?>" > Eliminar</a>
            </li>
            <?php endforeach; ?>
    </ul>

    <h2>Añadir Notas</h2>
    <form action="?action=add" method="post">
        <label >Nueva nota:</label>
        <input type="text" name="content" required>
        <button type="submit">Añadir</button>
    </form>
</body>
</html>