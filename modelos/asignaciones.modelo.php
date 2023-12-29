<?php

require_once "conexion.php";

class ModeloAsignaciones{

// ASIGNAR UN DISPOSITIVO
static public function mdlAsignarDispositivo($tabla, $id, $res, $datos){
    $estado = "2";
    $sql = "UPDATE $tabla SET responsabledispositivo = :responsabledispositivo, estadodispositivo = $estado, accesorios = :accesorios WHERE iddispositivo = :$id";
    $stmt = Conexion::conectar()->prepare($sql);
    $stmt->bindParam(":responsabledispositivo", $res, PDO::PARAM_STR);
    $stmt->bindParam(":accesorios", $datos, PDO::PARAM_STR);
    $stmt->bindParam(":".$id, $id, PDO::PARAM_INT);

    if($stmt->execute()){
        return "ok";
    } else{
        return "Error";
    }
}

}
