<?php

//session_start();

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
    
    //METODO PARA MOSTRAR INFORMACION DE DISPOSITIVO A RECUPERAR
    static public function mdlMostrarDispositivoRecuperar($tabla, $item, $valor, $consultor){

        $sql1 = "SELECT * FROM $tabla WHERE $item = :$item";
        $stmt1 = Conexion::conectar()->prepare($sql1);
        $stmt1->bindParam(":".$item, $valor, PDO::PARAM_STR);
        $stmt1->execute();
        
        $sql2 = "SELECT * FROM consultores WHERE idconsultor = :$item";
        $stmt2 = Conexion::conectar()->prepare($sql2);
        $stmt2->bindParam(":".$item, $consultor, PDO::PARAM_STR);
        $stmt2->execute();

        return array($stmt1->fetch(), $stmt2->fetch());

        $stmt1->close();
        $stmt2->close();
    }

    //METODO ESPECIFICO PARA GENERAR EL PDF AL ASIGNAR
    static public function mdlMostrarDispositivoAsignado($tabla, $item, $valor){
        $sql = "SELECT * FROM $tabla WHERE $item = :$item";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
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

    //CAMBIAR ESTADO DE DISPOSITIVO AL RECUPERARLO
    static public function mdlCambiarEstadoDispositivo($tabla, $item, $valor, $accesorios){
        $estado = "1";
        $receptor = $_SESSION["nombre"];
        date_default_timezone_set('America/El_Salvador');
        $fecha_actual = date("Y-m-d h:i:s");

        $sql = "UPDATE $tabla SET responsabledispositivo = '', estadodispositivo = $estado, accesorios = :accesorios, receptordispositivo = :receptordispositivo, fecharecepcion = :fecharecepcion WHERE $item = :$item";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindParam(":accesorios", $accesorios, PDO::PARAM_STR);
        $stmt->bindParam(":receptordispositivo", $receptor, PDO::PARAM_STR);
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
        $stmt->bindParam(":fecharecepcion", $fecha_actual);
        
        $stmt->execute();
    }


    // ASIGNAR UN DISPOSITIVO
    static public function mdlAsignarDispositivo($tabla, $id, $res, $accesorios, $comentario){
        $estado = "2";
        $asignador = $_SESSION["nombre"];

        date_default_timezone_set('America/El_Salvador');
        $fecha_actual = date("Y-m-d h:i:s");

        $sql = "UPDATE $tabla SET responsabledispositivo = :responsabledispositivo, estadodispositivo = $estado, accesorios = :accesorios, asignadordispositivo = :asignadordispositivo, comentariodispositivo = :comentariodispositivo, fechaasignacion = :fechaasignacion WHERE iddispositivo = :$id";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindParam(":responsabledispositivo", $res, PDO::PARAM_STR);
        $stmt->bindParam(":accesorios", $accesorios, PDO::PARAM_STR);
        $stmt->bindParam(":asignadordispositivo", $asignador, PDO::PARAM_STR);
        $stmt->bindParam(":comentariodispositivo", $comentario, PDO::PARAM_STR);
        $stmt->bindParam(":".$id, $id, PDO::PARAM_INT);
        $stmt->bindParam(":fechaasignacion", $fecha_actual, PDO::PARAM_STR);

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
