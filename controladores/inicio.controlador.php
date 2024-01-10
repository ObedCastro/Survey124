<?php

class ControladorInicio{

    static public function ctrMostrarDispositivosAsignados(){
        $tabla = "dispositivos";
        $datos = ModeloInicio::mdlMostrarDispositivosAsignados($tabla);

        return $datos;
    }

    static public function ctrMostrarDispositivosDepartamento(){
      $tabla = "dispositivos";
      $datos = ModeloInicio::mdlMostrarDispositivosDepartamento($tabla);

      return $datos;
    }

    static public function ctrMostrarGraficoLineas(){
      $tabla = "dispositivos";

      $respuesta = ModeloInicio::mdlMostrarGraficoLineas($tabla);
      return $respuesta;
    }

    static public function ctrMostrarGraficoBarras(){
      $tabla = "dispositivos";

      $respuesta = ModeloInicio::mdlMostrarGraficoBarras($tabla);
      return $respuesta;
    }

    static public function ctrMostrarUltimosMovimientos($item, $valor){
      $tabla = "registros";

      $respuesta = ModeloInicio::mdlMostrarUltimosMovimientos($tabla, $item, $valor);
      return $respuesta;
    }

}
