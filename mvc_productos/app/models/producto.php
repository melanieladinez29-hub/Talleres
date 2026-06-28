<?php
require_once '../app/config/conexion.php';

class Producto {
    private $db;

    public function __construct() {
        $this->db = Conexion::conectar();
    }

    // CREATE - Registrar
    public function registrar($nombre, $categoria, $precio, $stock) {
        $sql = "INSERT INTO productos (nombre, categoria, precio, stock) VALUES ('$nombre', '$categoria', $precio, $stock)";
        return $this->db->query($sql);
    }

    // READ - Listar todos
    public function listar() {
        $sql = "SELECT * FROM productos";
        $resultado = $this->db->query($sql);
        $productos = [];
        while ($fila = $resultado->fetch_assoc()) {
            $productos[] = $fila;
        }
        return $productos;
    }

    // READ - Obtener un solo producto para editarlo
    public function obtenerPorId($id) {
        $sql = "SELECT * FROM productos WHERE id = $id";
        $resultado = $this->db->query($sql);
        return $resultado->fetch_assoc();
    }

    // UPDATE - Actualizar
    public function actualizar($id, $nombre, $categoria, $precio, $stock) {
        $sql = "UPDATE productos SET nombre='$nombre', categoria='$categoria', precio=$precio, stock=$stock WHERE id=$id";
        return $this->db->query($sql);
    }

    // DELETE - Eliminar
    public function eliminar($id) {
        $sql = "DELETE FROM productos WHERE id = $id";
        return $this->db->query($sql);
    }
}
?>