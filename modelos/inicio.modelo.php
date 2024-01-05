<?php

require_once "conexion.php";

class ModeloInicio{

    static public function mdlMostrarDispositivosAsignados($tabla){
        $sql1 = "SELECT COUNT(tipodispositivo) as telefonosAsignados FROM $tabla WHERE tipodispositivo='Telefono' AND estadodispositivo=2";
        $stmt1 = Conexion::conectar()->prepare($sql1);
        $stmt1->execute();

        $sql2 = "SELECT COUNT(tipodispositivo) as totalTelefonos FROM $tabla WHERE tipodispositivo='Telefono'";
        $stmt2 = Conexion::conectar()->prepare($sql2);
        $stmt2->execute();

        return array($stmt1->fetch(), $stmt2->fetch());
    }

    static public function mdlMostrarGraficoLineas($tabla){
      $sql = "SELECT count(tipodispositivo) AS total, MONTH(fechaasignacion) AS mes FROM $tabla WHERE fechaasignacion >= '2024-01-01 00:00:00' AND fechaasignacion <= '2024-12-31 23:59:59' AND estadodispositivo = '2' GROUP BY mes ORDER BY mes";
      $stmt = Conexion::conectar()->prepare($sql);
      $stmt->execute();

      return $stmt->fetchAll();
    }

    static public function mdlMostrarUltimosMovimientos($tabla){
      $sql = "SELECT * FROM $tabla order by id DESC LIMIT 10";
      $stmt = Conexion::conectar()->prepare($sql);
      $stmt->execute();

      return $stmt->fetchAll();
    }

}
