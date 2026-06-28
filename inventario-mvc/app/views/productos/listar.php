<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario MVC</title>
</head>
<body>
    <h1>Lista de Productos</h1>
    <a href="index.php?action=crear">Registrar Nuevo Producto</a>
    <br><br>
    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $prod): ?>
            <tr>
                <td><?php echo $prod['id']; ?></td>
                <td><?php echo $prod['nombre']; ?></td>
                <td><?php echo $prod['categoria']; ?></td>
                <td>$<?php echo $prod['precio']; ?></td>
                <td><?php echo $prod['stock']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>