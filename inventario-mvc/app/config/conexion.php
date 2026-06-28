<?php
class Conexion {
    public static function conectar() {
        $host = "localhost";
        $user = "root"; // usuario por defecto en XAMPP
        $password = ""; // contraseña por defecto (suele estar vacía)
        $db = "tienda_db"; // el nombre de la BD que creaste en phpMyAdmin

        $conexion = new mysqli($host, $user, $password, $db);

        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }
        $conexion->set_charset("utf8mb4");
        return $conexion;
    }
}
?>