<?php
require_once '../app/models/Producto.php';

class ProductoController {
    private $modelo;

    public function __construct() {
        $this->modelo = new Producto();
    }

    public function index() {
        $productos = $this->modelo->listar();
        require_once '../app/views/productos/listar.php';
    }

    public function crear() {
        require_once '../app/views/productos/registrar.php';
    }

    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->modelo->registrar($_POST['nombre'], $_POST['categoria'], $_POST['precio'], $_POST['stock']);
            header("Location: index.php?action=listar");
        }
    }

    public function editar() {
        $id = $_GET['id'];
        $producto = $this->modelo->obtenerPorId($id);
        require_once '../app/views/productos/editar.php';
    }

    public function actualizar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->modelo->actualizar($_POST['id'], $_POST['nombre'], $_POST['categoria'], $_POST['precio'], $_POST['stock']);
            header("Location: index.php?action=listar");
        }
    }

    public function eliminar() {
        $id = $_GET['id'];
        $this->modelo->eliminar($id);
        header("Location: index.php?action=listar");
    }
}
?>