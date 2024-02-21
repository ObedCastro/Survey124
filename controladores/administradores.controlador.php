<?php

const RUTA = "http://localhost/Survey124/";
/* const RUTA = "https://a372-216-194-101-9.ngrok-free.app/Survey124/"; */

class ControladorAdministradores{

    public function ctrIngresarAdministradores(){
        //$expresionUsuario = '/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/';
        $expresionPassword = '/^[a-zA-Z0-9]+$/';

        if(isset($_POST['ingUsuario'])){
            if($_POST['ingUsuario'] && preg_match($expresionPassword, $_POST['ingPassword'])){
                $tabla = "administradores";
                $item = "usuario";
                $valor = $_POST['ingUsuario'];
                $passInput = md5($_POST["ingPassword"]);
                
                $respuesta = ModeloAdministradores::mdlIngresarAdministradores($tabla, $item, $valor);

                if($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $passInput){
                    $_SESSION["validarSesion"] = "ok";
                    $_SESSION["id"] = $respuesta["id"];
                    $_SESSION["nombre"] = $respuesta["nombre"];
                    $_SESSION["email"] = $respuesta["email"];
                    $_SESSION["foto"] = $respuesta["foto"];
                    $_SESSION["usuario"] = $respuesta["usuario"];
                    $_SESSION["cargo"] = $respuesta["cargo"];
                    $_SESSION["password"] = $respuesta["password"];
                    $_SESSION["perfil"] = $respuesta["perfil"];                    

                    header("Location: ".RUTA."inicio");


                }else{
                    echo '<br><div class="alert alert-danger" role="alert">
                            Error: Ingrese datos válidos.
                        </div>';
                }

 
            }
        }
    }

    static public function ctrMostrarAdministradores($item, $valor){
        $tabla = "administradores";
        $datos = ModeloAdministradores::mdlMostrarAdministradores($tabla, $item, $valor);

        return $datos;
    }

    static public function ctrNuevoAdmin($datos){
      $tabla = "administradores";
      $datos = ModeloAdministradores::mdlNuevoAdmin($tabla, $datos);

      if($datos == "ok"){
        return array("mensaje" => "Usuario registrado satisfactoriamente.");
      } else{
        return array("mensaje" => "No fue posible registrar el usuario con los datos ingresados.");
      }
    }

    //PARA CAMBIAR CONTRASEÑA
    static public function ctrCambiarPassword($item, $valor, $pass){
        $tabla = "administradores";
        $respuesta = ModeloAdministradores::mdlCambiarPassword($tabla, $item, $valor, $pass);

        if($respuesta == "ok"){
            return array("mensaje" => "Contraseña cambiada satisfactoriamente.");
        } else{
            return array("mensaje" => $respuesta);
        }
    }

    //PARA MODIFICAR LA INFORMACIÓN DE UN ADMINISTRADOR
    static public function ctrModificarAdministrador($item, $valor, $datos){
        $tabla = "administradores";
        $respuesta = ModeloAdministradores::mdlModificarAdministrador($tabla, $item, $valor, $datos);
        
        if($respuesta == "ok"){
            return array("mensaje" => "Información modificada satisfactoriamente.");
        } else{
            return array("mensaje" => $respuesta);
        }
    }

}
