<?php
class Conexion {
    public static function conectar() {
        $conexion = new mysqli("localhost", "root", "", "tienda_db");
        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }
        $conexion->set_charset("utf8mb4");
        return $conexion;
    }
}
?>