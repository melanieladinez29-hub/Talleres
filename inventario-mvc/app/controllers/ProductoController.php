<?php
require_once '../app/models/Producto.php';

class ProductoController {
    private $modelo;

    public function __construct() {
        $this->modelo = new Producto();
    }

    // Pide los productos al modelo y carga la vista de la tabla
    public function index() {
        $productos = $this->modelo->listar();
        require_once '../app/views/productos/listar.php';
    }

    // Solo carga el formulario HTML
    public function crear() {
        require_once '../app/views/productos/registrar.php';
    }

    // Recibe los datos del formulario (POST) y los envía al modelo
    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $_POST['nombre'];
            $categoria = $_POST['categoria'];
            $precio = $_POST['precio'];
            $stock = $_POST['stock'];

            $this->modelo->registrar($nombre, $categoria, $precio, $stock);
            
            // Regresa a la vista principal una vez guardado
            header("Location: index.php?action=listar");
            exit();
        }
    }
}
?>