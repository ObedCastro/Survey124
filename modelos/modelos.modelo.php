<?php

require_once "conexion.php";

class ModeloModelos{

  static public function mdlMostrarModelos($tabla){
    
      $sql = "SELECT * FROM $tabla";
      $stmt = Conexion::conectar()->prepare($sql);
      $stmt->execute();

      return $stmt->fetchAll();
  }

}
