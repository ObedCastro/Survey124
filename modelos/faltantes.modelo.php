<?php 

require_once "conexion.php";

class ModeloFaltantes{

    static public function mdlMostrarFaltantes($tabla, $item, $valor){
        //$sql = "SELECT * FROM $tabla WHERE accesorios_entregados <> accesorios_recuperados";
        $sql = "SELECT c.nombreconsultor as consultor, s.nombresede as sede, d.tipodispositivo as dispositivo, d.imeidispositivo as imei, d.seriedispositivo as serie, r.fecha_asignacion as fecha_asignacion, r.fecha_recepcion as fecha_recepcion, r.accesorios_entregados as entregado, r.accesorios_recuperados as recuperado, r.comentario as comentario, CONCAT('[', r.accesorios_entregados,',', r.accesorios_recuperados,']') as acc  FROM $tabla r 
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

}