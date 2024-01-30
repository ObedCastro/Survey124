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

    //PARA GUARDAR LOS ACCESORIOS RECUPERADOS
    static public function ctrRecuperarFaltantes($item, $valor, $accesorios){
        $tabla = "registros";
        $respuesta = ModeloFaltantes::mdlRecuperarFaltantes($tabla, $item, $valor, $accesorios);

        if($respuesta == "ok"){
            return array("icono" => "success", "titulo" => "Éxito", "mensaje" => "Información guardada satisfactoriamente");
        } else{
            return array("icono" => "error", "titulo" => "Error", "mensaje" => "No fue posible realizar esta operación "+$respuesta);
        }
        
    }

}