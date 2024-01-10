<?php

class ControladorMarcas{

  static public function ctrMostrarMarcas(){
    $tabla = "marcadispositivo";

    $resultado = ModeloMarcas::mdlMostrarMarcas($tabla);
    return $resultado;
  }

}
