<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión tareas</title>
</head>
<body>
    <h1>Lista Tareas </h1>
    <ul>
        <?php foreach ($task as $task):  ?>
            <li>
                <?php echo htmlspecialchars($task['tittle']); ?>
                <?php if($task['completed']) :?>
                    COMPLETADA
                <?php else : ?>
                    <a href="?action=completed &id=<?php echo $task['id']; ?>">COMPLETADA</a>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2> Crear Tarea</h2>
    <form method="post" action="?action=add">
        <label > Nueva Tarea: </label>
        <input type="text" name="tittle" required>
        <button type="submit">Crear Tarea</button>  
    </form>
</body>
</html>