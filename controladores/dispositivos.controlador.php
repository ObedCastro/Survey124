<?php

class ControladorDispositivos{

    static public function ctrMostrarDispositivos($item, $valor){
        $tabla = "dispositivos";
        $datos = ModeloDispositivos::mdlMostrarDispositivos($tabla, $item, $valor);

        return $datos;
    }
    
    //METODO PARA MOSTRAR INFORMACION DE DISPOSITIVO A RECUPERAR _______________________________________________________
    static public function ctrMostrarDispositivoRecuperar($item, $valor, $consultor){
        $tabla = "dispositivos";
        $datos = ModeloDispositivos::mdlMostrarDispositivoRecuperar($tabla, $item, $valor, $consultor);

        return $datos;
    }

    //REGISTRAR NUEVO DISPOSITIVOS ____________________________________________________________________________________
    static public function ctrRegistrarDispositivo($datos, $accesorios){
        $tabla = "dispositivos";
        $respuesta = ModeloDispositivos::mdlRegistrarDispositivo($tabla, $datos, $accesorios);

        if($respuesta == "ok"){
            return array("titulo" => "Éxito", "mensaje" => "Registro realizado exitosamente.", "icono" => "success");
        }else{
            return array("titulo" => "Error", "mensaje" => $respuesta, "icono" => "error");
        }
    }


    //MODIFICAR DISPOSITIVO __________________________________________________________________________________________
    static public function ctrModificarDispositivo($item, $valor, $datos){
        $tabla = "dispositivos";
        $respuesta = ModeloDispositivos::mdlModificarDispositivo($tabla, $item, $valor, $datos);

        if($respuesta == "ok"){
            return array("mensaje" => "Información del dispositivo modificada correctamente.");
        }else{
            return array("mensaje" => "No ha sido posible modificar la información del dispositivo");
        }

    }

    //CAMBIAR ESTADO DE DISPOSITIVO AL RECUPERARLO ____________________________________________________________________
    static public function ctrCambiarEstadoDispositivo($item, $valor, $accesorios, $estado, $comentario){
        $tabla = "dispositivos";
        ModeloDispositivos::mdlCambiarEstadoDispositivo($tabla, $item, $valor, $accesorios, $estado, $comentario);
    }


    //ASIGNAR DISPOSITIVO _____________________________________________________________________________________________
    static public function ctrAsignarDispositivo($id, $res, $accesorios, $fecha){
       $tabla = "dispositivos";

       $respuesta = ModeloDispositivos::mdlAsignarDispositivo($tabla, $id, $res, $accesorios, $fecha);

       if($respuesta == "ok"){
           $item = "iddispositivo";
           $infodispositivo = ModeloDispositivos::mdlMostrarDispositivoAsignado($tabla, $item, $id);
           //$infoconsultor = ModeloConsultores::mdlMostrarConsultores("consultores", "idconsultor", $res);
           return $infodispositivo;
           
       } else{
            return $respuesta;
       }
   }

   //RECUPERAR DISPOSITIVO
   /*static public function ctrRecuperarDispositivo($id, $accesorios){
    $tabla = "dispositivos";
    $item = "iddispositivo";
    $infodispositivo = ModeloDispositivos::mdlMostrarDispositivoAsignado($tabla, $id, $accesorios);
    return $infodispositivo;

   }*/

    //ELIMINAR DISPOSITIVO
    static public function ctrEliminarDispositivo($item, $valor){
        $tabla = "dispositivos";

        $respuesta = ModeloDispositivos::mdlEliminarDispositivos($tabla, $item, $valor);

        if($respuesta == "ok"){
            return array("titulo" => "Éxito", "mensaje" => "Dispositivo eliminado satisfactoriamente.", "icono" => "success");
        }else{
            return array("titulo" => "Error", "mensaje" => "No ha sido posible eliminar el dispositivo", "icono" => "error");
        }

    }

}
