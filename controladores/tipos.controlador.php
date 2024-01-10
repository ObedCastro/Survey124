<?php

class ControladorTipos{

  static public function ctrMostrarTipos(){
    $tabla = "tipodispositivo";

    $resultado = ModeloTipos::mdlMostrarTipos($tabla);
    return $resultado;
  }

}
