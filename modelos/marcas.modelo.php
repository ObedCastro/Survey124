<?php

require_once "conexion.php";

class ModeloMarcas{

  static public function mdlMostrarMarcas($tabla){
    
      $sql = "SELECT * FROM $tabla";
      $stmt = Conexion::conectar()->prepare($sql);
      $stmt->execute();

      return $stmt->fetchAll();
  }

}
