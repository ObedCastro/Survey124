<?php

require_once "conexion.php";

class ModeloSedes{

  static public function mdlMostrarSedes($tabla, $item, $valor){
    if($item != null){
      $sql = "SELECT * FROM $tabla WHERE $item = :$item";
      $stmt = Conexion::conectar()->prepare($sql);
      $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
  
      if($stmt->execute()){
        return $stmt->fetch();
      } else{
        return "Error";
      }

    } else{
      $sql = "SELECT * FROM $tabla";
      $stmt = Conexion::conectar()->prepare($sql);
      $stmt->execute();

      return $stmt->fetchAll();

    }
  }

}
