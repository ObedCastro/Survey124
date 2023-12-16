<?php

class ControladorAdministradores{

    public function ctrIngresarAdministradores(){
        $expresionEmail = '/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/';
        $expresionPassword = '/^[a-zA-Z0-9]+$/';

        if(isset($_POST['ingEmail'])){
            if(preg_match($expresionEmail, $_POST['ingEmail']) && preg_match($expresionPassword, $_POST['ingPassword'])){
                $tabla = "administradores";
                $item = "email";
                $valor = $_POST['ingEmail'];

                $respuesta = ModeloAdministradores::mdlIngresarAdministradores($tabla, $item, $valor);
                
                if($respuesta["email"] == $_POST["ingEmail"] && $respuesta["password"] == $_POST["ingPassword"]){
                    $_SESSION["validarSesion"] = "ok";
                    $_SESSION["id"] = $respuesta["id"];
                    $_SESSION["nombre"] = $respuesta["nombre"];
                    $_SESSION["foto"] = $respuesta["foto"];
                    $_SESSION["email"] = $respuesta["email"];
                    $_SESSION["password"] = $respuesta["password"];
                    $_SESSION["perfil"] = $respuesta["perfil"];

                    echo '<script>
                            window.location = "inicio";
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
        $tabla = "datos";
        $datos = ModeloAdministradores::mdlMostrarAdministradores($tabla);

        return $datos;
    }

}