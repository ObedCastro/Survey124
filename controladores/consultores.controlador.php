<?php

class ControladorConsultores{

    static public function ctrMostrarConsultores($item, $valor){
        $tabla = "consultores";
        $datos = ModeloConsultores::mdlMostrarConsultores($tabla, $item, $valor);

        return $datos;
    }

    //REGISTRAR NUEVO CONSULTOR
    static public function ctrRegistrarConsultor(){
        if(isset($_POST["nombreConsultor"]) && isset($_POST["sedeConsultor"])){
            $tabla = "consultores";
            $datos = array(
                "nombre"=>$_POST["nombreConsultor"],
                "dui"=>$_POST["duiConsultor"],
                "cargo"=>$_POST["cargoConsultor"],
                "contacto"=>$_POST["contactoConsultor"],
                "sede"=>$_POST["sedeConsultor"],
                "fecha"=>$_POST["fechaRegistroConsultor"]
            );

            $respuesta = ModeloConsultores::mdlRegistrarConsultor($tabla, $datos);

            if($respuesta == "ok"){
                echo '<script>
                        Swal.fire({
                            type: "success",
                            icon: "success",
                            title: "El consultor se registró correctamente.",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"
                        }).then(function(result){
                            window.location = "consultores";
                        })
                      </script>';
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
            }
        } else {
          
        }
    }


    //MODIFICAR CONSULTOR
    static public function ctrModificarConsultor(){
        if(isset($_POST["idEditarConsultor"])){
            if(isset($_POST["editarNombreConsultor"]) || isset($_POST["editarSedeConsultor"])){
                $id = $_POST["idEditarConsultor"];
                $tabla = "consultores";
                $datos = array(
                    "nombre"=>$_POST["editarNombreConsultor"],
                    "dui"=>$_POST["editarDuiConsultor"],
                    "contacto"=>$_POST["editarContactoConsultor"],
                    "cargo"=>$_POST["editarCargoConsultor"],
                    "sede"=>$_POST["editarSedeConsultor"]
                );

                $respuesta = ModeloConsultores::mdlModificarConsultor($id, $tabla, $datos);

                if($respuesta == "ok"){
                    echo '<script>
                        Swal.fire({
                            type: "success",
                            icon: "success",
                            title: "Información modificada",
                            text: "La información del consultor fue actualizada correctamente",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"
                        }).then(function(result){
                            window.location = "consultores";
                        })
                      </script>';

                } else{
                    echo '<script>
                            Swal.fire({
                                type: "error",
                                icon: "error",
                                title: "Error, no fue posible modificar esta información",
                                showConfirmButton: true,
                                confirmButtonText: "Cerrar"

                            })
                        </script>';
                }
            } else{

            }
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
