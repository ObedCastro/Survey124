<?php

require_once "conexion.php";

class ModeloInicio{

    //OBTIENE EL TOTAL DE CADA DISPOSITIVO Y LOS QUE ESTAN ASIGNADOS ACTUALMENTE
    static public function mdlMostrarDispositivosAsignados($tabla){
        $sql1 = "SELECT COUNT(CASE WHEN estadodispositivo = 2 THEN 1 END) as telefonosAsignados, COUNT(tipodispositivo) as totalTelefonos FROM $tabla WHERE tipodispositivo='Telefono'";
        $stmt1 = Conexion::conectar()->prepare($sql1);
        $stmt1->execute();

        $sql2 = "SELECT COUNT(CASE WHEN estadodispositivo = 2 THEN 1 END) as tabletsAsignadas, COUNT(tipodispositivo) as totalTablets FROM $tabla WHERE tipodispositivo='Tablet'";
        $stmt2 = Conexion::conectar()->prepare($sql2);
        $stmt2->execute();

        $sql3 = "SELECT COUNT(CASE WHEN estadodispositivo = 2 THEN 1 END) as laptopsAsignadas, COUNT(tipodispositivo) as totalLaptops FROM $tabla WHERE tipodispositivo='Laptop'";
        $stmt3 = Conexion::conectar()->prepare($sql3);
        $stmt3->execute();

        return array($stmt1->fetch(), $stmt2->fetch(), $stmt3->fetch());
    }

    //OBTIENE LOS VALORES PARA ALIMENTAR EL GRAFICO DE LINEAS
    static public function mdlMostrarGraficoLineas($tabla){
      $sql = "SELECT count(tipodispositivo) AS total, MONTH(fechaasignacion) AS mes FROM $tabla WHERE fechaasignacion >= CURDATE() - INTERVAL 6 MONTH AND estadodispositivo = '2' GROUP BY mes ORDER BY mes";
      $stmt = Conexion::conectar()->prepare($sql);
      $stmt->execute();

      return $stmt->fetchAll();
    }

    static public function mdlMostrarUltimosMovimientos($tabla){
      $sql = "SELECT * FROM $tabla order by fecha_modificacion DESC LIMIT 10";
      $stmt = Conexion::conectar()->prepare($sql);
      $stmt->execute();

      return $stmt->fetchAll();
    }

}
