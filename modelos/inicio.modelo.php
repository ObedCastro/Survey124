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

        $sql4 = "SELECT COUNT(tipodispositivo) as totalInventario FROM $tabla";
        $stmt4 = Conexion::conectar()->prepare($sql4);
        $stmt4->execute();

        return array($stmt1->fetch(), $stmt2->fetch(), $stmt3->fetch(), $stmt4->fetch());
    }

    //OBTIENE EL TOTAL DE DISPOSITIVOS POR DEPARTAMENTO
    static public function mdlMostrarDispositivosDepartamento($tabla){
      $sql = "SELECT s.departamentosede AS departamento, count(d.tipodispositivo) as total FROM dispositivos d
      INNER JOIN sedes s ON d.sededispositivo = s.idsede GROUP BY s.departamentosede ORDER BY s.departamentosede";
      //$sql = "SELECT count(tipodispositivo) as total FROM $tabla group by sededispositivo order by sededispositivo";
      $stmt = Conexion::conectar()->prepare($sql);
      $stmt->execute();

      return $stmt->fetchAll();
    }

    //OBTIENE CANTIDAD DE DISPOSITIVOS POR SEDE
    static public function mdlMostrarDispositivosSede($tabla, $item, $valor){
      $sql = "SELECT count(d.tipodispositivo) as cantidad, d.tipodispositivo AS tipo, s.nombresede as sede FROM $tabla d INNER JOIN sedes s ON s.idsede = d.sededispositivo WHERE $item = :$item GROUP BY d.tipodispositivo, s.nombresede";

      $stmt = Conexion::conectar()->prepare($sql);
      $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
      $stmt->execute();

      return $stmt->fetchAll();
    }

    //OBTIENE LOS VALORES PARA ALIMENTAR EL GRAFICO DE LINEAS
    static public function mdlMostrarGraficoLineas($tabla){
      $sql = "SELECT count(tipodispositivo) AS total, MONTH(fechaasignacion) AS mes FROM $tabla WHERE fechaasignacion >= CURDATE() - INTERVAL 6 MONTH AND estadodispositivo = '2' GROUP BY mes ORDER BY mes";
      $stmt = Conexion::conectar()->prepare($sql);
      $stmt->execute();

      return $stmt->fetchAll();
    }
    
    //OBTIENE LOS VALORES PARA ALIMENTAR EL GRAFICO DE BARRAS
    static public function mdlMostrarGraficoBarras($tabla){
      $sql = "SELECT count(modelodispositivo) as total, modelodispositivo FROM $tabla group by modelodispositivo order by modelodispositivo";
      $stmt = Conexion::conectar()->prepare($sql);
      $stmt->execute();

      return $stmt->fetchAll();
    }

    //OBTIENE LOS VALORES PARA ALIMENTAR EL GRÁFICO DE DONAS
    static public function mdlMostrarGraficoDonas($tabla){
      $sql = "SELECT COUNT(d.sededispositivo) AS cantidad, s.nombresede AS sede FROM $tabla d INNER JOIN sedes s ON s.idsede =  d.sededispositivo GROUP BY d.sededispositivo";

      $stmt = Conexion::conectar()->prepare($sql);
      $stmt->execute();
      
      return $stmt->fetchAll();
    }

    //MOSTRAR ULTIMOS 10 MOVIMIENTOS REALIZADOS CON DISPOSITIVOS
    static public function mdlMostrarUltimosMovimientos($tabla, $item, $valor){ 
      if($item != null){
        $sql = "SELECT * FROM $tabla WHERE $item = :$item order by fecha_modificacion DESC LIMIT 10";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll();

      } else{
        $sql = "SELECT * FROM $tabla order by fecha_modificacion DESC LIMIT 5";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
      }

    }

}

