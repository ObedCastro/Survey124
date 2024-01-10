<?php

require_once "conexion.php";

class ModeloTipos{

  static public function mdlMostrarTipos($tabla){
    
      $sql = "SELECT * FROM $tabla";
      $stmt = Conexion::conectar()->prepare($sql);
      $stmt->execute();

      return $stmt->fetchAll();
  }

}
