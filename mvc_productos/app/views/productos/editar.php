<!DOCTYPE html>
<html lang="es">
<body>
    <h1>Editar Producto</h1>
    <form action="index.php?action=actualizar" method="POST">
        <!-- Input oculto para enviar el ID -->
        <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
        
        Nombre: <input type="text" name="nombre" value="<?php echo $producto['nombre']; ?>" required><br><br>
        Categoría: <input type="text" name="categoria" value="<?php echo $producto['categoria']; ?>" required><br><br>
        Precio: <input type="number" step="0.01" name="precio" value="<?php echo $producto['precio']; ?>" required><br><br>
        Stock: <input type="number" name="stock" value="<?php echo $producto['stock']; ?>" required><br><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>