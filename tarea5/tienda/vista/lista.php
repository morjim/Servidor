<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Lista P^roductos </h1>
    
    

    <?php foreach($product as $item):?><?php echo $item['id'];?>
            <li>
            <a href="index.php?action=detail&id=<?php echo htmlspecialchars($item['id']); ?>">
                    <?php echo htmlspecialchars($item['nombre']); ?>
                </a>
                - Precio: $<?php echo htmlspecialchars($item['precio']); ?>
            </li>
        <?php endforeach;?>
</body>
</html>