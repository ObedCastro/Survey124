<?php 
 
require_once "conexion.php";

class ModeloFaltantes{

    //PARA LA DATA DE LA TABLA
    static public function mdlMostrarFaltantes($tabla, $item, $valor){
        //$sql = "SELECT * FROM $tabla WHERE accesorios_entregados <> accesorios_recuperados";
        $sql = "SELECT c.nombreconsultor as consultor, s.nombresede as sede, d.tipodispositivo as dispositivo, d.imeidispositivo as imei, d.seriedispositivo as serie, r.id as idregistro, r.fecha_asignacion as fecha_asignacion, r.fecha_recepcion as fecha_recepcion, r.accesorios_entregados as entregado, r.accesorios_recuperados as recuperado, r.comentario as comentario, CONCAT('[', r.accesorios_entregados,',', r.accesorios_recuperados,']') as acc  FROM $tabla r 
        INNER JOIN consultores c ON c.idconsultor = r.usuario_campo_id 
        INNER JOIN sedes s ON s.idsede = r.sede_id 
        INNER JOIN dispositivos d ON d.iddispositivo = r.dispositivo_id 
        WHERE r.accesorios_entregados <> r.accesorios_recuperados AND r.fecha_recepcion IS NOT NULL";

        $stmt = Conexion::conectar()->prepare($sql);
        
        if($stmt->execute()){
            return $stmt->fetchAll();
        } else{
            return array("Error" => "No ha sido posible obtener la información");
        }
    }

    //PARA MOSTRAR ACCESORIOS A RECUPERAR
    static public function mdlMostrarAccesoriosFaltantes($tabla, $item, $valor){
        $sql = "SELECT id, accesorios_entregados, accesorios_recuperados FROM $tabla WHERE $item = :$item";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
        $stmt->execute();

        if($stmt->execute()){
            return $stmt->fetch();
        } else{
            return array("Error" => "No ha sido posible obtener la información");
        }

    }

    //PARA GUARDAR LOS ACCESORIOS RECUPERADOS
    static public function mdlRecuperarFaltantes($tabla, $item, $valor, $accesorios){

        $acc_rec = json_encode($accesorios);

        try{
            $sql = "UPDATE $tabla SET accesorios_recuperados = :accesorios_recuperados WHERE $item = :$item";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->bindParam(":accesorios_recuperados", $acc_rec , PDO::PARAM_STR);
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
            
            if($stmt->execute()){
                return "ok";
            }    

        } catch(PDOException $e){
            return $e;
        }
      

    }

}