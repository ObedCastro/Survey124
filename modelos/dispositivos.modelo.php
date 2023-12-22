<?php

require_once "conexion.php";

class ModeloDispositivos{

    static public function mdlMostrarDispositivos($tabla, $item, $valor){
        
        if($item != null){
            $sql = "SELECT * FROM $tabla WHERE $item = :$item";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt->execute();
            
            return $stmt->fetch();
            
        } else{
            $sql = "SELECT * FROM $tabla ORDER BY iddispositivo DESC";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->execute();
            
            return $stmt->fetchAll();
    
        }

        $stmt->close();
    }

    //REGISTRAR NUEVO PRODUCTO
    static public function mdlRegistrarDispositivo($tabla, $datos){
        $sql = "INSERT INTO $tabla(tipodispositivo, marcadispositivo, modelodispositivo, imeidispositivo, seriedispositivo, telefonodispositivo, responsabledispositivo) VALUES (:tipodispositivo, :marcadispositivo, :modelodispositivo, :imeidispositivo, :seriedispositivo, :telefonodispositivo, :responsabledispositivo)";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindParam(":tipodispositivo", $datos["tipo"], PDO::PARAM_STR);
        $stmt->bindParam(":marcadispositivo", $datos["marca"], PDO::PARAM_STR);
        $stmt->bindParam(":modelodispositivo", $datos["modelo"], PDO::PARAM_STR);
        $stmt->bindParam(":imeidispositivo", $datos["imei"], PDO::PARAM_STR);
        $stmt->bindParam(":seriedispositivo", $datos["serie"], PDO::PARAM_STR);
        $stmt->bindParam(":telefonodispositivo", $datos["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":responsabledispositivo", $datos["sede"], PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";
        } else{
            return "Error";
        }

        $stmt->close();
        $stmt = null;
    }



    //MODIFICAR PRODUCTO
    static public function mdlModificarDispositivo($id, $tabla, $datos){
        $sql = "UPDATE $tabla SET tipodispositivo = :tipodispositivo, marcadispositivo = :marcadispositivo, modelodispositivo = :modelodispositivo, imeidispositivo = :imeidispositivo, seriedispositivo = :seriedispositivo, telefonodispositivo = :telefonodispositivo, sededispositivo = :sededispositivo, comentariodispositivo = :comentariodispositivo WHERE iddispositivo = :iddispositivo";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindParam(":tipodispositivo", $datos["tipo"], PDO::PARAM_STR);
        $stmt->bindParam(":marcadispositivo", $datos["marca"], PDO::PARAM_STR);
        $stmt->bindParam(":modelodispositivo", $datos["modelo"], PDO::PARAM_STR);
        $stmt->bindParam(":imeidispositivo", $datos["imei"], PDO::PARAM_STR);
        $stmt->bindParam(":seriedispositivo", $datos["serie"], PDO::PARAM_STR);
        $stmt->bindParam(":telefonodispositivo", $datos["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":sededispositivo", $datos["sede"], PDO::PARAM_STR);
        $stmt->bindParam(":comentariodispositivo", $datos["comentario"], PDO::PARAM_STR);
        $stmt->bindParam(":iddispositivo", $id, PDO::PARAM_INT);


        if($stmt->execute()){
            return "ok";
        } else{
            return "Error";
        }

        $stmt->close();
        $stmt = null;
    }


    

    

    

}