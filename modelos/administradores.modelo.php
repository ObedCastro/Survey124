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

    static public function mdlMostrarAdministradores($tabla, $item, $valor){
      if($item != null){
        $sql = "SELECT * FROM $tabla WHERE $item = :$item";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch();

      } else{
        $sql = "SELECT id, nombre, email, cargo, foto, usuario, password, perfil FROM $tabla";
        $stmt = Conexion::conectar()->prepare($sql);

        if($stmt->execute()){
          return $stmt->fetchAll();
        } else{
            return array("Error" => "No ha sido posible obtener la información");
        }
      }
    }

    static public function mdlNuevoAdmin($tabla, $datos){
      $foto = "vistas/assets/img";
      try{
        $sql = "INSERT INTO $tabla (nombre, email, cargo, foto, usuario, password, perfil) values (:nombre, :email, :cargo, :foto, :usuario, :password, :perfil)";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":cargo", $datos["cargo"], PDO::PARAM_STR);
        $stmt->bindParam(":foto", $foto, PDO::PARAM_STR);
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

    //PARA CAMBIAR LA CONTRASEÑA DE USUARIO
    static public function mdlCambiarPassword($tabla, $item, $valor, $pass){
      try{
        $sql = "UPDATE $tabla SET password = :password WHERE $item = :$item";
        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindParam(":password", $pass, PDO::PARAM_STR);
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
        
        if($stmt->execute()){
          return "ok";
        }

      } catch(PDOException $e){
        return $e->getMessage();
      }
    }

    //PARA MODIFICAR LA INFORMACIÓN DE UN ADMINISTRADOR
    static public function mdlModificarAdministrador($tabla, $item, $valor, $datos){
      try{
        if($datos["password"] == "" || $datos["password"] == null){
          $sql = "UPDATE $tabla SET nombre = :nombre, email = :email, usuario = :usuario, perfil = :perfil, cargo = :cargo WHERE $item = :$item";
          $stmt = Conexion::conectar()->prepare($sql);
          $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
          $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
          $stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
          $stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
          $stmt->bindParam(":cargo", $datos["cargo"], PDO::PARAM_STR);
          $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

        } else{
          $password = md5($datos["password"]);
          $sql = "UPDATE $tabla SET nombre = :nombre, email = :email, usuario = :usuario, password = :password, perfil = :perfil, cargo = :cargo WHERE $item = :$item";
          $stmt = Conexion::conectar()->prepare($sql);
          $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
          $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
          $stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
          $stmt->bindParam(":password", $password, PDO::PARAM_STR);
          $stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
          $stmt->bindParam(":cargo", $datos["cargo"], PDO::PARAM_STR);
          $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
        }
        
        
        if($stmt->execute()){
          return "ok";
        }

      } catch(PDOException $e){
        return $e->getMessage();
      }
    }

}
