<?php

require_once "conexion.php";

class ModeloInicio{

    static public function mdlMostrarDispositivosAsignados($tabla){
        $sql = "SELECT COUNT(tipodispositivo) as telefonosAsignados FROM $tabla WHERE tipodispositivo='Telefono' AND estadodispositivo=1";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->execute();

        return $stmt->fetch();
    }

}