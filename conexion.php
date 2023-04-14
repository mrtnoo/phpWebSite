<?php

class Conexion {
    private $host = "localhost";
    private $usuario = "root";
    private $contraseña = "";
    private $base_de_datos = "portafolio_php";

    public $conexion;

    public function __construct() {
        try {
            $this->conexion = new PDO("mysql:host=$this->host;dbname=$this->base_de_datos", $this->usuario, $this->contraseña);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
    }


    public function ejecutar($sql){//insert delete o update
        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();

    }

    public function consultar($sql){
        $sentencia=$this->conexion->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();

    }

}

?>

