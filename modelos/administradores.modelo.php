<?php

require_once "conexion.php";

class ModeloAdministradores{

    static public function mdlIngresarAdministradores($tabla, $item, $valor){
        $sql = "SELECT * FROM $tabla WHERE $item = :$item";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();
        $stmt = null;

    }

    static public function mdlMostrarAdministradores($tabla){
        $sql = "SELECT * FROM $tabla";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    static public function mdlNuevoAdmin($tabla, $nombre, $email){
      $sql = "INSERT INTO $tabla (nombre, email) values (:nombre, :email)";
      $stmt = Conexion::conectar()->prepare($sql);
      $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
      $stmt->bindParam(":email", $email, PDO::PARAM_STR);

      if($stmt->execute()){
        return array("mensaje" => "Datos recibidos correctamente");
      }else{
        return array("error" => "No ha sido posible guardar la información");
      }
    }

}
