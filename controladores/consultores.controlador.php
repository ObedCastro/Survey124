<?php

class ControladorConsultores{

    static public function ctrMostrarConsultores($item, $valor){
        $tabla = "consultores";
        $datos = ModeloConsultores::mdlMostrarConsultores($tabla, $item, $valor);

        return $datos;
    }

    //REGISTRAR NUEVO CONSULTOR
    static public function ctrRegistrarConsultor($datos){
        $tabla = "consultores";
        $respuesta = ModeloConsultores::mdlRegistrarConsultor($tabla, $datos);

        if($respuesta == "ok"){
            return array("icono" => "success", "titulo" => "Éxito", "mensaje" => "Registro realizado exisosamente.");
        } else{
            return array("icono" => "error", "titulo" => "Error", "mensaje" => "No ha sido posible realizar este registro \nPor favor compruebe la información.");
        }
    }


    //MODIFICAR CONSULTOR
    static public function ctrModificarConsultor($id, $datos){
        $tabla = "consultores";
        $respuesta = ModeloConsultores::mdlModificarConsultor($tabla, $id, $datos);

        if($respuesta == "ok"){
            return array("icono" => "success", "titulo" => "Éxito", "mensaje" => "Información modificada satisfactoriamente.");
        } else{
            return array("icono" => "error", "titulo" => "Error", "mensaje" => $respuesta);
        }
    }

    //MOSTRAR SEDES PARA SELECT
    static public function ctrMostrarConsultoresSede($item, $valor){
        $tabla = "consultores";
        $respuesta = ModeloConsultores::mdlMostrarConsultoresSedes($tabla, $item, $valor);

        return $respuesta;
    }

    //PARA ELIMINAR CONSULTOR
    static public function ctrEliminarConsultor($item, $valor){
        $tabla = "consultores";
        $respuesta = ModeloConsultores::mdlEliminarConsultor($tabla, $item, $valor);

        if($respuesta == "ok"){
            return array("success" => "Consultor eliminado satisfactoriamente.");
        }else{
            return array("error" => "No ha sido posible eliminar el consultor");
        }
    }

}
