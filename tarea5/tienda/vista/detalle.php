<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles</title>
</head>
<body>
<h1><?php echo htmlspecialchars($product['nombre']); ?></h1>
    <p><?php echo htmlspecialchars($product['descripcion']); ?></p>
    <p>Precio: $<?php echo htmlspecialchars($product['precio']); ?></p>
    <a href="index.php">Volver a la lista</a>
</body>
</html>
