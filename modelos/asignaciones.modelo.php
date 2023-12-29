<?php

require_once "conexion.php";

class ModeloAsignaciones{

  // ASIGNAR UN DISPOSITIVO
  static public function mdlAsignarDispositivo($tabla, $id, $res, $accesorios){
      $estado = "2";
      $sql = "UPDATE $tabla SET responsabledispositivo = :responsabledispositivo, estadodispositivo = $estado, accesorios = :accesorios WHERE iddispositivo = :$id";
      $stmt = Conexion::conectar()->prepare($sql);
      $stmt->bindParam(":responsabledispositivo", $res, PDO::PARAM_STR);
      $stmt->bindParam(":accesorios", $accesorios, PDO::PARAM_STR);
      $stmt->bindParam(":".$id, $id, PDO::PARAM_INT);

      if($stmt->execute()){
          return array("mensaje" => "Asignación realizada con éxito");
      } else{
          return array("error" => "No ha sido posible asignar");
      }
  }

}
