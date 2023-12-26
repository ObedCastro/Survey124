<?php

require_once "conexion.php";

class ModeloConsultores{

    static public function mdlMostrarConsultores($tabla, $item, $valor){
        
        if($item != null){
            $sql = "SELECT * FROM $tabla WHERE $item = :$item";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt->execute();
            
            return $stmt->fetch();
            
        } else{
            $sql = "SELECT * FROM $tabla ORDER BY idconsultor DESC";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->execute();
            
            return $stmt->fetchAll();
    
        }

        $stmt->close();
    }

    //REGISTRAR NUEVO CONSULTOR
    static public function mdlRegistrarConsultor($tabla, $datos){
        $sql = "INSERT INTO $tabla(nombreconsultor, duiconsultor, cargoconsultor, contactoconsultor, sedeconsultor, fecharegistroconsultor) VALUES (:nombreconsultor, :duiconsultor, :cargoconsultor, :contactoconsultor, :sedeconsultor, :fecharegistroconsultor)";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindParam(":nombreconsultor", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":duiconsultor", $datos["dui"], PDO::PARAM_STR);
        $stmt->bindParam(":cargoconsultor", $datos["cargo"], PDO::PARAM_STR);
        $stmt->bindParam(":contactoconsultor", $datos["contacto"], PDO::PARAM_STR);
        $stmt->bindParam(":sedeconsultor", $datos["sede"], PDO::PARAM_STR);
        $stmt->bindParam(":fecharegistroconsultor", $datos["fecha"], PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";
        } else{
            return "Error";
        }

        $stmt->close();
        $stmt = null;
    }

}