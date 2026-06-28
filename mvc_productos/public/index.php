<?php
require_once '../app/controllers/ProductoController.php';
$controlador = new ProductoController();

$action = isset($_GET['action']) ? $_GET['action'] : 'listar';

switch ($action) {
    case 'listar': $controlador->index(); break;
    case 'crear': $controlador->crear(); break;
    case 'guardar': $controlador->guardar(); break;
    case 'editar': $controlador->editar(); break;
    case 'actualizar': $controlador->actualizar(); break;
    case 'eliminar': $controlador->eliminar(); break;
    default: $controlador->index(); break;
}
?>