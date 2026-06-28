<!DOCTYPE html>
<html lang="es">
<body>
    <h1>Registrar Producto</h1>
    <form action="index.php?action=guardar" method="POST">
        Nombre: <input type="text" name="nombre" required><br><br>
        Categoría: <input type="text" name="categoria" required><br><br>
        Precio: <input type="number" step="0.01" name="precio" required><br><br>
        Stock: <input type="number" name="stock" required><br><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>