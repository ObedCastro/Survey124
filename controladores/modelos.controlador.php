<?php

class ControladorModelos{

  static public function ctrMostrarModelos(){
    $tabla = "modelodispositivo";

    $resultado = ModeloModelos::mdlMostrarModelos($tabla);
    return $resultado;
  }

}
