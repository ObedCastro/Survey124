<?php

class ControladorAdministradores{

    public function ctrIngresarAdministradores(){
        //$expresionUsuario = '/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/';
        $expresionPassword = '/^[a-zA-Z0-9]+$/';

        if(isset($_POST['ingUsuario'])){
            if($_POST['ingUsuario'] && preg_match($expresionPassword, $_POST['ingPassword'])){
                $tabla = "administradores";
                $item = "usuario";
                $valor = $_POST['ingUsuario'];
 
                $respuesta = ModeloAdministradores::mdlIngresarAdministradores($tabla, $item, $valor);

                if($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $_POST["ingPassword"]){
                    $_SESSION["validarSesion"] = "ok";
                    $_SESSION["id"] = $respuesta["id"];
                    $_SESSION["nombre"] = $respuesta["nombre"];
                    $_SESSION["email"] = $respuesta["email"];
                    $_SESSION["foto"] = $respuesta["foto"];
                    $_SESSION["usuario"] = $respuesta["usuario"];
                    $_SESSION["cargo"] = $respuesta["cargo"];
                    $_SESSION["password"] = $respuesta["password"];
                    $_SESSION["perfil"] = $respuesta["perfil"];

                    echo '<script>
                            $(".page-header").hide();
                            window.location.href = "inicio";                            
                        </script>';


                }else{
                    echo '<br><div class="alert alert-danger" role="alert">
                            Error: Ingrese datos válidos.
                        </div>';
                }


            }
        }
    }

    static public function ctrMostrarAdministradores(){
        $tabla = "administradores";
        $datos = ModeloAdministradores::mdlMostrarAdministradores($tabla);

        return $datos;
    }

    static public function ctrNuevoAdmin($nombre, $email){
      $tabla = "administradores";
      $datos = ModeloAdministradores::mdlNuevoAdmin($tabla, $nombre, $email);

      return $datos;
    }

}
