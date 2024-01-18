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

    static public function mdlNuevoAdmin($tabla, $datos){
      try{
        $sql = "INSERT INTO $tabla (nombre, email, cargo, usuario, password, perfil) values (:nombre, :email, :cargo, :usuario, :password, :perfil)";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":cargo", $datos["cargo"], PDO::PARAM_STR);
        $stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);

        if($stmt->execute()){
          return "ok";
        }
      } catch(PDOException $e){
        return "error";
      }

    }

}
