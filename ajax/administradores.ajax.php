<?php

require_once "../controladores/administradores.controlador.php";
require_once "../modelos/administradores.modelo.php";

class AjaxAdministradores{

  public function ajaxNuevoAdmin(){

    if(isset($_POST["nombreAdmin"]) && !empty($_POST["nombreAdmin"]) && 
      isset($_POST["emailAdmin"]) && !empty($_POST["emailAdmin"]) && 
      isset($_POST["usuarioAdmin"]) && !empty($_POST["usuarioAdmin"]) && 
      isset($_POST["passwordAdmin"]) && !empty($_POST["passwordAdmin"]) && 
      isset($_POST["perfilAdmin"]) && !empty($_POST["perfilAdmin"]) && 
      isset($_POST["cargoAdmin"]) && !empty($_POST["cargoAdmin"])){

      $password = md5($_POST["passwordAdmin"]);

      $datos = array(
        'nombre' => $_POST["nombreAdmin"],
        'email' => $_POST["emailAdmin"],
        'cargo' => $_POST["cargoAdmin"],
        'usuario' => $_POST["usuarioAdmin"],
        'password' => $password,
        'perfil' => $_POST["perfilAdmin"]
      );

      $respuesta = ControladorAdministradores::ctrNuevoAdmin($datos);
      echo json_encode($respuesta);
    }


  }

  //PARA CAMBIAR CONTRASEÑA DE USUARIO
  public function ajaxCambiarPassword(){
    $item = "id";
    $valor = $_POST["idAdmin"];

    $anteriorPassword = $_POST["anteriorPassword"];
    $nuevaPassword = $_POST["nuevaPassword"];

    $passwordActual = ControladorAdministradores::ctrMostrarAdministradores($item, $valor);

    if($passwordActual["password"] == md5($anteriorPassword)){
      $pass = md5($nuevaPassword); 

      $actualizar = ControladorAdministradores::ctrCambiarPassword($item, $valor, $pass);

      //--------------------------------------------------
      $para      = 'albcast26@gmail.com';
      $titulo    = 'Survey124';
      $mensaje   = 'Mensaje de prueba Survey124';
      $cabeceras = 'From: obed_castro@outlook.com' . "\r\n" .
          'X-Mailer: PHP/' . phpversion();

      mail($para, $titulo, $mensaje, $cabeceras);
      //--------------------------------------------------

      echo json_encode($actualizar);

    } else{
      echo json_encode(array("mensaje" => "Contraseña anterior no válida", "error" => "Contraseña anterior no válida"));
    }
  }

  //PARA MOSTRAR LA INFORMACIÓN DE UN ADMINISTRADOR
  public $idAdmin;
  public function ajaxMostrarInfoAdmin(){
    $item = "id";
    $valor = $this->idAdmin;

    $respuesta = ControladorAdministradores::ctrMostrarAdministradores($item, $valor);
    echo json_encode($respuesta);
  }

  //PARA MODIFICAR LA INFORMACIÓN DE UN ADMINISTRADOR
  public $idEditarAdmin;
  public function ajaxModificarAdministrador(){
    $item = "id";
    $valor = $this->idEditarAdmin;

    $datos = array(
      'nombre' => $_POST["editarNombreAdmin"],
      'email' => $_POST["editarEmailAdmin"],
      'usuario' => $_POST["editarUsuarioAdmin"],
      'password' => $_POST["editarPasswordAdmin"],
      'perfil' => $_POST["editarPerfilAdmin"],
      'cargo' => $_POST["editarCargoAdmin"]
    );

    $respuesta = ControladorAdministradores::ctrModificarAdministrador($item, $valor, $datos);
    echo json_encode($respuesta);
  }

}

//Para realizar un nuevo registro
if(isset($_POST["nuevo"])){
  $nuevo = new AjaxAdministradores();
  $nuevo->ajaxNuevoAdmin();
}

//Para cambio de contraseña
if(isset($_POST["nuevaPassword"])){
  $cambiarPassword = new AjaxAdministradores();
  $cambiarPassword->ajaxCambiarPassword();
}

//Para mostrar información de un administrador
if(isset($_POST["idEditarAdmin_"])){
  $mostrarInfoAdmin = new AjaxAdministradores();
  $mostrarInfoAdmin->idAdmin = $_POST["idEditarAdmin_"];
  $mostrarInfoAdmin->ajaxMostrarInfoAdmin();
}

//Para modificar la información de un administrador
if(isset($_POST["idEditarAdmin"])){
  $modificarAdmin = new AjaxAdministradores();
  $modificarAdmin->idEditarAdmin = $_POST["idEditarAdmin"];
  $modificarAdmin->ajaxModificarAdministrador();
}