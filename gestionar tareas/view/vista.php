<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Tareas</title>
</head>
<body>
    <h1>Lista de Tareas</h1>
    
    <h2>Tareas Completadas</h2>
    <ul>
        <?php foreach ($tareas as $tarea): ?>
            <?php if ($tarea['completado']): ?> 
                <li>
                    <?php echo htmlspecialchars($tarea['titulo']); ?> 
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <h2>Tareas Pendientes</h2>
    <ul>
        <?php foreach ($tareas as $tarea): ?>
            <?php if (!$tarea['completado']): ?> 
                <li>
                    <?php echo htmlspecialchars($tarea['titulo']); ?> 
                   
                    <form method="post" action="?action=complete" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo $tarea['id']; ?>">
                        <button type="submit">Completar</button>
                    </form>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <h2>Añadir Nueva Tarea</h2>
<form method="POST" action="index.php?action=add">
    <input type="text" name="title" placeholder="Nueva tarea" required>
    <button type="submit">Añadir</button>
</form>

</body>
</html>