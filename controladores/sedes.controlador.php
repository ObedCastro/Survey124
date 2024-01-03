<<?php

class ControladorSedes{

  static public function ctrMostrarSedes($item, $valor){
    $tabla = "sedes";

    $resultado = ModeloSedes::mdlMostrarSedes($tabla, $item, $valor);
    return $resultado;
  }

}
