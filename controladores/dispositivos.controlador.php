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
    static public function ctrRegistrarDispositivo(){
        if(isset($_POST["tipoDispositivo"])){
            if($_POST["tipoDispositivo"] == "Telefono" || $_POST["tipoDispositivo"] == "Tablet" || $_POST["tipoDispositivo"] == "Laptop"){
                $datos = array(
                    "tipo"=>$_POST["tipoDispositivo"],
                    "marca"=>$_POST["marcaDispositivo"],
                    "modelo"=>$_POST["modeloDispositivo"],
                    "imei"=>$_POST["imeiDispositivo"],
                    "serie"=>$_POST["serieDispositivo"],
                    "telefono"=>$_POST["telefonoDispositivo"],
                    "sede"=>$_POST["sedeDispositivo"]
                );

                $accesorios = array(
                    "Cubo"=>"0",
                    "Cable"=>"0",
                    "Funda"=>"0",
                    "Lapiz"=>"0",
                    "Powerbank"=>"0",
                    "Maletin"=>"0",
                    "Cargador"=>"0",
                    "Mouse"=>"0",
                    "Mousepad"=>"0"
                );

                $respuesta = ModeloDispositivos::mdlRegistrarDispositivo("dispositivos", $datos, $accesorios);

                if($respuesta == "ok"){
                    echo '<script>
                        Swal.fire({
                            type: "success",
                            icon: "success",
                            title: "El dispositivo se registró correctamente.",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"
                        }).then(function(result){
                            window.location = "dispositivos";
                        })
                        </script>';
                }

            } else{
                echo '<script>
                Swal.fire({
                    type: "error",
                    icon: "error",
                    title: "Error, no se ha podido registrar el dispositivo. Intente nuevamente",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar"

                })
                </script>';

                return;
            }

        } else{

        }
    }


    //MODIFICAR DISPOSITIVO __________________________________________________________________________________________
    static public function ctrModificarDispositivo(){
        if(isset($_POST["editarTipoDispositivo"])){
            if($_POST["editarTipoDispositivo"] == "Telefono" || $_POST["editarTipoDispositivo"] == "Tablet" || $_POST["editarTipoDispositivo"] == "Laptop"){
                $id = $_POST["idDispositivo"];
                $datos = array(
                    "tipo"=>$_POST["editarTipoDispositivo"],
                    "marca"=>$_POST["marcaDispositivo"],
                    "modelo"=>$_POST["modeloDispositivo"],
                    "imei"=>$_POST["imeiDispositivo"],
                    "serie"=>$_POST["serieDispositivo"],
                    "telefono"=>$_POST["telefonoDispositivo"],
                    "sede"=>$_POST["sedeDispositivo"],
                    "comentario"=>$_POST["comentarioDispositivo"]
                );

                $respuesta = ModeloDispositivos::mdlModificarDispositivo($id, "dispositivos", $datos);

                if($respuesta == "ok"){
                    echo '<script>
                        Swal.fire({
                            type: "success",
                            icon: "success",
                            title: "La información del dispositivo se modificó correctamente.",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"
                        }).then(function(result){
                            window.location = "dispositivos";
                        })
                        </script>';
                }

            } else{
                echo '<script>
                Swal.fire({
                    type: "error",
                    icon: "error",
                    title: "Error, no se ha podido registrar el dispositivo. Intente nuevamente",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar"

                })
                </script>';

                //return;
            }

        } else{

        }
    }

    //CAMBIAR ESTADO DE DISPOSITIVO AL RECUPERARLO ____________________________________________________________________
    static public function ctrCambiarEstadoDispositivo($item, $valor, $accesorios){
        $tabla = "dispositivos";
        ModeloDispositivos::mdlCambiarEstadoDispositivo($tabla, $item, $valor, $accesorios);
    }


    //ASIGNAR DISPOSITIVO _____________________________________________________________________________________________
    static public function ctrAsignarDispositivo($id, $res, $accesorios, $comentario){
       $tabla = "dispositivos";

       $respuesta = ModeloDispositivos::mdlAsignarDispositivo($tabla, $id, $res, $accesorios, $comentario);

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

    }

}
