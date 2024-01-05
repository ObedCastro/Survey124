<?php

class ControladorInicio{

    static public function ctrMostrarDispositivosAsignados(){
        $tabla = "dispositivos";
        $datos = ModeloInicio::mdlMostrarDispositivosAsignados($tabla);

        return $datos;
    }

    static public function ctrMostrarGraficoLineas(){
      $tabla = "dispositivos";

      $respuesta = ModeloInicio::mdlMostrarGraficoLineas($tabla);
      return $respuesta;
    }

    static public function ctrMostrarUltimosMovimientos(){
      $tabla = "registros";

      $respuesta = ModeloInicio::mdlMostrarUltimosMovimientos($tabla);
      return $respuesta;
    }

}
