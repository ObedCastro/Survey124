<?php

class ControladorInicio{

    static public function ctrMostrarDispositivosAsignados(){
        $tabla = "dispositivos";
        $datos = ModeloInicio::mdlMostrarDispositivosAsignados($tabla);

        return $datos;
    }

    /* Mostrar dispositivos por departamento */
    static public function ctrMostrarDispositivosDepartamento(){
      $tabla = "dispositivos";
      $datos = ModeloInicio::mdlMostrarDispositivosDepartamento($tabla);

      return $datos;
    }

    /* Mostrar dispositivos por sede */
    static public function ctrMostrarDispositivosSede($item, $valor){
      $tabla = "dispositivos";
      $datos = ModeloInicio::mdlMostrarDispositivosSede($tabla, $item, $valor);

      return $datos;
    }

    /* Gráfico de líneas */
    static public function ctrMostrarGraficoLineas(){
      $tabla = "dispositivos";

      $respuesta = ModeloInicio::mdlMostrarGraficoLineas($tabla);
      return $respuesta;
    }

    /* Gráfico de barras */
    static public function ctrMostrarGraficoBarras(){
      $tabla = "dispositivos";

      $respuesta = ModeloInicio::mdlMostrarGraficoBarras($tabla);
      return $respuesta;
    }

    /* Gráfico de donas */
    static public function ctrMostrarGraficoDonas(){
      $tabla = "dispositivos";

      $respuesta = ModeloInicio::mdlMostrarGraficoDonas($tabla);
      return $respuesta;
    }

    static public function ctrMostrarUltimosMovimientos($item, $valor){
      $tabla = "registros";

      $respuesta = ModeloInicio::mdlMostrarUltimosMovimientos($tabla, $item, $valor);
      return $respuesta;
    }

}
