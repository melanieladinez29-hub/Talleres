<?php
require_once '../app/config/conexion.php';

class Producto {
    private $db;

    public function __construct() {
        $this->db = Conexion::conectar();
    }

    // Consulta SQL para obtener todos los productos
    public function listar() {
        $sql = "SELECT * FROM productos";
        $resultado = $this->db->query($sql);
        $productos = [];
        
        while ($fila = $resultado->fetch_assoc()) {
            $productos[] = $fila;
        }
        return $productos;
    }

    // Ejecuta la inserción para un nuevo registro
    public function registrar($nombre, $categoria, $precio, $stock) {
        $sql = "INSERT INTO productos (nombre, categoria, precio, stock) VALUES ('$nombre', '$categoria', $precio, $stock)";
        return $this->db->query($sql);
    }
}
?>