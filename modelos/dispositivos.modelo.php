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
            $sql = "SELECT d.*, CONCAT(s.nombresede,' ',s.departamentosede) as sede FROM $tabla d INNER JOIN sedes s ON s.idsede = d.sededispositivo ORDER BY d.iddispositivo DESC";
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
        $acc = json_encode($accesorios);

        $sql = "INSERT INTO $tabla(tipodispositivo, marcadispositivo, modelodispositivo, imeidispositivo, seriedispositivo, telefonodispositivo, accesorios, sededispositivo, fecharegistro, estadodispositivo) VALUES (:tipodispositivo, :marcadispositivo, :modelodispositivo, :imeidispositivo, :seriedispositivo, :telefonodispositivo, :accesorios, :sededispositivo, :fecharegistro, :estadodispositivo)";

        $imei = array_key_exists("imei", $datos) ? $datos["imei"] : null;
        $telefono = array_key_exists("telefono", $datos) ? $datos["telefono"] : null;

        try{
            $aa = Conexion::conectar()->prepare("SELECT COUNT(imeidispositivo) AS canimei, COUNT(seriedispositivo) as canserie FROM dispositivos WHERE imeidispositivo = :imeidispositivo OR seriedispositivo = :seriedispositivo");
            $aa->bindParam("imeidispositivo", $datos["imei"], PDO::PARAM_STR);
            $aa->bindParam("seriedispositivo", $datos["serie"], PDO::PARAM_STR);
            $aa->execute();
            $row = $aa->fetch();

            if($row['canimei']>0) {
                return "Ya existe un dispositivo con el IMEI: ".$datos["imei"];
            } else if($row['canserie']>0){
                return "Ya existe un dispositivo con la serie: ".$datos["serie"];
            } 
            else{
                $stmt = Conexion::conectar()->prepare($sql);
                $stmt->bindParam(":tipodispositivo", $datos["tipo"], PDO::PARAM_STR);
                $stmt->bindParam(":marcadispositivo", $datos["marca"], PDO::PARAM_STR);
                $stmt->bindParam(":modelodispositivo", $datos["modelo"], PDO::PARAM_STR);
                $stmt->bindParam(":imeidispositivo", $imei, PDO::PARAM_STR);
                $stmt->bindParam(":seriedispositivo", $datos["serie"], PDO::PARAM_STR);
                $stmt->bindParam(":telefonodispositivo", $telefono, PDO::PARAM_STR);
                $stmt->bindParam(":accesorios", $acc, PDO::PARAM_STR);
                $stmt->bindParam(":sededispositivo", $datos["sede"], PDO::PARAM_STR);
                $stmt->bindParam(":fecharegistro", $datos["fecha"], PDO::PARAM_STR);
                $stmt->bindParam(":estadodispositivo", $estado, PDO::PARAM_STR);
        
                if($stmt->execute()){
                    return "ok";
                }
        
                $stmt->close();
                $stmt = null;

            }

        } catch(PDOException $e){
            return "error: ".$e->getMessage();
        }
    }



    //MODIFICAR PRODUCTO
    static public function mdlModificarDispositivo($tabla, $item, $valor, $datos){
        $sql = "UPDATE $tabla SET tipodispositivo = :tipodispositivo, marcadispositivo = :marcadispositivo, modelodispositivo = :modelodispositivo, imeidispositivo = :imeidispositivo, seriedispositivo = :seriedispositivo, telefonodispositivo = :telefonodispositivo, sededispositivo = :sededispositivo, comentariodispositivo = :comentariodispositivo WHERE $item = :$item";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindParam(":tipodispositivo", $datos["tipo"], PDO::PARAM_STR);
        $stmt->bindParam(":marcadispositivo", $datos["marca"], PDO::PARAM_STR);
        $stmt->bindParam(":modelodispositivo", $datos["modelo"], PDO::PARAM_STR);
        $stmt->bindParam(":imeidispositivo", $datos["imei"], PDO::PARAM_STR);
        $stmt->bindParam(":seriedispositivo", $datos["serie"], PDO::PARAM_STR);
        $stmt->bindParam(":telefonodispositivo", $datos["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":sededispositivo", $datos["sede"], PDO::PARAM_STR);
        $stmt->bindParam(":comentariodispositivo", $datos["comentario"], PDO::PARAM_STR);
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_INT);


        if($stmt->execute()){
            return "ok";
        } else{
            return "Error";
        }

        $stmt->close();
        $stmt = null;
    }

    //CAMBIAR ESTADO DE DISPOSITIVO AL RECUPERARLO
    static public function mdlCambiarEstadoDispositivo($tabla, $item, $valor, $accesorios, $estado, $comentario){
        $receptor = $_SESSION["nombre"];
        date_default_timezone_set('America/El_Salvador');
        $fecha_actual = date("Y-m-d h:i:s");

        $sql = "UPDATE $tabla SET responsabledispositivo = null, estadodispositivo = $estado, accesorios = :accesorios, receptordispositivo = :receptordispositivo, comentariodispositivo = :comentariodispositivo, fecharecepcion = :fecharecepcion WHERE $item = :$item";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindParam(":accesorios", $accesorios, PDO::PARAM_STR);
        $stmt->bindParam(":receptordispositivo", $receptor, PDO::PARAM_STR);
        $stmt->bindParam(":comentariodispositivo", $comentario, PDO::PARAM_STR);
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
        $stmt->bindParam(":fecharecepcion", $fecha_actual);        
        $stmt->execute();

        $sql2 = "UPDATE dispositivos SET accesorios = null, fechaasignacion = NULL, fecharecepcion = NULL, responsabledispositivo = NULL, asignadordispositivo = NULL, receptordispositivo = NULL WHERE $item = :$item";
        $stmt = Conexion::conectar()->prepare($sql2);
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
        $stmt->execute();
    }


    // ASIGNAR UN DISPOSITIVO
    static public function mdlAsignarDispositivo($tabla, $id, $res, $accesorios, $fecha){
        $estado = "2";
        $asignador = $_SESSION["nombre"];

        $sql = "UPDATE $tabla SET responsabledispositivo = :responsabledispositivo, estadodispositivo = $estado, accesorios = :accesorios, asignadordispositivo = :asignadordispositivo, fechaasignacion = :fechaasignacion WHERE iddispositivo = :$id";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindParam(":responsabledispositivo", $res, PDO::PARAM_STR);
        $stmt->bindParam(":accesorios", $accesorios, PDO::PARAM_STR);
        $stmt->bindParam(":asignadordispositivo", $asignador, PDO::PARAM_STR);
        $stmt->bindParam(":".$id, $id, PDO::PARAM_INT);
        $stmt->bindParam(":fechaasignacion", $fecha, PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";
        } else{
            return "error";
        }
    }

    //ELIMINAR DISPOSITIVO
    static public function mdlEliminarDispositivos($tabla, $item, $valor){
        try{
            $sql = "DELETE FROM $tabla WHERE $item = :$item";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
    
            if($stmt->execute()){
                return "ok";
            }
        } catch(PDOException $e){
            return "error";
        }
    }



}
