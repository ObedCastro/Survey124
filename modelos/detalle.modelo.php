<?php

require_once "conexion.php";

class ModeloDetalle{

    static public function mdlVerDetalleDispositivo($id, $tabla){
        $sql = "SELECT * FROM $tabla WHERE $id = :$id";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindParam(":".$id, $id, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();
    }

}