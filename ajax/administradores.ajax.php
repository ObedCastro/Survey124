<?php

require_once "../controladores/administradores.controlador.php";
require_once "../modelos/administradores.modelo.php";

class AjaxAdministradores{

  public function ajaxNuevoAdmin(){

    if(isset($_POST["nombreAdmin"])){
      $password = md5($_POST["passwordAdmin"]);

      $datos = array(
        'nombre' => $_POST["nombreAdmin"],
        'email' => $_POST["emailAdmin"],
        'cargo' => $_POST["cargoAdmin"],
        'usuario' => $_POST["usuarioAdmin"],
        'password' => $password,
        'perfil' => $_POST["perfilAdmin"]
      );
    }

    $respuesta = ControladorAdministradores::ctrNuevoAdmin($datos);
    echo json_encode($respuesta);

  }

}


  $nuevo = new AjaxAdministradores();
  $nuevo->ajaxNuevoAdmin();
