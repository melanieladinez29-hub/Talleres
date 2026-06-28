<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD Productos</title>
</head>
<body>
    <h1>Gestión de Productos</h1>
    <a href="index.php?action=crear">Nuevo Producto</a>
    <br><br>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
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
                <td>
                    <!-- Enlaces para Editar y Eliminar mandando el ID -->
                    <a href="index.php?action=editar&id=<?php echo $prod['id']; ?>">Editar</a> | 
                    <a href="index.php?action=eliminar&id=<?php echo $prod['id']; ?>" onclick="return confirm('¿Seguro que deseas eliminarlo?');">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>