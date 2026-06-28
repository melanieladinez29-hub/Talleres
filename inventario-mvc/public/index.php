<?php
require_once '../app/controllers/ProductoController.php';

$controlador = new ProductoController();

// Capturamos la "acción" de la URL. Si está vacía, por defecto será "listar".
$action = isset($_GET['action']) ? $_GET['action'] : 'listar';

// Enrutamos según la acción
switch ($action) {
    case 'listar':
        $controlador->index();
        break;
    case 'crear':
        $controlador->crear();
        break;
    case 'guardar':
        $controlador->guardar();
        break;
    default:
        $controlador->index();
        break;
}
?>