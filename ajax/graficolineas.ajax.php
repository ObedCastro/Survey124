<?php

require_once "../controladores/inicio.controlador.php";
require_once "../modelos/inicio.modelo.php";

class AjaxGraficoLineas{

  public function ajaxMostrarGraficoLineas(){
    $resultado = ControladorInicio::ctrMostrarGraficoLineas();

    echo json_encode($resultado);
  }

}



$mostrarGraficoLineas = new AjaxGraficoLineas();
$mostrarGraficoLineas->ajaxMostrarGraficoLineas();
