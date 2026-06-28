<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Producto</title>
</head>
<body>
    <h1>Nuevo Producto</h1>
    <form action="index.php?action=guardar" method="POST">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Categoría:</label><br>
        <input type="text" name="categoria" required><br><br>

        <label>Precio:</label><br>
        <input type="number" step="0.01" name="precio" required><br><br>

        <label>Stock:</label><br>
        <input type="number" name="stock" required><br><br>

        <button type="submit">Guardar</button>
    </form>
    <br>
    <a href="index.php?action=listar">Volver a la lista</a>
</body>
</html>