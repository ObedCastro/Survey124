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
            echo '<script> console.log("Error, no se ha colocado la informacion requerida"); </script>';
        }
    }

}