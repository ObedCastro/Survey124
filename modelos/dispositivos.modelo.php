<?php

require_once "conexion.php";

class ModeloDispositivos{

    static public function mdlMostrarDispositivos($tabla, $item, $valor){

        if($item != null){
            //$sql1 = "SELECT dispositivos.* AND sedes.nombresede as ubicacion WHERE dispositivos.sededispositivo = sedes.sede";
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
    static public function mdlRegistrarDispositivo($tabla, $datos, $accesorios){
        $estado = "1";
        $sql = "INSERT INTO $tabla(tipodispositivo, marcadispositivo, modelodispositivo, imeidispositivo, seriedispositivo, telefonodispositivo, accesorios, sededispositivo, estadodispositivo) VALUES (:tipodispositivo, :marcadispositivo, :modelodispositivo, :imeidispositivo, :seriedispositivo, :telefonodispositivo, :accesorios, :sededispositivo, :estadodispositivo)";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindParam(":tipodispositivo", $datos["tipo"], PDO::PARAM_STR);
        $stmt->bindParam(":marcadispositivo", $datos["marca"], PDO::PARAM_STR);
        $stmt->bindParam(":modelodispositivo", $datos["modelo"], PDO::PARAM_STR);
        $stmt->bindParam(":imeidispositivo", $datos["imei"], PDO::PARAM_STR);
        $stmt->bindParam(":seriedispositivo", $datos["serie"], PDO::PARAM_STR);
        $stmt->bindParam(":telefonodispositivo", $datos["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":accesorios", json_encode($accesorios), PDO::PARAM_STR);
        $stmt->bindParam(":sededispositivo", $datos["sede"], PDO::PARAM_STR);
        $stmt->bindParam(":estadodispositivo", $estado, PDO::PARAM_STR);

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


    // ASIGNAR UN DISPOSITIVO
    static public function mdlAsignarDispositivo($tabla, $id, $res, $accesorios){
        $estado = "2";
        $sql = "UPDATE $tabla SET responsabledispositivo = :responsabledispositivo, estadodispositivo = $estado, accesorios = :accesorios WHERE iddispositivo = :$id";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindParam(":responsabledispositivo", $res, PDO::PARAM_STR);
        $stmt->bindParam(":accesorios", $accesorios, PDO::PARAM_STR);
        $stmt->bindParam(":".$id, $id, PDO::PARAM_INT);

        if($stmt->execute()){
            return "ok";
        } else{
            return "error";
        }
    }

    //ELIMINAR DISPOSITIVO
    static public function mdlEliminarDispositivos($tabla, $item, $valor){
        $sql = "DELETE FROM $tabla WHERE $item = :$item";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";
        } else{
            return "Error";
        }
    }



}
