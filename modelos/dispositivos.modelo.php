<?php

require_once "conexion.php";

class ModeloDispositivos{

    static public function mdlMostrarDispositivos($tabla){
        $sql = "SELECT * FROM $tabla";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    

}