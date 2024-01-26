<?php

class ControladorWiki{

    //PARA MOSTRAR TODAS LAS ENTRADAS
    static public function ctrMostrarWiki($item, $valor){
        $tabla = "wiki";
        $respuesta = ModeloWiki::mdlMostrarwiki($tabla, $item, $valor);

        return $respuesta;
    }

    //PARA REGISTRAR UNA NUEVA ENTRADA
    static public function ctrNuevaentrada($datos){
        $tabla = "wiki";
        $respuesta = ModeloWiki::mdlNuevaEntrada($tabla, $datos);

        if($respuesta == "ok"){
            return array("icono" => "success", "titulo" => "Éxito", "mensaje" => "Entrada guardada correctamente");
        } else{
            return array("icono" => "error", "mensaje" => $respuesta);
        }
    }

    //PARA MOSTRAR EN LA PÁGINA DE RESPUESTAS
    static public function ctrMostrarRespuestas($item, $valor){
        $tabla = "wikicolaboraciones";
        $respuesta = ModeloWiki::mdlMostrarRespuestas($tabla, $item, $valor);

        return $respuesta;
    }

    //PARA NUEVA COLABORACIÓN
    static public function ctrNuevacolaboracion($datos){
        $tabla = "wikicolaboraciones";
        $respuesta = ModeloWiki::mdlNuevaColaboracion($tabla, $datos);

        /*if($respuesta == "ok"){
            return array("icono" => "success", "titulo" => "Éxito", "mensaje" => "Su aporte se ha enviado correctamente");
        } else{
            return array("icono" => "error", "mensaje" => $respuesta);
        }*/

        return $respuesta;
    }

}