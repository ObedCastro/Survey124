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
            $sql = "SELECT c.*, CONCAT(s.nombresede,' ',s.departamentosede) as sede FROM $tabla c INNER JOIN sedes s ON s.idsede = c.sedeconsultor ORDER BY c.idconsultor DESC";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->execute();
            
            return $stmt->fetchAll();
    
        }

        $stmt->close();
    }

    //REGISTRAR NUEVO CONSULTOR
    static public function mdlRegistrarConsultor($tabla, $datos){
        try{
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
            }
        } catch (PDOException $e){
            return $e->getMessage();
        }

        $stmt->close();
        $stmt = null;
    }

    //MODIFICAR INFORMACIÓN DE CONSULTOR
    static public function mdlModificarConsultor($tabla, $id, $datos){
        try{
            $sql = "UPDATE $tabla SET nombreconsultor = :nombreconsultor, duiconsultor = :duiconsultor, cargoconsultor = :cargoconsultor, contactoconsultor = :contactoconsultor, sedeconsultor = :sedeconsultor WHERE idconsultor = :idconsultor";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->bindParam(":nombreconsultor", $datos["nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":duiconsultor", $datos["dui"], PDO::PARAM_STR);
            $stmt->bindParam(":cargoconsultor", $datos["cargo"], PDO::PARAM_STR);
            $stmt->bindParam(":contactoconsultor", $datos["contacto"], PDO::PARAM_STR);
            $stmt->bindParam(":sedeconsultor", $datos["sede"], PDO::PARAM_STR);
            $stmt->bindParam(":idconsultor", $id, PDO::PARAM_INT);
    
            if($stmt->execute()){
                return "ok";
            }

        } catch (PDOException $e){
            return $e->getMessage();
        }
        
        $stmt->close();
        $stmt = null;

    }

    //PARA LLENAR SELECT DE CONSULTORES
    static public function mdlMostrarConsultoresSedes($tabla, $item, $valor){
        $sql = "SELECT idconsultor, nombreconsultor FROM $tabla WHERE $item = :$item";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
        
        if($stmt->execute()){
            return $stmt->fetchAll();
        } else{
            return array("Mensaje" => "No hay información disponible");
        }

    }

    //PARA ELIMINAR CONSULTOR
    static public function mdlEliminarConsultor($tabla, $item, $valor){
        
        try {
            $sql = "DELETE FROM $tabla WHERE $item = :$item";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

            if($stmt->execute()){
                return "ok";
            }

        } catch (PDOException $e) {
            return "error";
        }
        
    }

}
