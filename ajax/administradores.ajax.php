<?php

require_once "../controladores/administradores.controlador.php";
require_once "../modelos/administradores.modelo.php";

class AjaxAdministradores{

  public function ajaxNuevoAdmin(){

    $nombre = $_POST["nombreAdmin"];
    $email = $_POST["emailAdmin"];

    $respuesta = ControladorAdministradores::ctrNuevoAdmin($nombre, $email);
    echo json_encode($respuesta);

  }

}


  $nuevo = new AjaxAdministradores();
  $nuevo->ajaxNuevoAdmin();
