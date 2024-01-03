<<?php

require_once "conexion.php";

class ModeloSedes{

  static public function mdlMostrarSedes($tabla, $item, $valor){
    $sql = "SELECT * FROM $tabla WHERE $item = :$item";
    $stmt = Conexion::conectar()->prepare($sql);
    $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

    if($stmt->execute()){
      return $stmt->fetch();
    } else{
      return "Error";
    }
  }

}
