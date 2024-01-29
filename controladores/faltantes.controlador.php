<?php

class ControladorFaltantes{

    //PARA LA DATA DE LA TABLA
    static public function ctrMostrarFaltantes($item, $valor){
        $tabla = "registros";

        $faltantes = ModeloFaltantes::mdlMostrarFaltantes($tabla, $item, $valor);
        return $faltantes;
    }

    //PARA MOSTRAR ACCESORIOS A RECUPERAR
    static public function ctrMostrarAccesoriosFaltantes($item, $valor){
        $tabla = "registros";
        $respuesta = ModeloFaltantes::mdlMostrarAccesoriosFaltantes($tabla, $item, $valor);

        return $respuesta;
    }

}